@extends('template')
@section('content')
<div class="card">
    <header class="card-header">
        <p class="card-header-title ">Modification d'un user</p>
    </header>
    <div class="card-content">
        <div class="content">
            <form action="{{ route('users.update', $user->id) }}" method="POST">
                @csrf
                @method('put')
                <div class="field">
                    <label class="label">Nickname</label>
                    <div class="control">
                        <input class="input @error('nickname') is-danger @enderror" type="text" name="nickname" value="{{ old('nickname', $user->nickname) }}" placeholder="Nickname du user">
                    </div>
                    @error('nickname')
                    <p class="help is-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="field">
                    <label class="label">login</label>
                    <div class="control">
                        <input class="input" type="text" name="login" value="{{ old('login', $user->login) }}" placeholder="Login du user">
                    </div>
                    @error('login')
                    <p class="help is-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="field">
                    <label class="label">email</label>
                    <div class="control">
                        <input class="input" type="text" name="email" value="{{ old('email', $user->email) }}" placeholder="email du user">
                    </div>
                    @error('email')
                    <p class="help is-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="field">
                    <label class="label">phone_number</label>
                    <div class="control">
                        <input class="input" type="text" name="phone_number" value="{{ old('phone_number', $user->phone_number) }}" placeholder="phone_number du user">
                    </div>
                    @error('phone_number')
                    <p class="help is-danger">{{ $message }}</p>
                    @enderror
                </div>
                <div class="field">
                    <label class="label">role</label>
                    <div class="control">
                        <label for="role-select">Role actuel : {{ $user->role }}</label>
                        <p>
                            <select name="role" id="role-select">
                                <option value="" disabled>choose</option>
                                <option value="user">user</option>
                                <option value="admin">admin</option>
                            </select>
                        </p>

                    </div>
                </div>
                @error('role')
                <p class="help is-danger">{{ $message }}</p>
                @enderror
        </div>
        <div class="field">
            <label class="label">password</label>
            <div class="control">
                <input class="input" type="text" name="password" value="{{ old('password', $user->password) }}" placeholder="password du user">
            </div>
            @error('password')
            <p class="help is-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="field">
            <div class="control">
                <button class="button is-link">Envoyer</button>
            </div>
        </div>
        </form>
    </div>
</div>
</div>
@endsection