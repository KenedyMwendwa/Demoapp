@extends ('layout')

@section ('title', 'About Us')


@section ('content')
        <div class="relative p-4">
            <nav>
                <a href="/">Home</a>
                <a href="{{route('guitars.index')}}">Guitars</a>
                <a href="/about">About</a>
                <a href="/contact">Contact</a>
            </nav>
        </div>
        <div class="div">
        <h1>All starts here!!!</h1>
        </div>
        <div class="btn">
            <p>This is the about page</p>
        </div>
@endsection

