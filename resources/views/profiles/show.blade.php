<x-app>
    <header class="mb-6 relative">
        <div class="relative">
            <img class="mb-2" src="/images/default-profile-banner.jpg" alt="{{ $user->name }}'s banner">
            <img class="rounded-full mr-2 absolute bottom-0 transform -translate-x-1/2 translate-y-1/2" src="{{ $user->avatar }}" alt="{{ $user->name }}" width="150" style="left: 50%">
        </div>
        <div class="flex justify-between items-center mb-6">
            <div style="max-width: 270px">
                <h2 class="font-bold text-2xl">{{ $user->name }}</h2>
                <p class="text-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
            </div>
            <div class="flex">
                @if(auth()->user()->is($user))
                    <a class="rounded-full border border-gray-300 py-2 px-4 text-black text-xs mr-2" href="{{ route('profiles', $user) }}/edit">Edit Profile</a>
                @endif

                <x-follow-button :user="$user">

                </x-follow-button>
            </div>
        </div>
        <p class="text-sm">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda dolor dolore eius, error hic ipsa iusto laboriosam, laborum libero magni, nemo nisi non officia praesentium quos rerum sequi similique sunt?
        </p>
    </header>

    @include('_timeline', [
    'tweets' => $tweets
])
</x-app>