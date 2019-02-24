@if(session('info_message'))
    <div class="alert alert-info" role="alert">
        {{ session('info_message') }}
    </div>
@endif
