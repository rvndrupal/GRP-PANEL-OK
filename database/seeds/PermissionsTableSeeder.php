<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //usuarios
        Permission::create([
            'name' => 'Listado usuarios',
            'slug' => 'users.list',
            'description'  => 'Lista y navega todos los usuarios del sistema',

        ]);

        Permission::create([
            'name' => 'Agregar nuevo usuario',
            'slug' => 'users.add',
            'description'  => 'Ver en detalle cada usuario del sistema',

        ]);

       

        Permission::create([
            'name' => 'Edicion de Usuarios',
            'slug' => 'users.edit',
            'description'  => 'Editar cualquier dato de un usuario del sistema',

        ]);

        Permission::create([
            'name' => 'Eliminar Usuario',
            'slug' => 'users.delete',
            'description'  => 'Eliminar cualquier dato de un usuario del sistema',

        ]);

         Permission::create([
            'name' => 'Actualizar usuario',
            'slug' => 'users.update',
            'description'  => 'Actualizar datos del usuario',

        ]);


         Permission::create([
            'name' => 'Actualizar usuario claves',
            'slug' => 'update.access',
            'description'  => 'Actualizar usuario claves',

        ]);


        //usuarios




        //roles
         Permission::create([
            'name' => 'Agregar nuevo Rol',
            'slug' => 'rol.add',
            'description'  => 'Agregar nuevo Rol ',

        ]);

        Permission::create([
            'name' => 'Borrar Rol',
            'slug' => 'rol.delete',
            'description'  => 'Eliminar Rol ',

        ]);

         Permission::create([
            'name' => 'Asignar rol a un usuario',
            'slug' => 'asignar.rol',
            'description'  => 'Asignar rol a un usuario ',

        ]);

         Permission::create([
            'name' => 'Eliminar rol a un usuario',
            'slug' => 'delete.rol.user',
            'description'  => 'Eliminar rol a un usuario ',

        ]);



        //permisos
         Permission::create([
            'name' => 'Agregar nuevo Permiso',
            'slug' => 'permisos.add',
            'description'  => 'Agregar nuevo permiso ',

        ]);

        Permission::create([
            'name' => 'Asignar permiso a un rol',
            'slug' => 'asignar.permiso',
            'description'  => 'Agregar nuevo permiso a un rol ',

        ]);

        Permission::create([
            'name' => 'Eliminar permiso de un rol',
            'slug' => 'eliminar.permiso.rol',
            'description'  => 'Eliminar permiso de un rol ',

        ]);

        

    }
}
