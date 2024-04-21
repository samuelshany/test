
@extends('layout')
@section('content')
<div class="container">
    <div class="row">
        <div>
            <a href="{{url('/')}}" class="btn btn-primary mt-2 mb-5">  PEAPLE</a>
        </div>
        <div class="col-md-12 d-flex justify-content-center my-5" >
            <form action="{{url('/storePerson')}}" method="POST">
                @csrf

                <input name="name" placeholder="name" type="text" class="form-control w-100" required><br>
                @error('name')
            {{$message}}<br>
                @enderror

                <input name="age" placeholder="age"  type="text" class="form-control" required><br>
                @error('age')
                {{$message}}<br>
                    @enderror
                <input name="nationalityID"  placeholder="nationalityID" class="form-control" required><br>
                @error('nationalityID')
                {{$message}}<br>
                    @enderror
                <input name="birthDate" placeholder="birthDate" type="date" class="form-control" required><br>
                @error('birthDate')
                {{$message}}
                    @enderror
                <button class="btn btn-primary" type="submit">Add</button>
            </form>
        </div>
    </div>
</div>

@endsection
