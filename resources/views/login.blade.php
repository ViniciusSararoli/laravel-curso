@extends('layouts.header')
@section('title', 'Login')
@section('content')
	<div class="logo">
		{{--<a href="D:\EasyJobs\Home\index.html">--}}
		<img src="\img\logo.png"></a>
	<div>
		<div class="recuperar" id="recuperar">
			<h1>ESQUECI MINHA SENHA</h1>
			<button class="cancelar" name="cancelar">X</button>
        <h3>Para redefinir a sua senha, informe seu  e-mail abaixo e clique em Continuar.</h3>
			<input type="email" name="" id="">
			<button class="continuar">continuar</button>
		</div>
	<div class="login-box">
		<h1>Login</h1>
		<h2 class="Usuario">Usuario/Login</h2>
		<input class="login" type="text" placeholder="" name="Login" value="" maxlength="50">
		<h2 class="Password">Senha</h2>
		<input class="senha" type="password" placeholder="" name="Senha" value="" maxlength="10">
	<button class="btn" type="submit" onclick="window.location = 'D:/EasyJobs/Home/index.html';">Entrar</button>
		<button class="esqueci" id="esqueci" name="esqueci">Esqueci minha senha</button>
	</div>
		<input class="cdt" type="submit" nome="cadastro" value="CADASTRE-SE"
		onclick="window.location='D:/EasyJobs/Cadastro/index.html';">
        
@endsection

