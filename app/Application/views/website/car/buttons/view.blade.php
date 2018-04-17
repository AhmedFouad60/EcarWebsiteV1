@if(isset($large))
    <a href="{{url('/imageshow/'.$id)}}" class="btn btn-warning">
        <i class="fa fa-eye"></i>
    </a>
@else
<a href="{{ url('car/'.$id.'/view') }}" class="btn btn-warning">
    <i class="fa fa-eye"></i>
</a>
    @endif

