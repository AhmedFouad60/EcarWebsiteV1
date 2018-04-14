@extends('layouts.app')
 @section('title')
    {{ trans('region.region') }} {{  isset($item) ? trans('home.edit')  : trans('home.add')  }}
@endsection
 @section('content')
<div class="container">
         @include('layouts.messages')
         <a href="{{ url('region') }}" class="btn btn-danger"><i class="fa fa-arrow-left"></i> {{ trans('website.Back') }}  </a>
        <form action="{{ concatenateLangToUrl('region/item') }}{{ isset($item) ? '/'.$item->id : '' }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            @include("website.region.relation.country.edit")
               <div class="form-group">
   <label for="title">{{ trans("region.title")}}</label>
    {!! extractFiled("title" , isset($item->title) ? $item->title : old("title") , "text" , "region") !!}
   </label>
  </div>
             <div class="form-group">
                <button type="submit" name="submit" class="btn btn-default" >
                    <i class="fa fa-save"></i>
                    {{ trans('website.Update') }}  {{ trans('website.region') }}
                </button>
            </div>
        </form>
</div>
@endsection
