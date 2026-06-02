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

    <!-- The Ecosystem Bento Grid -->
    <div class="max-w-5xl mx-auto px-6 pb-32">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 relative group">
            
            <!-- SMXM -->
            <a href="{{ route('profile.show', 'smxm') }}" class="group/card relative overflow-hidden rounded-2xl bg-[#0a0a0a] border border-zinc-800/50 p-8 flex flex-col h-full transition-all duration-500 hover:!opacity-100 group-hover:opacity-60 hover:-translate-y-1 hover:shadow-2xl hover:border-zinc-700">
                <!-- Subtle glow -->
                <div class="absolute -top-24 -right-24 w-48 h-48 bg-pink-500/5 rounded-full blur-3xl opacity-0 transition-opacity duration-500 group-hover/card:opacity-100 pointer-events-none"></div>
                
                <div class="mb-auto z-10">
                    <h3 class="text-sm font-mono tracking-widest text-zinc-400 uppercase mb-2">SMXM</h3>
                    <div class="relative h-10">
                        <p class="text-3xl font-bold tracking-tight text-white absolute inset-0 transition-all duration-300 opacity-100 group-hover/card:opacity-0 group-hover/card:-translate-y-4" style="font-family: 'Bricolage Grotesque', sans-serif;">Creates Attention</p>
                        <p class="text-3xl font-bold tracking-tight text-pink-400 absolute inset-0 transition-all duration-300 opacity-0 translate-y-4 group-hover/card:opacity-100 group-hover/card:translate-y-0" style="font-family: 'Bricolage Grotesque', sans-serif;">Attention Engine</p>
                    </div>
                </div>
                <div class="z-10 mt-12">
                    <p class="text-sm text-zinc-500 leading-relaxed font-mono" style="font-family: 'Space Mono', monospace;">The culture and distribution engine. High-velocity output generating massive top-of-funnel momentum and media-scale virality.</p>
                </div>
            </a>

            <!-- TITORA -->
            <a href="{{ route('profile.show', 'titora') }}" class="group/card relative overflow-hidden rounded-2xl bg-[#0a0a0a] border border-zinc-800/50 p-8 flex flex-col h-full transition-all duration-500 hover:!opacity-100 group-hover:opacity-60 hover:-translate-y-1 hover:shadow-2xl hover:border-zinc-700">
                <div class="absolute -top-24 -right-24 w-48 h-48 bg-blue-500/5 rounded-full blur-3xl opacity-0 transition-opacity duration-500 group-hover/card:opacity-100 pointer-events-none"></div>
                
                <div class="mb-auto z-10">
                    <h3 class="text-sm font-mono tracking-widest text-zinc-400 uppercase mb-2" style="font-family: 'Geist Mono', monospace;">TITORA</h3>
                    <div class="relative h-10">
                        <p class="text-3xl font-semibold tracking-tight text-white absolute inset-0 transition-all duration-300 opacity-100 group-hover/card:opacity-0 group-hover/card:-translate-y-4" style="font-family: 'Geist', sans-serif; letter-spacing: -0.04em;">Converts Attention</p>
                        <p class="text-3xl font-semibold tracking-tight text-blue-400 absolute inset-0 transition-all duration-300 opacity-0 translate-y-4 group-hover/card:opacity-100 group-hover/card:translate-y-0" style="font-family: 'Geist', sans-serif; letter-spacing: -0.04em;">Growth Architecture</p>
                    </div>
                </div>
                <div class="z-10 mt-12">
                    <p class="text-sm text-zinc-500 leading-relaxed font-mono" style="font-family: 'Geist Mono', monospace;">The growth systems architecture. Engineered to capture and convert raw attention into precise, scalable digital structures.</p>
                </div>
            </a>

            <!-- DOOB -->
            <a href="{{ route('profile.show', 'doob') }}" class="group/card md:col-span-2 relative overflow-hidden rounded-2xl bg-[#0a0a0a] border border-zinc-800/50 p-8 flex flex-col h-full transition-all duration-500 hover:!opacity-100 group-hover:opacity-60 hover:-translate-y-1 hover:shadow-2xl hover:border-zinc-700">
                <div class="absolute -top-24 -right-24 w-48 h-48 bg-emerald-500/5 rounded-full blur-3xl opacity-0 transition-opacity duration-500 group-hover/card:opacity-100 pointer-events-none"></div>
                
                <div class="mb-auto z-10">
                    <h3 class="text-sm font-mono tracking-widest text-zinc-400 uppercase mb-2">DOOB</h3>
                    <div class="relative h-10">
                        <p class="text-3xl font-bold tracking-tight text-white absolute inset-0 transition-all duration-300 opacity-100 group-hover/card:opacity-0 group-hover/card:-translate-y-4" style="font-family: 'Plus Jakarta Sans', sans-serif;">Scales Attention</p>
                        <p class="text-3xl font-bold tracking-tight text-emerald-400 absolute inset-0 transition-all duration-300 opacity-0 translate-y-4 group-hover/card:opacity-100 group-hover/card:translate-y-0" style="font-family: 'Plus Jakarta Sans', sans-serif;">Infrastructure Layer</p>
                    </div>
                </div>
                <div class="z-10 mt-12">
                    <p class="text-sm text-zinc-500 leading-relaxed font-mono" style="font-family: 'Fira Code', monospace;">The internet infrastructure platform and creator operating system. Execution pipelines to handle growth at scale.</p>
                </div>
            </a>

            <!-- KARADAVI -->
            <a href="{{ route('profile.show', 'karadavi') }}" class="group/card md:col-span-2 relative overflow-hidden rounded-2xl bg-[#0a0a0a] border border-zinc-800/50 p-8 flex flex-col h-full transition-all duration-500 hover:!opacity-100 group-hover:opacity-60 hover:-translate-y-1 hover:shadow-2xl hover:border-zinc-700">
                <div class="absolute -top-24 -right-24 w-48 h-48 bg-zinc-400/5 rounded-full blur-3xl opacity-0 transition-opacity duration-500 group-hover/card:opacity-100 pointer-events-none"></div>
                
                <div class="mb-auto z-10">
                    <h3 class="text-sm font-mono tracking-widest text-zinc-400 uppercase mb-2" style="font-family: 'IBM Plex Mono', monospace;">KARADAVI</h3>
                    <div class="relative h-10">
                        <p class="text-3xl font-normal text-white italic absolute inset-0 transition-all duration-300 opacity-100 group-hover/card:opacity-0 group-hover/card:-translate-y-4" style="font-family: 'Newsreader', serif;">Understands Attention</p>
                        <p class="text-3xl font-normal text-zinc-400 italic absolute inset-0 transition-all duration-300 opacity-0 translate-y-4 group-hover/card:opacity-100 group-hover/card:translate-y-0" style="font-family: 'Newsreader', serif;">Intelligence Layer</p>
                    </div>
                </div>
                <div class="z-10 mt-12">
                    <p class="text-sm text-zinc-500 leading-relaxed font-mono" style="font-family: 'IBM Plex Mono', monospace;">The intelligence and perception organization. Institutionalizes entity authority to build unbreakable machine trust.</p>
                </div>
            </a>

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
