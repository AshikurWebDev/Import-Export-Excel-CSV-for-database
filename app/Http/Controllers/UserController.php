<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function insertRecords() {
        $phone = new Phone();
        $phone->phone = '123456789';
        $user = new User();
        $user->name = 'Jennifer';
        $user->email = 'Jennifer@gmail.com';
        $user->password = encrypt('secret');
        $user->save();
        $user->phone()->save($phone);
        return "Record Has been created successfully";

    }

    public function fetchPhoneByUser($id){
        $phone = User::find($id)->phone;
        return $phone;
    }
}
