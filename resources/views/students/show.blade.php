@extends("students.ititemp")



@section('content')

    <h1>Student info</h1>
    <table class="table">
        <tr>
            <th>
                Name
            </th>
            <td>
                {{$student["name"]}}
            </td>
        </tr>

        <tr>
            <th>
                Email
            </th>
            <td>
                {{$student["email"]}}
            </td>
        </tr>
        <tr>
            <th>
                Age
            </th>
            <td>
                {{$student["age"]}}
            </td>
        </tr>
        <tr>
            <th>
                Phone
            </th>
            <td>
                {{$student["phone"]}}
            </td>
        </tr>
        <tr>
            <th>
                Created at
            </th>
            <td>
                {{$student["created_at"]}}
            </td>
        </tr>
        <tr>
            <th>
                Updated at
            </th>
            <td>
                {{$student["updated_at"]}}
            </td>
        </tr>


    </table>



@endsection
