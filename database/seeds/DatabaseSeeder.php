<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Role; //agragar rol

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         //$this->call(PermissionsTableSeeder::class);
         factory(App\User::class, 1)->create();


         Role::create([
            'name'  => 'Admin',
            'slug'  => 'admin',
            'special' => 'all-access'
        ]);

        App\User::create([
            'username'=>'rodrigorvn',
            'nombres' =>'rodrigo igor',
            'apellidos' => 'villanueva',
            'telefono' => '67576567',
            'email'=>'rodrigo@gmail.com',
            'password'=>bcrypt('rorro13'),

        ]);
    }
}
