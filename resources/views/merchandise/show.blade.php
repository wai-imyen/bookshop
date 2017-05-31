@extends('index')
@section('content')
<script>
	jQuery(document).ready(function($) {
		$(".shopShow img").mouseover(function(event) {
			$(this).css({
				transform: 'scale(1.2)'
			});
		});
		$(".shopShow img").mouseout(function(event) {
			$(this).css({
				transform: 'scale(1)'
			});
		});
	});
</script>
<div class="logo">
	<img src="/img/logo.png"alt="logo.png">
</div>
<input type="button" value="購買" class="btn btn-default pull-right">
<br>
<div class="panel panel-default shopShow" id="shop_show">
	<div class="panel-default">
		<div class="row " >
			<div class="col-sm-6">
				<img src="{{$query->image}}" alt="{{$query->image}}" class="col-sm-6 col-sm-offset-5">
			</div>
			<div class="col-sm-4">
				<ul style="list-style-type:none">
					<li><strong>{{$query->title}}</strong></li>
					<li>作者：{{$query->author}}</li>
					<li>出版社：{{$query->publisher}}</li>
					<li>出版日期：{{$query->date_of_publication}}</li>
					<li>定價：{{$query->price}}元</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="panel-body">
		<div class="row" style="margin-top:30px">
			<div class="col-sm-offset-1 col-sm-10 col-sm-offset-1">
				<li>內容簡介</li>
				<p>{!! nl2br($query->content) !!}</p>
				<br><br>
				<li>商品狀況</li>
				<p>{{$query->situation}}</p>
			</div>
			<div class="col-sm-offset-1 col-sm-10 col-sm-offset-1 panel" >
				<!-- <div class="fb-comments" data-href="http://www.yenbookshop.com/shop" data-width="900" data-numposts="5"></div> -->
				
			</div>
		</div>
	</div>
</div>
<script>
	$(document).ready(function() {
		// $("img").hoverpulse();
	});
</script>
@stop