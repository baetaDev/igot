@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
<div class="limiter">
			<div class="container-login100">
				<div class="wrap-login100">
				
					<div class="login100-more" style="background-image: url('img/team-03.png');"></div>
					
					<form class="login100-form validate-form" action="config/newlogin.php" method="POST">
						
						<span class="login100-form-title p-b-43">
							<b>Bem-vindo(a) ao RISE!</b>
						</span>
						
						<div class="wrap-input100 validate-input" data-validate = "Um e-mail válido é requerido!">
							<input class="input100" type="text" name="username">
							<span class="focus-input100"></span>
							<span class="label-input100">E-MAIL</span>
						</div>
											
						<div class="wrap-input100 validate-input" data-validate="Uma entrada de senha é requerida!">
							<input class="input100" type="password" name="password">
							<span class="focus-input100"></span>
							<span class="label-input100">SENHA</span>
						</div>

						<div class="flex-sb-m w-full p-t-3 p-b-32">
							<div><a href="/recuperarSenha.php" class="txt3">Recuperar senha</a></div>
							<div><a href="/souNovoAqui.php" class="txt3">Sou novo(a) aqui</a></div>
						</div>
											
						<div class="container-login100-form-btn"><button class="login100-form-btn"><h6>ENTRAR</h6></button></div>
							
					</form>
				</div>
			</div>
		</div>
@stop

@section('footer')
    <p>Welcome to this beautiful admin panel.</p>
@stop

@section('js')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

@stop

