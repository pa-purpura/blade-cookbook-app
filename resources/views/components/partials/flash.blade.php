@props([
    'type' => 'info',
    'colors' => [
        'success' => 'alert-success',
        'info' => 'alert-info',
        'warning' => 'alert-warning',
        'danger' => 'alert-danger',
    ]
])


<div style="position: absolute; z-index: 20; top: 10rem; right: 3rem"  {{$attributes->merge(['class' => " {$colors[$type]} alert alert-block w-50" ]) }}>
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>{{ $slot }}</strong>
</div>

{{-- {{ $message }}  --}}