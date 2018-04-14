		<div class="form-group">
			<label for="region">{{ trans( "region.region") }}</label>
			@php $regions = App\Application\Model\Region::pluck("title" ,"id")->all()  @endphp
			@php  $region_id = isset($item) ? $item->region_id : null @endphp
			<select name="region_id"  class="form-control" >
			@foreach( $regions as $key => $relatedItem)
			<option value="{{ $key }}"  {{ $key == $region_id  ? "selected" : "" }}> {{ is_json($relatedItem) ? getDefaultValueKey($relatedItem) :  $relatedItem}}</label>
			@endforeach
			</select>
		</div>
