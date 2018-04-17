@extends('layouts.app')
@push('css')
<style>

</style>
@endpush
@section('search')
    @include('layouts.search')
@endsection
@section('content')
    <!--_______________________________________ Carousel__________________________________ -->
    <div class="allcontain">
        <div id="carousel-up" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner " role="listbox">

                @foreach(\App\Application\Model\Slider::get() as $slide)
                <div class="item {{$loop->first?'active':''}}">
                    <img src="{{url(env('UPLOAD_PATH')."/".$slide->image)}}" alt="oldcar">
                    <div class="carousel-caption">
                        <h2 >{{getDefaultValueKey($slide->title)}}</h2>
                        <p>{{getDefaultValueKey($slide->body)}}</p>
                    </div>
                </div>
                    @endforeach



            </div>

        </div>
    </div>

@endsection
