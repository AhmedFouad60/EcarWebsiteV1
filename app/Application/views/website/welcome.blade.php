@extends('layouts.app')
@push('css')
<style>
    .margin{
        margin-top:100px;
        margin-bottom:100px;
    }
</style>
@endpush
@section('content')
            <div class="content text-center">

                    @include('layouts.messages')
                    
            </div>
        </div>
@endsection
