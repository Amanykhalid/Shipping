@if(Session::has('success'))
<div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{Session::get('success')}}</strong>
</div>
@endif