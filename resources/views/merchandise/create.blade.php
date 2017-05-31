@extends('index')
@section('content')

<div class="merchandise_create">
	<div class="logo">
		<img src="/img/logo.png"alt="logo.png">
	</div>
	<div class="container">
		<h2>新增書籍</h2>
		<div class="panel panel-default">
			<div class="row container">
				<div class="col-sm-offset-1 col-sm-10 ">
					<form action="{{url('merchandise')}}" method="post">
						<input type="hidden" name="_token" value="{{ csrf_token()}}">
						<label for="category">類別：</label>
						<select name="category" id="category" class="form-control">
							@foreach($query as $var)
							<option value="{{$var->category}}">{{$var->category}}</option>
							@endforeach
						</select>
						<label for="title">標題：</label>
						<input type="text" class="form-control" name="title" placeholder="請輸入書籍標題">
						<label for="author">作者：</label>
						<input type="text" class="form-control" name="author" placeholder="請輸入書籍作者">
						<label for="price">定價：</label>
						<input type="text" class="form-control" name="price" placeholder="請輸入書籍價格">
						<label for="publisher">出版社：</label>
						<input type="text" class="form-control" name="publisher" placeholder="請輸入書籍出版社">
						<label for="date_of_publication">出版日期：</label>
						<input type="date" class="form-control" name="date_of_publication" >
						<label for="content">內容介紹：</label>
						<textarea name="content" id="content" cols="30" rows="10" class="form-control" placeholder="請輸入商品介紹"></textarea>
						<label for="situation">商品狀況：</label>
						<textarea name="situation" id="situation" cols="30" rows="10" class="form-control" placeholder="請輸入商品狀況"></textarea>
						<label for="image">圖片位置：</label>
						<input type="text" class="form-control" name="image" placeholder="請輸入圖片位置">
						<input type="submit" class="btn btn-default pull-right" id="submit" value='送出' style="margin-top:20px;margin-bottom:20px">
					</form>
					
				</div>
			</div>
		</div>
	</div>
</div>
@stop