@extends('index')

@section('content')
<div class="logo">
	<img src="/img/logo.png"alt="logo.png">
</div>
<div class="container edit">
<h2>編輯書籍</h2>
	<div class="panel panel-default">
		<div class="row container">
			<div class="col-sm-offset-1 col-sm-10 ">
				<form action="{{url('merchandise/'.$query->id)}}" method="post">
					<input type="hidden" name="_token" value="{{ csrf_token()}}">
					<input type="hidden" name="_method" value="PUT">
					<label for="category">類別：</label>
					<select name="category" id="category" class="form-control">
						@foreach($query_ca as $var)
						
						<option value="{{$var->category}}" <?php echo($var->category == $query->category)? "selected":" ";?>>{{$var->category}}</option>
						@endforeach
					</select>
					<label for="title">標題：</label>
					<input type="text" class="form-control" name="title" placeholder="請輸入書籍標題" value="{{$query->title}}">
					<label for="author">作者：</label>
					<input type="text" class="form-control" name="author" placeholder="請輸入書籍作者" value="{{$query->author}}">
					<label for="price">定價：</label>
					<input type="text" class="form-control" name="price" placeholder="請輸入書籍價格" value="{{$query->price}}">
					<label for="publisher">出版社：</label>
					<input type="text" class="form-control" name="publisher" placeholder="請輸入書籍出版社" value="{{$query->publisher}}">
					<label for="date_of_publication">出版日期：</label>
					<input type="date" class="form-control" name="date_of_publication" value="{{$query->date_of_publication}}">
					<label for="content">內容介紹：</label>
					<textarea name="content" id="content" cols="30" rows="10" class="form-control" placeholder="請輸入商品介紹">{{$query->content}}</textarea>
					<label for="situation">商品狀況：</label>
					<textarea name="situation" id="situation" cols="30" rows="10" class="form-control" placeholder="請輸入商品狀況">{{$query->situation}}</textarea>
					<label for="image">圖片位置：</label>
					<input type="text" class="form-control" name="image" placeholder="請輸入圖片位置" value="{{$query->image}}">
					<input type="submit" class="btn btn-default pull-right" id="submit" value='送出' >

				</form>
				
			</div>
		</div>
	</div>
</div>
@stop