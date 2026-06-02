@extends('layouts.ecosystem')

@section('title', $profile->seo_title ?: 'TITORA | Engineering Growth Systems')
@section('description', $profile->seo_description ?: 'Engineering growth systems that scale acquisition and automate conversion.')
@if($profile->avatar)
@section('og_image', Storage::disk('public')->url($profile->avatar))
@endif

@section('theme_styles')
<style>
    body, .font-sans {
        font-family: 'Geist', sans-serif;
        background-color: #050505;
        color: #f8fafc;
        background-image: linear-gradient(#111 1px, transparent 1px), linear-gradient(90deg, #111 1px, transparent 1px);
        background-size: 40px 40px;
    }
    .font-mono {
        font-family: 'Geist Mono', monospace;
    }
    .blueprint-card {
        background: rgba(10, 10, 10, 0.8);
        border: 1px solid #1f2937;
        backdrop-filter: blur(8px);
    }
</style>
@endsection

@section('content')
@php
    $featuredLinks = $profile->links->where('is_featured', true);
@endphp

<div class="w-full animate-fade-in-up font-sans selection:bg-blue-500/30">
    
    <!-- Navbar -->
    <header class="w-full max-w-7xl mx-auto px-6 py-8 flex items-center justify-between border-b border-slate-800/50">
        <div class="flex items-center gap-3">
            @if($profile->avatar)
                <img src="{{ Storage::disk('public')->url($profile->avatar) }}" alt="{{ $profile->name }}" class="w-8 h-8 rounded border border-blue-900/50">
            @else
                <div class="w-8 h-8 rounded bg-blue-600 flex items-center justify-center text-xs font-bold text-white font-mono">TI</div>
            @endif
            <span class="font-bold text-xl tracking-tight text-white">TITORA</span>
        </div>
        <div class="hidden md:flex gap-8 font-mono text-sm text-slate-400">
            <a href="#framework" class="hover:text-white transition-colors">/framework</a>
            <a href="#deployments" class="hover:text-white transition-colors">/deployments</a>
        </div>
    </header>

    <!-- 1. Hero Section -->
    <section class="max-w-4xl mx-auto px-6 pt-24 pb-20 text-center relative">
        <!-- Blueprint overlay glow -->
        <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 w-full max-w-lg h-64 bg-blue-600/10 blur-[100px] rounded-full pointer-events-none"></div>
        
        <div class="inline-block px-3 py-1 rounded border border-blue-900 bg-blue-950/30 text-blue-400 text-xs font-mono mb-8">
            SYSTEM STATUS: ONLINE
        </div>
        <h1 class="text-6xl md:text-8xl font-black tracking-tight mb-8 text-transparent bg-clip-text bg-gradient-to-br from-white to-slate-400 leading-none">
            Engineering<br>Growth Systems.
        </h1>
        <p class="text-lg md:text-xl text-slate-400 font-medium mb-12 max-w-2xl mx-auto leading-relaxed">
            We architect and deploy scalable acquisition models. Because tactics expire, but structural engineering compounds.
        </p>
    </section>

    <!-- 2. Problem Section -->
    <section class="border-y border-slate-800 bg-slate-900/40 backdrop-blur-sm relative overflow-hidden">
        <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNDAiIGhlaWdodD0iNDAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGNpcmNsZSBjeD0iMjAiIGN5PSIyMCIgcj0iMSIgZmlsbD0iIzMzMCIvPjwvc3ZnPg==')] opacity-30"></div>
        <div class="max-w-5xl mx-auto px-6 py-24 relative z-10 text-center">
            <h2 class="text-4xl md:text-5xl font-bold tracking-tight mb-6 text-white">
                Most businesses buy marketing.<br>Few build infrastructure.
            </h2>
            <p class="text-slate-400 leading-relaxed text-xl max-w-3xl mx-auto">
                Renting attention from ad platforms without owning the underlying capture mechanisms is a mathematical failure. We replace tactical, siloed marketing with interconnected growth infrastructure.
            </p>
        </div>
    </section>

    <!-- 3. The Framework Section -->
    <section id="framework" class="py-32">
        <div class="max-w-6xl mx-auto px-6">
            <div class="text-center mb-20">
                <h2 class="text-xs font-mono text-blue-500 mb-4">THE METHODOLOGY</h2>
                <p class="text-3xl md:text-4xl font-bold tracking-tight text-white">The TITORA Growth Framework</p>
            </div>

            <div class="flex flex-col md:flex-row items-stretch justify-center gap-4 text-center font-mono text-sm relative">
                <!-- Line connecting them (desktop) -->
                <div class="hidden md:block absolute top-1/2 left-0 w-full h-px bg-slate-800 -z-10"></div>
                
                <div class="blueprint-card p-6 flex-1 rounded-lg">
                    <div class="text-blue-500 mb-2 font-bold">01</div>
                    <div class="text-white font-bold text-lg mb-2">Attention</div>
                    <div class="text-slate-400 text-xs">Acquisition mapping</div>
                </div>
                
                <div class="hidden md:flex items-center text-slate-700">→</div>
                <div class="md:hidden flex justify-center text-slate-700 my-2">↓</div>

                <div class="blueprint-card p-6 flex-1 rounded-lg">
                    <div class="text-blue-500 mb-2 font-bold">02</div>
                    <div class="text-white font-bold text-lg mb-2">Capture</div>
                    <div class="text-slate-400 text-xs">Frictionless ingestion</div>
                </div>

                <div class="hidden md:flex items-center text-slate-700">→</div>
                <div class="md:hidden flex justify-center text-slate-700 my-2">↓</div>

                <div class="blueprint-card p-6 flex-1 rounded-lg">
                    <div class="text-blue-500 mb-2 font-bold">03</div>
                    <div class="text-white font-bold text-lg mb-2">Qualification</div>
                    <div class="text-slate-400 text-xs">Algorithmic scoring</div>
                </div>

                <div class="hidden md:flex items-center text-slate-700">→</div>
                <div class="md:hidden flex justify-center text-slate-700 my-2">↓</div>

                <div class="blueprint-card p-6 flex-1 rounded-lg">
                    <div class="text-blue-500 mb-2 font-bold">04</div>
                    <div class="text-white font-bold text-lg mb-2">Automation</div>
                    <div class="text-slate-400 text-xs">Logic & routing</div>
                </div>

                <div class="hidden md:flex items-center text-slate-700">→</div>
                <div class="md:hidden flex justify-center text-slate-700 my-2">↓</div>

                <div class="blueprint-card p-6 flex-1 rounded-lg border-blue-900/50 bg-blue-900/10">
                    <div class="text-blue-400 mb-2 font-bold">05</div>
                    <div class="text-white font-bold text-lg mb-2">Conversion</div>
                    <div class="text-blue-200/70 text-xs">Revenue realization</div>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. System Deployments (Featured Links) -->
    @if($featuredLinks->count() > 0)
    <section id="deployments" class="py-24 border-t border-slate-800 bg-slate-900/20">
        <div class="max-w-5xl mx-auto px-6">
            <h2 class="text-xs font-mono text-blue-500 mb-8 tracking-widest uppercase">System Deployments</h2>
            
            <div class="grid md:grid-cols-2 gap-6">
                @foreach($featuredLinks as $index => $link)
                    @php
                        // Mock the user's specific titles based on index or just show the index
                        $deploymentTitles = [
                            'Lead Qualification Architecture',
                            'Authority Acquisition System',
                            'Automated Conversion Infrastructure',
                            'Local Discovery Engine'
                        ];
                        $displayTitle = $deploymentTitles[$index] ?? $link->title;
                    @endphp
                    <a href="{{ route('links.redirect', $link->id) }}" target="_blank" rel="noopener noreferrer" class="blueprint-card p-8 rounded-xl hover:border-blue-500/50 transition-colors group">
                        <div class="text-xs font-mono text-slate-500 mb-4 tracking-widest">DEPLOYMENT {{ str_pad($index + 1, 3, '0', STR_PAD_LEFT) }}</div>
                        <div class="flex items-start justify-between mb-4">
                            <h3 class="font-bold text-white text-xl group-hover:text-blue-400 transition-colors">{{ $displayTitle }}</h3>
                            <svg class="w-5 h-5 text-slate-600 group-hover:text-blue-400 transition-colors flex-shrink-0 ml-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                        </div>
                        @if($link->description)
                            <p class="text-slate-400 text-sm leading-relaxed">{{ $link->description }}</p>
                        @endif
                    </a>
                @endforeach
            </div>
        </div>
    </section>
    @endif

    <footer class="py-12 border-t border-slate-800 text-center font-mono text-xs text-slate-600">
        <p>Powered by TITORA // END OF FILE</p>
    </footer>

</div>
@endsection
