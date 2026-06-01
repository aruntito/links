@extends('layouts.public')

@section('title', $profile->seo_title ?: 'SMXM | Attention Wins')
@section('description', $profile->seo_description ?: 'Social Media, Content, UGC, and Growth Campaigns for modern brands.')
@if($profile->avatar)
@section('og_image', Storage::disk('public')->url($profile->avatar))
@endif

@section('theme_styles')
<style>
    body {
        background-color: #050014;
        color: #ffffff;
        overflow-x: hidden;
    }
    .neon-text {
        text-shadow: 0 0 20px rgba(168, 85, 247, 0.5), 0 0 40px rgba(236, 72, 153, 0.3);
    }
    .neon-border {
        box-shadow: 0 0 15px rgba(168, 85, 247, 0.4), inset 0 0 15px rgba(236, 72, 153, 0.2);
    }
</style>
@endsection

@section('content')
@php
    $featuredLinks = $profile->links->where('is_featured', true);
@endphp

<div class="w-full animate-fade-in-up font-sans">
    
    <!-- Navbar -->
    <header class="fixed top-0 left-0 w-full px-6 py-6 z-50 mix-blend-difference">
        <div class="max-w-7xl mx-auto flex items-center justify-between">
            <div class="text-2xl font-black tracking-tighter text-white">SMXM.</div>
            <a href="mailto:hello@smxm.co" class="px-6 py-2 bg-white text-black font-bold rounded-full text-sm hover:scale-105 transition-transform duration-300">Let's Talk</a>
        </div>
    </header>

    <!-- 1. Hero Section -->
    <section class="relative min-h-screen flex items-center justify-center pt-20 overflow-hidden">
        <!-- Abstract gradient orbs -->
        <div class="absolute top-1/4 -left-32 w-96 h-96 bg-purple-600 rounded-full mix-blend-screen filter blur-[120px] opacity-70 animate-pulse"></div>
        <div class="absolute bottom-1/4 -right-32 w-96 h-96 bg-pink-600 rounded-full mix-blend-screen filter blur-[120px] opacity-70 animate-pulse" style="animation-delay: 2s;"></div>

        <div class="relative z-10 text-center px-6 max-w-5xl">
            <h1 class="text-7xl md:text-[9rem] font-black tracking-tighter leading-none mb-6 text-transparent bg-clip-text bg-gradient-to-br from-white via-pink-200 to-purple-500 neon-text drop-shadow-2xl">
                ATTENTION<br>WINS.
            </h1>
            <p class="text-xl md:text-3xl font-bold mb-12 flex flex-wrap justify-center gap-4 md:gap-8 text-white/90">
                <span>Content.</span>
                <span class="text-pink-500">•</span>
                <span>Social.</span>
                <span class="text-purple-500">•</span>
                <span>UGC.</span>
                <span class="text-pink-500">•</span>
                <span>Growth.</span>
            </p>
            <div class="flex justify-center">
                <a href="#proposal" class="px-10 py-5 bg-gradient-to-r from-purple-600 to-pink-500 text-white font-black text-lg rounded-full hover:shadow-[0_0_40px_rgba(236,72,153,0.6)] hover:-translate-y-1 transition-all duration-300 uppercase tracking-widest">
                    Get Proposal
                </a>
            </div>
        </div>
    </section>

    <!-- 2. Services Section (Marquee / Bold Text) -->
    <section class="py-24 bg-white text-black">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-5xl font-black mb-16 tracking-tighter uppercase">What We Do.</h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="group cursor-pointer">
                    <h3 class="text-3xl font-black mb-4 group-hover:text-pink-500 transition-colors">01<br>Strategy</h3>
                    <p class="text-lg font-medium text-gray-600">Platform-native playbooks designed to hack algorithmic reach.</p>
                </div>
                <div class="group cursor-pointer">
                    <h3 class="text-3xl font-black mb-4 group-hover:text-purple-500 transition-colors">02<br>Content</h3>
                    <p class="text-lg font-medium text-gray-600">High-volume, short-form video production that stops the scroll.</p>
                </div>
                <div class="group cursor-pointer">
                    <h3 class="text-3xl font-black mb-4 group-hover:text-pink-500 transition-colors">03<br>UGC</h3>
                    <p class="text-lg font-medium text-gray-600">Sourcing authentic creators to generate high-converting ad assets.</p>
                </div>
                <div class="group cursor-pointer">
                    <h3 class="text-3xl font-black mb-4 group-hover:text-purple-500 transition-colors">04<br>Growth</h3>
                    <p class="text-lg font-medium text-gray-600">Paid media scaling, community management, and audience monetization.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. Results Section -->
    <section class="py-32 relative">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-5xl font-black mb-20 tracking-tighter text-center uppercase text-white">The Math.</h2>
            <div class="grid md:grid-cols-3 gap-8 text-center">
                <div class="p-10 rounded-3xl bg-white/5 border border-white/10 backdrop-blur-md neon-border hover:bg-white/10 transition-colors duration-500">
                    <div class="text-6xl font-black text-transparent bg-clip-text bg-gradient-to-r from-pink-500 to-purple-500 mb-2">50M+</div>
                    <div class="text-xl font-bold text-gray-300">Organic Views</div>
                </div>
                <div class="p-10 rounded-3xl bg-white/5 border border-white/10 backdrop-blur-md neon-border hover:bg-white/10 transition-colors duration-500">
                    <div class="text-6xl font-black text-transparent bg-clip-text bg-gradient-to-r from-purple-500 to-pink-500 mb-2">3.2x</div>
                    <div class="text-xl font-bold text-gray-300">Average ROAS</div>
                </div>
                <div class="p-10 rounded-3xl bg-white/5 border border-white/10 backdrop-blur-md neon-border hover:bg-white/10 transition-colors duration-500">
                    <div class="text-6xl font-black text-transparent bg-clip-text bg-gradient-to-r from-pink-500 to-purple-500 mb-2">120+</div>
                    <div class="text-xl font-bold text-gray-300">Creators Managed</div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. Featured Links (CMS Integration) -->
    @if($featuredLinks->count() > 0)
    <section class="py-32 bg-[#0a0020] relative">
        <div class="max-w-5xl mx-auto px-6">
            <h2 class="text-5xl font-black mb-16 tracking-tighter uppercase text-center">Live Campaigns</h2>
            <div class="space-y-6">
                @foreach($featuredLinks as $link)
                    <a href="{{ route('links.redirect', $link->id) }}" target="_blank" rel="noopener noreferrer" class="group block relative overflow-hidden rounded-3xl bg-gradient-to-r from-purple-900/40 to-pink-900/40 border border-pink-500/30 p-8 md:p-10 hover:border-pink-500 hover:shadow-[0_0_30px_rgba(236,72,153,0.3)] transition-all duration-500">
                        <div class="absolute inset-0 bg-gradient-to-r from-purple-600/20 to-pink-600/20 translate-x-[-100%] group-hover:translate-x-0 transition-transform duration-700 ease-in-out"></div>
                        <div class="relative z-10 flex flex-col md:flex-row md:items-center justify-between gap-6">
                            <div>
                                <h3 class="font-black text-3xl md:text-4xl text-white mb-2">{{ $link->title }}</h3>
                                @if($link->description)
                                    <p class="text-lg font-medium text-pink-200/80">{{ $link->description }}</p>
                                @endif
                            </div>
                            <div class="shrink-0 w-16 h-16 rounded-full bg-white text-black flex items-center justify-center group-hover:scale-110 transition-transform duration-500">
                                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>
    @endif

    <!-- 6. CTA Section -->
    <section id="proposal" class="py-40 relative text-center">
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[800px] h-[800px] bg-gradient-to-r from-purple-600 to-pink-600 rounded-full mix-blend-screen filter blur-[200px] opacity-30"></div>
        <div class="relative z-10 max-w-4xl mx-auto px-6">
            <h2 class="text-6xl md:text-8xl font-black tracking-tighter mb-8 uppercase text-transparent bg-clip-text bg-gradient-to-b from-white to-gray-500">
                Take The<br>Market.
            </h2>
            <p class="text-2xl font-bold text-gray-300 mb-12">Stop playing safe. Let's make some noise.</p>
            <a href="mailto:hello@smxm.co" class="inline-block px-12 py-6 bg-white text-black font-black text-xl rounded-full hover:scale-110 transition-transform duration-300 uppercase tracking-widest shadow-[0_0_40px_rgba(255,255,255,0.3)]">
                Get Your Proposal
            </a>
        </div>
    </section>

</div>
@endsection
