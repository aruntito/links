@extends('layouts.public')

@section('title', 'TITORA Links | One place for all TITORA ecosystem profiles')
@section('description', 'Creators, products, brands and digital infrastructure.')

@section('content')
<div class="flex flex-col items-center w-full animate-fade-in-up">
    <!-- Hero Section -->
    <div class="text-center mb-16 mt-8">
        <h1 class="text-4xl md:text-5xl font-extrabold text-white mb-4 tracking-tight">TITORA Links</h1>
        <p class="text-lg text-gray-400 font-medium max-w-md mx-auto">
            One place for all TITORA ecosystem profiles. Creators, products, brands and digital infrastructure.
        </p>
    </div>

    <!-- Grid Cards -->
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 w-full">
        @foreach($profiles as $profile)
            <a href="{{ route('profile.show', $profile->slug) }}" class="group block bg-white/5 border border-white/10 rounded-3xl p-6 hover:bg-white/10 hover:border-white/20 transition-all duration-300 hover:-translate-y-1 shadow-lg relative overflow-hidden">
                <div class="absolute inset-0 bg-gradient-to-br from-white/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                
                <div class="flex flex-col items-center text-center relative z-10">
                    <!-- Avatar -->
                    @if($profile->avatar)
                        <img src="{{ Storage::disk('public')->url($profile->avatar) }}" 
                             alt="{{ $profile->name }}" 
                             class="w-20 h-20 rounded-full object-cover shadow-md border border-white/20 mb-4">
                    @else
                        <div class="w-20 h-20 rounded-full shadow-md border border-white/20 mb-4 bg-gradient-to-br from-indigo-500/20 to-purple-500/20 flex items-center justify-center text-2xl font-bold text-white tracking-widest shadow-inner">
                            {{ strtoupper(substr($profile->name, 0, 2)) }}
                        </div>
                    @endif

                    <!-- Details -->
                    <h2 class="text-xl font-bold text-white flex items-center justify-center gap-1 mb-1">
                        {{ $profile->name }}
                        @if($profile->is_verified)
                            <svg class="w-4 h-4 text-blue-400" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        @endif
                    </h2>
                    
                    @if($profile->headline)
                        <p class="text-sm text-indigo-300 font-medium mb-6 line-clamp-2">{{ $profile->headline }}</p>
                    @endif

                    <!-- Action -->
                    <div class="w-full mt-auto py-2.5 px-4 rounded-xl bg-white/10 border border-white/10 text-white text-sm font-semibold group-hover:bg-white/20 transition-colors">
                        Visit Profile
                    </div>
                </div>
            </a>
        @endforeach
    </div>
</div>
@endsection
