<?php

namespace App\Http\Controllers;


use App\Todo;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    public function index(){

    	// fetch all todos from database
    	// display them in the todos.index page
    	
    	$todos = Todo::all();
    	return view('todos.index')->with('todos', $todos);
    }

    public function show($id)
    {
    	//dd($id);
    	return view('todos.show')->with('todo', Todo::find($id));
    }
}
