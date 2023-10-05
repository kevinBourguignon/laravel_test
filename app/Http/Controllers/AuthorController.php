<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
  public function view(Author $author, Request $request)
  {
    return view('authors.view', ['author' => $author]);
  }
}
