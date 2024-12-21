{{--
<div>
<nav class="flex flex-wrap items-center justify-between border-b mb-6">
    <!-- Left Section: Tabs -->
    <div class="flex md:space-x-4 space-x-2">
        <button
                wire:click="loadtab('about')"
                class="tab-link bg-blue-800 text-white focus:ring-2 focus:ring-blue-300 font-medium rounded-lg text-sm px-8 py-1">
            About
        </button>
        <button
                wire:click="loadtab('resume')"
                class="tab-link text-gray-500 hover:bg-blue-800 hover:text-white focus:ring-2 focus:ring-blue-300 font-medium rounded-lg text-sm px-8 py-1">
            Resume
        </button>
        <button
                wire:click="loadtab('project')"
                class="tab-link text-gray-500 hover:bg-blue-800 hover:text-white focus:ring-2 focus:ring-blue-300 font-medium rounded-lg text-sm px-8 py-1">
            Project
        </button>
        <button
                wire:click="loadtab('pricing')"
                class="tab-link text-gray-500 hover:bg-blue-800 hover:text-white focus:ring-2 focus:ring-blue-300 font-medium rounded-lg text-sm px-8 py-1">
            Pricing
        </button>
    </div>
</nav>
<div>
    @if ($view)
        @include($view)
    @else
        <div class="p-4 bg-gray-100 rounded-md">
            No content available.
        </div>
    @endif
</div>
</div>
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

            // Call Livewire's loadTab method to update the selected tab
        @this.call('loadTab', target);
        });
    });
</script>
--}}
<div>
    <!-- Tab Contents -->
    <div class="tab-content" id="about" style="{{ $currentTab == 'about' ? '' : 'display:none;' }}">
        @livewire('about-component')
    </div>
    <div class="tab-content" id="experience" style="{{ $currentTab == 'experience' ? '' : 'display:none;' }}">
        @livewire('experience-component')
    </div>
    <div class="tab-content" id="project" style="{{ $currentTab == 'project' ? '' : 'display:none;' }}">
        @livewire('project-component')
    </div>
    {{--<div class="tab-content" id="pricing" style="{{ $currentTab == 'pricing' ? '' : 'display:none;' }}">
        @livewire('pricing-component')
    </div>--}}
</div>
