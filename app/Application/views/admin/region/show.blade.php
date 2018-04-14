@extends(layoutExtend())
  @section('title')
    {{ trans('region.region') }} {{ trans('home.view') }}
@endsection
  @section('content')
    @component(layoutForm() , ['title' => trans('region.region') , 'model' => 'region' , 'action' => trans('home.view')  ])
  <table class="table table-bordered table-responsive table-striped">
  @include("admin.region.relation.country.show")
   </tr>
    <tr><th>{{ trans("region.title") }}</th>
    @php $type =  getFileType("title" , $item->title) @endphp
    @if($type == "File")
     <td> <a href="{{ url(env("UPLOAD_PATH")."/".$item->title) }}">{{ $item->title }}</a></td>
    @elseif($type == "Image")
     <td> <img src="{{ url(env("UPLOAD_PATH")."/".$item->title) }}" /></td>
    @else
     <td>{{ getDefaultValueKey(nl2br($item->title)) }}</td>
    @endif</tr>
   </tr>
  </table>
          @include('admin.region.buttons.delete' , ['id' => $item->id])
        @include('admin.region.buttons.edit' , ['id' => $item->id])
    @endcomponent
@endsection
