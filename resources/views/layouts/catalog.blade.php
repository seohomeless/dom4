<?php

  use App\Category;
  $categoris = Category::all();
		
?>

<div>
@foreach($categoris->where('parent_id', 0) as $categori)
    <ul><li><a href="/catalog/{{ $categori->id }}">{{ $categori->name }}</a></li>
		<ul>
		@foreach($categoris->where('parent_id', $categori->id) as $children)
		<li><a href="/catalog/{{ $children->id }}">{{ $children->name }}</a></li>
		@endforeach
		</ul>	
	</ul>
@endforeach
</div>

</ul>
