<?php

use Illuminate\Database\Seeder;
use App\Models\User;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $users = factory(App\Models\User::class)->times(2)->make();
       User::insert($users->toArray());
    
    }
}
