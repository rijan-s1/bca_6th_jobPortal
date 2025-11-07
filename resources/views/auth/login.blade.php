@extends('layouts.master')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-green-50 via-white to-emerald-50 py-10">

  <div class="flex w-full max-w-5xl mx-5 bg-white/70 backdrop-blur-xl shadow-2xl rounded-3xl overflow-hidden border border-white/40">

    <!-- Left Panel (Brand + Illustration) -->
    <div class="hidden md:flex md:w-1/2 bg-gradient-to-br from-green-600 to-emerald-500 text-white flex-col justify-center items-center p-10 relative">
      <div class="absolute inset-0 bg-black/10 backdrop-blur-md"></div>
      <div class="z-10 text-center">
        <h1 class="text-4xl font-extrabold mb-4 tracking-wide">Welcome Back!</h1>
        <p class="text-sm text-green-50 mb-8 leading-relaxed">
          Ready to find your dream job? Let’s get you signed in and back on track.
        </p>
        <img src="{{ asset('images/job.png') }}" class="w-56 mx-auto drop-shadow-lg" alt="Job Illustration">
      </div>
    </div>

    <!-- Right Panel (Login Form) -->
    <div class="w-full md:w-1/2 p-10 flex flex-col justify-center">
      <h2 class="text-3xl font-bold text-green-600 mb-2">Login to JobFinder</h2>
      <p class="text-sm text-gray-500 mb-8">Enter your credentials to continue</p>

      <!-- ✅ Corrected Form -->
      <form action="{{ route('login') }}" method="POST" class="space-y-6">
        @csrf

        <!-- Email -->
        <div>
          <label for="email" class="block text-gray-600 mb-2 text-sm font-medium">Email Address</label>
          <input id="email" type="email" name="email" placeholder="you@example.com"
                 class="w-full px-4 py-3 rounded-xl bg-white border border-gray-200 focus:outline-none focus:ring-2 focus:ring-green-400 shadow-sm transition"
                 required>
        </div>

        <!-- Password -->
        <div>
          <label for="password" class="block text-gray-600 mb-2 text-sm font-medium">Password</label>
          <input id="password" type="password" name="password" placeholder="••••••••"
                 class="w-full px-4 py-3 rounded-xl bg-white border border-gray-200 focus:outline-none focus:ring-2 focus:ring-green-400 shadow-sm transition"
                 required>
        </div>

        <!-- Remember + Forgot -->
        <div class="flex items-center justify-between text-sm">
          <label class="flex items-center gap-2">
            <input type="checkbox" name="remember" class="accent-green-500 rounded">
            <span class="text-gray-600">Remember me</span>
          </label>
          <a href="#" class="text-green-600 hover:underline">Forgot password?</a>
        </div>

        <!-- Submit -->
        <button type="submit"
          class="w-full py-3 bg-green-600 hover:bg-green-700 transition text-white font-semibold rounded-xl shadow-lg hover:shadow-green-500/30">
          <i class="fa-solid fa-right-to-bracket mr-2"></i> Login
        </button>
      </form>

      <!-- Register -->
      <p class="text-sm text-gray-600 mt-6 text-center">
        Don’t have an account?
        <a href="{{ route('register') }}" class="text-green-600 font-semibold hover:underline">Register Now</a>
      </p>
    </div>
  </div>
</div>
@endsection
