<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function __invoke()
    {
        $persons = [
            [
                'id' => 1,
                'name' => 'Sultan',
                'age' => '44',
                'job' => 'Intern'
            ],
            [
                'id' => 2,
                'name' => 'Irina',
                'age' => '24',
                'job' => 'Designer'
            ],
            [
                'id' => 3,
                'name' => 'Petr',
                'age' => '20',
                'job' => 'Student'
            ],
        ];
        return $persons;
    }
}
