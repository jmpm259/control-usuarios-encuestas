        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url ('/') }}">Encuestas v1.0</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                @guest
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                @else
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> {{ Auth::user()->name }} <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Perfil</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                <i class="fa fa-sign-out fa-fw"></i> Salir
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
                @endguest
            </ul>
            <!-- /.Top Menu Items -->

            <!-- navbar-collapse Nav-Menu -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="{{ Request::is('/') ? 'active' : ''}}">
                        <a href="{{ url ('/') }}"><i class="fa fa-home"></i> Home</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#registros"><i class="fa fa-file"></i> Registros <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="registros" class="collapse">
                            <li>
                                <a href="#">Paises</a>
                            </li>
                            <li>
                                <a href="#">Estados</a>
                            </li>
                            <li>
                                <a href="#">Ciudades</a>
                            </li>
                            <li>
                                <a href="#">Encuestadoras</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#cuentas"><i class="fa fa-users"></i> Cuentas <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="cuentas" class="collapse">
                            <li>
                                <a href="#">Crear Cuenta</a>
                            </li>
                            <li>
                                <a href="#">Asignar Ip</a>
                            </li>
                            <li>
                                <a href="#">Cambiar Estatus</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#listados"><i class="fa fa-list"></i> Listados <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="listados" class="collapse">
                            <li>
                                <a href="#">Ip</a>
                            </li>
                            <li>
                                <a href="#">Cobros</a>
                            </li>
                            <li>
                                <a href="#">Cuentas</a>
                            </li>
                            <li>
                                <a href="#">Cuentas Baneadas</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#historial"><i class="fa fa-history"></i> Historial <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="historial" class="collapse">
                            <li>
                                <a href="#">Bitacora</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#usuario"><i class="fa fa-user"></i> Usuario <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="usuario" class="collapse">
                            <li>
                                <a href="#">Actualizar</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#ayuda"><i class="fa fa-question-circle"></i> Ayuda <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="ayuda" class="collapse">
                            <li>
                                <a href="#">Pre-Configurar</a>
                            </li>
                            <li>
                                <a href="#">Requerimientos</a>
                            </li>
                            <li>
                                <a href="#">Acerca de Encuestas v1.0</a>
                            </li>
                        </ul>
                    </li>                     
                </ul>
            </div>
            <!-- /.navbar-collapse Nav-Menu-->
        </nav>
 <!-- Navigation -->