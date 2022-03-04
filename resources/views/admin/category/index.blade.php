@extends('layouts.admin')

@section('content')

<h3 class="text_welcome_admin" >All Category</h3>

<div class="container">
    <table class="table">
    <thead>
        <tr>
        <th scope="col">Nr</th>
        <th scope="col">Name</th>
        <th scope="col">Created at</th>
        <th scope="col">Updated at</th>
        <th scope="col">Deleted at</th>

        </tr>
    </thead>
    <tbody>
        <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
        <td>@mdo</td>
        </tr>
        <tr>
        <th scope="row">2</th>
        <td>Jacob</td>
        <td>Thornton</td>
        <td>@fat</td>
        <td>@mdo</td>
        </tr>
        <tr>
        <th scope="row">3</th>
        <td colspan="2">Larry the Bird</td>
        <td>@twitter</td>
        <td>@mdo</td>
        </tr>
    </tbody>
    </table>
</div>
@endsection