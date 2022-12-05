@props([
    'type' => 'info',
    'message' => '',
    'colors' => [
        'success' => 'alert-success',
        'info' => 'alert-info',
        'warning' => 'alert-warning',
        'danger' => 'alert-danger',
    ]
])


<div style="position: relative; z-index: 20;" {{$attributes->merge(['class' => " {$colors[$type]} alert alert-block w-75" ]) }}>
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $slot }}</strong>
</div>

{{-- {{ $message }}  --}}