<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.5 -->
  <link rel="stylesheet" href="{{url('resources/assets/admin/bootstrap/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{url('resources/assets/admin/dist/css/AdminLTE.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{url('resources/assets/admin/plugins/iCheck/square/blue.css')}}">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition login-page" style="background: #ffffff;">
@if(Session::has('message'))
			 <div class="panel-body bg-success color-green">
			 Send Mail Success
			 </div>
			 @endif
<div class="login-box">

  <div class="login-logo">
    <a href="../../index2.html"><b>Send Mail</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Send Mail</p>

    <form action="{{ url('/sendmail') }}" method="post" role="form">
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
      <div class="form-group has-feedback">
        <input class="form-control" name="email" placeholder="Email" type="email" value="yokprogrammer@gmail.com" readonly>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input class="form-control" name="email_bcc" placeholder="Email" type="email" value="yotewach@hotmail.com" readonly>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="row">
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Send Mail</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
	<a href="{{ url('/logout') }}" class="text-center">Logout</a>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.1.4 -->
<script src="{{url('resources/assets/admin/plugins/jQuery/jQuery-2.1.4.min.js')}}"></script>
<!-- Bootstrap 3.3.5 -->
<script src="{{url('resources/assets/admin/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- iCheck -->
<script src="{{url('resources/assets/admin/plugins/iCheck/icheck.min.js')}}"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>
