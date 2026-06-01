@extends('layouts.ecosystem')

@section('title', $profile->seo_title ?: 'SMXM | Culture Moves Faster Than Marketing')
@section('description', $profile->seo_description ?: 'High-velocity attention agency. Volume, speed, and authenticity.')
@if($profile->avatar)
@section('og_image', Storage::disk('public')->url($profile->avatar))
@endif

@section('theme_styles')
<style>
    body {
        background-color: #f1f1f1; /* Off-white / light grey for a high-fashion / culture look */
        color: #000000;
        overflow-x: hidden;
    }
    .dark-mode-override {
        background-color: #000000;
        color: #ffffff;
    }
    /* Bold, tight, brutalist typography */
    .font-impact {
        font-family: 'Inter', sans-serif;
        letter-spacing: -0.04em;
    }
    .marquee {
        white-space: nowrap;
        overflow: hidden;
        display: inline-block;
        animation: marquee 20s linear infinite;
    }
    @keyframes marquee {
        0% { transform: translate3d(0, 0, 0); }
        100% { transform: translate3d(-50%, 0, 0); }
    }
</style>
@endsection

@section('content')
@php
    $featuredLinks = $profile->links->where('is_featured', true);
@endphp

<div class="w-full animate-fade-in-up font-sans dark-mode-override selection:bg-pink-500/30 selection:text-white">
    
    <!-- Navbar -->
    <header class="w-full px-6 py-6 flex items-center justify-between mix-blend-difference sticky top-0 z-50">
        <div class="text-3xl font-black tracking-tighter text-white">SMXM.</div>
        <a href="mailto:hello@smxm.co" class="px-6 py-2 bg-white text-black font-bold rounded-full text-xs uppercase tracking-widest hover:bg-pink-500 hover:text-white transition-colors duration-300">Contact</a>
    </header>

    <!-- 1. Hero Section -->
    <section class="min-h-[85vh] flex flex-col justify-center px-6 relative">
        <div class="max-w-7xl mx-auto w-full relative z-10">
            <h1 class="text-6xl md:text-[8rem] lg:text-[11rem] font-impact font-black leading-[0.85] text-white mix-blend-difference mb-12">
                CULTURE<br>MOVES FASTER<br>THAN<br>MARKETING.
            </h1>
        </div>
        
        <!-- Abstract gradient orb for background tension -->
        <div class="absolute bottom-0 right-0 w-[600px] h-[600px] bg-gradient-to-tr from-pink-600 to-orange-500 rounded-full filter blur-[150px] opacity-40 pointer-events-none -z-10 translate-x-1/4 translate-y-1/4"></div>
    </section>

    <!-- 2. The Formula -->
    <section class="py-32 bg-white text-black">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-sm font-bold uppercase tracking-widest text-gray-400 mb-16">The Math of Attention</h2>
            
            <div class="flex flex-col md:flex-row flex-wrap items-center justify-center gap-8 md:gap-16 text-center font-black text-4xl md:text-6xl font-impact">
                <div class="hover:text-pink-500 transition-colors">VOLUME</div>
                <div class="text-gray-300 font-sans font-normal">+</div>
                <div class="hover:text-pink-500 transition-colors">SPEED</div>
                <div class="text-gray-300 font-sans font-normal">+</div>
                <div class="hover:text-pink-500 transition-colors">AUTHENTICITY</div>
                <div class="text-gray-300 font-sans font-normal">+</div>
                <div class="hover:text-pink-500 transition-colors">DISTRIBUTION</div>
                <div class="text-gray-300 font-sans font-normal">=</div>
                <div class="text-transparent bg-clip-text bg-gradient-to-r from-pink-500 to-orange-500">ATTENTION</div>
            </div>
            
            <p class="text-center text-xl text-gray-500 font-medium max-w-3xl mx-auto mt-20 leading-relaxed">
                Traditional ad agencies optimize for perfection. We optimize for algorithmic velocity. You don't win by being perfect; you win by being native to the feed.
            </p>
        </div>
    </section>

    <!-- Marquee Divider -->
    <div class="bg-black text-white py-4 overflow-hidden border-y border-gray-900">
        <div class="marquee font-black text-2xl tracking-widest uppercase opacity-50">
            ATTENTION IS THE ONLY CURRENCY • DON'T BE BORING • ALGORITHMIC ARBITRAGE • MOVE FAST • ATTENTION IS THE ONLY CURRENCY • DON'T BE BORING • ALGORITHMIC ARBITRAGE • MOVE FAST • 
        </div>
    </div>

    <!-- 3. Core Mechanics -->
    <section class="py-32 bg-[#050505]">
        <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-px bg-gray-900 border border-gray-900">
            <div class="bg-[#0a0a0a] p-12 lg:p-16 group hover:bg-[#111] transition-colors">
                <div class="text-pink-500 font-mono text-sm mb-6">/01</div>
                <h3 class="text-4xl font-black mb-6 text-white font-impact tracking-tight">Content Engine</h3>
                <p class="text-gray-400 text-lg leading-relaxed">
                    High-volume, short-form video production. We build in-house content machines that output 30-60 native assets per month without burning out your team.
                </p>
            </div>
            <div class="bg-[#0a0a0a] p-12 lg:p-16 group hover:bg-[#111] transition-colors">
                <div class="text-pink-500 font-mono text-sm mb-6">/02</div>
                <h3 class="text-4xl font-black mb-6 text-white font-impact tracking-tight">UGC Network</h3>
                <p class="text-gray-400 text-lg leading-relaxed">
                    Sourcing, briefing, and managing micro-creators to generate raw, authentic assets. Ads that don't look like ads outperform everything else.
                </p>
            </div>
            <div class="bg-[#0a0a0a] p-12 lg:p-16 group hover:bg-[#111] transition-colors">
                <div class="text-pink-500 font-mono text-sm mb-6">/03</div>
                <h3 class="text-4xl font-black mb-6 text-white font-impact tracking-tight">Creator Distribution</h3>
                <p class="text-gray-400 text-lg leading-relaxed">
                    Seeding your brand into existing creator ecosystems. We buy distribution through strategic placements rather than just traditional media buying.
                </p>
            </div>
            <div class="bg-[#0a0a0a] p-12 lg:p-16 group hover:bg-[#111] transition-colors">
                <div class="text-pink-500 font-mono text-sm mb-6">/04</div>
                <h3 class="text-4xl font-black mb-6 text-white font-impact tracking-tight">Paid Amplification</h3>
                <p class="text-gray-400 text-lg leading-relaxed">
                    Putting algorithmic fuel on organic fire. Taking the winning assets from the content engine and scaling them rapidly through paid social channels.
                </p>
            </div>
        </div>
    </section>

    <!-- 4. Proof of Cultural Impact & Work -->
    <section class="py-32 bg-white text-black border-b border-gray-200">
        <div class="max-w-7xl mx-auto px-6 mb-24">
            <h2 class="text-sm font-bold uppercase tracking-widest text-gray-400 mb-16">Cultural Impact</h2>
            <div class="grid grid-cols-2 md:grid-cols-3 gap-12 font-impact uppercase">
                <div>
                    <div class="text-5xl md:text-7xl font-black mb-2 text-pink-500">240+</div>
                    <div class="text-lg font-bold tracking-tight">Campaigns Launched</div>
                </div>
                <div>
                    <div class="text-5xl md:text-7xl font-black mb-2 text-orange-500">1.2K</div>
                    <div class="text-lg font-bold tracking-tight">Creators Activated</div>
                </div>
                <div>
                    <div class="text-5xl md:text-7xl font-black mb-2 text-pink-500">15K</div>
                    <div class="text-lg font-bold tracking-tight">Assets Distributed</div>
                </div>
                <div>
                    <div class="text-5xl md:text-7xl font-black mb-2 text-orange-500">48</div>
                    <div class="text-lg font-bold tracking-tight">Cultural Moments Captured</div>
                </div>
                <div>
                    <div class="text-5xl md:text-7xl font-black mb-2 text-pink-500">300+</div>
                    <div class="text-lg font-bold tracking-tight">Distribution Nodes</div>
                </div>
                <div>
                    <div class="text-5xl md:text-7xl font-black mb-2 text-orange-500">Deep</div>
                    <div class="text-lg font-bold tracking-tight">Audience Penetration</div>
                </div>
            </div>
        </div>
    </section>

    @if($featuredLinks->count() > 0)
    <section class="py-32 bg-white text-black">
        <div class="max-w-7xl mx-auto px-6">
            <h2 class="text-6xl font-black font-impact tracking-tighter mb-16 uppercase">Deployments.</h2>
            <div class="grid lg:grid-cols-2 gap-8">
                @foreach($featuredLinks as $link)
                    <a href="{{ route('links.redirect', $link->id) }}" target="_blank" rel="noopener noreferrer" class="group block border-2 border-black p-8 hover:bg-black hover:text-white transition-all duration-300 relative overflow-hidden">
                        <div class="relative z-10 flex flex-col h-full justify-between">
                            <div>
                                <h3 class="font-black text-3xl font-impact mb-4 uppercase">{{ $link->title }}</h3>
                                @if($link->description)
                                    <p class="text-lg font-medium opacity-70 mb-8">{{ $link->description }}</p>
                                @endif
                            </div>
                            <div class="flex justify-between items-end">
                                <span class="text-sm font-bold uppercase tracking-widest border-b-2 border-current pb-1 inline-block">View Campaign</span>
                                <svg class="w-8 h-8 transform group-hover:translate-x-2 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="square" stroke-linejoin="miter" stroke-width="3" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>
    @endif

    <!-- 5. CTA -->
    <section class="py-40 bg-pink-500 text-black text-center px-6">
        <h2 class="text-6xl md:text-[8rem] font-black font-impact tracking-tighter leading-none mb-10 uppercase">
            Stop Playing<br>Safe.
        </h2>
        <a href="mailto:hello@smxm.co" class="inline-block px-12 py-5 bg-black text-white font-bold text-xl uppercase tracking-widest hover:scale-110 hover:bg-white hover:text-black transition-all duration-300">
            Get Proposal
        </a>
    </section>

</div>
@endsection
