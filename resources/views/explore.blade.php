<x-app>
    <div>
        @foreach($users as $user)
            <div class="flex items-center mb-5">
                <div>
                    <a href="{{ route('profiles', $user) }}"><img class="mr-4" src="{{ $user->avatar }}" alt="{{ $user->name }}'s avatar" width="60"></a>
                </div>
                <div class="font-bold">
                    <a href="{{ route('profiles', $user) }}"><h4>{{'@'. $user->name }}</h4></a>
                </div>
            </div>
        @endforeach

        {{ $users->links('vendor.pagination.bootstrap-4') }}
    </div>
</x-app>
