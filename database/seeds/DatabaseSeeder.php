<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\User;


class DatabaseSeeder extends Seeder {
    public function run(){
        
        Model::unguard();
        
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        
        $this->call('UserTableSeeder');
        
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        
        Model::reguard();
    }    
}
        

class UserTableSeeder extends Seeder {
    public function run() {
        DB::table('users')->delete();

        $user = new User();

        $user->name = 'Admin';
        $user->email = 'elrubio@gmail.com';
        $user->phone = '999999999';
        $user->class = 2;
        $user->password = bcrypt('ceuta89');

        $user->save();
    }
}
        

