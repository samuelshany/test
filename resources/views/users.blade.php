@extends('layout')
@section('content')
    <div class="container">
        <div class="row">
            <div>
                <a href="{{url('create')}}" class="btn btn-primary mt-2 mb-5"> ADD PERSON</a>
            </div>
            <table class="table table-striped table-bordered display my-5">
                <thead>
                    <tr>

                        <th>name </th>
                        <th>age</th>
                        <th>details</th>


                    </tr>
                </thead>
                <tbody>

                    @foreach ($persons as $person)
                        <tr>

                            <td>{{ $person->name }}</td>
                            <td>{{ $person->age }}</td>
                            <td> <a href="{{ url('/person', $person->id) }}">details</a></td>
                        </tr>
                    @endforeach


                </tbody>

            </table>
        </div>
    </div>
@endsection
