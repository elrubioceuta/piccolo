<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Color;
use App\Category;
use App\Size;

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
        
        
        $user = new User();

        $user->name = 'Maria Carey';
        $user->email = 'maria@gmail.com';
        $user->phone = '222222222';
        $user->password = bcrypt('probando');

        $user->save();
        
        $user = new User();

        $user->name = 'Pedro Picapiedra';
        $user->email = 'pedro@gmail.com';
        $user->phone = '666666666';
        $user->password = bcrypt('probando');

        $user->save();
        
        DB::table('colors')->delete();

        $color = new Color();
        $color->name = 'red';
        $color->save();
        
        $color = new Color();
        $color->name = 'white';
        $color->save();
        
        $color = new Color();
        $color->name = 'blue';
        $color->save();
        
        $color = new Color();
        $color->name = 'black';
        $color->save();

        $color = new Color();
        $color->name = 'green';
        $color->save();

        DB::table('sizes')->delete();

        $size = new Size();
        $size->size = '20';
        $size->save();
        
        $size = new Size();
        $size->size = '25';
        $size->save();
        
        $size = new Size();
        $size->size = '32';
        $size->save();
        
        $size = new Size();
        $size->size = '35';
        $size->save();

        $size = new Size();
        $size->size = '38';
        $size->save();

        DB::table('categories')->delete();

        $category = new Category();
        $category->name = 'heels';
        $category->save();
        
        $category = new Category();
        $category->name = 'school';
        $category->save();
        
        $category = new Category();
        $category->name = 'classic';
        $category->save();
        
        $category = new Category();
        $category->name = 'cassual';
        $category->save();

        $category = new Category();
        $category->name = 'sport';
        $category->save();
    }
}
        

