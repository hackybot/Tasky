<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ToDo;


class ToDoController extends Controller
{

  public function addPost(Request $request) {

    $data = $request->only(['title', 'due_by', 'description']);

    $ToDo = ToDo::create($data);

    return redirect("/");


  }

  public function ToDoList() {

    return view('list', [
      "ToDos" => ToDo::where('completed', 0)
        ->get(),
      "Completed" => ToDo::where('completed', 1)
      ->get(),
    ]);

  }

  public function edit($id) {

    return view('ToDos/edit', [
      "ToDo" => ToDo::find($id),
    ]);
  }

  public function editPost(Request $request, $id) {

    $ToDo = ToDo::find($id);
    $ToDo->title = $request->get("title");
    $ToDo->due_by = $request->get("due_by");
    $ToDo->description = $request->get("description");
    $ToDo->save();

    return redirect("/{$id}/edit");

  }

}
