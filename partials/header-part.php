<!DOCTYPE html> 
<html lang="en">
<head>

    <style>
        /* Loading Spinner */
        .spinner{margin:0;width:70px;height:18px;margin:-35px 0 0 -9px;position:absolute;top:50%;left:50%;text-align:center}.spinner > div{width:18px;height:18px;background-color:#333;border-radius:100%;display:inline-block;-webkit-animation:bouncedelay 1.4s infinite ease-in-out;animation:bouncedelay 1.4s infinite ease-in-out;-webkit-animation-fill-mode:both;animation-fill-mode:both}.spinner .bounce1{-webkit-animation-delay:-.32s;animation-delay:-.32s}.spinner .bounce2{-webkit-animation-delay:-.16s;animation-delay:-.16s}@-webkit-keyframes bouncedelay{0%,80%,100%{-webkit-transform:scale(0.0)}40%{-webkit-transform:scale(1.0)}}@keyframes bouncedelay{0%,80%,100%{transform:scale(0.0);-webkit-transform:scale(0.0)}40%{transform:scale(1.0);-webkit-transform:scale(1.0)}}
    </style>


    <meta charset="UTF-8">
<!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
<title> Monarch UI - Bootstrap Frontend &amp; Admin Template </title>
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

<link rel="stylesheet" type="text/css" href="./assets/helpers/animate.css">
<link rel="stylesheet" type="text/css" href="./assets/helpers/backgrounds.css">
<link rel="stylesheet" type="text/css" href="./assets/helpers/boilerplate.css">
<link rel="stylesheet" type="text/css" href="./assets/helpers/border-radius.css">
<link rel="stylesheet" type="text/css" href="./assets/helpers/grid.css">
<link rel="stylesheet" type="text/css" href="./assets/helpers/page-transitions.css">
<link rel="stylesheet" type="text/css" href="./assets/helpers/spacing.css">
<link rel="stylesheet" type="text/css" href="./assets/helpers/typography.css">
<link rel="stylesheet" type="text/css" href="./assets/helpers/utils.css">
<link rel="stylesheet" type="text/css" href="./assets/helpers/colors.css">

<!-- ELEMENTS -->

<link rel="stylesheet" type="text/css" href="./assets/elements/badges.css">
<link rel="stylesheet" type="text/css" href="./assets/elements/buttons.css">
<link rel="stylesheet" type="text/css" href="./assets/elements/content-box.css">
<link rel="stylesheet" type="text/css" href="./assets/elements/dashboard-box.css">
<link rel="stylesheet" type="text/css" href="./assets/elements/forms.css">
<link rel="stylesheet" type="text/css" href="./assets/elements/images.css">
<link rel="stylesheet" type="text/css" href="./assets/elements/info-box.css">
<link rel="stylesheet" type="text/css" href="./assets/elements/invoice.css">
<link rel="stylesheet" type="text/css" href="./assets/elements/loading-indicators.css">
<link rel="stylesheet" type="text/css" href="./assets/elements/menus.css">
<link rel="stylesheet" type="text/css" href="./assets/elements/panel-box.css">
<link rel="stylesheet" type="text/css" href="./assets/elements/response-messages.css">
<link rel="stylesheet" type="text/css" href="./assets/elements/responsive-tables.css">
<link rel="stylesheet" type="text/css" href="./assets/elements/ribbon.css">
<link rel="stylesheet" type="text/css" href="./assets/elements/social-box.css">
<link rel="stylesheet" type="text/css" href="./assets/elements/tables.css">
<link rel="stylesheet" type="text/css" href="./assets/elements/tile-box.css">
<link rel="stylesheet" type="text/css" href="./assets/elements/timeline.css">



<!-- ICONS -->

<link rel="stylesheet" type="text/css" href="./assets/icons/fontawesome/fontawesome.css">
<link rel="stylesheet" type="text/css" href="./assets/icons/linecons/linecons.css">
<link rel="stylesheet" type="text/css" href="./assets/icons/spinnericon/spinnericon.css">


<!-- WIDGETS -->


<!-- SNIPPETS -->

<link rel="stylesheet" type="text/css" href="./assets/snippets/chat.css">
<link rel="stylesheet" type="text/css" href="./assets/snippets/files-box.css">
<link rel="stylesheet" type="text/css" href="./assets/snippets/login-box.css">
<link rel="stylesheet" type="text/css" href="./assets/snippets/notification-box.css">
<link rel="stylesheet" type="text/css" href="./assets/snippets/progress-box.css">
<link rel="stylesheet" type="text/css" href="./assets/snippets/todo.css">
<link rel="stylesheet" type="text/css" href="./assets/snippets/user-profile.css">
<link rel="stylesheet" type="text/css" href="./assets/snippets/mobile-navigation.css">

<!-- APPLICATIONS -->

<link rel="stylesheet" type="text/css" href="./assets/applications/mailbox.css">

<!-- Admin theme -->

<link rel="stylesheet" type="text/css" href="./assets/themes/admin/layout.css">
<link rel="stylesheet" type="text/css" href="./assets/themes/admin/color-schemes/default.css">

<!-- Components theme -->

<link rel="stylesheet" type="text/css" href="./assets/themes/components/default.css">
<link rel="stylesheet" type="text/css" href="./assets/themes/components/border-radius.css">

<!-- Admin responsive -->

<link rel="stylesheet" type="text/css" href="./assets/helpers/responsive-elements.css">
<link rel="stylesheet" type="text/css" href="./assets/helpers/admin-responsive.css">
<link rel="stylesheet" type="text/css" href="./assets/custom-style.css">
    <!-- JS Core -->

    <script type="text/javascript" src="./assets/js-core/jquery-core.js"></script>
    <script type="text/javascript" src="./assets/js-core/jquery-ui-core.js"></script>
    <script type="text/javascript" src="./assets/js-core/jquery-ui-widget.js"></script>
    <script type="text/javascript" src="./assets/js-core/jquery-ui-mouse.js"></script>
    <script type="text/javascript" src="./assets/js-core/jquery-ui-position.js"></script>
    <!--<script type="text/javascript" src="./assets/js-core/transition.js"></script>-->
    <script type="text/javascript" src="./assets/js-core/modernizr.js"></script>
    <script type="text/javascript" src="./assets/js-core/jquery-cookie.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/notify/0.4.0/notify.js"></script>




    <script type="text/javascript">
        $(window).load(function(){
            setTimeout(function() {
                $('#loading').fadeOut( 400, "linear" );
            }, 300);
        });
    </script>



</head>


    <body>
    <div id="sb-site">
  

    <div id="loading">
        <div class="spinner">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>