<div class="bg-indigo-50 rounded-lg shadow-md p-4 hover:shadow-lg transition duration-300">
    <a href="{{ $url }}" class="flex items-center justify-center">
        <div class="rounded-full bg-indigo-50 text-white p-3 mr-3">
            <img src="{{ asset('images/' . $picture) }}" alt="Icon" width="27" height="27">
        </div>
        <div class="text-lg font-semibold">{{ $title }}</div>
    </a>
</div>
