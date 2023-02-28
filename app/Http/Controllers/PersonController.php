<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PersonController extends Controller
{
    public function person(){
        return view('person', [
            'name' => 'Juan Dela Cruz',
            'age' => 99,
            'address' => 'Nabua, Camarines Sur',
            'color' => 'red',
            'siblings' => [
                [
                    'name' => 'Naruto',
                    'age' => 17
                ],
                [
                    'name' => 'Sasuke',
                    'age' => 18
                ],
            ]
        ]);
    }
}
