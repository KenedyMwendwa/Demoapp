@extends ('layout')

@section ('content')
        <div class= "content">
            <h3>
                {{$guitar['name']}}
                <ul>
                    <li>
                        Made by: {{$guitar['brand']}}
                    </li>
                </ul>
            </h3>
        </div>
@endsection