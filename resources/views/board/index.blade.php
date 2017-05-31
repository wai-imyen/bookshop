@extends('index')
@section('content')
<script>
	
	// jQuery(document).ready(function() {
	// 	var page_height = $(document).height();
	// 	$("#wantMessage").click(function(event) {
	// 		$("html body").animate({
	// 			scrollTop: page_height - 700},
	// 			800, function() {
	// 			/* stuff to do after animation is complete */
	// 		});
	// 	});

		

		
		

	// });
	
</script>
<div class="logo">
	<img src="/img/logo.png"alt="logo.png">
</div>
<!-- <div class="container"> -->
<div class="msg ">
	<div class="panel panel-default " >
		<div class="panel-body">
			<h2>　　留言板</h2>
			<div class="row">
				<div class="col-sm-11">
					<input type="button" value="我要留言" class="btn btn-default pull-right" id="wantMessage">
				</div>	
			</div>
			
			@foreach($query as $var)
			<div class="row ">
				<div class="col-sm-offset-1 col-sm-12">
					<div class="panel panel-success col-sm-10">
						
						<table>
							<tr>
								<td id="msg_title"><span  class="label label-default">留言姓名</span></td>
								<td id="msg_content">{{ $var->messager }}</td>
							</tr>
							<tr>
								<td id="msg_title"><span  class="label label-default">留言時間</span></td>
								<td id="msg_content">{{ $var->created_at }}</td>
							</tr>
							<tr>
								<td id="msg_title"><span  class="label label-default">　主旨　</span></td>
								<td id="msg_content">{{ $var->subject }}</td>
							</tr>
							<tr>
								<td id="msg_title"><span  class="label label-default">　內容　</span></td>
								<td id="msg_content">{!! nl2br($var->content) !!}</td>
							</tr>
							<tr>
								<td id="msg_title"><span  class="label label-default">版主回覆</span></td>
								<td id="msg_content">{{ $var->reply }}</td>
							</tr>
						</table>
					</div>
					
				</div>
			</div>
			@endforeach
		</div>
		<!-- 留言處 -->
		<div class="container">
			<div class="row">
				<div class="col-sm-offset-2 col-sm-8">
					<h3>我要留言 . . . </h3>
					<form method="POST" action="{{url('board')}}">
						<input type="hidden" name="_token" id="token" value="{{ csrf_token()}}">
						<label for="messager">姓名：</label>
						<input type="text" name="messager" class="form-control" placeholder="請輸入您的名稱" id="messager"  >
						<label for="messager">主旨：</label>
						<input type="text" name="subject" class="form-control"placeholder="請輸入留言主旨" id="subject"  >
						<label for="messager">內容：</label>
						<textarea name="content" id="content" cols="30" rows="10;
						0" class="form-control" placeholder="請輸入留言內容" id="content"> </textarea>
						<input type="button" class="btn btn-default pull-right" id="submit" value='送出' >
						<!-- <input type="button" id="show" value="show" onclick="showMsg()"> -->
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- </div> -->
<script>
	jQuery(document).ready(function() {
		$("#submit").click(function(event) {
			console.log("ajax");
			$.ajax({
				url: '{{url("board")}}',
				type: 'POST',
				dataType: 'html',
				data: {
					messager: $("#message").val(),
					subject: $("#subject").val(),
					content:$("#content").val()
					
					// messager:$_POST['messager'],
					// subject: $_POST['subject'],
					// content:$_POST['content']
				},
			})
			.done(function() {
				console.log("success");
			})
			.fail(function() {
				console.log("error");
			});
			
		});
	});
</script>
@stop