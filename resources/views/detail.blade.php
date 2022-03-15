@extends('layouts.app')
@section('content')
<h2>{{$id}}</h2>
{{-- <h2>{{ route('all.products', ['id'=>$id]) }}</h2> --}}
<h2>Here is the detail page</h2>
<div id="app">
    <detail-component ref="DetailComponent"></detail-component>
</div>

@endsection
