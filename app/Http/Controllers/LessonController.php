<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    public function view(Lesson $lesson, Request $request)
    {
        return view('lessons.view', ['lesson' => $lesson]);
    }
}
