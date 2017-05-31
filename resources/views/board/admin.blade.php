@extends('index')
@section('content')

<div class="logo">
	<img src="/img/logo.png"alt="logo.png">
</div>
<!-- <div class="container"> -->
<style>
	#msg_title{
	
	text-align: center;
	font-size: 16px;
	vertical-align:text-top;

}
</style>
<div class="msg container">
<div class="panel panel-default " >
	<div class="panel-body">
		<h2>　　留言板</h2>
		@foreach($query as $var)
		<button class="pull-right">刪除</button>
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
							<td id="msg_content">
								<form action="">
									<textarea name="reply" id="content" cols="50" rows="4" class="form-control"></textarea>
									<input type="submit" class="btn btn-default  btn-xs pull-right" id="submit" value='送出' >
								</form>
							</td>
						</tr>
					</table>
				</div>
				
			</div>

		</div>
		@endforeach

	</div>

	

</div>
</div>
<!-- </div> -->
@stop