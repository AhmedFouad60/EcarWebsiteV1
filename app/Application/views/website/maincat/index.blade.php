@extends('layouts.app')

@section('title')
     {{ trans('maincat.maincat') }} {{ trans('home.control') }}
@endsection

@section('content')


	<!-- ____________________Featured Section ______________________________-->
	<div class="allcontain">
		<div class="feturedsection">
			<h1 class="text-center text-uppercase">&bullet; {{ trans("website.maincat") }}&bullet;</h1>
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
								<h1>LOREM IPSUM</h1>
								<p>"Lorem ipsum dolor sit amet, consectetur ,<br>
									sed do eiusmod tempor incididunt </p>
								<h2>Price &euro;</h2>
								<button id="btnRM2" onclick="location.href='{{url('car?'). $d->id}}'">READ MORE</button>
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
