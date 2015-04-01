<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
        <title>{{ $data['title'] }}</title> 
        {{ HTML::style('css/main.css'); }}
        <!--[if IE]> {{ HTML::style('css/ie.css'); }}<![endif]-->

        <!-- <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script> -->
        {{ HTML::script('js/jquery-1.8.1.min.js'); }}
        {{ HTML::script('js/jquery_ui_custom.js'); }}

        {{ HTML::script('js/plugins/charts/excanvas.min.js'); }}
        {{ HTML::script('js/plugins/charts/jquery.flot.js'); }}
        {{ HTML::script('js/plugins/charts/jquery.flot.resize.js'); }}
        {{ HTML::script('js/plugins/charts/jquery.sparkline.min.js'); }}

        {{ HTML::script('js/plugins/forms/jquery.tagsinput.min.js'); }}
        {{ HTML::script('js/plugins/forms/jquery.inputlimiter.min.js'); }}
        {{ HTML::script('js/plugins/forms/jquery.maskedinput.min.js'); }}
        {{ HTML::script('js/plugins/forms/jquery.autosize.js'); }}
        {{ HTML::script('js/plugins/forms/jquery.ibutton.js'); }}
        {{ HTML::script('js/plugins/forms/jquery.dualListBox.js'); }}
        {{ HTML::script('js/plugins/forms/jquery.validate.js'); }}
        {{ HTML::script('js/plugins/forms/jquery.uniform.min.js'); }}
        {{ HTML::script('js/plugins/forms/jquery.select2.min.js'); }}
        {{ HTML::script('js/plugins/forms/jquery.cleditor.js'); }}
        {{ HTML::script('js/plugins/uploader/plupload.js'); }}
        {{ HTML::script('js/plugins/uploader/plupload.html4.js'); }}
        {{ HTML::script('js/plugins/uploader/plupload.html5.js'); }}
        {{ HTML::script('js/plugins/uploader/jquery.plupload.queue.js'); }}

        {{ HTML::script('js/plugins/wizard/jquery.form.wizard.js'); }}
        {{ HTML::script('js/plugins/wizard/jquery.form.js'); }}

        {{ HTML::script('js/plugins/ui/jquery.collapsible.min.js'); }}
        {{ HTML::script('js/plugins/ui/jquery.timepicker.min.js'); }}
        {{ HTML::script('js/plugins/ui/jquery.jgrowl.min.js'); }}
        {{ HTML::script('js/plugins/ui/jquery.pie.chart.js'); }}
        {{ HTML::script('js/plugins/ui/jquery.fullcalendar.min.js'); }}
        {{ HTML::script('js/plugins/ui/jquery.elfinder.js'); }}
        {{ HTML::script('js/plugins/ui/jquery.fancybox.js'); }}

        {{ HTML::script('js/plugins/tables/jquery.dataTables.min.js'); }}

        {{ HTML::script('js/plugins/bootstrap/bootstrap.min.js'); }}
        {{ HTML::script('js/plugins/bootstrap/bootstrap-bootbox.min.js'); }}
        {{ HTML::script('js/plugins/bootstrap/bootstrap-progressbar.js'); }}
        {{ HTML::script('js/plugins/bootstrap/bootstrap-colorpicker.js'); }}

        {{ HTML::script('js/functions/custom.js'); }}
        {{ HTML::script('js/charts/chart.js'); }}

    </head> 
    <body>  
        <!-- Main wrapper -->
        <div class="login-wrapper"> 
            <div class="login">  
                <!-- Login block -->
                <div class="well">
                    <div class="navbar">
                        <div class="navbar-inner">
                            <h6><i class="font-user"></i>{{ $data['page'] }}</h6>
                            <div class="nav pull-right">
                                <a href="#" class="dropdown-toggle just-icon" data-toggle="dropdown"><i class="font-cog"></i></a>
                                <ul class="dropdown-menu pull-right">
                                    <li><a href="/login"><i class="font-cog"></i>Login</a></li>
                                    <li><a href="/register"><i class="font-plus"></i>Register</a></li>
                                    <li><a href="#"><i class="font-refresh"></i>Recover password</a></li>
                                    
                                </ul>
                            </div>
                        </div>
                    </div>
                    @yield('login')    
                </div>
                <!-- /login block --> 
            </div> 
        </div>
        <!-- /main wrapper --> 
    </body>
    
</html>
