@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@elseif (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@elseif (session('error'))
    <div class="alert alert-success">
        {{ session('error') }}
    </div>
@elseif (session('info'))
    <div class="alert alert-success">
        {{ session('info') }}
    </div>
@endif
