@extends('layouts.dashboard')
@section('page_heading','Clientes')
         


@section ('table_panel_title','Lista de Clientes')
        @section ('table_panel_body')
        @if (Session::has('message1'))
                    <div class="alert alert-success">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                     {{Session::get('message1')}}<b> {{Session::get('name')}} </b>{{Session::get('message2')}}
                    </div>
                @endif

        @include('widgets.listClients', array('class'=>''))
        @include('modal.sure')
        @endsection
        @include('widgets.panel', array('header'=>true, 'as'=>'table'))
        {{ $data->render() }}
           
@stop