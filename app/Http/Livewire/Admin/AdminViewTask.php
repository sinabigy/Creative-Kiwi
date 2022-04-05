<?php

namespace App\Http\Livewire\Admin;

use App\Models\Task;
use Illuminate\Support\Str;
use Livewire\Component;
use Livewire\WithPagination;

class AdminViewTask extends Component
{
    use WithPagination;
    public $task_id;
    public $title;
    public $slug;
    public $description;
    public $completed;

    public function generateslug()
    {
        $this->slug = Str::slug($this->title, '-');
    }

    public function deleteTask($id)
    {
        $task = Task::find($id);
        $task->delete();
        session()->flash('message', 'Task has been deleted successfully');
    }

    public function addTask()
    {
        $task = new Task();
        $task->title = $this->title;
        $task->slug = $this->slug;
        $task->description = "null";
        $task->completed = "0";
        $task->save();
        session()->flash('message', 'Task has been created successfully!');
    }

    public function updateTask($id)
    {
        $task = Task::find($id);
        if ($task->completed == 0) {
            $task->completed = 1;
            $task->save();
            session()->flash('message', 'Task has been marked as completed');
        } else {
            $task->completed = 0;
            $task->save();
            session()->flash('message', 'Task has been marked as not completed');
        }
    }

    public function render()
    {
        return view('livewire.admin.admin-view-task')->layout('layouts.dashboardlayout');
    }
}
