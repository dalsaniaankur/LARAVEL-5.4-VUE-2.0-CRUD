<!doctype html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" >


    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Sistema Administrativo</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- csrf token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />

    <!-- Bootstrap core CSS     -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications  -->
    <link href="/assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Fonts and icons     -->
    <link href="/assets/css/font-awesome.min.css" rel="stylesheet">

    <!--  Paper Dashboard core CSS    -->
    <link href="/assets/css/paper-dashboard.css" rel="stylesheet"/>



    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="/assets/css/demo.css" rel="stylesheet" />
    <link rel="stylesheet" href="/assets/css/hint.css">



    <link href="/assets/css/themify-icons.css" rel="stylesheet">


    <link href="https://cdn.jsdelivr.net/sweetalert2/6.3.2/sweetalert2.css" rel="stylesheet">




</head>
<body>

<div class="wrapper">


    <div class="main-panel">

        <div class="content">



            <?php echo $__env->yieldContent('content'); ?>



        </div>


        <footer class="footer">



            <div class="container-fluid">

                <div class="copyright pull-right">
                    <p>Developed by  <a href="http://www.dalsaniaankur.blogpost" target="_blank" >Ankur DalsaniYa</a></p>
                </div>
            </div>
        </footer>

    </div>
</div>


<!-- -- modal windowl  -->
<?php echo $__env->yieldContent('modal_window'); ?>

</body>
<!--
<script src="http://unpkg.com/vue@2.1.10" type="text/javascript"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="https://cdn.jsdelivr.net/sweetalert2/6.3.2/sweetalert2.js"></script>



<script src="http://unpkg.com/vue@2.1.10" type="text/javascript"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="http://unpkg.com/vue-select@2.0.0"></script>



-->

<script src="http://unpkg.com/vue@2.1.10" type="text/javascript"></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="https://cdn.jsdelivr.net/sweetalert2/6.3.2/sweetalert2.js"></script>





<?php echo $__env->make('flash', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->yieldContent('scripts.footer'); ?>

</html>


