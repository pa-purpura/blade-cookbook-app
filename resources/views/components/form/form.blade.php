    @props([
        'method' => 'POST',
        'action' => '',
        'user' => ''
    ])
    
    <form 
        method="{{ $method === 'GET' ? 'GET': 'POST'}}"
        action="{{ $action }}"
    >
        @csrf
        @if (! in_array($method, ['GET', 'POST']))
            @method('PUT')            
        @endif
        {{ $slot }}
        <x-buttons.button>Salva</x-buttons.button>       
    </form>
