<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TodoList;

class TodoListController extends Controller
{
    public function index(Request $request)
    {
        $todo_lists = TodoList::all();
        // コメント
        return view('todo_list.index', ['lists' => $todo_lists]);
    }
}
