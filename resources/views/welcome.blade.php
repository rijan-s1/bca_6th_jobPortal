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
    <header class="flex justify-between items-center bg-green-600 px-10 py-3 text-white shadow-md">
        <h2 class="font-bold text-2xl tracking-wide">JobFinder</h2>

        <div class="flex w-1/2 max-w-md gap-2">
            <input type="search" placeholder="Search for jobs..."
                class="px-3 py-2 w-full rounded-lg text-black outline-none focus:ring-2 focus:ring-green-400">
            <button
                class="bg-white text-green-600 px-4 py-2 rounded-lg font-semibold hover:bg-green-100 transition">0</button>
        </div>

        <div>
            <a href="#" class="text-sm font-medium hover:underline hover:text-green-200 transition">Login</a>
        </div>
    </header>

    <!-- Job Listings -->
    <main class="px-12 mt-8 grid md:grid-cols-2 lg:grid-cols-3 gap-6">
        @for ($i = 0; $i < 6; $i++)
            <a href="#"
                class="bg-white rounded-xl shadow-sm hover:shadow-lg transition duration-300 p-5 border border-gray-100 hover:border-green-300">
                <h3 class="font-semibold text-lg text-gray-800 mb-2">Job Title {{ $i + 1 }}</h3>
                <p class="text-gray-600 text-sm line-clamp-2 mb-3">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi, deserunt alias! {{ $i + 1 }}
                </p>

                <div class="flex justify-between text-xs text-gray-500 mb-2">
                    <div class="flex flex-col">
                        <span>Company Pvt. Ltd.</span>
                        <span>Chitwan, Nepal</span>
                    </div>
                    <div class="text-right">
                        <span>Posted 2 days ago</span><br>
                        <span>Applicants: 10</span>
                    </div>
                </div>

                <div class="flex flex-wrap gap-2 mt-2 text-xs">
                    <span class="bg-green-50 text-green-600 px-3 py-1 rounded-full">Full-Time</span>
                    <span class="bg-green-50 text-green-600 px-3 py-1 rounded-full">Remote</span>
                </div>
            </a>
        @endfor
    </main>

    <!-- Footer -->
<footer class="bg-green-600 text-white py-10 px-8 mt-16">
    <div class="max-w-7xl mx-auto grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-8">

      <!-- Brand / About -->
      <div>
        <h3 class="text-2xl font-bold mb-3">JobFinder</h3>
        <p class="text-sm text-gray-100 leading-relaxed">
          Helping you connect with the right opportunities. Find your dream job easily and efficiently.
        </p>
        <div class="flex space-x-4 mt-4">
          <a href="#" class="hover:text-gray-200 transition"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="hover:text-gray-200 transition"><i class="fab fa-twitter"></i></a>
          <a href="#" class="hover:text-gray-200 transition"><i class="fab fa-linkedin-in"></i></a>
          <a href="#" class="hover:text-gray-200 transition"><i class="fab fa-instagram"></i></a>
        </div>
      </div>

      <!-- Company -->
      <div>
        <h4 class="font-semibold text-lg mb-3">Company</h4>
        <ul class="space-y-2 text-sm">
          <li><a href="#" class="hover:text-gray-200 transition">About Us</a></li>
          <li><a href="#" class="hover:text-gray-200 transition">Careers</a></li>
          <li><a href="#" class="hover:text-gray-200 transition">Blog</a></li>
        </ul>
      </div>

      <!-- Support -->
      <div>
        <h4 class="font-semibold text-lg mb-3">Support</h4>
        <ul class="space-y-2 text-sm">
          <li><a href="#" class="hover:text-gray-200 transition">Help Center</a></li>
          <li><a href="#" class="hover:text-gray-200 transition">Contact Us</a></li>
          <li><a href="#" class="hover:text-gray-200 transition">FAQs</a></li>
        </ul>
      </div>

      <!-- Legal -->
      <div>
        <h4 class="font-semibold text-lg mb-3">Legal</h4>
        <ul class="space-y-2 text-sm">
          <li><a href="#" class="hover:text-gray-200 transition">Privacy Policy</a></li>
          <li><a href="#" class="hover:text-gray-200 transition">Terms of Service</a></li>
          <li><a href="#" class="hover:text-gray-200 transition">Cookie Policy</a></li>
        </ul>
      </div>
    </div>

    <!-- Bottom Line -->
    <div class="border-t border-green-400 mt-10 pt-6 text-center text-sm text-gray-100">
      © {{ date('Y') }} <span class="font-semibold">JobFinder</span>. All rights reserved.
    </div>
  </footer>

  <!-- Font Awesome (for icons) -->
  <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

</body>

</html>
