@extends('layouts.main')

@section('content')
<div>
  <h3>Admin area</h3>
 
  <ul class="adminmenu">
  <li><a href="/admin/addtovar">+ Добавить товар</a></li>
  <li><a href="/admin/tovari">Управление товарами</a></li>
  <li><a href="/admin/orders">Заказы</a></li>
  <li><a href="/admin/users">Управление пользователями</a></li>
  </ul>
  
</div>  
@endsection
