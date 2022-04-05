<div class="container w-full mx-auto pt-20">
    <style>
        input.form-control.input-md {
            width: 300px;

        }

        .bg-black-alt {
            background: #191919;
        }

        .text-black-alt {
            color: #191919;
        }

        .border-black-alt {
            border-color: #191919;
        }

        textarea.form-control {
            width: 300px;
        }

    </style>
    <div class="w-full p-3">
        <!--Table Card-->
        <div class="bg-gray-900 border border-gray-800 rounded shadow mt-20">
            <div class="border-b border-gray-800 p-3">
                <h5 class="font-bold uppercase text-gray-600">Add Article</h5>
            </div>
            <div class="p-5">
                <div class="w-full xl:w-3/4 lg:w-11/12 flex">
                    <!-- Col -->
                    <div class="w-full lg:w-7/12 bg-white p-5 rounded-lg lg:rounded-l-none">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <a href="{{ route('admin.articles') }}"
                                                    class="btn btn-success pull-right">All Article</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        @if (Session::has('message'))
                                            <div class="alert alert-success" role="alert">{{ Session::get('message') }}
                                            </div>
                                        @endif
                                        <form class="form-horizontal" enctype="multipart/form-data"
                                            wire:submit.prevent="savePost">
                                            <div class="form-group">
                                                <label class="col-md-4 control-label">Article Title</label>
                                                <div class="col-md-4">
        
                                                    <input type="text" placeholder="Article Title"
                                                        class="form-control input-md" wire:model="post.title" style="width: 200px;" />
                                                </div>
                                            </div>
        
                                            <div class="form-group">
                                                <label class="col-md-4 control-label">Article Body</label>
                                                <div class="col-md-4" >
                                                    <textarea 
                                                        placeholder="Article Body" wire:model="post.body"
                                                        style="width: 300px;"></textarea>
                                                </div>
                                            </div>
        
        
                                            <div class="form-group">
                                                <label class="col-md-4 control-label"></label>
                                                <div class="col-md-4">
                                                    <button wire:click="savePost" type="submit" class="btn btn-primary">Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                        @if($saveSuccess)
                                        <div class="rounded-md bg-green-100 rounded-lg p-4">
                                            <div class="flex">
                                                <div class="flex-shrink-0">
                                                    <svg class="h-5 w-5 text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                                    </svg>
                                                </div>
                                                <div class="ml-3">
                                                    <h3 class="text-sm font-medium text-green-800">Successfully Saved Article</h3>
                                                    <div class="mt-2 text-sm text-green-700">
                                                        <p>Your new Article has been saved.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

