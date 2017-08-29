<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Gregwar\Captcha\CaptchaBuilder;
class LoginController extends CommonController
{
    //
    public function login(Request $request)
    {
        if($request->isMethod('post')){
            //echo "post request..";
            $datas = $request->all();
            $username = $datas['username'];
            $password = $datas['password'];
            $code = $datas['code'];
            $currentCode = session('code');
            if(strlen($code)<1){
                return back()->with('msg','验证码不能为空');
            }
            if(strtoupper($code)!=strtoupper($currentCode)){
                return back()->with('msg','验证码错误');
            }
            if(strlen($username)<1){
                return back()->with('msg','用户名不能为空');
            }
            if(strlen($password)<1){
                return back()->with('msg','密码不能为空');
            }

            dd(count($username));
        }else{
            return view('admin.page.login.login');
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
