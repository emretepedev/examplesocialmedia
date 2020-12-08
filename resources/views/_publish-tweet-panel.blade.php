<div class="border border-blue-400 rounded-lg px-8 py-6 mb-8">
    <form method="POST" action="/tweets">
        @csrf

        <textarea class="w-full @error('body') border border-red-500 @enderror" name="body" placeholder="What's up doc?" required autofocus></textarea>
        @error('body')
        <div class="text-red-500 text-sm">
            {{ $message }}
        </div>
        @enderror

        <hr class="my-4">

        <footer class="flex justify-between items-center">
            <img class="rounded-full mr-2" src="{{ auth()->user()->avatar }}" alt="" width="40" height="40">
            <button class="bg-blue-500 hover:bg-blue-600 rounded-lg shadow py-2 px-6 text-white text-sm h-10" type="submit">Publish</button>
        </footer>
    </form>
</div>
