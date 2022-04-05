<div>
    <div class="container w-full mx-auto pt-20">

        <div class="w-full px-4 md:px-0 md:mt-8 mb-16 leading-normal" style="
    margin-top: 100px;
">
            <div class="w-full p-3">

                <div class="bg-gray-900 border border-gray-800 rounded shadow">
                    <div class="border-b border-gray-800 p-3">
                        <h5 class="font-bold uppercase text-gray-600">All Task</h5>

                    </div>
                    <div class="p-5">
                        <div class="h-100 w-full flex items-center justify-center bg-teal-lightest font-sans">
                            <div class="bg-white rounded shadow p-6 m-4 w-full lg:w-3/4 lg:max-w-lg">
                                <div class="mb-4">
                                    <h1>Todo List</h1>
                                    <div class="flex mt-4">
                                        <form class="form-horizontal" wire:submit.prevent="addTask">
                                            <div class="form-group">
                                                <input type="text"
                                                    class="form-control input-md shadow appearance-none border rounded w-full py-2 px-3 mr-4 text-gray-700"
                                                    placeholder="Add Todo" wire:model="title" wire:keyup="generateslug">
                                            </div>
                                            <div class="form-group hidden">
                                                <input type="text" placeholder="Task Slug" class="form-control input-md"
                                                    wire:model="slug" />
                                            </div>

                                            <div class="form-group">
                                                <button
                                                    class="flex-no-shrink p-2 border-2 rounded text-green-400 border-green-400 hover:text-white hover:bg-teal">Add</button>

                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div>
                                    @foreach (\App\Models\Task::all() as $post)
                                        <div class="flex mb-4 items-center">
                                            @if ($post->completed == 0)
                                                <p class="w-full text-gray-900">{{ $post->title }}</p>
                                            @else
                                                <p class="w-full line-through text-green-700">{{ $post->title }}</p>
                                            @endif
                                            
                                            @if ($post->completed == 0)
                                            
                                            <button
                                            class="flex-no-shrink p-2 ml-4 mr-2 border-2 rounded hover:text-white text-green-400 border-green-400 hover:bg-green-400"><a
                                                href="#" wire:click.prevent="updateTask({{ $post->id }})">
                                                Done</a></button>
                                            @else
                                            <button
                                            class="flex-no-shrink p-2 ml-4 mr-2 border-2 rounded hover:text-white text-grey-500 border-grey-500 hover:bg-grey-500"><a
                                                href="#" wire:click.prevent="updateTask({{ $post->id }})">
                                                Not Done</a></button>
                                            @endif

                                            <button
                                                class="flex-no-shrink p-2 ml-2 border-2 rounded text-red-900 border-red-900 hover:text-white hover:bg-red-900"><a
                                                    href="#" wire:click.prevent="deleteTask({{ $post->id }})">
                                                    Remove</a></button>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/table Card-->
            </div>
        </div>
    </div>
</div>
