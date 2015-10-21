@extends('layouts.dashboard')
@section('page_heading','Clientes')
@section('section')
         


@section ('table_panel_title','Lista de Clientes')
		@section ('table_panel_body')
		@if (Session::has('message'))
                    <div class="alert alert-success">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                     {{Session::get('message')}}
                    </div>
                @endif
		@include('widgets.tableuser', array('class'=>''))
        @include('modal.sure')
		@endsection
		@include('widgets.panel', array('header'=>true, 'as'=>'table'))
        {{ $users->render() }}
            
@stop

