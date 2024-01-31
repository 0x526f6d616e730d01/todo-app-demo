<?php

namespace App\Http\Controllers;

use App\Models\TodoCard;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * Validation rules.
     */
    private function rules()
    {
        return [
            'title' => 'required|max:255',
            'desc' => 'string|nullable',
            "due" => "data|nullable",
            "complete" => "boolean|false"
        ];
    }
    public function index()
    {
        $cards = TodoCard::all();
        return view('todo.index', ['cards' => $cards]);
    }

    /**
     * Create view
     */
    public function create()
    {
        return view('todo.create');
    }

    /**
     * edit view
     */
    public function edit(TodoCard $card)
    {

        return view('todo.edit', ['card' => $card]);
    }

    public function update(TodoCard $card, Request $request)
    {
        dd($card);
    }

    public function store(Request $request)
    {
        $data = $request->validate($this->rules());

        TodoCard::create($data);

        return redirect(route("todo.index"));
    }
}
