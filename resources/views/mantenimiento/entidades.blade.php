@extends('layouts.app')

@push('styles')
@endpush

@section('content')

    <livewire:mantenimientos.entity/>

@stop
@push('scripts')

<script>
    $(function(){
        setTimeout(function(){
            $("div.alert").remove();
        }, 5000 );
    });

</script>
@endpush
