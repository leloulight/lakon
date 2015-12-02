<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="dhealf">
        <meta name="description" content="Lakon - Lamaran kerja online">
        <meta name="keywords" content="lamaran kerja, lowongan kerja, loker, dhealf">
        <title>Lakon - Lamaran Kerja Online</title>

        <!-- Core CSS - Include with every page -->
        <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/font-awesome/css/font-awesome.css') }}" rel="stylesheet">
        <!-- Page-Level Plugin CSS - Dashboard -->
        <link href="{{ asset('assets/css/plugins/morris/morris-0.4.3.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/plugins/timeline/timeline.css') }}" rel="stylesheet">
        <!-- SB Admin CSS - Include with every page -->
        <link href="{{ asset('assets/css/sb-admin.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/jquery-ui.min.css') }}" rel="stylesheet">
        @section('style')

        @show

    </head>

    <body>

        <div id="wrapper">

            <nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{ URL::to('')}}"><img style="height: 30px;" src="{{asset('assets/images/logo.jpg')}}"/>Lakon</a>
                </div>
                <!-- /.navbar-header -->

                <div class="nav navbar-top-links navbar-right" style="padding: 10px 40px 10px 10px;">
                    <a class="btn btn-default"><i class="fa fa-question"></i> Help</a>
                    <a class="btn btn-default"><i class="fa fa-cny"></i> Quick Preview</a>
                    <a class="btn btn-default"><i class="fa fa-save"></i> Save</a>
                    <a class="btn btn-default"><i class="fa fa-download"></i> Save & Download</a>
                </div>
                <!-- /.navbar-top-links -->

                <div class="navbar-default navbar-static-side" role="navigation">
                    <div class="sidebar-collapse">
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
                            <li {{ (Request::path(1)=="basic"||Request::path(1)==NULL) ? 'class=active' : '' }}>
                                <a  href="{{ URL::to('basic') }}"><i class="fa fa-dashboard fa-fw"></i> Basic Information</a>
                            </li>
                            <li {{ Request::path(1)=="objective" ? 'class=active' : '' }}>
                                <a href="{{ URL::to('objective') }}"><i class="fa fa-dashboard fa-fw"></i> Objective</a>
                            </li>
                            <li {{ Request::path(1)=="experience" ? 'class=active' : '' }}>
                                <a href="{{ URL::to('experience') }}"><i class="fa fa-dashboard fa-fw"></i> Work Experience</a>
                            </li>
                            <li {{ Request::path(1)=="qualification" ? 'class=active' : '' }}>
                                <a href="{{ URL::to('qualification') }}"><i class="fa fa-dashboard fa-fw"></i> Qualification</a>
                            </li>
                            <li {{ Request::path(1)=="education" ? 'class=active' : '' }}>
                                <a href="{{ URL::to('education') }}"><i class="fa fa-dashboard fa-fw"></i> Education</a>
                            </li>
                            <li {{ Request::path(1)=="interest" ? 'class=active' : '' }}>
                                <a href="{{ URL::to('interest') }}"><i class="fa fa-dashboard fa-fw"></i> Interest</a>
                            </li>
                            <li {{ Request::path(1)=="reference" ? 'class=active' : '' }}>
                                <a href="{{ URL::to('reference') }}"><i class="fa fa-dashboard fa-fw"></i> Reference</a>
                            </li>
                        </ul>
                        <!-- /#side-menu -->
                    </div>
                    <!-- /.sidebar-collapse -->
                </div>
                <!-- /.navbar-static-side -->
            </nav>

            <div id="page-wrapper" style="padding: 15px 5px;">
                <!-- /.row -->
                @section('content')

                @show
                <!-- /.row -->
            </div>
            <!-- /#page-wrapper -->

        </div>
        <!-- /#wrapper -->

        <!-- Core Scripts - Include with every page -->
        <script src="{{ asset('assets/js/jquery-1.10.2.js')}}"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
        <script src="{{ asset('assets/js/plugins/metisMenu/jquery.metisMenu.js')}}"></script>

        <!-- Page-Level Plugin Scripts - Dashboard -->
        <script src="{{ asset('assets/js/plugins/morris/raphael-2.1.0.min.js')}}"></script>
        <script src="{{ asset('assets/js/plugins/morris/morris.js')}}"></script>

        <!-- SB Admin Scripts - Include with every page -->
        <script src="{{ asset('assets/js/sb-admin.js')}}"></script>

        <script src="{{ asset('assets/js/jquery-ui.min.js')}}"></script>
        <!-- Page-Level Demo Scripts - Dashboard - Use for reference -->
        <script src="{{ asset('assets/tinymce/tinymce.min.js')}}"></script>
        <script>tinymce.init({selector: 'textarea.tinymce'});</script>
        @section('js')

        @show

    </body>

</html>
