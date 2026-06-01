@extends('layouts.public')

@section('title', $profile->seo_title ?: $profile->name . ' | TITORA Links')
@section('description', $profile->seo_description ?: $profile->bio)

@section('content')
@php
    $socialTypes = ['social', 'instagram', 'youtube', 'whatsapp', 'email'];
    $socialLinks = $profile->links->whereIn('type', $socialTypes);
    $mainLinks = $profile->links->whereNotIn('type', $socialTypes);
    $featuredLinks = $mainLinks->where('is_featured', true);
    $otherLinks = $mainLinks->where('is_featured', false);
@endphp

<div class="flex flex-col items-center w-full animate-fade-in-up">
    <!-- Avatar -->
    @if($profile->avatar)
        <img src="{{ Storage::disk('public')->url($profile->avatar) }}" 
             alt="{{ $profile->avatar_alt ?: $profile->name }}" 
             class="w-28 h-28 rounded-full object-cover shadow-lg border-2 border-white/10 mb-4">
    @else
        <div class="w-28 h-28 rounded-full shadow-lg border-2 border-white/10 mb-4 bg-white/5 flex items-center justify-center text-3xl font-bold text-white/50">
            {{ substr($profile->name, 0, 1) }}
        </div>
    @endif

    <!-- Name & Verified -->
    <h1 class="text-2xl font-bold text-white flex items-center gap-2 mb-1">
        {{ $profile->name }}
        @if($profile->is_verified)
            <svg class="w-5 h-5 text-blue-400" fill="currentColor" viewBox="0 0 24 24">
                <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        @endif
    </h1>

    <!-- Headline -->
    @if($profile->headline)
        <p class="text-indigo-300 font-medium text-sm mb-2 text-center">{{ $profile->headline }}</p>
    @endif

    <!-- Bio -->
    @if($profile->bio)
        <p class="text-gray-300 text-center text-sm mb-8 max-w-sm">{{ $profile->bio }}</p>
    @endif

    <!-- Links Container -->
    <div class="w-full space-y-4 mb-8">
        
        <!-- Featured Links -->
        @foreach($featuredLinks as $link)
            <a href="{{ route('links.redirect', $link->id) }}" 
               target="_blank" rel="noopener noreferrer"
               class="block w-full backdrop-blur-md bg-white/10 border border-white/20 hover:bg-white/20 hover:scale-[1.02] transition-all duration-300 rounded-2xl p-4 shadow-[0_4px_30px_rgba(0,0,0,0.1)] group relative overflow-hidden">
                <div class="absolute inset-0 bg-gradient-to-r from-indigo-500/10 to-purple-500/10 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                <div class="flex items-center justify-center relative z-10">
                    <span class="font-semibold text-white text-center">{{ $link->title }}</span>
                </div>
                @if($link->description)
                    <div class="text-xs text-gray-300 text-center mt-1 relative z-10">{{ $link->description }}</div>
                @endif
            </a>
        @endforeach

        <!-- Other Links -->
        @foreach($otherLinks as $link)
            <a href="{{ route('links.redirect', $link->id) }}" 
               target="_blank" rel="noopener noreferrer"
               class="block w-full backdrop-blur-sm bg-white/5 border border-white/10 hover:bg-white/10 hover:border-white/20 hover:scale-[1.01] transition-all duration-200 rounded-xl p-4 shadow-sm group">
                <div class="flex items-center justify-center">
                    <span class="font-medium text-gray-100 text-center">{{ $link->title }}</span>
                </div>
            </a>
        @endforeach

    </div>

    <!-- Social Links (Icons/Pills at the bottom) -->
    @if($socialLinks->count() > 0)
        <div class="flex flex-wrap justify-center gap-3">
            @foreach($socialLinks as $link)
                <a href="{{ route('links.redirect', $link->id) }}" 
                   target="_blank" rel="noopener noreferrer"
                   class="flex items-center justify-center px-4 py-2 rounded-full backdrop-blur-sm bg-white/5 border border-white/10 hover:bg-white/10 hover:text-white transition-colors text-sm text-gray-300">
                    {{ $link->title }}
                </a>
            @endforeach
        </div>
    @endif
</div>
@endsection
