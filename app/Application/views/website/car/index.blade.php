@extends('layouts.app')

@section('title')
     {{ trans('car.car') }} {{ trans('home.control') }}
@endsection

@section('content')
<div class="container">
    <div><h1>{{ trans('website.car') }}</h1></div>
     <div><a href="{{ url('car/item') }}" class="btn btn-default"><i class="fa fa-plus"></i> {{ trans('website.car') }}</a><br></div>
 <table class="table table-responsive table-striped table-bordered">
		<thead>
			<tr>
				<th>{{ trans("car.title") }}</th>
				<th>{{ trans("car.body") }}</th>
				<th>{{ trans("car.image") }}</th>
				<th>{{ trans("car.youtube") }}</th>
				<th>{{ trans("car.edit") }}</th>
				<th>{{ trans("car.show") }}</th>
				<th>{{ trans("car.delete") }}</th>
				</thead>
		<tbody>
		@if(count($items) > 0)
			@foreach($items as $d)
				<tr>
					<td>{{ str_limit($d->title , 20) }}</td>
				<td>{{ str_limit($d->body , 20) }}</td>
									<td>
				<img src="{{ url(env("UPLOAD_PATH")."/".$d->image)}}"  width="80" />
					</td>
<td>{{ str_limit($d->youtube , 20) }}</td>
				<td>@include("website.car.buttons.edit", ["id" => $d->id ])</td>
					<td>@include("website.car.buttons.view", ["id" => $d->id ])</td>
					<td>@include("website.car.buttons.delete", ["id" => $d->id ])</td>
					</tr>
					@endforeach
				@endif
			</tbody>
		</table>
	@include("layouts.paginate" , ["items" => $items])
		
</div>
@endsection
