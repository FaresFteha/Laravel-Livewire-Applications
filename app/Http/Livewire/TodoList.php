<?php

namespace App\Http\Livewire;

use App\Models\Todo_item;
use Livewire\Component;

class TodoList extends Component
{
    public $todos;
    public string $todotext = "";

    public function mount()
    {
        $this->selectTodos();
    }
    public function render()
    {
        return view('livewire.todo-list');
    }

    public function addTodo()
    {
        $todo = new Todo_item();
        $todo->todo = $this->todotext;
        $todo->compleated = false;
        $todo->save();

        $this->todotext = '';

        $this->selectTodos();
    }

    public function toggleTodo($id)
    {
        $todo = Todo_item::where('id', $id)->first();

        if (!$todo) {
            return;
        }
        $todo->compleated = !$todo->compleated;
        $todo->save();
        $this->selectTodos();
    }

    public function deleteTodo($id)
    {
        $todo = Todo_item::where('id', $id)->first();

        if (!$todo) {
            return;
        }
        $todo->delete();
        $this->selectTodos();
    }


    public function selectTodos()
    {
        $this->todos = Todo_item::orderBy('created_at', 'DESC')->get();
    }
}
