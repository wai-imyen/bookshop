@extends('index')
@section('content')
<script>
	jQuery(document).ready(function($) {
		$("tr").mouseover(function(event) {
			$(this).css({
				textDecoration: 'underline'
			});
		});
			
		$("tr").mouseout(function(event) {
			$(this).css({
				textDecoration: 'none'
			});
		});


	});
</script>
<style>
	
</style>
<div class="logo">
	<img src="/img/logo.png"alt="logo.png">
</div>
<table class="table" id="merchandiseAdminTable" style="margin-top:40px;">
	<a href="{{ url('merchandise/create') }}" role="btn" class="btn btn-default btn-xs pull-right">新增</a>
	<tr>
		<td>編號</td>
		<td>類別</td>
		<td>書名</td>
		<td>作者</td>
		<td>價格</td>
		<td></td>
		<td></td>
	</tr>
	@foreach($query as $var)
	<tr>
		<td >{{$var->id}}</td>
		<td>{{$var->category}}</td>
		<td>{{$var->title}}</td>
		<td>{{$var->author}}</td>
		<td>{{$var->price}}</td>
		<td><a href="{{url('merchandise/'.$var->id.'/edit')}}" role="btn" class="btn btn-default btn-xs">編輯</a></td>
		<td>
			<!-- <form action="{{url('merchandise/'.$var->id)}}" method="post"> -->
			<!-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> -->
			<!-- <input type="hidden" name="_method" value="delete"> -->
			<input type="submit" role='btn' class="btn btn-default btn-xs delete" value="刪除" data-token="{{ csrf_token() }}"  data-id="{{$var->id}}" >
			<!-- <button id="show">ddd</button> -->
			<!-- <a href="javascript:void(0)" class="btn btn-default btn-xs delete" data-token="{{ csrf_token() }}"  data-id="{{$var->id}}" >ddd</a> -->
			<!-- </form> -->
		</td>
	</tr>
	@endforeach
</table>
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<script type="text/javascript">
$(document).on('ready', function() {
	$('.delete').on('click',  function() {
	var id = $(this).attr('data-id');
	var token = $(this).data('token');
	var this_tr = $(this).parent().parent();
	var c = confirm('您確定要刪除嗎？');
	if (c){
		$.ajax({
			url: "{{url('merchandise')}}" +"/"+ id,
			type: 'post',
			dataType: 'html',
			data: {"id": id, "_method": 'delete', "_token": token}
		})
		.done(function() {
			
			this_tr.fadeOut();
			console.log("done");
		})
		.fail(function() {
			alert("有錯誤產生，請看 console log");
			console.log(jqXHR.responseText);
		})
		.always(function() {
			
		});
	}
	
		});
});
	
	
</script>
@stop