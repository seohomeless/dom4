@extends('layouts.main')

@section('content')
<div>
  <h3>Добавить товар</h3>
 
  <ul class="adminmenu">
  <li><a href="/admin/addtovar">+ Добавить товар</a></li>
  <li><a href="/admin/tovari">Управление товарами</a></li>
  <li><a href="/admin/orders">Заказы</a></li>
  
  </ul>
  
</div>  


<div style="clear: both; padding-top: 30px">

 <form action="/admin/dobavittovar" method="post" enctype="multipart/form-data">
         <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ; ?>">

	 
		<br><label>Название </label>
		<br> <input type='text' name='title' />
				   
		<br><label>Категория </label>
		<br><select name="category_id">

			@foreach($categories as $category)
			<option value="{{$category->id}}">{{$category->name}}</option>
			@endforeach

		</select>
			   
		<br> <label>Артикул </label>
		<br> <input type='text' name='articul' />
				   
		<br> <label>Цена </label>
		<br> <input type='text' name='price' />
				   
		<br> <label>Вендор </label>
		<br> <input type='text' name='vendor' />   
					   
		<br>  <label>Описание</label>
		<br><textarea rows="10" cols="45" name='description'  /></textarea>
				
		<br> <input type = 'submit' value = "Добавить товар"/>
				 
</form>
    

</div>




@endsection





