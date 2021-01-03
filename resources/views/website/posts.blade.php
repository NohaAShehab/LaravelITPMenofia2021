@extends("website.temp")


@section("lightsection")
        <table class="table">
            <tr>
                <th>Title</th>
                <th>Body</th>
            </tr>
            @foreach($posts as $post)
                <tr>
                    <td>
                        {{$post["title"]}}
                    </td>
                    <td>
                        {{$post["body"]}}
                    </td>
                </tr>

            @endforeach

        </table>


@endsection
