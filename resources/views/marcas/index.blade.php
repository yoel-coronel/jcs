@extends('layouts.app')

@push('styles')
   <link rel="stylesheet" type="text/css" href="{{ asset('css/jquery.dataTables.css') }}">
   <link rel="stylesheet" type="text/css" href="{{ asset('css/select2.min.css') }}">
@endpush

@section('content')

    <livewire:marcas.brand/>

@stop

@push('scripts')

    <script type="text/javascript" charset="utf8" src="{{asset('js/jquery.dataTables.js')}}"></script>
    <script type="text/javascript" charset="utf8" src="{{asset('js/dataTables.responsive.js')}}"></script>
    <script type="text/javascript" charset="utf8" src="{{asset('js/select2.min.js')}}"></script>

<script>
    $(function(){
        'use strict';
        $('#marca').DataTable({
            "responsive": true,
            "serverSide": true,
            "ajax": "{{ url('api/users') }}",
            "columns":[
                {data:'id'},
                {data:'brand_name'},
                {data:'brand_code'},
                {data:'brand_address'},
                {data:'brand_code_postal'},
                {data:'brand_email'},
                {data:'brand_web'},
                {data:'brand_ubigeo'},
                {data:'brand_telefono'},
                {data:'brand_estado'},
                {data:'created_at'},
                {data:'btn'},
            ],
            language: {
                searchPlaceholder: 'Search...',
                sSearch: '',
                lengthMenu:`Mostrar <select>
                            <option value="10">10</option>
                            <option value="30">30</option>
                            <option value="70">70</option>
                            <option value="100">100</option>
                            <option value="-1">Todos</option> registros`,
                "loadingRecords":"Cargando...",
                "processing":"Procesando...",
                "emptyTable":"No hay registros",
                "zeroRecords":"No hay coincidencias",
                "infoEmpty":"",
                "infoFiltered":"",
                "info": "_TOTAL_ registros",
                "paginate": {
                    "next": "siguiente",
                    "previous": "Anterior"
                }
            }
        });
        // Select2
        $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });


        setTimeout(function(){
            $("div.alert").remove();
        }, 5000 );
    });

</script>

@endpush
