@extends('layouts.app')

@section('title')
     {{ trans('accessories.accessories') }} {{ trans('home.control') }}
@endsection

@section('content')
<div class="container">
    <div><h1>{{ trans('website.accessories') }}</h1></div>
     <div><a href="{{ url('accessories/item') }}" class="btn btn-default"><i class="fa fa-plus"></i> {{ trans('website.accessories') }}</a><br></div>
 <table class="table table-responsive table-striped table-bordered">
		<thead>
			<tr>
				<th>{{ trans("accessories.title") }}</th>
				<th>{{ trans("accessories.image") }}</th>
				<th>{{ trans("accessories.edit") }}</th>
				<th>{{ trans("accessories.show") }}</th>
				<th>{{ trans("accessories.delete") }}</th>
				</thead>
		<tbody>
		@if(count($items) > 0)
			@foreach($items as $d)
				<tr>
					<td>{{ str_limit(getDefaultValueKey($d->title) , 20) }}</td>
									<td>
				<img src="{{ url(env("UPLOAD_PATH")."/".$d->image)}}"  width="80" />
					</td>
<td>@include("website.accessories.buttons.edit", ["id" => $d->id ])</td>
					<td>@include("website.accessories.buttons.view", ["id" => $d->id ])</td>
					<td>@include("website.accessories.buttons.delete", ["id" => $d->id ])</td>
					</tr>
					@endforeach
				@endif
			</tbody>
		</table>
	@include("layouts.paginate" , ["items" => $items])
		
</div>
@endsection
