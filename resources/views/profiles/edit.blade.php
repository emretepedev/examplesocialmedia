<x-app>
    <form method="POST" action="{{ route('profiles', $user->username) }}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>

            <div class="col-md-6 mt-1 mb-2">
                <input id="name" type="text" class="form-control border border-gray-900 @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required>

                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="username" class="col-md-4 col-form-label text-md-right">Name</label>

            <div class="col-md-6 mt-1 mb-2">
                <input id="username" type="text" class="form-control border border-gray-900 @error('username') is-invalid @enderror" name="username" value="{{ $user->username }}" required>

                @error('username')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right">Email</label>

            <div class="col-md-6 mt-1 mb-2">
                <input id="email" type="email" class="form-control border border-gray-900 @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required>

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div>
            <div class="form-group row">
                <label for="avatar" class="col-md-4 col-form-label text-md-right">Avatar</label>

                <div class="col-md-6 mt-1 mb-2">
                    <input id="avatar" type="file" class="form-control border border-gray-900 @error('avatar') is-invalid @enderror" name="avatar" value="{{ $user->avatar }}">

                    @error('avatar')
                    <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <img src="{{ $user->avatar }}" alt="your avatar">
        </div>

        <div class="form-group row">
            <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

            <div class="col-md-6 mt-1 mb-2">
                <input id="password" type="password" class="form-control border border-gray-900 @error('password') is-invalid @enderror" name="password" required>

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="password_confirmation" class="col-md-4 col-form-label text-md-right">Password Confirmation</label>

            <div class="col-md-6 mt-1 mb-2">
                <input id="password_confirmation" type="password" class="form-control border border-gray-900 @error('password_confirmation') is-invalid @enderror" name="password_confirmation" required>

                @error('password_confirmation')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>

        <div class="flex justify">
            <div class="form-group row mb-0">
                <div class="col-md-8 offset-md-4">
                    <button type="submit" class="px-6 py-3 rounded text-sm uppercase bg-blue-600 text-white">
                        Update
                    </button>
                </div>
            </div>

                <a href="{{ route('profiles', $user) }}" class="ml-4 px-6 py-3 rounded text-sm uppercase bg-blue-600 text-white">
                    Cancel
                </a>
            </div>
        </div>
    </form>
</x-app>