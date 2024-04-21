@extends('layout')
@section('content')
    <div class="container">
        <div>
            <a href="{{url('/')}}" class="btn btn-primary mt-2 mb-5">  PEAPLE</a>
        </div>
    

<table  class="table table-striped table-bordered display">
    <thead>
        <tr>
            <th>name </th>
            <th>age</th>
            <th>National id</th>
            <th>Birth date</th>
            <th>details</th>
            <th>
        </tr>
    </thead>
    <tbody>

        @foreach ($persons as $person)
            <tr>

                <td>{{ $person->name }}</td>
                <td >{{$person->age}}</td>
                <td>{{ $person->nationalityID }}</td>
                <td >{{$person->birthDate}}</td>
<td > <a href="{{url('/delete',$person->id)}}">delete</a></td>
            </tr>
        @endforeach


    </tbody>

</table>
    </div>
    @endsection
