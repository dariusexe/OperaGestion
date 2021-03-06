@extends('layouts.dashboard')
@section('page_heading','Productos')
@section('section')
         


@section ('table_panel_title','Lista de Clientes')
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

        @include('widgets.ProductList', array('class'=>''))
        @include('modal.sureProduct')
        @endsection
        @include('widgets.panel', array('header'=>true, 'as'=>'table'))

           
@stop


