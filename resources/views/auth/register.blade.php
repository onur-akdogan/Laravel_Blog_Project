
<!DOCTYPE html>

<html class="loading"
      lang="en"
      data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="csrf-token" content="bcyT66z4nL4GegRtLaPYtL0ZChIIj3aEIGSPdBvj">

    <title>User Login | Materialize - Material Design Admin Template</title>
    <link rel="apple-touch-icon" href="https://www.pixinvent.com/materialize-material-design-admin-template/laravel/demo-1/images/favicon/apple-touch-icon-152x152.png">
    <link rel="shortcut icon" type="image/x-icon" href="https://www.pixinvent.com/materialize-material-design-admin-template/laravel/demo-1/images/favicon/favicon-32x32.png">

    <!-- Include core + vendor Styles -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://www.pixinvent.com/materialize-material-design-admin-template/laravel/demo-1/vendors/vendors.min.css">
    <!-- BEGIN: VENDOR CSS-->
    <!-- END: VENDOR CSS-->
    <!-- BEGIN: Page Level CSS-->
    <link rel="stylesheet" type="text/css"
          href="https://www.pixinvent.com/materialize-material-design-admin-template/laravel/demo-1/css/themes/vertical-modern-menu-template/materialize.css">
    <link rel="stylesheet" type="text/css"
          href="https://www.pixinvent.com/materialize-material-design-admin-template/laravel/demo-1/css/themes/vertical-modern-menu-template/style.css">


    <link rel="stylesheet" type="text/css" href="https://www.pixinvent.com/materialize-material-design-admin-template/laravel/demo-1/css/pages/login.css">

    <!-- END: Page Level CSS-->
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="https://www.pixinvent.com/materialize-material-design-admin-template/laravel/demo-1/css/laravel-custom.css">
    <link rel="stylesheet" type="text/css" href="https://www.pixinvent.com/materialize-material-design-admin-template/laravel/demo-1/css/custom/custom.css">
    <!-- END: Custom CSS-->
</head>
<!-- END: Head-->

<body
    class="vertical-layout vertical-menu-collapsible page-header-dark vertical-modern-menu 2-columns  login-bg "
    data-open="click" data-menu="vertical-modern-menu" data-col="1-column">
<div class="row">
    <div class="col s12">
        <div class="container">
            <!--  main content -->
            <div id="login-page" class="row">
                <div class="col s12 m6 l4 z-depth-4 card-panel border-radius-6 login-card bg-opacity-8">
                    <form class="login-form" method="POST" action="{{route('login')}}">
                        @csrf
                        <div class="row">
                            <div class="input-field col s12">
                                <h5 class="ml-4">Sign in</h5>
                            </div>
                        </div>
                        <div class="row margin">
                            <div class="input-field col s12">
                                <i class="material-icons prefix pt-2">person_outline</i>
                                <input id="name" type="text" name="name">
                                <label for="name" class="center-align">email</label>
                            </div>
                        </div>
                        <div class="row margin">
                            <div class="input-field col s12">
                                <i class="material-icons prefix pt-2">person_outline</i>
                                <input id="email" type="text" name="email">
                                <label for="email" class="center-align">email</label>
                            </div>
                        </div>
                        <div class="row margin">
                            <div class="input-field col s12">
                                <i class="material-icons prefix pt-2">lock_outline</i>
                                <input id="password" type="password" name="password">
                                <label for="password">Password</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col s12 m12 l12 ml-2 mt-1">
                                <p>
                                    <label>
                                        <input type="checkbox" />
                                        <span>Remember Me</span>
                                    </label>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s12">
                                <button name="register"
                                   class="btn waves-effect waves-light border-round gradient-45deg-purple-deep-orange col s12" name="login" type="submit">Login</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="input-field col s6 m6 l6">
                                <p class="margin medium-small"><a href="https://www.pixinvent.com/materialize-material-design-admin-template/laravel/demo-1/user-register">Register Now!</a></p>
                            </div>
                            <div class="input-field col s6 m6 l6">
                                <p class="margin right-align medium-small"><a href="https://www.pixinvent.com/materialize-material-design-admin-template/laravel/demo-1/user-forgot-password">Forgot password ?</a>
                                </p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="content-overlay"></div>
    </div>
</div>

<!-- BEGIN VENDOR JS-->
<script src="https://www.pixinvent.com/materialize-material-design-admin-template/laravel/demo-1/js/vendors.min.js"></script>
<!-- BEGIN VENDOR JS-->
<!-- BEGIN PAGE VENDOR JS-->
<!-- END PAGE VENDOR JS-->
<!-- BEGIN THEME  JS-->
<script src="https://www.pixinvent.com/materialize-material-design-admin-template/laravel/demo-1/js/plugins.js"></script>
<script src="https://www.pixinvent.com/materialize-material-design-admin-template/laravel/demo-1/js/search.js"></script>
<script src="https://www.pixinvent.com/materialize-material-design-admin-template/laravel/demo-1/js/custom/custom-script.js"></script>
<!-- END THEME  JS-->
<!-- BEGIN PAGE LEVEL JS-->

</body>

</html>
