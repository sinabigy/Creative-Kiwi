<div class="col-lg-4 col-md-6 footer-newsletter">
    @if (Session::has('message'))
        <div class="alert alert-success" role="alert">{{ Session::get('message') }}
        </div>
    @endif
    <h4>Join my mailing list.</h4>
    <p>Receive my latest content by email. No spam, ever.</p>
    <form class="form-horizontal" enctype="multipart/form-data" wire:submit.prevent="addEmail">
        <input type="text" placeholder="Email Address" class="form-control input-md" wire:model="email">
        <input type="submit" value="Subscribe">
    </form>
</div>
