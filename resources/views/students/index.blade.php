@extends("students.ititemp")


@section('innersection')
    this is inner section


        <table class="table">
          <tr>
              <th>
                  Name
              </th>
              <th>
                  Email
              </th>
              <th>
                  Phone
              </th>
              <th>
                  Age
              </th>
              <th>
                  Show
              </th>
              <th>
                  Edit
              </th>
              <th>
                  Delete
              </th>
          </tr>
        @foreach($students as $student)
            <tr>
                <td>
                    {{$student->name}}
                {{--                    represent object--}}
                </td>
                <td>
                    {{$student["email"]}}
                </td>
                <td>
                    {{$student["phone"]}}
                </td>
                <td>
                    {{$student["age"]}}
                </td>
                <td>
                    <a href="{{route("students.show",$student)}}" class="btn btn-success">
                        Show Student {{$student["id"]}}
                    </a>
                </td>
{{--                <td>--}}
{{--                    <a href="{{route("student.show",$student["id"])}}" class="btn btn-success">--}}
{{--                        Show Student {{$student["id"]}}--}}
{{--                    </a>--}}
{{--                </td>--}}

                <td>
                    <a href="{{route("students.edit",$student)}}" class="btn btn-warning">
                        Edit Student {{$student["id"]}}
                    </a>
                </td>
                <td>
{{--                <td>--}}
{{--                    <a href="{{route("student.edit",$student["id"])}}" class="btn btn-warning">--}}
{{--                        Edit Student {{$student["id"]}}--}}
{{--                    </a>--}}
{{--                </td>--}}
                <td>
                    <form action="{{route("students.destroy",$student)}}" method="Post">
                        @csrf
                        @method("delete")
                        <input type="submit"  value="Delete Student {{$student["id"]}}"
                               class="btn btn-danger">
                    </form>
                </td>
{{--                <td>--}}
{{--                    <a href="{{route("student.delete",$student["id"])}}" class="btn btn-danger">--}}
{{--                        Delete Student {{$student["id"]}}--}}
{{--                    </a>--}}
{{--                </td>--}}
            </tr>


        @endforeach
        </table>


        <a href="{{route("students.create")}}" class="btn btn-primary">
            Add new student
        </a>


@endsection
