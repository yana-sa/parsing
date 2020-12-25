@extends('layout')
@section('content')
    <br>
    <b class="text-center"><h3>Parsing Statistics</h3></b>
    <table class="table table-striped table-dark">
        <thead>
        <tr>
            <th scope="col">Date and Time</th>
            <th scope="col">The amount of data processed</th>
            <th scope="col">The amount of data written to tables</th>
            <th scope="col">The time taken</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td>Larry</td>
            <td>the Bird</td>
            <td>@twitter</td>
        </tr>
        </tbody>
    </table>

@stop
