@extends('layouts.app')

@section('title')
     {{ trans('brand.brand') }} {{ trans('home.control') }}
@endsection

@section('content')
<div class="container">
    <div><h1>{{ trans('website.brand') }}</h1></div>
     <div><a href="{{ url('brand/item') }}" class="btn btn-default"><i class="fa fa-plus"></i> {{ trans('website.brand') }}</a><br></div>
 <table class="table table-responsive table-striped table-bordered">
		<thead>
			<tr>
				<th>{{ trans("brand.title") }}</th>
				<th>{{ trans("brand.image") }}</th>
				<th>{{ trans("brand.edit") }}</th>
				<th>{{ trans("brand.show") }}</th>
				<th>{{ trans("brand.delete") }}</th>
				</thead>
		<tbody>
		@if(count($items) > 0)
			@foreach($items as $d)
				<tr>
					<td>{{ str_limit(getDefaultValueKey($d->title) , 20) }}</td>
									<td>
				<img src="{{ url(env("UPLOAD_PATH")."/".$d->image)}}"  width="80" />
					</td>
<td>@include("website.brand.buttons.edit", ["id" => $d->id ])</td>
					<td>@include("website.brand.buttons.view", ["id" => $d->id ])</td>
					<td>@include("website.brand.buttons.delete", ["id" => $d->id ])</td>
					</tr>
					@endforeach
				@endif
			</tbody>
		</table>
	@include("layouts.paginate" , ["items" => $items])
		
</div>
@endsection
