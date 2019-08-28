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

    public function show(Todo $todo)
    {
    	return view('todos.show')->with('todo', $todo);
    }

    public function create()
    {
        return view('todos.create');
    }

    public function store()
    {
        $this->validate(request(), [
            'name' => 'required|min:6|max:12',
            'description' => 'required',
        ]);

        
       // dd(request());
        //dd(request()->all());
        //
        $data = request()->all();
        //dd($data['name']);
        $todo = new Todo();
        $todo->name = $data['name'];
        $todo->description = $data['description'];
        $todo->completed = false;
        $todo->save();

        return redirect('/todos');
    }

    public function edit(Todo $todo)
    {
        return view('todos.edit')->with('todo', $todo);
    }

    public function update(Todo $todo)
    {
        $this->validate(request(), [
            'name' => 'required|min:6|max:12',
            'description' => 'required',
        ]);

        
        $data = request()->all();

        $todo->name = $data['name'];
        $todo->description = $data['description'];
        $todo->completed = false;
        $todo->save();

        return redirect('/todos');
    }

    public function destroy(Todo $todo)
    {
        $todo->delete();
        return redirect('/todos');
    }
}
