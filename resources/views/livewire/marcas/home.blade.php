<div>
    <x-crumb>
        <a class="breadcrumb-item" href="#">Mantenimiento</a>
        <span class="breadcrumb-item active">Instituciones</span>
    </x-crumb>

    <x-page-body>

        <x-slot name="title">
            Mantenimiento de Institución
        </x-slot>

        <x-slot name="descripcion">
            Registro y actualizaciones de las instituciones
        </x-slot>
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        @if($form === 1)
                @include('livewire.marcas.form')
        @else
            <div class="input-group mb-3">
                <input type="text" class="form-control"
                       wire:model="search"
                       placeholder="filtrar por razoón social ó RUC">
                <div class="input-group-append">
                    <button class="btn btn-primary mr-1"><i class="fa fa-search"></i> Buscar</button>
                    @if($form === 0)
                        <button class="btn btn-outline-primary float-right" wire:click="create"><i class="fa fa-plus"></i> Crear Nueva Institución</button>
                    @endif
                </div>
            </div>
            <x-table id="marca">
                <x-slot name="cabecera">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Razon social</th>
                        <th scope="col">RUC</th>
                        <th scope="col">Dirección</th>
                        <th scope="col">Código postal</th>
                        <th scope="col">Email</th>
                        <th scope="col">Ubigeo</th>
                        <th scope="col">Teléfono</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Fecha Creación</th>
                        <th scope="col">&nbsp;</th>
                    </tr>
                </x-slot>
                <x-slot name="cuerpo">
                    @forelse($marcas as $marca)
                    <tr>
                        <td>{{ $marca->id }}</td>
                        <td>{{ $marca->brand_name }}</td>
                        <td>{{ $marca->brand_code }}</td>
                        <td>{{ $marca->brand_address }}</td>
                        <td>{{ $marca->brand_code_postal }}</td>
                        <td>{{ $marca->brand_email }}</td>
                        <td>{{ $marca->brand_ubigeo }}</td>
                        <td>{{ $marca->telefono }}</td>
                        <td>{{ $marca->brand_estado }}</td>
                        <td>{{ $marca->created_at }}</td>
                        <td>
                            <button class="btn btn-sm btn-info" wire:click="show({{$marca->id}})"> <i class="fa fa-pencil"></i></button>
                            <button class="btn btn-sm btn-danger" wire:click="show({{$marca->id}})"> <i class="fa fa-trash"></i></button>
                        </td>
                    </tr>
                    @empty
                        <h4>No hay datos</h4>
                    @endforelse
                </x-slot>
            </x-table>
            {{ $marcas->links('paginacion.pagination') }}
        @endif

    </x-page-body>
</div>
