<aside class="bg-white rounded-lg shadow-md p-6">
    <!-- Profile Header -->
    <div class="relative w-full h-48">
        <img src="https://via.placeholder.com/300x200" alt="Header Image" class="rounded-lg object-cover w-full h-full" />
        <img src="https://via.placeholder.com/80" alt="Profile Picture" class="absolute bottom-[-40px] left-1/2 transform -translate-x-1/2 rounded-full border-4 border-white shadow-md" />
    </div>
    
    <!-- Name and Info -->
    <div class="text-center mt-10">
        <h1 class="text-2xl font-semibold">Cristopher Abbott</h1>
        <p class="text-gray-500 text-sm">Full Stack Developer • USA</p>
    </div>
    
    <!-- Skills -->
    <div class="mt-6 text-center">
        <div class="flex flex-wrap justify-center gap-2">
            @foreach(['JavaScript', 'React', 'Node.js', 'Python', 'CI/CD'] as $skill)
                <span class="bg-gray-200 px-2 py-1 rounded text-sm">{{ $skill }}</span>
            @endforeach
        </div>
    </div>
    
    <!-- Download CV Button -->
    <div class="mt-6 text-center">
        <a href="#" class="bg-blue-500 text-white px-4 py-2 rounded-lg shadow hover:bg-blue-600">
            Download CV ⬇
        </a>
    </div>
    
    <!-- About Me -->
    <div class="mt-6">
        <h3 class="text-lg font-semibold mb-2">About me</h3>
        <p class="text-sm text-gray-600 leading-6">
            I am passionate about using technology to solve real-world problems. I am always looking for new ways to improve user experiences.
        </p>
    </div>
    
    <!-- Contact Info -->
    <div class="mt-6">
        <h3 class="text-lg font-semibold mb-2">Information</h3>
        <ul class="text-sm text-gray-600 space-y-2">
            <li><strong>Location:</strong> Mountain View, CA</li>
            <li><strong>Experience:</strong> >8 years</li>
            <li><strong>Availability:</strong> In 2 months</li>
            <li><strong>Relocation:</strong> No</li>
        </ul>
    </div>
</aside>
