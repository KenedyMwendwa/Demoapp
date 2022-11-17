@extends ('layout')

@section ('content')
<div>

<form class ="form bg-white p-6 border-1" action="{{ route('guitars.store') }}" method="post">
    @csrf
    <div>
        <label class ="text-sm" for="guitar-name">Guitar Name</label>
        <input class="text-lg border-1" type="text" id="guitar-name" name="guitar-name">
    </div>
    <div>
        <label class ="text-sm" for="brand">Brand</label>
        <input class ="text-lg border-1" type="text" id="brand" name="brand">
    </div>
    <div>
        <label class="text-sm" for="year">Year Made</label>
        <input class ="text-lg border-1" type="text" id="year" name="year">
    </div>
    <div>
        <button class="border-1" type="submit">Submit</button>
    </div>
</form>

</div>
@endsection