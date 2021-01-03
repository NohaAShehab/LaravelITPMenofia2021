@extends("website.temp")


@section("maincontainer")



{{--        {{$data[0]}} <br>--}}
{{--        {{strtoupper($data[1])}} <br>--}}
{{--        {{$data[2]}} <br>--}}
{{--        {{$data[3]}}--}}
{{--        {{count($data)}}    --}}


                {{--  Displaying  Array elemets --}}


        {{--   for, if, foreach, unless, while, forelse , loop --}}


    <ol>
{{--        @foreach($data as $name)--}}

{{--                @if($name=="sayed")--}}
{{--                    {{strtoupper($name)}}--}}
{{--                    @break--}}
{{--                    @continue--}}
{{--                @endif--}}
{{--                    <li> {{$name}} </li>--}}
{{--                @unless($name=="Amira")--}}
{{--                    Welcome--}}
{{--                @endunless--}}
{{--        @endforeach--}}
    </ol>

{{--        @if(count($data)<5)--}}
{{--                Size of the array less than 5--}}

{{--        @elseif(count($data)> 5)--}}
{{--            Size of the array greater than 5--}}
{{--        @else--}}
{{--            size equal 5--}}
{{--        @endif--}}


@endsection

@section("wrappercontent")


{{--    @forelse($data as $name)--}}
{{--        <ul> {{$name}}</ul>--}}
{{--    @empty--}}
{{--        <h1> No items here</h1>--}}
{{--    @endforelse--}}


    @foreach($data as $name)


        <li>
            <td>  {{$loop->iteration}}  </td>
            <td>  {{$name}}  </td>
        </li>

        @if($loop->last)
            Last item
        @endif
    @endforeach

@endsection
