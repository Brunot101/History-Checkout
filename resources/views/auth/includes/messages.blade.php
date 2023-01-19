@if($message = Session::get('delete success'))

<div class="alert alert-success alert-block">

    {{$message}}
</div>
@endif



@if($message = Session::get('register success'))

<div class="alert alert-success alert-block">

    {{$message}}
</div>
@endif