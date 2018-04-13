@extends('layouts.app')

@section('title')
     {{ trans('maincat.maincat') }} {{ trans('home.control') }}
@endsection

@section('content')
<div class="container">
    <div><h1>{{ trans('website.maincat') }}</h1></div>
     <div><a href="{{ url('maincat/item') }}" class="btn btn-default"><i class="fa fa-plus"></i> {{ trans('website.maincat') }}</a><br></div>
 <table class="table table-responsive table-striped table-bordered">
		<thead>
			<tr>
				<th>{{ trans("maincat.title") }}</th>
				<th>{{ trans("maincat.image") }}</th>
				<th>{{ trans("maincat.edit") }}</th>
				<th>{{ trans("maincat.show") }}</th>
				<th>{{ trans("maincat.delete") }}</th>
				</thead>
		<tbody>
		@if(count($items) > 0)
			@foreach($items as $d)
				<tr>
					<td>{{ str_limit(getDefaultValueKey($d->title) , 20) }}</td>
									<td>
				<img src="{{ url(env("UPLOAD_PATH")."/".$d->image)}}"  width="80" />
					</td>
<td>@include("website.maincat.buttons.edit", ["id" => $d->id ])</td>
					<td>@include("website.maincat.buttons.view", ["id" => $d->id ])</td>
					<td>@include("website.maincat.buttons.delete", ["id" => $d->id ])</td>
					</tr>
					@endforeach
				@endif
			</tbody>
		</table>
	@include("layouts.paginate" , ["items" => $items])
		
</div>
@endsection
