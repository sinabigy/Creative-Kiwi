<?php

namespace App\Http\Livewire\Admin;

use App\Models\Task;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class AdminEditTaskComponent extends Component
{
    use WithFileUploads;
    public $task_slug;
    public $task_id;
    public $title;
    public $slug;
    public $description;
    public $completed;

    public function mount($task_slug)
    {
        $this->task_slug = $task_slug;
        $task = Task::where('slug', $task_slug)->first();
        $this->task_id = $task->id;
        $this->title = $task->title;
        $this->slug = $task->slug;
        $this->completed = $task->completed;
    }

    public function generateslug()
    {
        $this->slug = Str::slug($this->title);
    }

    public function updateTask()
    {
        $task = Task::find($this->task_id);
        $task->title = $this->title;
        $task->slug = $this->slug;
        $task->description = $this->description;
        $task->completed = $this->completed;
        $task->save();
        session()->flash('message', 'Task has ben updated successfully!');
    }

    public function deleteTask($id)
    {
        $task = Task::find($id);
        $task->delete();
        session()->flash('message', 'Task has been deleted successfully');
    }

    public function render()
    {
        return view('livewire.admin.admin-edit-task-component')->layout('layouts.dashboardlayout');
    }
}
