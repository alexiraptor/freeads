@extends('template')
@section('content')
<!-- component -->
<div class="formulaire-centre text-center">
    <header class="text-center">
    <div class="text-center text-2xl mb-4 mt-4">Create new Ad</div>
</div>
            {{-- Formulaire de Création d'un Ad --}}
            @if(session('status'))
                <div class="alert alert-success mb-1 mt-1">
                    {{ session('status') }}
                </div>
            @endif
           
            <form action="{{ route('ads.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
            
                <div class="row formulaire-center text-center">
                    <div class="mb-2">
                        <div class="form-group">
                            <input type="text" name="title" class="form-control rounded" placeholder="Title" required pattern="^[A-Za-z '-]+$" maxlength="20">
                        @error('title')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                        </div>
                    </div>
                    <div class="mb-0.5">
                        <div class="form-group">
                            <textarea class="form-control rounded" style="height:150px" type="text" name="description" placeholder="Description" required pattern="^[A-Za-z '-]+$"></textarea>
                            @error('description')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-2">
                        <div class="form-group">
                            <input type="number" name="price" class="form-control rounded" placeholder="Price" required min="1">
                            @error('price')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-2">
                        <div class="form-group">
                            <input type="text" name="street" class="form-control rounded" placeholder="Street" required maxlength="30">
                            @error('street')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-2">
                        <div class="form-group">
                            <input type="number" name="postcode" class="form-control rounded" placeholder="Postcode" required>
                            @error('postcode')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-2">
                        <div class="form-group">
                            <input type="text" name="city" class="form-control rounded" placeholder="City" required maxlength="30">
                            @error('city')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-2">
                        <div class="form-group">
                            <input type="number" name="surface" class="form-control rounded" placeholder="Surface" required min="1">
                            @error('surface')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-2">
                        <div class="form-group">
                            <input type="number" name="room" class="form-control rounded" placeholder="Room" required min="1">
                            @error('room')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="mb-2">
                    <label class="label">Category</label>
                        <div class="form-group">
                        <select name="category_id" class="rounded" id="category_id">
                            <option value="" disabled>Select</option>
                            <option value="1">LOFT</option>
                            <option value="2">VILLA</option>
                        </select>
                            @error('category_id')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>  
                    <div class="mb-2">
                    <label class="label">Image</label>
                        <div class="form-group">
                            <input type="file" name="image" class="form-control rounded" placeholder="Image" required>
                            @error('image')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="inline-block mr-2 mt-2 mb-8">
                        <button type="submit" class="focus:outline-none text-white text-sm py-2.5 px-5 rounded-md bg-blue-500 hover:bg-blue-600 hover:shadow-lg"><i class="fas fa-plus-circle mr-1"></i>Create</button>
                    </div>
                </div>
            </form>
            
        </div>
    </div>
</div>
@endsection