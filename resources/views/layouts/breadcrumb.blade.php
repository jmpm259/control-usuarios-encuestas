<!-- #page-wrapper -->
<div id="page-wrapper">
    <div class="container-fluid">
        <!-- Page Heading breadcrumb -->
        <div class="row">
            <div class="col-lg-12">
                <h4 class="pull-left">
                    @yield('title-header')
                </h4>
                <ol class="breadcrumb pull-right">
                    @if(Request::is('*home') or Request::is('/'))
                        <li class="active">
                            <i class=""></i> @yield('bcA')
                        </li>
                    @else
                        <li class=""> 
                            <i class=""></i> @yield('bcA')
                        </li>
                        <li class="">
                            <i class=""></i> @yield('bcB')
                        </li>
                        <li class="active">
                            <i class=""></i> @yield('bcC')
                        </li>
                    @endif
                </ol>
            </div>
        </div>
        <!-- /.Page Heading breadcrumb -->

        