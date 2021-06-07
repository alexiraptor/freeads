@extends('template')
@section('content')
<!-- component -->
@if(session()->has('info'))
<div class="notification is-success">
    {{ session('info') }}
</div>
@endif

<div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3">
@foreach($ads as $ad)
    <!-- component -->
    <div class="mt-9">
        <div class="container mt-9 mx-auto bg-gray-100 py-10 flex justify-center">
            <div class=" mt-9 bg-white w-80 shadow-lg cursor-pointer rounded transform hover:scale-105 duration-300 ease-in-out">
                <div class="">
                    @if($ad->image !== null)
                        <img class="w-80 h-60 bg-cover bg-center" src="{{ asset('images/' . $ad->image) }}" alt="logement" >
                    @else
                        <img class="w-80 h-60 bg-cover bg-center" src="../img/default.jpg" alt="logement" >
                    @endif
                </div>
                
                <div class="p-4">
                    <h2 class="text-2xl uppercase">{{ $ad->title }}</h2>
                    <p class="font-light text-gray-500 text-lg my-2">${{ $ad->price }}</p>
                    <div class="flex items-center mt-4 text-gray-700">
                        <svg class="h-6 w-6 fill-current" viewBox="0 0 512 512">
                            <path d="M256 32c-88.004 0-160 70.557-160 156.801C96 306.4 256 480 256 480s160-173.6 160-291.199C416 102.557 344.004 32 256 32zm0 212.801c-31.996 0-57.144-24.645-57.144-56 0-31.357 25.147-56 57.144-56s57.144 24.643 57.144 56c0 31.355-25.148 56-57.144 56z"/>
                        </svg>
                        <h1 class="px-2 text-sm"> {{ $ad->city }}</h1>
                    </div>
                    <div class="flex items-center mt-4 text-gray-700">
                        <i class="fas fa-house-user ml-1 mb-1"></i>
                        <h1 class="px-2 text-sm"> {{ $ad->surface }} m²</h1>
                    </div>
                    {{-- actions crud --}}
                    @if(Auth::check())
                    @if(Request::user()->role === "admin")
                    <div class="flex item-center justify-center">
                        {{-- <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                            <a href="{{ route('ads.create') }}">
                                <i class="fas fa-plus-circle"></i>
                            </a>
                        </div> --}}
                        <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                            <a href="{{ route('ads.show', $ad->id) }}">
                                <i class="far fa-eye"></i>
                            </a>
                        </div>
                        <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                            <a href="{{ route('ads.edit', $ad->id) }}">
                                <i class="fas fa-pencil-alt"></i>
                            </a>
                        </div>
                        <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                            <form action="{{ route('ads.destroy', $ad->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit"><i class="far fa-trash-alt"></i></button>
                            </form>
                        </div>
                    </div>
                    
                    
                    @endif
                    @endif
                    
                </div>
            </div>
        </div>
    </div>
    
    @endforeach
</div>
<div class="container mx-auto bg-gray-100 py-10 flex justify-center">
    {{ $ads->links() }}
</div>
@endsection
