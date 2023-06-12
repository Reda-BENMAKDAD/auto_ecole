<a href="{{ $url }}" class="rounded-lg bg-white bg-opacity-30 shadow-xl p-4 hover:shadow-2xl transition duration-300 backdrop-blur-lg">
    <div  class="flex items-center justify-center">
        <div class="rounded-full bg-white bg-opacity-50 shadow-inner p-3 mr-3">
            <img src="{{ asset('images/' . $picture) }}" alt="Icon" width="27" height="27">
        </div>
        <div class="text-lg font-semibold">{{ $title }}</div>
    </div>
</a>






<!-- 
    glassmorphisme
    <a href="{{ $url }}" class="rounded-lg bg-white bg-opacity-30 shadow-xl p-4 hover:shadow-2xl transition duration-300 backdrop-blur-lg">
        <div  class="flex items-center justify-center">
            <div class="rounded-full bg-white bg-opacity-50 shadow-inner p-3 mr-3">
                <img src="{{ asset('images/' . $picture) }}" alt="Icon" width="27" height="27">
            </div>
            <div class="text-lg font-semibold">{{ $title }}</div>
        </div>
    </a>

    neumorphisme
    <div class="bg-indigo-50 rounded-lg shadow-xl p-4 hover:shadow-2xl transition duration-300 w-50 h-50">
        <a href="{{ $url }}" class="flex items-center justify-center">
            <div class="rounded-full bg-indigo-50 shadow-inner p-3 mr-3">
                <img src="{{ asset('images/' . $picture) }}" alt="Icon" width="27" height="27">
            </div>
            <div class="text-lg font-semibold">{{ $title }}</div>
        </a>
    </div>

    normal
    <div class="bg-indigo-50 rounded-lg shadow-md p-4 hover:shadow-lg transition duration-300">
        <a href="{{ $url }}" class="flex items-center justify-center">
            <div class="rounded-full bg-indigo-50 text-white p-3 mr-3">
                <img src="{{ asset('images/' . $picture) }}" alt="Icon" width="27" height="27">
            </div>
            <div class="text-lg font-semibold">{{ $title }}</div>
        </a>
    </div>
-->