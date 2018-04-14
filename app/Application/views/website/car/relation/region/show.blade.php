		<tr>
			<th>
			{{ trans( "region.region") }}
			</th>
			<td>
				@php $region = App\Application\Model\Region::find($item->region_id);  @endphp
				{{ is_json($region->title) ? getDefaultValueKey($region->title) :  $region->title}}
			</td>
		</tr>
