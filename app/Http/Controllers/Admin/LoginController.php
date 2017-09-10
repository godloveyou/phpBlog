<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Gregwar\Captcha\CaptchaBuilder;
use Auth;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    //
    public function login(Request $request)
    {
        if ($request->isMethod('post')) {
            $this->validate($request, [
              'email'=>'required|email|max:255',
              'password'=>'required',
              'vcode'=>'required'
            ]);

            $code = $request['vcode'];
            $currentCode = session('code');
            $usercred = array(
                'email' =>$request['email'],
                'password' => $request['password']
            );
            if (strtoupper($code)!=strtoupper($currentCode)) {
                session()->flash('danger', "验证码错误");
                return view('admin.session.login');
            }

            if (Auth::attempt($usercred)) {
                session()->flash('success', "登录成功");
                return redirect('/admin/index');
            } else {
                session()->flash('danger', "登录失败[用户名密码错]");
                return redirect()->back();
            }
        } else {
            return view('admin.session.login');
        }
    }

    public function code()
    {
        $builder = new CaptchaBuilder;
        $builder->build();
        $currentCode = $builder->getPhrase();
        session(['code' => $currentCode]);
        header('Content-type: image/jpeg');
        $builder->output();
    }

    public function getCode()
    {
        $code = session('code');
        echo "current code is ".$code;
    }
}
