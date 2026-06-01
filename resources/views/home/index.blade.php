@extends('layouts.ecosystem')

@section('title', 'The TITORA Ecosystem')
@section('description', 'Attention. Systems. Infrastructure. Intelligence.')

@section('theme_styles')
<style>
    body {
        background-color: #050505;
        color: #e5e5e5;
    }
    .dark-mode-override {
        background-color: #050505;
        color: #e5e5e5;
    }
    .stack-line {
        width: 1px;
        background: linear-gradient(to bottom, transparent, #333, transparent);
        margin: 0 auto;
    }
</style>
@endsection

@section('content')
<div class="w-full min-h-screen animate-fade-in-up font-sans dark-mode-override">
    
    <!-- Hero Section -->
    <div class="max-w-4xl mx-auto px-6 pt-32 pb-16 text-center">
        <h1 class="text-xs tracking-[0.3em] font-mono text-zinc-500 uppercase mb-8">The TITORA Ecosystem</h1>
        <div class="text-4xl md:text-6xl font-black tracking-tighter text-white mb-12 flex flex-col gap-2">
            <span>Attention.</span>
            <span class="text-zinc-400">Systems.</span>
            <span class="text-zinc-600">Infrastructure.</span>
            <span class="text-zinc-800">Intelligence.</span>
        </div>
        <p class="text-lg text-zinc-400 max-w-2xl mx-auto leading-relaxed">
            Not a collection of brands, but a vertically integrated stack. The ecosystem itself is the product.
        </p>
    </div>

    <!-- The Integrated Machine (Architecture Diagram) -->
    <div class="max-w-3xl mx-auto px-6 pb-32">
        <div class="border border-zinc-800 bg-[#0a0a0a] rounded-xl p-8 md:p-16">
            <h2 class="text-xs tracking-widest font-mono text-zinc-500 uppercase mb-16 text-center">Integrated Ecosystem Architecture</h2>
            
            <div class="flex flex-col relative">
                
                <!-- SMXM Node -->
                <a href="{{ route('profile.show', 'smxm') }}" class="group relative z-10 flex flex-col md:flex-row items-center md:items-start gap-6 p-6 border border-zinc-800 bg-black rounded-lg hover:border-pink-500/50 transition-colors">
                    <div class="w-16 h-16 flex-shrink-0 bg-zinc-900 border border-zinc-800 rounded flex items-center justify-center font-black text-xl text-white group-hover:text-pink-500 transition-colors">S.</div>
                    <div class="text-center md:text-left">
                        <h3 class="text-xl font-bold text-white tracking-tight mb-1">SMXM</h3>
                        <p class="text-sm font-mono text-pink-500 mb-3">Creates demand.</p>
                        <p class="text-sm text-zinc-500">The attention acquisition engine. High-velocity cultural output that generates massive top-of-funnel volume and awareness.</p>
                    </div>
                </a>

                <div class="stack-line h-12 relative">
                    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 bg-[#0a0a0a] px-2 text-xs font-mono text-zinc-600">↓ routes attention to</div>
                </div>

                <!-- TITORA Node -->
                <a href="{{ route('profile.show', 'titora') }}" class="group relative z-10 flex flex-col md:flex-row items-center md:items-start gap-6 p-6 border border-zinc-800 bg-black rounded-lg hover:border-blue-500/50 transition-colors">
                    <div class="w-16 h-16 flex-shrink-0 bg-zinc-900 border border-zinc-800 rounded flex items-center justify-center font-bold text-xl text-white font-mono group-hover:text-blue-500 transition-colors">TI</div>
                    <div class="text-center md:text-left">
                        <h3 class="text-xl font-bold text-white tracking-tight mb-1">TITORA</h3>
                        <p class="text-sm font-mono text-blue-500 mb-3">Captures and converts demand.</p>
                        <p class="text-sm text-zinc-500">The growth systems architecture. Converts raw attention into qualified, algorithmic conversion structures.</p>
                    </div>
                </a>

                <div class="stack-line h-12 relative">
                    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 bg-[#0a0a0a] px-2 text-xs font-mono text-zinc-600">↓ scales through</div>
                </div>

                <!-- DOOB Node -->
                <a href="{{ route('profile.show', 'doob') }}" class="group relative z-10 flex flex-col md:flex-row items-center md:items-start gap-6 p-6 border border-zinc-800 bg-black rounded-lg hover:border-emerald-500/50 transition-colors">
                    <div class="w-16 h-16 flex-shrink-0 bg-zinc-900 border border-zinc-800 rounded flex items-center justify-center font-bold text-sm text-white group-hover:text-emerald-500 transition-colors">DOOB</div>
                    <div class="text-center md:text-left">
                        <h3 class="text-xl font-bold text-white tracking-tight mb-1">DOOB</h3>
                        <p class="text-sm font-mono text-emerald-500 mb-3">Scales and routes demand.</p>
                        <p class="text-sm text-zinc-500">The infrastructure layer. The network mesh and execution pipelines required to handle conversion data at internet scale.</p>
                    </div>
                </a>

                <div class="stack-line h-12 relative">
                    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 bg-[#0a0a0a] px-2 text-xs font-mono text-zinc-600">↓ secured by</div>
                </div>

                <!-- KARADAVI Node -->
                <a href="{{ route('profile.show', 'karadavi') }}" class="group relative z-10 flex flex-col md:flex-row items-center md:items-start gap-6 p-6 border border-zinc-800 bg-black rounded-lg hover:border-zinc-400 transition-colors">
                    <div class="w-16 h-16 flex-shrink-0 bg-zinc-900 border border-zinc-800 rounded flex items-center justify-center font-bold text-sm text-white font-serif italic group-hover:text-zinc-300 transition-colors">K/R</div>
                    <div class="text-center md:text-left">
                        <h3 class="text-xl font-bold text-white tracking-tight mb-1 font-serif italic">KARADAVI</h3>
                        <p class="text-sm font-mono text-zinc-400 mb-3">Builds machine trust.</p>
                        <p class="text-sm text-zinc-500">The intelligence and perception organization. Maps and structures entity authority so the entire stack is recognized by synthetic intelligence.</p>
                    </div>
                </a>

            </div>
        </div>
    </div>

    <!-- Systems Architect Link -->
    @php
        $arun = $profiles->firstWhere('slug', 'arun');
    @endphp
    @if($arun)
    <div class="max-w-3xl mx-auto px-6 pb-24 text-center">
        <a href="{{ route('profile.show', $arun->slug) }}" class="inline-flex items-center gap-3 px-6 py-3 border border-zinc-800 rounded-full hover:bg-zinc-900 transition-colors">
            <span class="w-2 h-2 rounded-full bg-zinc-500"></span>
            <span class="text-sm font-mono text-zinc-400 uppercase tracking-widest">View Systems Architect</span>
        </a>
    </div>
    @endif

</div>
@endsection
