@if(Session::has('error'))
    <div class="alert alert-danger alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{Session::get('error')}}</strong>
    </div>
@endif