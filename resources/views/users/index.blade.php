@section('title')
    Users
@endsection
<x-layout>
    <div class="app-title">
        <div>
            <h1><i class="fa fa-users mr-2"></i> Pannello User</h1>
        </div>
    </div>
    {{-- <div>
        <x-partials.flash> test flash message </x-partials.flash>
    </div> --}}

    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <h3 class="tile-title">List</h3>
                <div class="text-right mb-3 mr-3">
                    <x-buttons.add href="{{ route('user.create') }}">add user</x-buttons.add>
                </div>
                <div class="bs-component" style="margin-bottom: 15px;">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="text-center">
                                    <tr>
                                        <th>ID <i class="ml-1 fa fa-id-card-o" aria-hidden="true"></i></th>
                                        <th>Name <i class="ml-1 fa fa-arrow-circle-left" aria-hidden="true"></i></th>
                                        <th>email <i class="ml-1 fa fa-arrow-circle-left" aria-hidden="true"></i></th>
                                        <th>Actions <i class="ml-1 fa fa-list-alt" aria-hidden="true"></i></th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    @foreach ($users as $user)
                                    <x-partials.modal
                                        :id="$user->id" 
                                        :form_action="route('user.destroy', $user)" 
                                        :user="$user->name"
                                        form_method="DELETE" 
                                    >
                                        Are you sure you want to delete this user?
                                    </x-partials.modal>
                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>                                            
                                            <a href="{{ route('user.edit', $user->id) }}"
                                                class="text-decoration-none">
                                                <button class="btn btn-primary">
                                                    <i class="ml-1 fa fa-pencil-square-o" aria-hidden="true"></i>
                                                </button>
                                            </a>
                                            <button class="btn btn-danger mr-2"><i class="fa fa-trash-o" aria-hidden="true"
                                                    data-toggle="modal" data-target="#exampleModal{{ $user->id }}"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-layout>