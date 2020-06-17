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
            responsive: true,
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
            ],
            language: {
                searchPlaceholder: 'Search...',
                sSearch: '',
                lengthMenu: '_MENU_ instituciones/page',
            }
        });
        // Select2
        $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });

    });
 
</script>

@endpush
