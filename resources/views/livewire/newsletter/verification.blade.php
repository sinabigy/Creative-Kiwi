<div class="container">
    <div class="panel-body" style="margin-top: 100px;">
        <form class="form-horizontal" enctype="multipart/form-data" >
            <div class="form-group">
                <label class="col-md-4 control-label">Accept Newsletters?</label>
                <div class="col-md-4">
                    <p> Click Submit</p>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label"></label>
                <div class="col-md-4"><a href="/">
                    <button wire:click="acceptOrDecline('{{ str_replace('/newsletter/verification/', '', $_SERVER['REQUEST_URI']) }}')" type="submit" class="btn btn-primary">
                       Submit
                    </button></a> 
                </div>
            </div>
        </form>
        @if (Session::has('message'))
            <div class="alert alert-success" role="alert">{{ Session::get('message') }}
            </div>
        @endif
    </div>
</div>