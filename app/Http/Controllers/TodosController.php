<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodosController extends Controller
{
    public function index(){

    	$todos = Todo::all();
    	return view('todos.index')->with('todos', $todos);
    } 

    public function show(Todo $todo){ 
    	// $todo = Todo::find($todoid);
    	return view('todos.show')->with('todo', $todo);
    }

    public function create(){ 
    	return view('todos.create');
    }

    public function store(Request $request){ 

        $this->validate($request, [
            'name' => 'required|min:6|max:12',
            'description' => 'required',
        ]);

    	$data = $request->all();
        $todos = new Todo();
        $todos->name = $data['name'];
        $todos->description = $data['description'];
        $todos->completed = 0;

        $todos->save();
        session()->flash('success', 'Record has been Created');
        return redirect(route('todos'));
    }

    public function edit($request) {

       $todos = Todo::find($request);
       return view('todos.edit')->with('todo', $todos);
    }

    public function update(Request $request, $id){

         $this->validate($request, [
            'name' => 'required|min:6|max:22',
            'description' => 'required',
        ]);

         $data = $request->all();
         $todos = Todo::find($id);

         $todos->name = $data['name'];
         $todos->description = $data['description'];
         $todos->completed = false; 
         $todos->save();

         session()->flash('success', 'Record has been update');
         return redirect()->route('todos'); 
    }

    public function destory(Request $request, $id){
        $todos = Todo::find($id);
        $todos->delete();

        session()->flash('success', 'Record has been delete');
        return redirect(route('todos'));
    }

    public function complete($todo){
        $todo = Todo::find($todo);
        $todo->completed = true;
        $todo->save(); 
        session()->flash('success', 'Todos has been completed.');
        return redirect()->route('todos');
    }
}
