@props(['error'])

@if ($error)
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
         {{ $error }}
      </div>
@endif
