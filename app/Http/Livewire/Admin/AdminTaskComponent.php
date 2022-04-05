<?php

namespace App\Http\Livewire\Admin;

use App\Models\Task;
use Livewire\Component;
use Livewire\WithPagination;

class AdminTaskComponent extends Component
{
    use WithPagination;
    public function deleteTask($id)
    {
        $task = Task::find($id);
        $task->delete();
        session()->flash('message', 'Task has been deleted successfully');
    }
    public function render()
    {
        $tasks = Task::paginate(10);
        return view('livewire.admin.admin-task-component', ['tasks'=>$tasks])->layout('layouts.dashboardlayout');
    }
}
