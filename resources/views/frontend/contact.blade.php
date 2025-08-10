@extends('layouts.app')

@section('content')
    <!-- Main Content -->
    <div class="max-w-4xl mx-auto px-6 py-16 text-center">
        <h1 class="text-4xl font-bold text-blue-600 mb-4">Contact Us</h1>
        <p class="text-lg text-gray-600 leading-relaxed">
            Welcome to <span class="font-semibold text-blue-500">IBlog</span> — your go-to platform for modern and creative blogging.
            We aim to connect readers and writers through engaging, insightful, and inspiring content.
        </p>

        <div class="mt-8">
            <a href="{{ url('/') }}"
               class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-semibold px-6 py-3 rounded-full shadow-lg transition">
                Back to Home
            </a>
        </div>
    </div>
@endsection

