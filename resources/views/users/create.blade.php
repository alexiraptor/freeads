@extends('template')
@section('content')

    <div class="formulaire-centre text-center">
        <header class="text-center">
        <div class="text-center text-2xl mb-4 mt-4">Create new User</div>
    </div>
    <div class="">
        <div class="content">
            <form action="{{ route('users.store') }}" method="POST">
                @csrf
                <div class="row formulaire-center text-center">
                    <div class="mb-2">
                        <div class="form-group">
                            <input type="text" name="nickname" class="form-control rounded" placeholder="Nickname" required pattern="^[A-Za-z '-]+$" maxlength="12">
                        @error('nickname')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                        </div>
                    @error('nickname')
                    <p class="help is-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="row formulaire-center text-center">
                    <div class="mb-2">
                        <div class="form-group">
                            <input type="text" name="login" class="form-control rounded" placeholder="Login" required pattern="^[A-Za-z '-]+$" maxlength="12">
                        @error('login')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                        </div>
                        <div class="row formulaire-center text-center">
                    <div class="mb-2 mt-2">
                        <div class="form-group">
                            <input type="email" name="email" class="form-control rounded" placeholder="Email address" required>
                        @error('email')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                        </div>
                        <div class="row formulaire-center text-center">
                    <div class="mb-2 mt-2">
                        <div class="form-group">
                            <input type="password" name="password" class="form-control rounded" placeholder="Password" required pattern="^[A-Za-z '-]+$" maxlength="20">
                        @error('password')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                        </div>
                    </div>
                <div class="row formulaire-center text-center">
                    <div class="mb-2">
                        <div class="form-group">
                            <input type="number" name="phone_number" class="form-control rounded" placeholder="Phone number" required pattern="[0-9]{2} [0-9]{2} [0-9]{2} [0-9]{2} [0-9]{2}">
                        @error('title')
                            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                        @enderror
                        </div>
                    </div>
                <div class="mb-2">
                        {{-- <div class="form-group">
                        <select name="role" class="rounded" id="role">
                            <option value="" disabled>Select</option>
                            <option value="0">USER</option>
                            <option value="1">ADMIN</option>
                        </select>
                            @error('role')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                            @enderror
                        </div> --}}
                    </div>  
                @error('role')
                <p class="help is-danger">{{ $message }}</p>
                @enderror
        </div>
                <div class="inline-block mr-2 mt-2 mb-8">
                        <button type="submit" class="focus:outline-none text-white text-sm py-2.5 px-5 rounded-md bg-blue-500 hover:bg-blue-600 hover:shadow-lg"><i class="fas fa-plus-circle mr-1"></i>Create</button>
                    </div>
        </form>
    </div>
</div>
</div>
@endsection