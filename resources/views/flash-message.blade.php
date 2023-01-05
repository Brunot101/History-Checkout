@if (session('msg'))
<div class="alert alert-danger alert-block">

        <strong>{{ session('msg') }}</strong>
</div>
@endif