@extends('layouts.dashboard')
@section('page_heading','Compañias de productos')
@section('section')



@section ('table_panel_title','Compañias de productos')
@section ('table_panel_body')
    @if (Session::has('message'))
        <div class="alert alert-success">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            {{Session::get('message')}}
        </div>
    @endif
    @if (Session::has('error'))
        <div class="alert alert-danger">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            {{Session::get('error')}}
        </div>
    @endif
    <p><a class="btn btn-primary" href="{{url('products/company/create')}}">Nueva Compañia</a></p>
    @include('widgets.ClassList', array('class'=>''))
    @include('modal.sureProductCompany')
@endsection
@include('widgets.panel', array('header'=>true, 'as'=>'table'))


@stop
