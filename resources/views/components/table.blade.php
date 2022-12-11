<table class="table">
    <thead>
        <tr>
            @foreach ($headDatas as $data)
            <th>{{ $data }}</th>
            @endforeach
            <th colspan="2">Azioni</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($array as $key => $item)
        <tr>
            @foreach ($item as $key2 => $value)
            <td>{{$value}}</td>
            </td>
            @endforeach
            {{-- !! trovare soluzione migliore per la variabile $routeItems !! --}}
            <td><a href="{{route($routeItems . '.edit', $item['id'])}}"><button class="btn btn-secondary"
                        type="button">Modifica</button></a></td>
            <td>
            <td>
                <x-buttons.delete-form method="post" action="{{route($routeItems . '.destroy', $item['id'])}}" />
            </td>
        </tr>
        @endforeach
    </tbody>
</table>