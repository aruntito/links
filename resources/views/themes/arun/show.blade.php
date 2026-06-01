@extends('layouts.ecosystem')

@section('title', $profile->seo_title ?: 'Arun | Systems Architect')
@section('description', $profile->seo_description ?: 'Building platforms at the intersection of growth systems, machine trust, and creator infrastructure.')
@if($profile->avatar)
@section('og_image', Storage::disk('public')->url($profile->avatar))
@endif

@section('theme_styles')
<style>
    body {
        background-color: #000000;
        color: #e5e5e5;
    }
    .grid-bg {
        background-image: 
            linear-gradient(to right, rgba(255,255,255,0.05) 1px, transparent 1px),
            linear-gradient(to bottom, rgba(255,255,255,0.05) 1px, transparent 1px);
        background-size: 50px 50px;
    }
    .node-card {
        background: rgba(10, 10, 10, 0.8);
        border: 1px solid rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(10px);
    }
</style>
@endsection

@section('content')
@php
    $featuredLinks = $profile->links->where('is_featured', true);
@endphp

<div class="w-full min-h-screen animate-fade-in-up font-sans grid-bg">
    
    <div class="max-w-5xl mx-auto px-6 py-24">

        <!-- 1. Hero & Central Node -->
        <section class="mb-32">
            <div class="flex items-center gap-4 mb-12">
                @if($profile->avatar)
                    <img src="{{ Storage::disk('public')->url($profile->avatar) }}" alt="{{ $profile->name }}" class="w-12 h-12 rounded-lg object-cover grayscale opacity-80 border border-white/20">
                @else
                    <div class="w-12 h-12 rounded-lg bg-zinc-900 border border-white/20 flex items-center justify-center text-sm font-bold text-white">
                        AR
                    </div>
                @endif
                <div>
                    <h1 class="text-lg font-bold text-white tracking-tight">System Architect</h1>
                    <div class="flex items-center gap-2 text-xs font-mono text-zinc-500">
                        <span class="w-2 h-2 rounded-full bg-green-500 animate-pulse"></span>
                        Status: Deploying Infrastructure
                    </div>
                </div>
            </div>

            <h2 class="text-5xl md:text-7xl font-medium tracking-tighter mb-8 leading-[1.1] text-white">
                Building Digital<br>Infrastructure.
            </h2>
            <p class="text-xl md:text-2xl text-zinc-400 max-w-3xl leading-relaxed">
                Building platforms at the intersection of growth systems, machine trust, and creator infrastructure.
            </p>
        </section>

        <!-- 2. Current Focus -->
        <section class="mb-32">
            <h3 class="text-xs font-mono text-zinc-500 uppercase tracking-widest mb-8 border-b border-zinc-800 pb-4">Current Focus / Deployment Pipeline</h3>
            
            <div class="grid md:grid-cols-3 gap-6">
                <div class="node-card p-6 rounded-xl hover:border-blue-500/50 transition-colors">
                    <div class="text-xs font-mono text-blue-500 mb-4">ENV: PRODUCTION</div>
                    <h4 class="text-xl font-bold text-white mb-2">TITORA V2</h4>
                    <p class="text-sm text-zinc-400">Rebuilding the growth systems consultancy layer into a standardized engineering model.</p>
                </div>
                
                <div class="node-card p-6 rounded-xl hover:border-emerald-500/50 transition-colors">
                    <div class="text-xs font-mono text-emerald-500 mb-4">ENV: STAGING</div>
                    <h4 class="text-xl font-bold text-white mb-2">DOOB Infrastructure</h4>
                    <p class="text-sm text-zinc-400">Scaling the audience routing engine and partner APIs for cross-platform deployment.</p>
                </div>

                <div class="node-card p-6 rounded-xl hover:border-zinc-400 transition-colors">
                    <div class="text-xs font-mono text-zinc-400 mb-4">ENV: RESEARCH</div>
                    <h4 class="text-xl font-bold text-white mb-2">KARADAVI Canonical Node</h4>
                    <p class="text-sm text-zinc-400">Establishing the perception infrastructure required for entity authority in LLM synthesis.</p>
                </div>
            </div>
        </section>

        <!-- 3. Ecosystem Map (Structural Relationship) -->
        <section class="mb-32">
            <h3 class="text-xs font-mono text-zinc-500 uppercase tracking-widest mb-8 border-b border-zinc-800 pb-4">Ecosystem Architecture Map</h3>
            
            <div class="node-card p-12 rounded-xl">
                <p class="text-center text-sm text-zinc-400 mb-12 max-w-xl mx-auto">
                    The ecosystem operates as a vertical stack. Attention is acquired, structural systems are built, infrastructure scales the delivery, and intelligence secures the foundation.
                </p>
                
                <div class="flex flex-col items-center justify-center font-mono text-sm max-w-md mx-auto">
                    <!-- Node 1 -->
                    <a href="/smxm" class="w-full text-center border border-pink-500/30 bg-pink-500/5 p-4 rounded hover:bg-pink-500/10 transition-colors block">
                        <span class="text-white font-bold tracking-widest">SMXM</span><br>
                        <span class="text-xs text-zinc-500">Attention Layer</span>
                    </a>
                    
                    <div class="py-4 text-zinc-600">↓ routes to ↓</div>
                    
                    <!-- Node 2 -->
                    <a href="/titora" class="w-full text-center border border-blue-500/30 bg-blue-500/5 p-4 rounded hover:bg-blue-500/10 transition-colors block">
                        <span class="text-white font-bold tracking-widest">TITORA</span><br>
                        <span class="text-xs text-zinc-500">Systems Layer</span>
                    </a>
                    
                    <div class="py-4 text-zinc-600">↓ scales via ↓</div>
                    
                    <!-- Node 3 -->
                    <a href="/doob" class="w-full text-center border border-emerald-500/30 bg-emerald-500/5 p-4 rounded hover:bg-emerald-500/10 transition-colors block">
                        <span class="text-white font-bold tracking-widest">DOOB</span><br>
                        <span class="text-xs text-zinc-500">Infrastructure Layer</span>
                    </a>

                    <div class="py-4 text-zinc-600">↓ validated by ↓</div>
                    
                    <!-- Node 4 -->
                    <a href="/karadavi" class="w-full text-center border border-zinc-500/30 bg-zinc-500/5 p-4 rounded hover:bg-zinc-500/10 transition-colors block">
                        <span class="text-white font-bold tracking-widest font-serif italic">KARADAVI</span><br>
                        <span class="text-xs text-zinc-500 font-sans">Trust Layer</span>
                    </a>
                </div>
            </div>
        </section>

        <!-- 4. I/O (Featured Links) -->
        @if($featuredLinks->count() > 0)
        <section class="mb-32">
            <h3 class="text-xs font-mono text-zinc-500 uppercase tracking-widest mb-8 border-b border-zinc-800 pb-4">Data I/O (Inputs & Outputs)</h3>
            <div class="space-y-4">
                @foreach($featuredLinks as $link)
                    <a href="{{ route('links.redirect', $link->id) }}" target="_blank" rel="noopener noreferrer" class="group flex items-center justify-between p-6 node-card rounded-xl hover:bg-zinc-900 transition-colors">
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

        <!-- Footer -->
        <footer class="pt-16 border-t border-zinc-800/50 flex justify-between items-center text-xs font-mono text-zinc-600">
            <div>ARUN // SYSTEMS ARCHITECT</div>
            <div>SYS.OP. NORMAL</div>
        </footer>

    </div>
</div>
@endsection
