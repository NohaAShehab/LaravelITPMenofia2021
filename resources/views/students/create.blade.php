@extends("students.ititemp")



@section('innersection')
    <h1> Add new Student </h1>
{{--    <form action={{route('posts.store')}} method="Post">--}}
{{--        @csrf--}}
        <form action="{{route("students.store")}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control"  name="name"
                   value="{{old("name")}}"
                   id="name" aria-describedby="std_nameHelp">
            <label class="text-danger"> {{$errors->first("name")}}</label>

        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" class="form-control"
                      value="{{old("email")}}"
                      name="email" id="email"  aria-describedby="std_nameHelp">
            <label class="text-danger"> {{$errors->first("email")}}</label>
        </div>

        <div class="form-group">
            <label for="Age">Age</label>
            <input type="number" class="form-control"
                   value="{{old("age")}}"
                   name="age" id="age" aria-describedby="std_nameHelp">
            <label class="text-danger"> {{$errors->first("age")}}</label>

        </div>
        <div class="form-group">
            <label for="phone">phone</label>
            <input type="text" class="form-control"
                      value="{{old("phone")}}"
                      name="phone" id="phone" aria-describedby="std_nameHelp">
            <label class="text-danger"> {{$errors->first("phone")}}</label>
        </div>

            <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
