<?php

namespace App\Http\Livewire\Admin;

use App\Models\Task;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class AdminAddTaskComponent extends Component
{
    use WithFileUploads;
    public $task_id;
    public $title;
    public $slug;
    public $description;
    public $completed;

    public function generateslug()
    {
        $this->slug = Str::slug($this->title,'-');
    }


    public function addTask()
    {
        $task = new Task();
        $task->title = $this->title;
        $task->slug = $this->slug;
        $task->description = $this->description;
        $task->completed = $this->completed;
        $task->save();
        session()->flash('message', 'Task has been created successfully!');
    }
    public function render()
    {
        return view('livewire.admin.admin-add-task-component')->layout('layouts.dashboardlayout');
    }
}
