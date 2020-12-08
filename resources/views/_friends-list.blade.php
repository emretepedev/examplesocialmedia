<div class="bg-gray-200 rounded-lg border border-gray-300 py-4 px-6">
    <h3 class="font-bold text-xl mb-4">Following</h3>
    <ul>
        @forelse(auth()->user()->follows as $user)
            <li class="{{ $loop->last ? '' : 'mb-4' }}">
                <div class="flex items-center text-sm">
                    <a href="{{ route('profiles', $user->username) }}"><img class="rounded-full mr-2" src="{{ $user->avatar }}" alt="" height="40" width="40"></a>
                    <a href="{{ route('profiles', $user->username) }}">{{ $user->name }}</a>
                </div>
            </li>
        @empty
            <li class="mb-4">
                <div class="flex items-center text-sm">
                    <a>No friends yet.</a>
                </div>
            </li>
        @endforelse
    </ul>
</div>