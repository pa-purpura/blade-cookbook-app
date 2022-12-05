<x-layout>

    <div class="app-title">
        <div>
            <h1><i class="fa fa-dashboard"></i> Pannello User</h1>
        </div>
    </div>
    <div>
        <x-partials.flash > test flash message </x-partials.flash>
    </div>
    
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <h3 class="tile-title">Lista</h3>
                <div class="bs-component" style="margin-bottom: 15px;">
                </div>
                <a href="{{route('user.create')}}"> <button class="btn btn-primary my-3" type="button">Crea Nuovo</button></a>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>foto</th>
                                <th>nome</th>
                                <th>email</th>
                                <th>aggiornato il</th>
                                <th colspan="2">Azioni</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>
                                    <img src="" alt="p" width="40" height="40">
                                </td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->updated_at }}</td>
                                <td><a href="{{route('user.edit', $user)}}"><button class="btn btn-secondary" type="button">Modifica</button></a></td>
                                <td>
                                    <x-buttons.delete-form method="post" action="{{route('user.destroy', $user)}}"/>

                                    {{-- </x-buttons.delete-form> --}}
                                    {{-- <form method="post" action="{{route('user.destroy', $user)}}">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="btn btn-danger ">Cancella</button>
                                    </form> --}}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</x-layout>