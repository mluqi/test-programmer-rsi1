<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\todos;

class todosController extends Controller
{
    public function index()
    {
        $todos = todos::all();
        $data = compact('todos');
        return view("welcome")->with($data);
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'todo' => 'required',
                'datetime' => 'required',
                'status' => 'required',
                'tahun' => 'required'
            ]
        );
        $todo = new todos();
        $todo->todo = $request['todo'];
        $todo->datetime = $request['datetime'];
        $todo->status = $request['status'];
        $todo->tahun = $request['tahun'];
        $todo->save();
        return redirect(route("todo.home"));
    }

    public function delete($id)
    {
        todos::find($id)->delete();
        return redirect(route("todo.home"));
    }

    public function edit($id)
    {
        $todo = todos::find($id);
        $data = compact('todo');
        return view("update")->with($data);
    }

    public function updateData(Request $request)
    {
        $request->validate(
            [
                'todo' => 'required',
                'datetime' => 'required',
                'status' => 'required',
                'tahun' => 'required'
            ]
        );
        $id = $request['id'];
        $todo = todos::find($id);

        $todo->todo = $request['name'];
        $todo->datetime = $request['datetime'];
        $todo->status = $request['status'];
        $todo->tahun = $request['tahun'];
        $todo->save();
        return redirect(route("todo.home"));
    }
}
