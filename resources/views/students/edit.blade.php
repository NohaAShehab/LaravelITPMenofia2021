@extends("students.ititemp")



@section('innersection')
    <h1> Edit Student </h1>

        <form action="{{route("students.update",$student)}}" method="Post">
        @csrf
        @method("put")

{{--            <input type="hidden" method="put">--}}
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control"
                   value="{{$student["name"]}}"
                   name="name" id="name" aria-describedby="std_nameHelp">
            <label class="text-danger"> {{$errors->first("name")}}</label>

        </div>
            <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control"  name="email" id="email"
                   value="{{$student["email"]}}"
                      aria-describedby="std_nameHelp">
                <label class="text-danger"> {{$errors->first("email")}}</label>

            </div>
        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" class="form-control"  name="phone" id="phone"
                   value="{{$student["phone"]}}"
                   aria-describedby="std_nameHelp">
            <label class="text-danger"> {{$errors->first("phone")}}</label>

        </div>
            <div class="form-group">
                <label for="age">Age</label>
                <input type="number" class="form-control"
                       value="{{$student["age"]}}"
                       name="age" id="age" aria-describedby="std_nameHelp">
                <label class="text-danger"> {{$errors->first("age")}}</label>

            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
