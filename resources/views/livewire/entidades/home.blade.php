<div>
    <x-crumb>
        <a class="breadcrumb-item" href="#">Mantenimiento</a>
        <span class="breadcrumb-item active">Entidades</span>
    </x-crumb>

    <x-page-body>

        <x-slot name="title">
            Mantenimiento de Entidades
        </x-slot>

        <x-slot name="descripcion">
            Registro y actualizaciones de entidades
        </x-slot>
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        @if($form === 1)
          @include('livewire.entidades.form')
        @else
            <div class="input-group mb-3">
                <input type="text" class="form-control"
                       wire:model="search"
                       placeholder="filtrar por razoón social ó RUC">
                <div class="input-group-append">
                    <button class="btn btn-primary mr-1"><i class="fa fa-search"></i> Buscar</button>
                    @if($form === 0)
                        <button class="btn btn-outline-primary float-right" wire:click="create"><i class="fa fa-plus"></i> Crear Nueva Entidad</button>
                    @endif
                </div>
            </div>
            <x-table id="marca">
                <x-slot name="cabecera">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Secuencia</th>
                        <th scope="col">Nombre entidad</th>
                        <th scope="col">Criterio</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Fecha Creación</th>
                        <th scope="col">Fecha Actualizacion</th>
                        <th scope="col">&nbsp;</th>
                    </tr>
                </x-slot>
                <x-slot name="cuerpo">
                    @forelse($entidades as $entidad)
                        <tr>
                            <td>{{ $entidad->id }}</td>
                            <td>{{ $entidad->ent_secuencia }}</td>
                            <td>{{ $entidad->ent_nombre }}</td>
                            <td>{{ $entidad->ent_criterio }}</td>
                            <td>{{ $entidad->ent_estado }}</td>
                            <td>{{ $entidad->created_at }}</td>
                            <td>{{ $entidad->updated_at }}</td>
                            <td>
                                <button class="btn btn-sm btn-info" wire:click="show({{$entidad->id}})"> <i class="fa fa-pencil"></i></button>
                                <button class="btn btn-sm btn-danger" wire:click="show({{$entidad->id}})"> <i class="fa fa-trash"></i></button>
                            </td>
                        </tr>
                    @empty
                        <h4>No hay datos</h4>
                    @endforelse
                </x-slot>
            </x-table>
            {{ $entidades->links('paginacion.pagination') }}
        @endif

    </x-page-body>
</div>
