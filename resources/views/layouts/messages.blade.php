@if(session('success'))
    <div id="message" class="alert alert-success">
        {{session('success')}}
    </div>
@endif

@if(session('error'))
    <div id="error_message" class="alert alert-danger">
        {{session('error')}}   
    </div>
@endif

