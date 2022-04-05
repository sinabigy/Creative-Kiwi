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
                <h5 class="font-bold uppercase text-gray-600">Edit Testimonial</h5>
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
                                                <a href="{{ route('admin.testimonials') }}"
                                                    class="btn btn-success pull-right">All Testimonial</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel-body">
                                        @if (Session::has('message'))
                                            <div class="alert alert-success" role="alert">
                                                {{ Session::get('message') }}</div>
                                        @endif
                                        <form class="form-horizontal" wire:submit.prevent="addTestimonial">
                                            <div class="form-group">
                                                <label class="col-md-4 control-label">Testimonial Client Name</label>
                                                <div class="col-md-4">
                                                    <input type="text" placeholder="Testimonial Client Name"
                                                        class="form-control input-md" wire:model="name"  wire:keyup="generateslug" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-4 control-label">Testimonial Slug</label>
                                                <div class="col-md-4">
                                                    <input type="text" placeholder="Testimonial Slug"
                                                        class="form-control input-md" wire:model="slug" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-4 control-label">Testimonial Client Title</label>
                                                <div class="col-md-4">
                                                    <input type="text" placeholder="Testimonial Name"
                                                        class="form-control input-md" wire:model="title"
                                                        />
                                                </div>
                                            </div>
                                           
                                            <div class="form-group">
                                                <label class="col-md-4 control-label">Testimonial Description</label>
                                                <div class="col-md-4">
                                                    <textarea class="form-control" placeholder="Description"
                                                        wire:model="description"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-4 control-label">Testimonial Image</label>
                                                <div class="col-md-4">
                                                    <input type="file" class="input-file" wire:model="image" />
                                                    @if ($image)
                                                        <img src="{{ $image->temporaryUrl() }}" width="120">
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label class="col-md-4 control-label"></label>
                                                <div class="col-md-4">
                                                    <button type="submit" class="btn btn-primary">Update Testimonial</button>
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
