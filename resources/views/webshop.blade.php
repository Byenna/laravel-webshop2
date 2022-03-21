<!-- user is redirected to the products when NOT logged in -->
@extends('layouts.master_head')

@section('content')


@include('layouts.menu_buttons')


<products-component></products-component> 

@endsection