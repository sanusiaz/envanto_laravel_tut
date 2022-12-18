@extends('layouts.app')

@section('title', 'Create New Gallery')

@section('content')
<div>
    <form method="POST" action="{{ route('gallery.store') }}" class="form bg-white p-6 border-1" enctype="multipart/form-data">
        <div>
            <label class="text-sm" for="gallery-name">Name</label>
            <input class="border-1 text-lg" type="text" name="name" id="gallery-name">

            @error('name')
            <small class="form-error">{{ $message }}</small>
        @enderror
        </div>


        <div>
            <label class="text-sm" for="gallery-brand">Gallert ALT</label>
            <input class="border-1 text-lg" type="text" name="alt" id="gallery-brand">
            @error('alt')
                <small class="form-error">{{ $message }}</small>
            @enderror
        </div>
        
        
        <div>
            <label class="text-sm" for="gallery-image">Image: </label>
            <input class="border-1" type="file" name="image" id="gallery-image">
        </div>
        @error('image')
            <small class="form-error">{{ $message }}</small>
        @enderror

        <button type="submit">Submit Page</button>

        @csrf
    </form>
    </form>
</div>
@endsection