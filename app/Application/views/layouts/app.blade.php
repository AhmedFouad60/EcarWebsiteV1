<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{--<title>{{ config('app.name', 'Laravel') }} | @yield('title')</title>--}}
    <title>@yield('title')</title>
    {{--<link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="{{url('website/source/bootstrap-3.3.6-dist/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('website/source/font-awesome-4.5.0/css/font-awesome.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('website/style/slider.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('website/style/mystyle.css')}}">




    @if(getDir() == 'rtl')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-rtl/3.4.0/css/bootstrap-rtl.css">
    @endif
    {{ Html::style('css/sweetalert.css') }}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
    @stack('css')



</head>



<body>




        <!-- Header -->
        <div class="allcontain">


            <div class="header">
                <ul class="socialicon">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                </ul>
                <ul class="givusacall">
                    <li>Give us a call : +66666666 </li>
                </ul>
                <ul class="logreg">

                    @if (Auth::check())
                        <li><a href="{{ url('/') }}">{{ trans('website.home') }}</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @else
                        <li><a href="{{ url('/') }}">{{ trans('website.home') }}</a></li>
                        <li><a href="{{ url('/login') }}">{{ trans('website.login') }}</a></li>
                        <li><a href="{{ url('/register') }}">{{ trans('website.register') }}</a></li>
                    @endif

                </ul>
            </div>
            <!-- Navbar Up -->
            <nav class="topnavbar navbar-default topnav">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed toggle-costume" data-toggle="collapse" data-target="#upmenu" aria-expanded="false">
                            <span class="sr-only"> Toggle navigaion</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        {{--<a class="navbar-brand logo" href="#"><img src="{{url('website/image/logo1.png')}}" alt="logo"></a>--}}
                    </div>
                </div>
                <div class="collapse navbar-collapse" id="upmenu">
                    <ul class="nav navbar-nav" id="navbarontop">

                        <li class="active"><a href="{{url('/')}}">{{trans('website.home')}}</a> </li>

                        <li class="dropdown">
                            <a href="{{url('maincat')}}">{{trans('website.category')}}</a>

                        </li>

                        <li class="dropdown">
                            <a href="{{url('brand')}}">{{trans('website.brand')}}</a>

                        </li>

                        @php $page = page(); @endphp
                        <li><a href="{{ url('/page/'.$page->slug) }}">{{ getDefaultValueKey($page->title) }}</a></li>
                        <li><a href="{{ url('contact') }}">{{ trans('website.Contact Us') }}</a></li>
                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            <li>
                                <a rel="alternate" hreflang="{{$localeCode}}" href="{{LaravelLocalization::getLocalizedURL($localeCode) }}">
                                    {{ $properties['native'] }}
                                </a>
                            </li>
                        @endforeach


                        <button><span class="postnewcar">{{trans('website.newcar')}}</span></button>
                    </ul>
                </div>
            </nav>
        </div>

        {{--<div style="margin-bottom: 50px;"></div>--}}
        <div class="allcontain clearfix">

        <nav class="navbar navbar-default midle-nav ">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed textcostume" data-toggle="collapse" data-target="#navbarmidle" aria-expanded="false">
                    <h1>SEARCH CARS</h1>
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="navbarmidle">
                <div class="searchtxt">
                    <h1>SEARCH CARS</h1>
                </div>
             <form action="{{url('car')}}">
                <ul class="nav navbar-nav navbarborder">

                    <li class="li-category">
                          <select name="brand" id="" class=" form-control text-center" >
                                <option class="" value="" selected="true" disabled="disabled">BRANDS</option>

                            @foreach(\App\Application\Model\Brand::get() as $brand)
                                    <option class="" value="{{$brand->id}}">{{getDefaultValueKey($brand->title)}}</option>
                                @endforeach

                            </select>
                        {{--</ul>--}}

                    </li>
                    <li class="li-category">
                        <select name="maincat" id="" class=" form-control text-center" >
                            <option class="disable" value="" selected="true" disabled="disabled">Category</option>

                            @foreach(\App\Application\Model\Maincat::get() as $category)
                                <option class="" value="{{$category->id}}">{{getDefaultValueKey($category->title)}}</option>
                            @endforeach

                        </select>


                    </li>
                    <li class="li-category">
                        <select name="maincat" id="" class=" form-control text-center" >
                            <option class="disable" value="" selected="true" disabled="disabled">Country</option>

                            @foreach(\App\Application\Model\Country::get() as $country)
                                <option class="" value="{{$country->id}}">{{getDefaultValueKey($country->title)}}</option>
                            @endforeach

                        </select>


                    </li>
                    <li class="li-category">
                        <select name="maincat" id="" class=" form-control text-center" >
                            <option class="disable" value="" selected="true" disabled="disabled">Region</option>

                            @foreach(\App\Application\Model\Region::get() as $region)
                                <option class="" value="{{$region->id}}">{{getDefaultValueKey($region->title)}}</option>
                            @endforeach

                        </select>


                    </li>

                    <li class="li-category">
                            <input  type="number" placeholder="price" class="form-control" style="background: none;color: #FFF;height: 41px;font-size: 20px;">


                    </li>
                    <li class="li-search"> <button type="submit"class="searchbutton"><span class="glyphicon glyphicon-search "></span></button></li>
                </ul>
             </form>

            </div>
        </nav>

        </div>


        @yield('content')

        <!-- ____________________Featured Section ______________________________-->





        <!-- ______________________________________________________Bottom Menu ______________________________-->
        <div class="bottommenu">

            {{--<div class="bottomlogo">--}}
                {{--<span class="dotlogo">&bullet;</span><img src="{{url('website/image/collectionlogo1.png')}}" alt="logo1"><span class="dotlogo">&bullet;;</span>--}}
            {{--</div>--}}
            <ul class="nav nav-tabs bottomlinks">
                @php $page = page(); @endphp
                <li><a href="{{ url('/page/'.$page->slug) }}">{{ getDefaultValueKey($page->title) }}</a></li>
                <li><a href="{{ url('contact') }}">{{ trans('website.Contact Us') }}</a></li>
                @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                    <li>
                        <a rel="alternate" hreflang="{{$localeCode}}" href="{{LaravelLocalization::getLocalizedURL($localeCode) }}">
                            {{ $properties['native'] }}
                        </a>
                    </li>
                @endforeach
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                        {{ trans('website.Models') }}
                        <span class="caret"></span>
                    </a>
                    {!! menu('website' , 'ul' , 'dropdown-menu') !!}
                </li>
            </ul>
            <p>"Lorem ipsum dolor sit amet, consectetur,  sed do eiusmod tempor incididunt <br>
                eiusmod tempor incididunt </p>
            <img src="{{url('website/image/line.png')}}" alt="line"> <br>
            <div class="bottomsocial">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-google-plus"></i></a>
                <a href="#"><i class="fa fa-pinterest"></i></a>
            </div>
            <div class="footer">
                <div class="copyright">
                    &copy; Copy right 2016 | <a href="#">Privacy </a>| <a href="#">Policy</a>
                </div>
                <div class="atisda">
                    Designed by <a href="http://www.webdomus.net/">Web Domus Italia - Web Agency </a>
                </div>
            </div>
        </div>






    {!! Links::track(true) !!}

    {{ Html::script('js/sweetalert.min.js') }}

        <script type="text/javascript" src="{{url('website/source/bootstrap-3.3.6-dist/js/jquery.js')}}"></script>
        <script type="text/javascript" src="{{url('website/source/js/isotope.js')}}"></script>
        <script type="text/javascript" src="{{url('website/source/js/myscript.js')}}"></script>
        {{--<script type="text/javascript" src="{{url('website/source/bootstrap-3.3.6-dist/js/jquery.1.11.js')}}"></script>--}}
        <script type="text/javascript" src="{{url('website/source/bootstrap-3.3.6-dist/js/bootstrap.js')}}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

        <script type="application/javascript">
            $('#brand').select2();

        </script>

    <script type="application/javascript">
        function deleteThisItem(e){
            var link = $(e).data('link');
            swal({
                        title: "Are you sure?",
                        text: "You will not be able to recover this Item Again!",
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#DD6B55",
                        confirmButtonText: "Yes, delete it!",
                        closeOnConfirm: false
                    },
                    function(){
                        window.location = link;
                    });
        }
    </script>
    @include('sweet::alert')
    @stack('js')









</body>
</html>
