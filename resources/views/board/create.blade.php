@extends('board.index')

@section('content')

<div class="row">
		<div class="col-sm-offset-2 col-sm-8">

			<h3>我要留言 . . . </h3>
			<form action="{{url('board')}}" method="post">
				<input type="hidden" name="_token" value="{{ csrf_token()}}">
				<label for="messager">姓名：</label>
				<input type="text" name="messager" class="form-control" placeholder="請輸入您的名稱">
				
				<label for="messager">主旨：</label>
				<input type="text" name="subject" class="form-control"placeholder="請輸入留言主旨">
				<label for="messager">內容：</label>
				<textarea name="content" id="content" cols="30" rows="10" class="form-control" placeholder="請輸入留言內容"></textarea>
				<input type="submit" class="btn btn-default pull-right" id="submit" value='送出' style="margin-top:20px;margin-bottom:20px">
			</form>
		</div>
	</div>

@stop