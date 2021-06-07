@extends('template')
@section('content')
    <!-- component -->
    <div class="overflow-x-auto">
        <div class="min-w-screen min-h-screen bg-gray-100 flex items-center justify-center bg-gray-100 font-sans overflow-hidden">
            <div>
                <div class="inline-block mr-2 mt-2">
                    <a type="button" href="{{ route('ads.create') }}" class="focus:outline-none text-white text-sm py-2.5 px-5 rounded-md bg-blue-500 hover:bg-blue-600 hover:shadow-lg"><i class="fas fa-plus-circle mr-1"></i>create ad</a>
                 </div>
                <div class="bg-white shadow-md rounded my-6">
                    @if(session()->has('info'))
                        <div>
                            {{ session('info') }}
                        </div>
                    @endif
                    <table class="min-w-max w-full table-auto">
                        <thead>
                            <tr class="bg-blue-200 text-gray-600 uppercase text-sm leading-normal">
                                {{-- <th class="py-3 px-6 text-left">Image</th> --}}
                                <th class="py-3 px-6 text-left">Title</th>
                                <th class="py-3 px-6 text-center">City</th>
                                <th class="py-3 px-6 text-center">Price</th>
                                <th class="py-3 px-6 text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600 text-sm font-light">
                            @foreach($ads as $ad)
                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                <td class="py-3 px-6 text-left">
                                    <div class="flex items-center">
                                        <div class="mr-2">
                                            @if($ad->image !== null)
                                                <img class="w-6 h-6 rounded-full" src="{{ asset('images/' . $ad->image) }}" alt="logement" >
                                            @else
                                                <img class="w-6 h-6 rounded-full" src="../img/default.jpg" alt="logement" >
                                            @endif
                                        </div>
                                        <span>{{ $ad->title }}</span>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-center">
                                    <span>{{ $ad->city }}</span>   
                                </td>
                                <td class="py-3 px-6 text-center">
                                    <span class="bg-yellow-200 text-yellow-600 py-1 px-3 rounded-full text-xs">${{ $ad->price }}</span>   
                                </td>
                                <td class="py-3 px-6 text-center">
                                    {{-- actions crud --}}
                                    <div class="flex item-center justify-center">
                                        {{-- <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                            <a href="{{ route('ads.create') }}">
                                                <i class="fas fa-plus-circle"></i>
                                            </a>
                                        </div> --}}
                                        <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                            <a href="{{ route('ads.show', $ad->id) }}">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                </svg>
                                            </a>
                                        </div>
                                        <div class="w-4 mr-2 transform hover:text-purple-500 hover:scale-110">
                                            <a href="{{ route('ads.edit', $ad->id) }}">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                </svg>
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
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                {{ $ads->links() }}
            </div>
        </div>
    </div>
@endsection