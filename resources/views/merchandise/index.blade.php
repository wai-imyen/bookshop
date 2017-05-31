@extends('index')

@section('content')
<script>
	jQuery(document).ready(function($) {
		$(".shop .thumbnail").mouseover(function(event) {
			$("img",this).css({
				transform:'scale(1.1,1.1)'
			});
		});
		$(".shop .thumbnail").mouseout(function(event) {
			$("img",this).css({
				transform:'scale(1,1)'
			});
		});
	});
</script>
<style>
	@keyframes blink{
		0%{opacity: 0}
		50%{opacity: 0.5}
		100%{opacity: 1}
	}
</style>
<div class="logo">
	<img src="/img/logo.png"alt="logo.png">
</div>
<br><br>
<div class="row shop">
	
	@foreach ($query as $var)
	<div class="col-md-3">
		<div class="thumbnail">
			<a href="{{ url('/shop/'.$var->id)}}">
				<img src="{{ $var->image}}" alt="{{ $var->image}}" class="img-thumbnail">
				<?php
					$len = 16;
					if(mb_strlen($var->title) > $len){	// 字數>len
					$title = mb_substr($var->title,0,13,"UTF-8")." ...";
				}
				else{
					$title = $var->title;
				}
						
				?>
				<h5 style="text-align:center;">{{ $title }}</h5>
				<h5 style="text-align:center;">定價：{{ $var->price }}元</h5>
				<div class="caption">
					<p>Read more...</p>
				</div>
			</a>
		</div>
	</div>
	@endforeach
</div>
<!-- <div class="col-sm-1"></div> -->

@stop