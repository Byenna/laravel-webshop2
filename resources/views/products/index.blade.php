@extends('layouts.webshop')

@section('content')



<products-component :sale-30()="sale30()" :sale-50()="sale50()"></products-component>       

@endsection

