<a href="{{URL::to('product')}}">View All Product</a>
<h1>Create New Product</h1>
{{Html::ul($errors->all())}}
{{Form::open(array('action' =>array('ProdcuctController@store')))}}
<div>
  {{Form::label('name','Product Name')}}
  {{Form::text('name',Request::old('name'),array('class'=>'item'))}}
</div>
<div>
  {{Form::label('price','Price')}}
  {{Form::text('price',Request::old('price'),array('class'=>'item'))}}
</div>
<div>
  {{Form::label('image','Image Name')}}
  {{Form::text('image',Request::old('image'),array('class'=>'item'))}}
</div>
<div>
  {{Form::label('categories_id','Categories Id')}}
  {{Form::text('categories_id',Request::old('categories_id'),array('class'=>'item'))}}
</div>
  {{Form::submit('Create',array() ) }}
{{Form::close()}}
