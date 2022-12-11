<tr>
    @foreach ($item as $key2 => $value)
    {{-- @dd($item, $key2, $value) --}}
    <td>{{$value}}</td>
    @endforeach
    <td><a href="{{route($routeItems . '.edit', $key)}}"><button class="btn btn-secondary"
                type="button">Modifica</button></a>
    </td>
    <td>
        <x-buttons.delete-form method="post" action="{{route($routeItems . '.destroy', $key)}}" />
    </td>
</tr>