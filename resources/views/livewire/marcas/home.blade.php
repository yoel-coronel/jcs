<div>
    <x-crumb>
        <a class="breadcrumb-item" href="#">Mantenimiento</a>
        <span class="breadcrumb-item active">Instituciones</span>
    </x-crumb>

    <x-page-body>

        <x-slot name="title">
            Mantenimiento de Institución
            @if($form === 0)
                <button class="btn btn-outline-primary float-right" wire:click="create">Nuevo</button>
            @endif
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
            <x-table id="marca">
                <x-slot name="cabecera">
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
                        <th scope="col">Fecha Creación</th>
                        <th scope="col">&nbsp;</th>
                    </tr>
                </x-slot>

            </x-table>
        @endif

    </x-page-body>
</div>
