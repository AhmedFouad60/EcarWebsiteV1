@extends('layouts.app')

@section('title')
     {{ trans('country.country') }} {{ trans('home.control') }}
@endsection

@section('content')
<div class="container">
    <div><h1>{{ trans('website.country') }}</h1></div>
     {{--<div><a href="{{ url('country/item') }}" class="btn btn-default"><i class="fa fa-plus"></i> {{ trans('website.country') }}</a><br></div>--}}
 <table class="table table-responsive table-striped table-bordered">
		<thead>
			<tr>
				<th>{{ trans("country.title") }}</th>
				{{--<th>{{ trans("country.edit") }}</th>--}}
				{{--<th>{{ trans("country.show") }}</th>--}}
				{{--<th>{{ trans("country.delete") }}</th>--}}
				</thead>
		<tbody>

		@if(count($items) > 0)
			@foreach($items as $d)
				<tr>
					<td><a href="{{url('car?country='). $d->id}}">{{ str_limit(getDefaultValueKey($d->title) , 20) }}</a></td>
				{{--<td>@include("website.country.buttons.edit", ["id" => $d->id ])</td>--}}
					{{--<td>@include("website.country.buttons.view", ["id" => $d->id ])</td>--}}
					{{--<td>@include("website.country.buttons.delete", ["id" => $d->id ])</td>--}}
					</tr>
					@endforeach
				@endif
			</tbody>
		</table>

	@include("layouts.paginate" , ["items" => $items])
		
</div>
@endsection
