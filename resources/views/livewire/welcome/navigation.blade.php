<nav class="flex flex-wrap items-center justify-between border-b mb-6">
    <!-- Left Section: Tabs -->
    <div class="flex md:space-x-4 space-x-2">
        <button data-target="about" class="tab-link bg-blue-800 text-white focus:ring-2 focus:ring-blue-300 font-medium rounded-lg text-sm px-8 py-1">
            About
        </button>
        <button data-target="experience" class="tab-link text-gray-500 hover:bg-blue-800 hover:text-white focus:ring-2 focus:ring-blue-300 font-medium rounded-lg text-sm px-8 py-1">
            Resume
        </button>
        <button data-target="project" class="tab-link text-gray-500 hover:bg-blue-800 hover:text-white focus:ring-2 focus:ring-blue-300 font-medium rounded-lg text-sm px-8 py-1">
            Project
        </button>
        <button data-target="pricing" class="tab-link text-gray-500 hover:bg-blue-800 hover:text-white focus:ring-2 focus:ring-blue-300 font-medium rounded-lg text-sm px-8 py-1">
            Pricing
        </button>
    </div>
    
    <!-- Right Section: Authentication Links -->
    <div class="flex flex-1 justify-end -mx-3">
        @auth
            <a href="{{ url('/dashboard') }}" class="tab-link text-gray-500 hover:bg-blue-800 hover:text-white focus:ring-2 focus:ring-blue-300 font-medium rounded-lg text-sm px-8 py-1">
                Dashboard
            </a>
        @else
            <a href="{{ route('login') }}" class="tab-link text-gray-500 hover:bg-blue-800 hover:text-white focus:ring-2 focus:ring-blue-300 font-medium rounded-lg text-sm px-8 py-1">
                Log in
            </a>
            @if (Route::has('register'))
                <a href="{{ route('register') }}" class="tab-link text-gray-500 hover:bg-blue-800 hover:text-white focus:ring-2 focus:ring-blue-300 font-medium rounded-lg text-sm px-8 py-1">
                    Register
                </a>
            @endif
        @endauth
    </div>
</nav>
<script>
    document.querySelectorAll('.tab-link').forEach(button => {
        button.addEventListener('click', () => {
            // Hide all tab contents
            document.querySelectorAll('.tab-content').forEach(content => {
                content.style.display = 'none';
            });

            // Remove active class from all buttons
            document.querySelectorAll('.tab-link').forEach(btn => {
                btn.classList.remove('bg-blue-800', 'text-white');
                btn.classList.add('text-gray-500');
            });

            // Show the selected tab content
            const target = button.getAttribute('data-target');
            document.getElementById(target).style.display = 'block';

            // Add active class to clicked button
            button.classList.add('bg-blue-800', 'text-white');
        });
    });
</script>

