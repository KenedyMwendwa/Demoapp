@extends ('layout')

@section ('content')
<div class= "content">
    @if (count($guitars)>0)
    @foreach($guitars as $guitar)
        <div>
            <h3>
                <a href="{{route('guitars.show', ['guitar' => $guitar['id']])}}">{{$guitar['name']}}</a>
                <ul>
                    <li>
                        Made by: {{$guitar['brand']}}
                    </li>
                </ul>
            </h3>
        </div>
    @endforeach
    @else
        <h2>There are no guitars to show</h2>
    @endif
    <div>
        
    </div>
</div>

@endsection