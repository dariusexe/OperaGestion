@extends('layouts.dashboard')
@section('page_heading','Clientes')
@section('section')



@section ('table_panel_title','Lista de Clientes')
@section ('table_panel_body')
    @include('widgets.tableuser', array('class'=>''))
@endsection
@include('widgets.panel', array('header'=>true, 'as'=>'table'))

@stop
