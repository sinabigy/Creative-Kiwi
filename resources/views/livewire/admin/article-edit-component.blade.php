
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
                <h5 class="font-bold uppercase text-gray-600">Edit Article</h5>
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
                                                    class="btn btn-success pull-right">All Articles</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        @if (Session::has('message'))
                                            <div class="alert alert-success" role="alert">
                                                {{ Session::get('message') }}</div>
                                        @endif
                                        <form class="form-horizontal" wire:submit.prevent="updateArticle">
                                            <div class="form-group">
                                                <label class="col-md-4 control-label">Article Name</label>
                                                <div class="col-md-4">
                                                    <input type="text" placeholder="Article Name"
                                                        class="form-control input-md" wire:model="title"
                                                        wire:keyup="generateslug" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-4 control-label">Article Slug</label>
                                                <div class="col-md-4">
                                                    <input type="text" placeholder="Article Slug"
                                                        class="form-control input-md" wire:model="slug" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-4 control-label">Article Body</label>
                                                <div class="col-md-4">
                                                    <textarea class="form-control" placeholder="Body"
                                                        wire:model="body"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-4 control-label"></label>
                                                <div class="col-md-4">
                                                    <button type="submit" class="btn btn-primary">Update</button>
                                                </div>
                                            </div>
                                        </form>
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
