@extends('layouts.master')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-green-50 via-white to-emerald-50 py-10">

  <div class="flex w-full max-w-5xl mx-5 bg-white/70 backdrop-blur-xl shadow-2xl rounded-3xl overflow-hidden border border-white/40">

    <!-- Left Panel (Brand + Illustration) -->
    <div class="hidden md:flex md:w-1/2 bg-gradient-to-br from-green-600 to-emerald-500 text-white flex-col justify-center items-center p-10 relative">
      <div class="absolute inset-0 bg-black/10 backdrop-blur-md"></div>
      <div class="z-10 text-center">
        <h1 class="text-4xl font-extrabold mb-4 tracking-wide">Join JobFinder!</h1>
        <p class="text-sm text-green-50 mb-8 leading-relaxed">
          Create your account and discover amazing career opportunities waiting for you.
        </p>
        <img src="{{ asset('images/job.png') }}" class="w-56 mx-auto drop-shadow-lg" alt="Job Illustration">
      </div>
    </div>

    <!-- Right Panel (Registration Form) -->
    <div class="w-full md:w-1/2 p-10 flex flex-col justify-center">
      <h2 class="text-3xl font-bold text-green-600 mb-2">Create Account</h2>
      <p class="text-sm text-gray-500 mb-8">Fill in your details to get started</p>

      <!-- Registration Form -->
      <form action="{{ route('register') }}" method="POST" class="space-y-5">
        @csrf

        <!-- Full Name -->
        <div>
          <label for="name" class="block text-gray-600 mb-2 text-sm font-medium">Full Name</label>
          <input id="name" type="text" name="name" placeholder="John Doe"
                 class="w-full px-4 py-3 rounded-xl bg-white border border-gray-200 focus:outline-none focus:ring-2 focus:ring-green-400 shadow-sm transition"
                 value="{{ old('name') }}" required>
          @error('name')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
          @enderror
        </div>

        <!-- Email -->
        <div>
          <label for="email" class="block text-gray-600 mb-2 text-sm font-medium">Email Address</label>
          <input id="email" type="email" name="email" placeholder="you@example.com"
                 class="w-full px-4 py-3 rounded-xl bg-white border border-gray-200 focus:outline-none focus:ring-2 focus:ring-green-400 shadow-sm transition"
                 value="{{ old('email') }}" required>
          @error('email')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
          @enderror
        </div>


        <!-- Password -->
        <div>
          <label for="password" class="block text-gray-600 mb-2 text-sm font-medium">Password</label>
          <input id="password" type="password" name="password" placeholder="••••••••"
                 class="w-full px-4 py-3 rounded-xl bg-white border border-gray-200 focus:outline-none focus:ring-2 focus:ring-green-400 shadow-sm transition"
                 required>
          @error('password')
            <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
          @enderror
        </div>

        <!-- Confirm Password -->
        <div>
          <label for="password_confirmation" class="block text-gray-600 mb-2 text-sm font-medium">Confirm Password</label>
          <input id="password_confirmation" type="password" name="password_confirmation" placeholder="••••••••"
                 class="w-full px-4 py-3 rounded-xl bg-white border border-gray-200 focus:outline-none focus:ring-2 focus:ring-green-400 shadow-sm transition"
                 required>
        </div>
        <!-- Profile Picture -->
<div>
    <label for="profile_photo" class="block text-gray-600 mb-2 text-sm font-medium">
      Profile Picture
    </label>
    <input id="profile_photo"
           type="file"
           name="profile_photo"
           accept="image/*"
           class="w-full px-4 py-3 rounded-xl bg-white border border-gray-200
                  focus:outline-none focus:ring-2 focus:ring-green-400
                  shadow-sm transition">
    @error('profile_photo')
      <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
    @enderror
  </div>

        <!-- Terms & Conditions -->
        <div class="flex items-start gap-2">
          <input type="checkbox" name="terms" id="terms" class="accent-green-500 rounded mt-1" required>
          <label for="terms" class="text-sm text-gray-600">
            I agree to the <a href="#" class="text-green-600 hover:underline">Terms & Conditions</a> and <a href="#" class="text-green-600 hover:underline">Privacy Policy</a>
          </label>
        </div>

        <!-- Submit -->
        <button type="submit"
          class="w-full py-3 bg-green-600 hover:bg-green-700 transition text-white font-semibold rounded-xl shadow-lg hover:shadow-green-500/30">
          <i class="fa-solid fa-user-plus mr-2"></i> Create Account
        </button>
      </form>

      <!-- Login Link -->
      <p class="text-sm text-gray-600 mt-6 text-center">
        Already have an account?
        <a href="{{ route('login') }}" class="text-green-600 font-semibold hover:underline">Login Here</a>
      </p>
    </div>
  </div>
</div>
@endsection
