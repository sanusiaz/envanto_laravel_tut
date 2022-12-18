@extends('layout.app')

@section('title', 'Create New Gallery')

@section('content')
<div>
    <form action="" class="form bg-white p-6 border-1">
        <div>
            <label class="text-sm" for="guitar-name">Guitar Name</label>
            <input class="border-1 text-lg" type="text" name="name" id="guitar-name">
        </div>


        <div>
            <label class="text-sm" for="guitar-brand">Guitar Brand</label>
            <input class="border-1 text-lg" type="text" name="brand" id="guitar-brand">
        </div>
        

        <div>
            <label class="text-sm" for="year-made">Year Made</label>
            <input class="border-1 text-lg" type="year" name="year" id="Year Made">
        </div>
    </form>
</div>
@endsection