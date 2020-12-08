<div class="flex p-4 {{ $loop->last ? '' : 'border-b border-b-gray-400' }}">
    <div class="mr-2 flex-shrink-0">
        <a href="{{ route('profiles', $tweet->user->username) }}"><img class="rounded-full mr-2" src="{{ $tweet->user->avatar }}" alt="{{ $tweet->user->username }}" height="50" width="50"></a>
    </div>

    <div>
        <h5 class="font-bold mb-4"><a href="{{ route('profiles', $tweet->user->username) }}">{{ $tweet->user->name }}</a></h5>
        <p class="text-sm">
            {{ $tweet->body }}
        </p>
    </div>
</div>