<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
		<title>Yen's BookShop</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		{{ HTML::style('css/style.css') }}
		{{ HTML::style('css/default.css') }}
	</head>
	<style>
	</style>
	<body>
		<script src="/js/jquery.min.js"></script>
		<script>
		$(document).ready(function() {
			$("#cart").mouseover(function(event) {
				$(this).css({
					transform: 'scale(1.1)',
					opacity: '0.9'
				});
			});
			$("#cart").mouseout(function(event) {
				$(this).css({
					transform: 'scale(1)',
					opacity: '1'
				});
			});

			/*回到頁面最上層*/
			$("#goToTop").hide();
			$(function(){

				$(window).scroll(function(event) {
					if($(this).scrollTop()>1){
						$("#goToTop").fadeIn();
					}
					else{
						$("#goToTop").fadeOut();
					}
				});
			})
			$("#goToTop").click(function(event) {
				$("html,body").animate({
					scrollTop: 0},
					800, function() {
					/* stuff to do after animation is complete */
				});
			});

			});


			
		</script>
		<div id="fb-root"></div>
		<div class="row ">
			<div class="col-sm-12">
				<div class="row">
					<ul class="auth">
						<li class="btn pull-right"  ><img src="/img/cart.png" alt="" id="cart"></li>
						@if(Auth::guest())
						<li class="btn pull-right" id="login"><a href="{{ url('/login') }}">Login</a></li>
						<li class="btn pull-right" id="register"><a href="{{ url('/register' )}}">Sign up</a></li>
						@else
						
						<li class="btn pull-right"><a href="{{ url('/logout') }}"
							onclick="event.preventDefault();
							document.getElementById('logout-form').submit();">
						Logout</a>
					</li>
					<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
						{{ csrf_field() }}
					</form>
					<li class="btn pull-right" ><a href="">Hi！{{ Auth::user()->name }}</a></li>
					@endif
				</ul>
			</div>
			
			<div id="wrapper" >
				@yield('logo')
				<nav role="navigation" id="access">
					<a class="skip-link icon-reorder" title="Accéder au menu" href="#menu">Menu</a>
					<ul id="menu">
						<li class="{{Request::is('/') ? 'active':''}}"><a class="icon-home" href="{{ url('') }}">Home</a></li><!-- whitespace
						--><li class="{{Request::is('shop*') ? 'active':''}}"><a class="icon-group" href="{{ url('/shop') }}">Shop</a></li><!-- whitespace
						--><li class="{{Request::is('board') ? 'active':''}}"><a class="icon-leaf" href="{{ url('/board') }}">Board</a></li><!-- whitespace
						--><li class="{{Request::is('about') ? 'active':''}}"><a class="icon-picture" href="{{ url('/about') }}">About</a></li><!-- whitespace
						-->
						<?php
							if(Request::is('merchandiseAdmin') || Request::is('merchandise/*'))
						?>
						<li class="{{Request::is('merchandise*') ? 'active':''}}"><a class="icon-envelope-alt" href="{{ url('/merchandiseAdmin') }}">Admin</a></li>
					</ul>
				</nav>
			</div>

			<br><br><br>
			<div id="goToTop"><a href="#">TOP</a></div>

			@yield('home_img')
			<div class="row">
				<div class="col-sm-1"></div>
				<div class="col-sm-10">
					@yield('content')
				</div>
				<div class="col-sm-1"></div>
			</div>
		</div>
	</div>
	<footer>
		<center>
		<div style="margin-top:40pt;">
			<span>Copyright &copy; <?php echo date("Y")?> All rights reserved. |  Photos by <a href="http://www.flaticon.com/">Flaticon</a> and <a href="https://unsplash.com/">Unsplash. </a>|</span>
			<span>Design by NTUST_Yenyen </span>
		</div>
		</center>
	</footer>
</body>
</html>