
<x-layout> 
    <div hidden>
        @if ( Request::url()==='http://127.0.0.1:8000/user/create' )
            {{ $action='http://127.0.0.1:8000/user'}}
            {{ $method = 'POST'}}
        @else
            {{ $method='PATCH'}}
            {{ $action='http://127.0.0.1:8000/user/'.$user->id}}
        @endif
    </div>
    

    <div class="app-title">
        <div>
            @if ( Request::url()==='http://127.0.0.1:8000/user/create' )
                <h1><i class="fa fa-edit"></i> Crea Nuovo</h1>
            @else
                <h1><i class="fa fa-edit"></i> Modifica utente</h1>
            @endif
        </div>
    </div>
    <div class="row">
        <div class="col-md-10">
            <div class="tile">
                <h3 class="tile-title">{{ isset($user) ? $user->name : '' }}</h3>
                <x-form.form 
                    method={{$method}}
                    action={{$action}}
                >
                    <div class="row">
                        <div class="form-group col-md-6">
                            <x-form.inputs.input 
                                label="Nome e Cognome"
                                value="{{ old('name', isset($user) ? $user->name : '') }}"
                                placeholder="Inserisci Nome e cognome" 
                                type="text"
                                name='name'
                                required
                            />
                            @error('name')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <x-form.inputs.input 
                                label="Email"
                                value="{{ old('email', isset($user) ? $user->email : '') }}"
                                placeholder="Inserisci mail" 
                                type="email"
                                name='email'
                                required
                            />
                            @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    {{-- esempio di input che non voglio far visualizare in update --}}
                    @if (Request::url() === 'http://127.0.0.1:8000/user/create')
                    <div class="row">
                        <div class="form-group col-md-6">
                            <x-form.inputs.input 
                                label="Password"
                                value="{{ old('password', isset($user) ? $user->password : '') }}"
                                placeholder="inserisci password" 
                                type="password"
                                name='password'
                                required
                            />
                            @error('password')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>                            
                    @endif       
                </x-form.form>
            </div>
        </div>
    </div>

</x-layout>
