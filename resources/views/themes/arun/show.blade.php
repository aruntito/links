@extends('layouts.public')

@section('title', $profile->seo_title ?: 'Arun | Building Digital Infrastructure')
@section('description', $profile->seo_description ?: 'Founder operating system and digital infrastructure projects.')
@if($profile->avatar)
@section('og_image', Storage::disk('public')->url($profile->avatar))
@endif

@section('theme_styles')
<style>
    body {
        background-color: #050505;
        color: #eaeaea;
        background-image: 
            radial-gradient(at 0% 0%, rgba(30,30,30,1) 0px, transparent 50%),
            radial-gradient(at 100% 100%, rgba(20,20,20,1) 0px, transparent 50%);
        background-attachment: fixed;
    }
</style>
@endsection

@section('content')
@php
    $featuredLinks = $profile->links->where('is_featured', true);
@endphp

<div class="w-full max-w-5xl mx-auto px-6 py-20 animate-fade-in-up font-sans selection:bg-white/20">

    <!-- 1. Hero & Founder Statement -->
    <section class="mb-32">
        <div class="flex items-center gap-4 mb-16">
            @if($profile->avatar)
                <img src="{{ Storage::disk('public')->url($profile->avatar) }}" alt="{{ $profile->name }}" class="w-16 h-16 rounded-2xl object-cover grayscale hover:grayscale-0 transition-all duration-500 shadow-xl border border-white/10">
            @else
                <div class="w-16 h-16 rounded-2xl bg-gradient-to-br from-zinc-800 to-zinc-900 border border-white/10 flex items-center justify-center text-xl font-bold text-white shadow-xl">
                    AR
                </div>
            @endif
            <div>
                <h1 class="text-2xl font-bold tracking-tight text-white">{{ $profile->name }}</h1>
                <p class="text-zinc-500 font-medium">Founder & Engineer</p>
            </div>
        </div>

        <h2 class="text-5xl md:text-7xl font-extrabold tracking-tighter mb-8 leading-[1.1] text-transparent bg-clip-text bg-gradient-to-b from-white to-zinc-500">
            Building Digital<br>Infrastructure.
        </h2>
        <p class="text-xl md:text-2xl font-medium text-zinc-400 max-w-2xl leading-relaxed">
            I engineer and scale platforms at the intersection of growth marketing, machine trust, and creator economies.
        </p>
    </section>

    <!-- 2. About & Current Focus -->
    <section class="grid md:grid-cols-2 gap-16 mb-32 border-t border-zinc-800/50 pt-16">
        <div>
            <h3 class="text-sm font-bold text-zinc-500 uppercase tracking-widest mb-6">Current Focus</h3>
            <div class="bg-zinc-900/50 border border-zinc-800 rounded-2xl p-8 backdrop-blur-sm">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-2 h-2 rounded-full bg-emerald-500 animate-pulse"></div>
                    <span class="text-white font-bold">Scaling the TITORA Ecosystem</span>
                </div>
                <p class="text-zinc-400 leading-relaxed">
                    Currently actively deploying V2 infrastructures for DOOB and establishing the baseline perception architectures for KARADAVI.
                </p>
            </div>
        </div>
        <div>
            <h3 class="text-sm font-bold text-zinc-500 uppercase tracking-widest mb-6">Operating Philosophy</h3>
            <p class="text-zinc-400 leading-relaxed mb-4 text-lg">
                High leverage through code. Aesthetics as a feature. Zero friction engineering. 
            </p>
            <p class="text-zinc-500 leading-relaxed text-lg">
                I believe in building products that are structurally sound on the backend, and viscerally premium on the frontend.
            </p>
        </div>
    </section>

    <!-- 3. Brands (Ecosystem Cards) -->
    <section class="mb-32">
        <h3 class="text-sm font-bold text-zinc-500 uppercase tracking-widest mb-8 border-b border-zinc-800/50 pb-4">Ecosystem Brands</h3>
        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4">
            <a href="/titora" class="group relative overflow-hidden bg-zinc-900 border border-zinc-800 p-6 rounded-2xl hover:border-indigo-500/50 hover:bg-zinc-800/50 transition-all duration-300 h-48 flex flex-col justify-end">
                <div class="absolute inset-0 bg-gradient-to-t from-indigo-900/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
                <div class="relative z-10">
                    <div class="text-xs font-bold text-indigo-400 mb-2 uppercase tracking-wider opacity-0 group-hover:opacity-100 transition-opacity -translate-y-2 group-hover:translate-y-0 duration-300">Consultancy</div>
                    <h4 class="text-2xl font-bold text-white tracking-tight">TITORA</h4>
                </div>
            </a>
            
            <a href="/doob" class="group relative overflow-hidden bg-zinc-900 border border-zinc-800 p-6 rounded-2xl hover:border-emerald-500/50 hover:bg-zinc-800/50 transition-all duration-300 h-48 flex flex-col justify-end">
                <div class="absolute inset-0 bg-gradient-to-t from-emerald-900/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
                <div class="relative z-10">
                    <div class="text-xs font-bold text-emerald-400 mb-2 uppercase tracking-wider opacity-0 group-hover:opacity-100 transition-opacity -translate-y-2 group-hover:translate-y-0 duration-300">Infrastructure</div>
                    <h4 class="text-2xl font-bold text-white tracking-tight">DOOB</h4>
                </div>
            </a>

            <a href="/karadavi" class="group relative overflow-hidden bg-zinc-900 border border-zinc-800 p-6 rounded-2xl hover:border-zinc-400 hover:bg-zinc-800/50 transition-all duration-300 h-48 flex flex-col justify-end">
                <div class="absolute inset-0 bg-gradient-to-t from-zinc-600/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
                <div class="relative z-10">
                    <div class="text-xs font-bold text-zinc-300 mb-2 uppercase tracking-wider opacity-0 group-hover:opacity-100 transition-opacity -translate-y-2 group-hover:translate-y-0 duration-300">Intelligence</div>
                    <h4 class="text-2xl font-bold text-white tracking-tight font-serif italic">KARADAVI</h4>
                </div>
            </a>

            <a href="/smxm" class="group relative overflow-hidden bg-zinc-900 border border-zinc-800 p-6 rounded-2xl hover:border-pink-500/50 hover:bg-zinc-800/50 transition-all duration-300 h-48 flex flex-col justify-end">
                <div class="absolute inset-0 bg-gradient-to-t from-pink-900/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
                <div class="relative z-10">
                    <div class="text-xs font-bold text-pink-400 mb-2 uppercase tracking-wider opacity-0 group-hover:opacity-100 transition-opacity -translate-y-2 group-hover:translate-y-0 duration-300">Agency</div>
                    <h4 class="text-2xl font-bold text-white tracking-tighter">SMXM.</h4>
                </div>
            </a>
        </div>
    </section>

    <!-- 4/5. Projects & Featured Links -->
    @if($featuredLinks->count() > 0)
    <section class="mb-32">
        <h3 class="text-sm font-bold text-zinc-500 uppercase tracking-widest mb-8 border-b border-zinc-800/50 pb-4">Active Deployments & Resources</h3>
        <div class="space-y-4">
            @foreach($featuredLinks as $link)
                <a href="{{ route('links.redirect', $link->id) }}" target="_blank" rel="noopener noreferrer" class="group flex items-center justify-between p-6 bg-zinc-900/30 border border-zinc-800/80 rounded-xl hover:bg-zinc-800/50 hover:border-zinc-600 transition-all duration-300">
                    <div>
                        <h4 class="text-lg font-bold text-zinc-200 group-hover:text-white transition-colors">{{ $link->title }}</h4>
                        @if($link->description)
                            <p class="text-sm text-zinc-500 mt-1">{{ $link->description }}</p>
                        @endif
                    </div>
                    <svg class="w-5 h-5 text-zinc-600 group-hover:text-white transition-colors" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                </a>
            @endforeach
        </div>
    </section>
    @endif

    <!-- 6. Connect -->
    <section class="mb-20 text-center border-t border-zinc-800/50 pt-20">
        <h2 class="text-3xl font-bold tracking-tight text-white mb-6">Let's build something.</h2>
        <p class="text-zinc-400 mb-8 max-w-md mx-auto">Open for conversations about infrastructure, growth engineering, and perception networks.</p>
        <a href="mailto:arun@titora.co.in" class="inline-flex items-center justify-center px-8 py-4 bg-white text-black font-bold rounded-xl hover:scale-105 hover:bg-zinc-200 transition-all duration-300 shadow-[0_0_20px_rgba(255,255,255,0.1)]">
            arun@titora.co.in
        </a>
    </section>

</div>
@endsection
