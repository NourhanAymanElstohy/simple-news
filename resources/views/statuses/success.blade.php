@if(Session::has('suceess'))
    <div class="alert  alert-success alert-dismissible " role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
        </button>
        <strong>{{session('suceess')}}</strong>
    </div>
@endif