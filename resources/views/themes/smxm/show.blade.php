@extends('layouts.public')

@section('title', $profile->seo_title ?: $profile->name . ' | SMXM')
@section('description', $profile->seo_description ?: $profile->bio)
@if($profile->avatar)
@section('og_image', Storage::disk('public')->url($profile->avatar))
@endif

@section('theme_styles')
<style>
    body {
        background: linear-gradient(135deg, #1e0b2d 0%, #3a0ca3 50%, #f72585 100%);
        background-attachment: fixed;
    }
</style>
@endsection

@section('content')
@php
    $socialTypes = ['social', 'instagram', 'youtube', 'whatsapp', 'email'];
    $socialLinks = $profile->links->whereIn('type', $socialTypes);
    $mainLinks = $profile->links->whereNotIn('type', $socialTypes);
    $featuredLinks = $mainLinks->where('is_featured', true);
    $otherLinks = $mainLinks->where('is_featured', false);
@endphp

<div class="flex flex-col items-center w-full animate-fade-in-up font-sans">
    <!-- Avatar -->
    @if($profile->avatar)
        <img src="{{ Storage::disk('public')->url($profile->avatar) }}" 
             alt="{{ $profile->avatar_alt ?: $profile->name }}" 
             class="w-32 h-32 rounded-full object-cover shadow-[0_10px_40px_rgba(247,37,133,0.4)] border-4 border-white/20 mb-6 hover:scale-105 transition-transform duration-300">
    @else
        <div class="w-32 h-32 rounded-full shadow-[0_10px_40px_rgba(247,37,133,0.4)] border-4 border-white/20 mb-6 bg-gradient-to-br from-purple-500 to-pink-500 flex items-center justify-center text-4xl font-extrabold text-white tracking-widest">
            {{ strtoupper(substr($profile->name, 0, 2)) }}
        </div>
    @endif

    <!-- Name & Verified -->
    <h1 class="text-3xl font-extrabold text-white flex items-center gap-2 mb-1 tracking-tight drop-shadow-md">
        {{ $profile->name }}
        @if($profile->is_verified)
            <svg class="w-6 h-6 text-pink-400 drop-shadow-md" fill="currentColor" viewBox="0 0 24 24">
                <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
        @endif
    </h1>

    <!-- Headline -->
    @if($profile->headline)
        <p class="text-pink-200 font-bold text-sm mb-3 text-center uppercase tracking-wider drop-shadow-sm">{{ $profile->headline }}</p>
    @endif

    <!-- Bio -->
    @if($profile->bio)
        <p class="text-white/90 text-center text-base mb-10 max-w-sm font-medium leading-relaxed drop-shadow-sm">{{ $profile->bio }}</p>
    @endif

    <!-- Links Container -->
    <div class="w-full space-y-4 mb-10">
        
        @if($mainLinks->isEmpty() && $socialLinks->isEmpty())
            <div class="w-full py-12 text-center text-white/70 bg-black/20 rounded-3xl border border-white/10 text-sm font-semibold backdrop-blur-md">
                Exciting things coming soon!
            </div>
        @endif

        <!-- Featured Links -->
        @foreach($featuredLinks as $link)
            <a href="{{ route('links.redirect', $link->id) }}" 
               target="_blank" rel="noopener noreferrer"
               class="block w-full bg-gradient-to-r from-pink-500 to-purple-600 hover:from-pink-400 hover:to-purple-500 hover:-translate-y-1 hover:scale-[1.02] hover:shadow-[0_15px_30px_rgba(247,37,133,0.4)] transition-all duration-300 rounded-full py-5 px-8 shadow-xl group relative overflow-hidden border border-white/20">
                <div class="flex items-center justify-center relative z-10">
                    <span class="font-bold text-white tracking-wide text-lg">{{ $link->title }}</span>
                </div>
                @if($link->description)
                    <div class="text-sm text-pink-100 text-center mt-1 relative z-10 font-medium">{{ $link->description }}</div>
                @endif
            </a>
        @endforeach

        <!-- Other Links -->
        @foreach($otherLinks as $link)
            <a href="{{ route('links.redirect', $link->id) }}" 
               target="_blank" rel="noopener noreferrer"
               class="block w-full bg-white/10 border border-white/20 hover:border-white/40 hover:bg-white/20 hover:-translate-y-1 transition-all duration-300 rounded-full py-4 px-6 shadow-lg group backdrop-blur-md">
                <div class="flex items-center justify-center">
                    <span class="font-semibold text-white tracking-wide">{{ $link->title }}</span>
                </div>
            </a>
        @endforeach

    </div>

    <!-- Social Links -->
    @if($socialLinks->count() > 0)
        <div class="flex flex-wrap justify-center gap-4 mt-4">
            @foreach($socialLinks as $link)
                <a href="{{ route('links.redirect', $link->id) }}" 
                   target="_blank" rel="noopener noreferrer"
                   title="{{ $link->title }}"
                   class="flex items-center justify-center w-14 h-14 rounded-full bg-white/10 border border-white/20 hover:bg-white hover:text-purple-600 hover:scale-110 hover:shadow-[0_0_20px_rgba(255,255,255,0.5)] transition-all duration-300 text-white shadow-lg backdrop-blur-md">
                   
                   @if($link->type === 'instagram' || strtolower($link->title) === 'instagram')
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
                   @elseif($link->type === 'youtube' || strtolower($link->title) === 'youtube')
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                   @elseif($link->type === 'whatsapp' || strtolower($link->title) === 'whatsapp')
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12.031 0C5.385 0 0 5.386 0 12.035c0 2.12.553 4.195 1.602 6.012L.475 24l6.104-1.602a11.967 11.967 0 005.452 1.312h.005c6.645 0 12.03-5.386 12.03-12.034C24.066 5.386 18.676 0 12.031 0zm0 21.727h-.003a9.98 9.98 0 01-5.083-1.385l-.364-.216-3.774.99.999-3.68-.237-.376a9.987 9.987 0 01-1.528-5.321c0-5.508 4.48-9.988 9.99-9.988 5.509 0 9.989 4.48 9.989 9.988 0 5.509-4.48 9.989-9.989 9.989zm5.474-7.487c-.3-.15-1.776-.877-2.051-.977-.276-.101-.477-.15-.678.15s-.777.978-.952 1.178c-.176.2-.352.225-.653.075-2.003-1.002-3.32-2.186-4.22-3.71-.151-.253.15-.228.725-1.378.1-.15.05-.276-.025-.426-.075-.15-.678-1.63-.928-2.233-.243-.585-.49-.505-.678-.515-.175-.008-.376-.008-.577-.008s-.527.075-.802.376c-.276.3-1.053 1.028-1.053 2.506 0 1.478 1.078 2.906 1.228 3.107.151.2 2.115 3.228 5.12 4.524.716.31 1.275.495 1.708.634.72.23 1.376.197 1.89.12.576-.086 1.776-.726 2.026-1.428.25-.702.25-1.303.175-1.428-.075-.126-.276-.2-.577-.35z"/></svg>
                   @elseif($link->type === 'email' || strtolower($link->title) === 'email')
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 12.713l11.985-8.71C23.636 2.27 21.968 1 20 1H4C2.031 1 .363 2.27.015 4.004L12 12.713zm0 2.574L0 6.58V20c0 1.657 1.343 3 3 3h18c1.657 0 3-1.343 3-3V6.58l-12 8.707z"/></svg>
                   @elseif(strtolower($link->title) === 'x' || strtolower($link->title) === 'twitter')
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M18.901 1.153h3.68l-8.04 9.19L24 22.846h-7.406l-5.8-7.584-6.638 7.584H.474l8.6-9.83L0 1.154h7.594l5.243 6.932ZM17.61 20.644h2.039L6.486 3.24H4.298Z"/></svg>
                   @elseif(strtolower($link->title) === 'linkedin')
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
                   @else
                        <!-- Generic Link Icon -->
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path fill-rule="evenodd" d="M12.53 16.28a.75.75 0 01-1.06 0l-7.5-7.5a.75.75 0 011.06-1.06L12 14.69l6.97-6.97a.75.75 0 111.06 1.06l-7.5 7.5z" clip-rule="evenodd" /></svg>
                   @endif
                </a>
            @endforeach
        </div>
    @endif
</div>
@endsection
