@if(session('success_message'))
    <div class="alert alert-success">
        {{ session('success_message') }}
    </div>
@endif


    @if(session('warning'))
        <div class="alert alert-success">
            {{ session('warning_message') }}
        </div>
    @endif
