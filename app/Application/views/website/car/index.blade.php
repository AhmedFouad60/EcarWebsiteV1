@extends('layouts.app')

@section('title')
     {{ trans('car.car') }} {{ trans('home.control') }}
@endsection
@section('search')
	@include('layouts.search')
@endsection

@section('content')


	<!-- ____________________Featured Section ______________________________-->
	<div class="allcontain">
		<div class="feturedsection">
			<h1 class="text-center text-uppercase pageHeader">&bullet; {{ trans("website.car") }}&bullet;</h1>
		</div>
		@if(count($items) > 0)
			@foreach($items as $d)

				<div class="col-lg-6 costumcol colborder2" style="margin-bottom: 20px;padding: 25px;">
					<div class="row costumrow">
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 img2colon">
							<img src="{{ url(env("UPLOAD_PATH")."/".$d->image)}}" alt="porsche1">
						</div>
						<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 txt1colon ">
							<div class="featurecontant">
{{--								{{str_limit(getDefaultValueKey($d->body),20)}}--}}
								<h1>
									{{$d->title}}
                                    @if($d->user_id==auth()->id())
                                        {{--<span class="pull-right">@include("website.car.buttons.edit", ["id" => $d->id ])</span>--}}
                                    @endif
									{{--<span class="pull-right">@include("website.car.buttons.view", ["id" => $d->id ])</span>--}}


								</h1>
								<p>{{str_limit($d->body,200)}} </p>

								<small><span class="fa fa-caret-square-o-right"></span><a href="{{url('car?country=').$d->country_id}}"> {{getDefaultValueKey($d->country->title)}}</a></small>

								<small><span class="fa fa-caret-square-o-right"></span><a href="{{url('car?region=').$d->region_id}}"> {{getDefaultValueKey($d->region->title)}}</a></small>

								<small><span class="fa fa-caret-square-o-right"></span><a href="{{url('car?maincat=').$d->maincat_id}}"> {{getDefaultValueKey($d->maincat->title)}}</a></small>

								<small><span class="fa fa-caret-square-o-right"></span><a href="{{url('car?brand=').$d->brand_id}}"> {{getDefaultValueKey($d->brand->title)}}</a></small>
<br>
								<br>
							@if($d->user_id==auth()->id())
									<h2 class="" style="letter-spacing: 0px;" ><a   href="{{url('car/'.'item/'.$d->id)}}"><span class="fa fa-edit"></span>{{trans('website.edit')}}</a></h2>
								@endif

								<button id="btnRM2" onclick="location.href='{{url('car/'.$d->id.'/view')}}'">SHOW MORE</button>
								<div id="readmore2">
									<h1>Car Name</h1>
									<p>"Lorem ipsum dolor sit amet, consectetur ,<br>
										sed do eiusmod tempor incididunt <br>"Lorem ipsum dolor sit amet, consectetur ,<br>
										sed do eiusmod tempor incididunt"Lorem ipsum dolor sit amet, consectetur1 ,
										sed do eiusmod tempor incididunt"Lorem ipsum dolor sit amet, consectetur1
										sed do eiusmod tempor incididunt"Lorem ipsum dolor sit amet, consectetur1<br></p>
									<button id="btnRL2">READ LESS</button>
								</div>
							</div>
						</div>
					</div>
				</div>
	</div>

	@endforeach
	@endif
	<div class="clearfix"></div>





	{{--end of content--}}









	@include("layouts.paginate" , ["items" => $items])


@endsection
