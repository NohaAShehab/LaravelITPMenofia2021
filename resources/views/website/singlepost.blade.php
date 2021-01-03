@extends("website.temp")


@section("lightsection")

        <h1> Post details</h1>
        <table class="table">
            <tr>
                <th>Title</th>
                <th>Body</th>
            </tr>
                <tr>
                    <td>
                        {{$data["title"]}}
                    </td>
                    <td>
                        {{$data["body"]}}
                    </td>
                </tr>


        </table>


@endsection
