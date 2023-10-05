<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $lessons = Lesson::all();

        return view('home', compact('lessons'));
    }
}
