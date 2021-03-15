<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function addRole() {
        $roles = [
           [ "name" => "Administrator"],
            ["name" => "Editor"], 
            ["name" => "Author"],
            ["name" => "Contributor"],
            ["name" => "Subscriber"],
        ];


        Role::insert($roles);
        return "Roles are created successfully";
    }


    public function addUser() 
    {
        $user = new User();
        $user->name = 'Katappa';
        $user->email = 'Katappa@gmail.com';
        $user->password = encrypt('secret');
        $user->save();
        $rolesId = [2, 3, 4];
        $user->roles()->attach($rolesId);
        return "Record Hass been created successfully";
    }

    public function getAllRolesByUser($id) {
        $user = User::find($id);
        $roles = $user->roles;
        return $roles;
    }

    public function getAllUsersByRole($id){
        $role = Role::find($id);
        $users = $role->users;
        return $users;
    }
}
