<x-layout>

    <div class="app-title">
        <div>
            <h1><i class="fa fa-dashboard"></i> Pannello User</h1>
        </div>
    </div>
    {{-- <div>
        <x-partials.flash> test flash message </x-partials.flash>
    </div> --}}

    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <h3 class="tile-title">Lista</h3>
                <div class="bs-component" style="margin-bottom: 15px;">
                </div>
                <a href="{{route('user.create')}}"> <button class="btn btn-primary my-3" type="button">Crea
                        Nuovo</button></a>
                <div class="table-responsive">
                    <x-table :headDatas="$headData" :array="$users" :routeItems="$routeItem"></x-table>
                </div>
            </div>
        </div>
    </div>

</x-layout>