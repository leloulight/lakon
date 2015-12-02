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

    </head>

    <body>

        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="login-panel panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Please Sign In</h3>
                        </div>
                        <div class="panel-body">
                            @if (Session::has('message'))
                            <div class="alert alert-{{Session::get('type')}} alert-block fade in">
                                <button data-dismiss="alert" class="close close-sm" type="button">
                                    <i class="fa fa-times"></i>
                                </button>

                                <p class="text-{{Session::get('type')}}">{{Session::get('message')}}</p>
                            </div>

                            @endif
                            <form role="form" method="POST" action="{{URL::to('/auth/login')}}">
                                {!! csrf_field() !!}
                                <fieldset>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                        </label>
                                    </div>
                                     <div class="form-group">
                                        <input class="form-control" placeholder="Password" name="submit" type="submit" value="Login">
                                    </div>
                                    <!-- Change this to a button or input when using this as a form -->
                                    <!--<a href="index.html" class="btn btn-lg btn-success btn-block">Login</a>-->
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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

    </body>

</html>
