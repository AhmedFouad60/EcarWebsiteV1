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
