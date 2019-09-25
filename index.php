<?php

//    $username= "ashish.singh@magnon-egplus.com";
//    $password="12345678901234";
//    $token="5726ffec6071cb6ec47ac8f9";


// // set post fields
// $post = [
//     'email' => $username,
//     'password' => $password,
//     'token'   => $token,
// ];

// $payload = json_encode($post);

// // Prepare new cURL resource
// $ch = curl_init('http://api-staging3.brrmedia.co.uk/account/login');
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// curl_setopt($ch, CURLINFO_HEADER_OUT, true);
// curl_setopt($ch, CURLOPT_POST, true);
// curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);

// // Set HTTP Header for POST request 
// curl_setopt($ch, CURLOPT_HTTPHEADER, array(
//     'Content-Type: application/json',
//     'Content-Length: ' . strlen($payload))
// );

// // Submit the POST request
// $result = curl_exec($ch);
// var_dump($result);
// // Close cURL session handle
// curl_close($ch);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        /* Loading Spinner */
        .spinner{margin:0;width:70px;height:18px;margin:-35px 0 0 -9px;position:absolute;top:50%;left:50%;text-align:center}.spinner > div{width:18px;height:18px;background-color:#333;border-radius:100%;display:inline-block;-webkit-animation:bouncedelay 1.4s infinite ease-in-out;animation:bouncedelay 1.4s infinite ease-in-out;-webkit-animation-fill-mode:both;animation-fill-mode:both}.spinner .bounce1{-webkit-animation-delay:-.32s;animation-delay:-.32s}.spinner .bounce2{-webkit-animation-delay:-.16s;animation-delay:-.16s}@-webkit-keyframes bouncedelay{0%,80%,100%{-webkit-transform:scale(0.0)}40%{-webkit-transform:scale(1.0)}}@keyframes bouncedelay{0%,80%,100%{transform:scale(0.0);-webkit-transform:scale(0.0)}40%{transform:scale(1.0);-webkit-transform:scale(1.0)}}
        body{
        	background:url('assets/image-resources/blurred-bg/blurred-bg-3.jpg')!important;
			background-size: cover;
        }
    </style>
    <meta charset="UTF-8">

<title>Login</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

<!-- Favicons -->

<link rel="apple-touch-icon-precomposed" sizes="144x144" href="./assets/images/icons/apple-touch-icon-144-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="./assets/images/icons/apple-touch-icon-114-precomposed.png">
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="./assets/images/icons/apple-touch-icon-72-precomposed.png">
<link rel="apple-touch-icon-precomposed" href="./assets/images/icons/apple-touch-icon-57-precomposed.png">
<link rel="shortcut icon" href="./assets/images/icons/favicon.png">



<link rel="stylesheet" type="text/css" href="./assets/bootstrap/css/bootstrap.css">
<!-- HELPERS -->
<link rel="stylesheet" type="text/css" href="./assets/helpers/utils.css">
<!-- ICONS -->
<link rel="stylesheet" type="text/css" href="./assets/icons/fontawesome/fontawesome.css">
<link rel="stylesheet" type="text/css" href="./assets/icons/linecons/linecons.css">
<link rel="stylesheet" type="text/css" href="./assets/icons/spinnericon/spinnericon.css">



<!-- SNIPPETS -->


<link rel="stylesheet" type="text/css" href="./assets/snippets/files-box.css"> 
<link rel="stylesheet" type="text/css" href="./assets/snippets/login-box.css">
<link rel="stylesheet" type="text/css" href="./assets/snippets/notification-box.css">


<!-- APPLICATIONS -->

<link rel="stylesheet" type="text/css" href="./assets/applications/mailbox.css">

<!-- Admin theme -->

<link rel="stylesheet" type="text/css" href="./assets/themes/admin/layout.css">
<link rel="stylesheet" type="text/css" href="./assets/themes/admin/color-schemes/default.css">

<!-- Components theme -->
<link rel="stylesheet" type="text/css" href="./assets/elements/content-box.css">
<link rel="stylesheet" type="text/css" href="./assets/elements/forms.css">
<link rel="stylesheet" type="text/css" href="./assets/themes/components/default.css">
<link rel="stylesheet" type="text/css" href="./assets/themes/components/border-radius.css">

<!-- Admin responsive -->
<link rel="stylesheet" type="text/css" href="./assets/custom-style.css">
<link rel="stylesheet" type="text/css" href="./assets/helpers/responsive-elements.css">
<link rel="stylesheet" type="text/css" href="./assets/helpers/admin-responsive.css">

    <!-- JS Core -->

    <script type="text/javascript" src="./assets/js-core/jquery-core.js"></script>
    <script type="text/javascript" src="./assets/js-core/jquery-ui-core.js"></script>
    <script type="text/javascript" src="./assets/js-core/jquery-ui-widget.js"></script>
    <script type="text/javascript" src="./assets/js-core/jquery-ui-mouse.js"></script>
    <script type="text/javascript" src="./assets/js-core/jquery-ui-position.js"></script>

    <script type="text/javascript" src="./assets/js-core/modernizr.js"></script>
    <script type="text/javascript" src="./assets/js-core/jquery-cookie.js"></script>





    <script type="text/javascript">
        $(window).load(function(){
            setTimeout(function() {
                $('#loading').fadeOut( 400, "linear" );
            }, 300);
        });
    </script>



</head>
<body >
<div id="loading">
    <div class="spinner">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
    </div>
</div>

<style type="text/css">

    html,body {
        height: 100%;
        background: #fff;
    }

</style>

<div class="center-vertical">
    <div class="center-content row">

        <form  id="login-validation" class="col-md-4 col-sm-5 col-xs-11 col-lg-3 center-margin" method="POST">
      
            <div id="login-form" class="content-box bg-default">
                <div class="content-box-wrapper pad20A">
                    <img class="mrg25B center-margin radius-all-100 display-block custom-margin" src="./assets/image-resources/logo.png" alt="">
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon addon-inside bg-gray">
                                <i class="glyph-icon icon-envelope-o"></i>
                            </span>
                            <input type="email" class="form-control" id="username" name="username" placeholder="Username">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon addon-inside bg-gray">
                                <i class="glyph-icon icon-unlock-alt"></i>
                            </span>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="button" id="authenticate" class="btn btn-block btn-primary">Login</button>
                    </div>
                   
                </div>
            </div>

            <div id="login-forgot" class="content-box bg-default hide">
                <div class="content-box-wrapper pad20A">

                    <div class="form-group">
                        <label for="exampleInputEmail2">Email address:</label>
                        <div class="input-group">
                            <span class="input-group-addon addon-inside bg-gray">
                                <i class="glyph-icon icon-envelope-o"></i>
                            </span>
                            <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Enter email">
                        </div>
                    </div>
                </div>
                <div class="button-pane text-center">
                    <button type="submit" class="btn btn-md btn-primary">Recover Password</button>
                    <a href="#" class="btn btn-md btn-link switch-button" switch-target="#login-form" switch-parent="#login-forgot" title="Cancel">Cancel</a>
                </div>
            </div>

        </form>

    </div>
</div>



    <!-- WIDGETS -->

<script type="text/javascript" src="./assets/bootstrap/js/bootstrap.js"></script>
<script type="text/javascript" src="./app/Helpers.js"></script>
<script type="text/javascript" src="./app/authentication.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/notify/0.4.0/notify.js"></script>

</body>
</html>