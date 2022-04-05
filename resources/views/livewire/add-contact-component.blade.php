<div class="col-lg-6">
    <form class="form-horizontal" enctype="multipart/form-data" wire:submit.prevent="savePost">

        <div class="row">
            <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control input-md" wire:model="post.name" id="name"
                    placeholder="Your Name" required>
            </div>
            <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="email" class="form-control input-md" wire:model="post.email" name="email" id="email"
                    placeholder="Your Email" required>
            </div>
        </div>
        <div class="form-group mt-3">
            <input type="text" class="form-control input-md" wire:model="post.subject" name="subject" id="subject"
                placeholder="Subject" required>
        </div>
        <div class="form-group mt-3">
            <textarea class="form-control input-md" wire:model="post.message" name="message" rows="5"
                placeholder="Message" required></textarea>
        </div>
        <div class="text-center"><button wire:click="savePost" type="submit" class="btn btn-primary">Submit</button>
        </div>
        
    </form>
    @if (Session::has('message'))
                    <div class="alert alert-success" role="alert">{{ Session::get('message') }}
                    </div>
                @endif
</div>
