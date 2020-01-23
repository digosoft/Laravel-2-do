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

    public function show($todoid){
    	// dd($todoid);
    	$todo = Todo::find($todoid);
    	return view('todos.show')->with('todo', $todo);
    }
}
