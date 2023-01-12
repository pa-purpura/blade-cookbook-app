<x-layout>

    <div class="app-title">
        <div>
            <h1><i class="fa fa-dashboard"></i> Pannello Players</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="tile">
                <h3 class="tile-title">List</h3>
                <div class="text-right mb-3 mr-3">
                    <a href="http://127.0.0.1:8000/user/create">
                        <button class="btn btn-sm btn-info"><i class="fa fa-plus" aria-hidden="true"></i> add
                            user</button>
                    </a>
                </div>
                <div class="bs-component" style="margin-bottom: 15px;">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="text-center">
                                    <tr>
                                        <th>ID <i class="ml-1 fa fa-id-card-o" aria-hidden="true"></i></th>
                                        <th>Nome <i class="ml-1 fa fa-arrow-circle-left" aria-hidden="true"></i></th>
                                        <th>Cognome <i class="ml-1 fa fa-arrow-circle-left" aria-hidden="true"></i></th>
                                        <th>Età <i class="ml-1 fa fa-list-alt" aria-hidden="true"></i></th>
                                        <th>Email <i class="ml-1 fa fa-list-alt" aria-hidden="true"></i></th>
                                        <th>Azioni <i class="ml-1 fa fa-list-alt" aria-hidden="true"></i></th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    @forelse ($players as $player)
                                        <tr>
                                            <td>{{ $player->id }}</td>
                                            <td>{{ $player->name }}</td>
                                            <td>{{ $player->surname }}</td>
                                            <td>{{ $player->age ? $player->age : '--' }} </td>
                                            <td>{{ $player->email ? $player->email : '--' }}</td>
                                            <td>
                                                <form action="{{ route('players.destroy', $player->id ) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn btn-sm btn-danger">Elimina</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td>
                                                Non ci sono Players
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>



</x-layout>
