<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{$app_name}}</title>
    <link rel="icon" href="{{$app_logo}}" type="image/x-icon">
    <style>
        .carousel {
            position: relative;
            box-shadow: 0px 1px 6px rgba(0, 0, 0, 0.64);
            margin-top: 26px;
            margin-bottom: 26px;
            left: 210px;
            width: 80%;
        }

        .carousel-inner {
            position: relative;
            overflow: hidden;
            width: 100%;
        }

        .carousel-open:checked + .carousel-item {
            position: static;
            opacity: 100;
        }

        .carousel-item {
            position: absolute;
            opacity: 0;
            -webkit-transition: opacity 0.6s ease-out;
            transition: opacity 0.6s ease-out;
        }

        .carousel-item img {
            display: block;
            height: auto;
            max-width: 100%;
        }
        .carousel-control {
            background: rgba(0, 0, 0, 0.28);
            border-radius: 50%;
            color: #fff;
            cursor: pointer;
            display: none;
            font-size: 40px;
            height: 40px;
            line-height: 35px;
            position: absolute;
            top: 50%;
            -webkit-transform: translate(0, -50%);
            cursor: pointer;
            -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
            text-align: center;
            width: 40px;
            z-index: 10;
        }

        .carousel-control.prev {
            left: 2%;
        }

        .carousel-control.next {
            right: 2%;
        }
        .carousel-control:hover {
            background: rgba(0, 0, 0, 0.8);
            color: #aaaaaa;
        }
        #carousel-1:checked ~ .control-1,
        #carousel-2:checked ~ .control-2,
        #carousel-3:checked ~ .control-3 {
            display: block;
        }
        .carousel-indicators {
            list-style: none;
            margin: 0;
            padding: 0;
            position: absolute;
            bottom: 2%;
            left: 0;
            right: 0;
            text-align: center;
            z-index: 10;
        }
        .carousel-indicators li {
            display: inline-block;
            margin: 0 5px;
        }

        .carousel-bullet {
            color: #fff;
            cursor: pointer;
            display: block;
            font-size: 35px;
        }
        .carousel-bullet:hover
        {
            color: #aaaaaa;
        }
        #carousel-1:checked ~ .control-1 ~ .carousel-indicators li:nth-child(1) .carousel-bullet,
        #carousel-2:checked ~ .control-2 ~ .carousel-indicators li:nth-child(2) .carousel-bullet,
        #carousel-3:checked ~ .control-3 ~ .carousel-indicators li:nth-child(3) .carousel-bullet {
            color: #428bca;
        }
        #title {
            width: 100%;
            position: absolute;
            padding: 0px;
            margin: 0px auto;
            text-align: center;
            font-size: 27px;
            color: rgba(255, 255, 255, 1);
            font-family: 'Open Sans', sans-serif;
            z-index: 9999;
            text-shadow: 0px 1px 2px rgba(0, 0, 0, 0.33), -1px 0px 2px rgba(255, 255, 255, 0);
        }
        @media (max-width: 768px) and (min-width: 320px) {
            .carousel {
                left: 65px;
            }
        }
        @media (max-width: 1024px) and (min-width: 769px) {
            .carousel {
                left: 85px;
            }
        }
        @media (max-width: 1440px) and (min-width: 1025px) {
            .carousel {
                left: 110px;
            }
        }
        @media (max-width: 1920px) and (min-width: 1441px) {
            .carousel {
                left: 125px;
            }
        }
    </style>
    <script src="{{asset('/assets/frontEnd/css/tailwind.css')}}"></script>
</head>
<body class="bg-gray-100 font-sans leading-relaxed tracking-wide">
    <div class="max-w-7xl mx-auto my-8 px-4 md:px-8 grid grid-cols-1 md:grid-cols-3 gap-8">
        <!-- Sidebar Section -->
        <aside class="bg-white rounded-lg shadow-md p-6">
            <!-- Profile Header -->
            <div class="relative w-full h-48">
                <img src="{{$cover_image}}" alt="Header Image" class="rounded-lg object-cover w-full h-full"/>
                <img src="{{$profile_image}}" alt="Profile Picture" class="absolute bottom-[-40px] left-64 transform
                 -translate-x-1/2 rounded-full border-4 border-white shadow-md w-2/6">
            </div>
            <!-- Name and Info -->
            <div class="text-center mt-10">
                <h1 class="text-2xl font-semibold">Cristopher Abbott</h1>
                <p class="text-gray-500 text-sm text-justify">
                    I am a professional web developer with 5 years of experience in web application development. I have developed a wide range of websites using PHP, Laravel, HTML, CSS, JavaScript, jQuery, and MySQL including sites for startup companies and small businesses. My core competency lies in complete end-end management of a new website development project, and I am seeking opportunities to build websites from the ground up for you or your business.</p>
            </div>

            <!-- Skills -->
            <div class="mt-6 text-center">
                <div class="flex flex-wrap justify-center gap-2">
                    <span class="bg-blue-500 text-white px-2 py-1 rounded-full text-xs">PHP</span>
                    <span class="bg-blue-500 text-white px-2 py-1 rounded-full text-xs">Laravel</span>
                    <span class="bg-blue-500 text-white px-2 py-1 rounded-full text-xs">HTML</span>
                    <span class="bg-blue-500 text-white px-2 py-1 rounded-full text-xs">CSS</span>
                    <span class="bg-blue-500 text-white px-2 py-1 rounded-full text-xs">JavaScript</span>
                    <span class="bg-blue-500 text-white px-2 py-1 rounded-full text-xs">jQuery</span>
                    <span class="bg-blue-500 text-white px-2 py-1 rounded-full text-xs">MySQL</span>
                </div>
            </div>
            <!-- Download CV Button -->
            <div class="mt-6">
                <h3 class="text-lg font-semibold mb-2">About me</h3>
                <p class="text-sm text-gray-600 leading-6">
                    I am passionate about using technology to solve real-world problems. I am always looking for new ways to improve user experiences.
                </p>
            </div>
            <div class="mt-6 text-center">
                <a href="#" class="bg-blue-500 text-white px-4 py-2 rounded-lg shadow hover:bg-blue-600">
                    Download CV <span class="text-xs ml-2"><i class="fas fa-download"></i></span>
                </a>
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
        <!-- Projects Section -->
        <main class="md:col-span-2 bg-white rounded-lg shadow-md p-6">
            <!-- Navigation Tabs -->
            <livewire:tabs-component />
            <!-- Tab Content -->
            <livewire:about-component />
            <livewire:experience-component />
            <livewire:project-component />

        </main>
        <footer class="md:col-span-3 bg-white rounded-lg shadow-md p-6">
            Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
        </footer>
    </div>
    <!-- JavaScript -->
    @livewireScripts

</body>
</html>

