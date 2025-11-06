@extends('layouts.master')
@section('content')
<main class="px-12 mt-8 grid md:grid-cols-2 lg:grid-cols-3 gap-6">
    @for ($i = 0; $i < 6; $i++)
        <a href="/jobview"
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
@endsection
