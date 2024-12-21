{{--
<nav class="flex mb-6 border-b">
    <div class="flex md:space-x-4 space-x-2">
        <button
                data-target="experience"
                class="tab-link text-gray-500 hover:bg-blue-800 hover:text-white focus:ring-5 font-medium rounded-lg text-sm px-8 py-1"
        >
            Resume
        </button>
        <button
                data-target="project"
                class="tab-link text-gray-500 hover:bg-blue-800 hover:text-white focus:ring-5 font-medium rounded-lg text-sm px-8 py-1"
        >
            Project
        </button>
        <button
                data-target="blod"
                class="tab-link text-gray-500 hover:bg-blue-800 hover:text-white focus:ring-5 font-medium rounded-lg text-sm px-8 py-1"
        >
            Blog
        </button>
    </div>
</nav>--}}
@if(Route::has('login'))
    <livewire:welcome.navigation />
@endif
