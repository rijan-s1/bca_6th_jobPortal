<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Job Portal</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 text-gray-800">
    <!-- Header -->
    <header class="flex justify-between items-center bg-gradient-to-r from-green-600 to-emerald-500 px-10 py-4 text-white shadow-lg sticky top-0 z-50">
        <!-- Logo -->
        <div class="flex items-center space-x-2">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7l9 6 9-6M4 10v10h16V10m-8 6l8-5" />
          </svg>
          <h2 class="font-extrabold text-2xl tracking-wide">Job<span class="text-yellow-300">Finder</span></h2>
        </div>

        <!-- Search bar -->
        <div class="flex w-1/2 max-w-lg bg-white rounded-full overflow-hidden shadow-inner focus-within:ring-2 focus-within:ring-green-300 transition">
          <input
            type="search"
            placeholder="Search for jobs, companies, or skills..."
            class="px-5 py-2 w-full text-gray-800 outline-none"
          >
          <button class="bg-green-600 text-white px-5 flex items-center justify-center hover:bg-green-700 transition">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-4.35-4.35M10 18a8 8 0 100-16 8 8 0 000 16z" />
            </svg>
          </button>
        </div>

        <!-- User/Cart/Login section -->
        <div class="flex items-center space-x-5">
          <button class="relative bg-white text-green-600 px-3 py-2 rounded-full font-semibold hover:bg-green-100 transition flex items-center gap-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h18M9 3v18m6-18v18M3 9h18M3 15h18" />
            </svg>
            <span>0</span>
          </button>

          <a href="/login" class="bg-white text-green-600 px-5 py-2 rounded-full font-medium hover:bg-green-100 hover:text-green-700 transition">
            Login
          </a>
        </div>
      </header>


    <!-- Job Listings -->
    @yield('content')

<!-- Footer -->
<footer class="bg-gradient-to-r from-green-700 via-green-600 to-emerald-500 text-white pt-14 pb-8 px-8 mt-20 shadow-inner">
    <div class="max-w-7xl mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-10">

      <!-- Brand / About -->
      <div>
        <h3 class="text-3xl font-extrabold mb-4 tracking-wide flex items-center gap-2">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-yellow-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7l9 6 9-6M4 10v10h16V10m-8 6l8-5" />
          </svg>
          Job<span class="text-yellow-300">Finder</span>
        </h3>
        <p class="text-sm text-gray-100 leading-relaxed">
          Connecting talent with opportunities. Discover jobs, grow your career, and achieve your goals — all in one place.
        </p>
        <div class="flex space-x-4 mt-5">
          <a href="#" class="p-2 bg-white/10 rounded-full hover:bg-white/20 transition"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="p-2 bg-white/10 rounded-full hover:bg-white/20 transition"><i class="fab fa-twitter"></i></a>
          <a href="#" class="p-2 bg-white/10 rounded-full hover:bg-white/20 transition"><i class="fab fa-linkedin-in"></i></a>
          <a href="#" class="p-2 bg-white/10 rounded-full hover:bg-white/20 transition"><i class="fab fa-instagram"></i></a>
        </div>
      </div>

      <!-- Company -->
      <div>
        <h4 class="font-semibold text-lg mb-4 border-l-4 border-yellow-300 pl-3">Company</h4>
        <ul class="space-y-2 text-sm">
          <li><a href="#" class="hover:translate-x-1 inline-block transition hover:text-yellow-200">About Us</a></li>
          <li><a href="#" class="hover:translate-x-1 inline-block transition hover:text-yellow-200">Careers</a></li>
          <li><a href="#" class="hover:translate-x-1 inline-block transition hover:text-yellow-200">Blog</a></li>
        </ul>
      </div>

      <!-- Support -->
      <div>
        <h4 class="font-semibold text-lg mb-4 border-l-4 border-yellow-300 pl-3">Support</h4>
        <ul class="space-y-2 text-sm">
          <li><a href="#" class="hover:translate-x-1 inline-block transition hover:text-yellow-200">Help Center</a></li>
          <li><a href="#" class="hover:translate-x-1 inline-block transition hover:text-yellow-200">Contact Us</a></li>
          <li><a href="#" class="hover:translate-x-1 inline-block transition hover:text-yellow-200">FAQs</a></li>
        </ul>
      </div>

      <!-- Legal -->
      <div>
        <h4 class="font-semibold text-lg mb-4 border-l-4 border-yellow-300 pl-3">Legal</h4>
        <ul class="space-y-2 text-sm">
          <li><a href="#" class="hover:translate-x-1 inline-block transition hover:text-yellow-200">Privacy Policy</a></li>
          <li><a href="#" class="hover:translate-x-1 inline-block transition hover:text-yellow-200">Terms of Service</a></li>
          <li><a href="#" class="hover:translate-x-1 inline-block transition hover:text-yellow-200">Cookie Policy</a></li>
        </ul>
      </div>

    </div>

    <!-- Bottom Line -->
    <div class="border-t border-white/20 mt-12 pt-6 text-center text-sm text-gray-100">
      © {{ date('Y') }} <span class="font-semibold text-yellow-300">JobFinder</span>. All rights reserved.
    </div>
  </footer>



  <!-- Font Awesome (for icons) -->
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

</body>

</html>
