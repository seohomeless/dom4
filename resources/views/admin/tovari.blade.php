@extends('layouts.main')

@section('content')
<div>
  <h3>Список товаров</h3>
 
  <ul class="adminmenu">
  <li><a href="/admin/addtovar">+ Добавить товар</a></li>
  <li><a href="/admin/tovari">Управление товарами</a></li>
  <li><a href="/admin/orders">Заказы</a></li>
  </ul>
  
</div>  

<div style="clear: both; padding-top: 30px">

@foreach($tovari as $tovar)
			<h2><a href="{{$tovar->id}}">{{$tovar->title}}</a> - <a class="btn btn-success">изменить</a>   <a class="btn btn-danger">удалить</a></h2>
			</hr>
	@endforeach
</div>  			
@endsection
