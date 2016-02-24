@extends('layouts.plane')

@section('body')
 <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header dario">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url ('/home') }}"><img src="{{asset('assets/images/operagestion.png')}}"></a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                
                 <!-- /.dropdown-tasks -->
             
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        {{ Auth::user()->name }}<i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="{{route('users.edit', Auth::user()->id)}}"><i class="fa fa-user fa-fw"></i>Perfil</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i>Configuración</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="{{ url ('logout') }}"><i class="fa fa-sign-out fa-fw"></i>Salir</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li {{ (Request::is('home') ? 'class="active"' : '') }}>
                            <a href="{{ url ('') }}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li >
                            <a href="#"><i class="fa fa-user fa-fw"></i>Usuarios<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li {{ (Request::is('users') ? 'class="active"' : '') }}>
                                    <a href="{{ url ('users') }}">Lista de usuarios</a>
                                </li>
                                 <li {{ (Request::is('users/create') ? 'class="active"' : '') }}>
                                    <a href="{{ url ('users/create') }}">Nuevo usuario</a>
                                </li>
                            </ul>
                        
                            <!-- /.nav-second-level -->
                        </li>
                        <li {{ (Request::is('*clients') ? 'class="active"' : '') }}>
                            <a href="{{ url ('clients') }}"><i class="fa fa-users fa-fw"></i> Clientes</a>
                            <ul class="nav nav-second-level">
                                <li {{ (Request::is('clients') ? 'class="active"' : '') }}>
                                    <a href="{{ url ('clients') }}">Lista de Clientes</a>
                                </li>
                                 <li {{ (Request::is('clients/create') ? 'class="active"' : '') }}>
                                    <a href="{{ url ('clients/create') }}">Nuevo Cliente</a>
                                </li>
                            </ul>
                        </li>
                        <li {{ (Request::is('*presupuesto') ? 'class="active"' : '') }}>
                            <a href="{{ url ('presupuesto') }}"><i class="fa fa-file fa-fw"></i> Presupuestos</a>
                        </li>
                         <li {{ (Request::is('*Contract') ? 'class="active"' : '') }}>
                            <a href="{{ url ('Contract') }}"><i class="fa fa-file-text fa-fw"></i> Contratos</a>
                        </li>
                         <li {{ (Request::is('*options') ? 'class="active"' : '') }}>
                            <a href="{{ url ('options') }}"><i class="fa fa-wrench fa-fw"></i> Opciones</a>
                        </li>
                            
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
			 <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">@yield('page_heading')</h1>
                </div>
                <!-- /.col-lg-12 -->
           </div>
			<div class="row">  
				@yield('section')

            </div>
            <!-- /#page-wrapper -->
        </div>
    </div>
@stop

