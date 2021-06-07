@extends('template')
@section('content')
<div class="formulaire-centre text-center">
    <header class="text-center">
    <div class="text-center text-2xl mb-4 mt-4">Update existing Ad</div>
</div>
            {{-- Formulaire de Modification d'un Ad --}}
            @if(session('status'))
                <div class="alert alert-success mb-1 mt-1">
                    {{ session('status') }}
                </div>
            @endif
           
            <form action="{{ route('ads.update', $ad->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="field formulaire-center text-center">
                    <label class="label">Title</label>
                    <div class="control">
                        <input class="form-control rounded" type="text" name="title" value="{{ old('title', $ad->title) }}" placeholder="New Title" required pattern="^[A-Za-z '-]+$" maxlength="20">
                    </div>
                    @error('title')
                    <p class="help is-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="field formulaire-center text-center">
                    <label class="label">Description</label>
                    <div class="form-control rounded">
                        <textarea class="form-control rounded" type="text" name="description" value="{{ old('description', $ad->description) }}" placeholder="New Description" required pattern="^[A-Za-z '-]+$"></textarea>
                    </div>
                    @error('description')
                    <p class="help is-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="field formulaire-center text-center">
                    <label class="label">Price</label>
                    <div class="form-control rounded">
                        <input class="form-control rounded" type="number" name="price" value="{{ old('price', $ad->price) }}" placeholder="New Price" required min="1">
                    </div>
                    @error('price')
                    <p class="help is-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="field formulaire-center text-center">
                    <label class="label">Street</label>
                    <div class="control">
                        <input class="form-control rounded" type="text" name="street" value="{{ old('street', $ad->street) }}" placeholder="New Street" required maxlength="30">
                    </div>
                    @error('street')
                    <p class="help is-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="field formulaire-center text-center">
                    <label class="label">Postcode</label>
                    <div class="control">
                        <input class="form-control rounded" type="number" name="postcode" value="{{ old('postcode', $ad->postcode) }}" placeholder="New Postcode" required>
                    </div>
                    @error('postcode')
                    <p class="help is-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="field formulaire-center text-center">
                    <label class="label">City</label>
                    <div class="control">
                        <input class="form-control rounded" type="text" name="city" value="{{ old('city', $ad->city) }}" placeholder="New City" required maxlength="30">
                    </div>
                    @error('city')
                    <p class="help is-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="field formulaire-center text-center">
                    <label class="label">Surface</label>
                    <div class="control">
                        <input class="form-control rounded" type="number" name="surface" value="{{ old('surface', $ad->surface) }}" placeholder="New Surface" required min="1">
                    </div>
                    @error('surface')
                    <p class="help is-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="field formulaire-center text-center">
                    <label class="label">Room</label>
                    <div class="control">
                        <input class="form-control rounded" type="number" name="room" value="{{ old('room', $ad->room) }}" placeholder="New Room Number" required min="1">
                    </div>
                    @error('room')
                    <p class="help is-danger">{{ $message }}</p>
                    @enderror
                    <div class="mb-2">
                        <label class="label">Category</label>
                        <div class="form-group">
                        <select name="category_id" class="rounded" id="category_id">
                            <option value="{{ old('category_id', $ad->category_id) }}" disabled>Select</option>
                            <option value="1">LOFT</option>
                            <option value="2">VILLA</option>
                        </select>
                            @error('category_id')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-2">
                    <label class="label">Image</label>
                        <div class="form-group">
                            <input type="file" name="image" class="form-control rounded" value="../images/{{ old('image', $ad->image) }}" placeholder="Image" required>
                            @error('image')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                <div class="field formulaire-center text-center">
                    <div class="inline-block mr-2 mt-2 mb-8">
                        <button type="submit" class="focus:outline-none text-white text-sm py-2.5 px-5 rounded-md bg-blue-500 hover:bg-blue-600 hover:shadow-lg"><i class="fas fa-plus-circle mr-1"></i>Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection