<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Concursos Docentes UNAJ</title>

    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">

    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

    <!-- Theme style -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.3.3/css/AdminLTE.min.css">

    <!-- iCheck -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.3.3/css/skins/_all-skins.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        html, body {
            background-image: url('{{ asset('imagenes/fondo_pizarra.jpg')}}');
            background-position: center center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-color: #063B50;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
            position: fixed;
            top: 0;
            left: 0;
            /* Preserve aspet ratio */
            min-width: 100%;
            min-height: 100%;
          }
          #box-login{
            border-radius: 10px;
            height: 100%; margin: 2px 0px 0px 0px;  width: 100%; flex-direction: column; display: block;   place-content: center; align-items: center;
          }
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<!-- AdminLTE App -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.3.3/js/app.min.js"></script>

</head>
<body class="">
<div class="login-box">
    <div class="login-logo" style = " margin: -50px 0px 0px 0px;">
        <a href="{{ url('/home') }}" style = "color:#fffdfd"><b>Concursos Docentes UNAJ</b></a>
    </div>

    <!-- /.login-logo -->
    <div class="login-box-body" id="box-login">
        <h4><p class="login-box-msg">Ingrese su email</p></h4>

        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <form method="post" action="{{ url('/password/email') }}">
            {!! csrf_field() !!}

            <div class="form-group has-feedback {{ $errors->has('email') ? ' has-error' : '' }}" OnHover="play(this,'hoveraudio')">
                <input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="pepe@ejemplo.com" autofocus>
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                @if ($errors->has('email'))
                    <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
            </div>

            <div class="row" style=" height: 100%; margin: 0px; min-height: 100%; min-width: 100%; width: 100%; flex-direction: column; box-sizing: border-box; display: flex; max-width: 100%;place-content: center; align-items: center;" >
                <div class=".col-12 .col-sm-6 .col-lg-12">
                    <button type="submit" class="btn btn-primary">
                    	Recuperar Contrase&ntilde;a
                    </button>
                </div>
            </div>
        </form>
    </div>
    <!-- /.login-box-body -->
</div>
<!-- /.login-box -->


</body>
</html>