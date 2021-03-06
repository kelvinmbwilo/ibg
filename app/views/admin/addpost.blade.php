@extends('layout.admin')

@section('content')
<!--response messages-->
         @if(isset($emsg))
         <div class="alert alert-danger alert-dismissable" >
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>{{ $emsg }}!</strong> 
          </div>
         @endif
         
         @if(isset($msg))
         <div class="alert alert-success alert-dismissable" >
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>{{ $msg }}!</strong> 
          </div>
         @endif
{{ Form::open(array("url"=>route('addpost1'),"class"=>"form-horizontal" ,'files' => true)) }}
<div class='form-group'>
        {{ Form::label('name', 'Name or Brand',array('class'=>'control-label col-sm-4')) }}
        <div class='col-sm-8'>{{ Form::text('name','',array('class'=>'form-control','placeholder'=>'Name Or Brand','required'=>'required')) }} </div>
    </div>
<div class='form-group'>
        {{ Form::label('category', 'Category',array('class'=>'control-label col-sm-4')) }}
        <div class='col-sm-8'>{{ Form::select('category',Category::lists('name','id'),'',array('class'=>'form-control','required'=>'requiered')) }}  </div>
    </div>
<div class='form-group'>
        {{ Form::label('subcategory', 'Subcategory',array('class'=>'control-label col-sm-4')) }}
        <div class='col-sm-8'>{{ Form::select('subcategory',Subcategory::lists('name','id'),'',array('class'=>'form-control','required'=>'requiered')) }}  </div>
    </div>
<div class='form-group'>
        {{ Form::label('price', 'Price',array('class'=>'control-label col-sm-4')) }}
        <div class='col-sm-8'>{{ Form::text('price','',array('class'=>'form-control','placeholder'=>'Price','required'=>'required')) }} </div>
    </div>
    <div class='form-group'>
        {{ Form::label('discr', 'Discription',array('class'=>'control-label col-sm-4')) }}
        <div class='col-sm-8'>{{ Form::textarea('discr','',array('class'=>'form-control','placeholder'=>'Discription','required'=>'required')) }} </div>
    </div>
<span class="help-block text-center">**choose at least one image and maximum of three images</span>
   <div class='form-group'>
        {{ Form::label('img1', 'First Image',array('class'=>'control-label col-sm-4')) }}
        <div class='col-sm-8'>{{ Form::file('img1',array('class'=>'form-control','required'=>'required')) }} </div>
    </div>

   <div class='form-group'>
        {{ Form::label('img2', 'Second Image',array('class'=>'control-label col-sm-4')) }}
        <div class='col-sm-8'>{{ Form::file('img2',array('class'=>'form-control')) }} </div>
    </div>

    <div class='form-group'>
        {{ Form::label('img3', 'Third Image',array('class'=>'control-label col-sm-4')) }}
        <div class='col-sm-8'>{{ Form::file('img3',array('class'=>'form-control')) }} </div>
    </div>
      
   <div class='col-sm-12 form-group text-center'>
        {{ Form::submit('Save and add Images',array('class'=>'btn btn-primary','id'=>'submitqn')) }}
        
    </div>
  {{ Form::close() }}
@stop