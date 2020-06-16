<div>
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
        <div class="row">
            <div class="col-md-12">
                @if($form === 0)
                    <button class="btn btn-outline-primary" wire:click="create">Nuevo</button>
                @endif
            </div>
        </div>
    @if($form === 1)
        @include('livewire.marcas.form')
    @else

    @endif
    <table class="table table-dark">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Razon social</th>
            <th scope="col">RUC</th>
            <th scope="col">Dirección</th>
            <th scope="col">Código postal</th>
            <th scope="col">Email</th>
            <th scope="col">Sitio Web</th>
            <th scope="col">Ubigeo</th>
            <th scope="col">Teléfono</th>
            <th scope="col">Estado</th>
        </tr>
        </thead>
        <tbody>
            @forelse($marcas as $key =>$marca)
                <tr>
                    <td>{{$marca->id}}</td>
                    <td>{{$marca->brand_name}}</td>
                    <td>{{$marca->brand_code}}</td>
                    <td>{{$marca->brand_address}}</td>
                    <td>{{$marca->brand_code_postal}}</td>
                    <td>{{$marca->brand_email}}</td>
                    <td>{{$marca->brand_web}}</td>
                    <td>{{$marca->brand_ubigeo}}</td>
                    <td>{{$marca->brand_telefono}}</td>
                    <td>{{$marca->brand_estado}}</td>
                </tr>
            @empty
                <h4>No hay datos</h4>
            @endforelse
        </tbody>
    </table>
</div>

