<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $todo_list = Todo::all();

        return view("pages.todo.index", [
            'todos' => $todo_list,
        ]);
    }

    public function add()
    {
        return view("pages.todo.add");
    }

    public function save(Request $request)
    {
//        dd($request->all());

        $todo = new Todo();
        $todo->title = $request->input('title');
        $todo->content = $request->input('content');
        $todo->save();

        return redirect()->route('todo.index');
    }

    public function edit(Request $request)
    {
//        dd($request->all());

        $todo = Todo::where('id', $request->input('id'))->first();

        return view("pages.todo.edit", [
            'todo' => $todo,
        ]);
    }

    public function update(Request $request)
    {
//        dd($request->all());

        $todo = Todo::where('id', $request->input('id'))->first();
        $todo->title = $request->input('title');
        $todo->content = $request->input('content');
        $todo->save();

        return redirect()->route('todo.index');
    }

    public function delete(Request $request)
    {
        $todo = Todo::where('id', $request->input('id'))->first();
        $todo->delete();

        return redirect()->route('todo.index');
    }
}
