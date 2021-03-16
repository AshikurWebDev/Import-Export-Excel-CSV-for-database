<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DropeJoneController extends Controller
{
    public function dropezone() 
    {
        return view('dropezone');
    }

    public function dropezoneStore(Request $req)
    {
        $image = $req->file('file');
        $imageName = time(). '.' . $image->extension();
        $image->move(public_path('images'), $imageName);
        return response()->json(['success' => $imageName]);
    }
}
