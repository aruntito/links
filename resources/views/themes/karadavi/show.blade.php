@extends('layouts.ecosystem')

@section('title', $profile->seo_title ?: 'KARADAVI | Intelligence Organization')
@section('description', $profile->seo_description ?: 'Research institute analyzing machine trust and entity authority.')
@if($profile->avatar)
@section('og_image', Storage::disk('public')->url($profile->avatar))
@endif

@section('theme_styles')
<style>
    body {
        background-color: #f7f7f5; /* Off-white paper feel */
        color: #1a1a1a;
    }
    .dark-mode-override {
        background-color: #0f0f0f;
        color: #d4d4d4;
    }
    /* Serious editorial serif */
    .font-editorial {
        font-family: "Times New Roman", Times, serif;
    }
</style>
@endsection

@section('content')
@php
    $featuredLinks = $profile->links->where('is_featured', true);
    // Force dark mode for a serious, classified dossier feel.
    $isDark = true; 
@endphp

<div class="w-full min-h-screen animate-fade-in-up font-sans {{ $isDark ? 'dark-mode-override' : '' }}">
    
    <!-- Navbar -->
    <header class="w-full max-w-5xl mx-auto px-8 py-10 flex flex-col md:flex-row items-start md:items-center justify-between border-b {{ $isDark ? 'border-[#333]' : 'border-gray-300' }} gap-6">
        <div class="flex items-center gap-4">
            @if($profile->avatar)
                <img src="{{ Storage::disk('public')->url($profile->avatar) }}" alt="{{ $profile->name }}" class="w-12 h-12 object-cover grayscale border {{ $isDark ? 'border-[#444]' : 'border-black' }}">
            @else
                <div class="w-12 h-12 border {{ $isDark ? 'border-[#444] bg-[#1a1a1a]' : 'border-black bg-white' }} flex items-center justify-center text-sm tracking-widest font-editorial">
                    K/R
                </div>
            @endif
            <div class="flex flex-col">
                <span class="font-bold text-lg tracking-[0.2em] uppercase {{ $isDark ? 'text-white' : 'text-black' }}">KARADAVI</span>
                <span class="text-xs tracking-widest uppercase {{ $isDark ? 'text-[#666]' : 'text-gray-500' }}">Intelligence Organization</span>
            </div>
        </div>
        <div class="flex gap-8 text-xs tracking-[0.2em] uppercase font-bold">
            <a href="#domains" class="{{ $isDark ? 'text-[#888] hover:text-white' : 'text-gray-500 hover:text-black' }} transition-colors">Domains</a>
            <a href="#briefings" class="{{ $isDark ? 'text-[#888] hover:text-white' : 'text-gray-500 hover:text-black' }} transition-colors">Briefings</a>
        </div>
    </header>

    <!-- 1. Hero -->
    <section class="max-w-5xl mx-auto px-8 pt-32 pb-24">
        <h1 class="text-6xl md:text-[7rem] font-editorial tracking-tight mb-12 leading-[1.05] {{ $isDark ? 'text-[#f5f5f5]' : 'text-black' }}">
            The Machine<br>Trust Era.
        </h1>
        <div class="grid md:grid-cols-2 gap-12">
            <div>
                <p class="text-xl font-editorial italic leading-relaxed {{ $isDark ? 'text-[#a1a1a1]' : 'text-gray-600' }}">
                    The transition from human-indexed search (SEO) to machine-synthesized intelligence (AEO) fundamentally alters how entities establish authority.
                </p>
            </div>
            <div class="border-l {{ $isDark ? 'border-[#333]' : 'border-gray-300' }} pl-8">
                <div class="text-xs tracking-widest uppercase mb-4 {{ $isDark ? 'text-[#666]' : 'text-gray-500' }}">Research Focus</div>
                <p class="text-sm leading-relaxed {{ $isDark ? 'text-[#888]' : 'text-gray-600' }}">
                    KARADAVI maps perception infrastructure, analyzing the exact mechanisms by which prominent language models assign trust, retrieve citations, and rank structural data.
                </p>
            </div>
        </div>
    </section>

    <!-- 2. Immediately: Briefing 001 -->
    <section class="border-y {{ $isDark ? 'border-[#333] bg-[#111]' : 'border-gray-300 bg-gray-100' }}">
        <div class="max-w-5xl mx-auto px-8 py-20">
            <div class="flex items-center gap-4 mb-8">
                <div class="w-3 h-3 bg-red-600 rounded-full animate-pulse"></div>
                <div class="text-xs tracking-widest uppercase font-bold text-red-600">Active Briefing</div>
            </div>
            
            <h2 class="text-4xl md:text-5xl font-editorial mb-6 {{ $isDark ? 'text-white' : 'text-black' }}">Briefing 001: The Collapse of Visibility</h2>
            
            <div class="max-w-3xl">
                <p class="text-lg leading-relaxed mb-8 {{ $isDark ? 'text-[#a1a1a1]' : 'text-gray-700' }}">
                    As generative interfaces capture query volume, traditional link equity is being replaced by semantic relationship strength. Organizations relying on legacy keyword optimization face a zero-click extinction event. We detail the necessary architectural pivots to survive the algorithmic shift.
                </p>
                <a href="#" class="inline-flex items-center gap-2 text-xs uppercase tracking-[0.2em] font-bold pb-2 border-b {{ $isDark ? 'border-white text-white hover:text-[#888] hover:border-[#888]' : 'border-black text-black hover:text-gray-500 hover:border-gray-500' }} transition-colors">
                    Access Full Dossier →
                </a>
            </div>
        </div>
    </section>

    <!-- 3. Research Domains -->
    <section id="domains" class="max-w-5xl mx-auto px-8 py-32">
        <h3 class="text-xs tracking-widest uppercase mb-16 pb-4 border-b {{ $isDark ? 'border-[#333] text-[#666]' : 'border-gray-300 text-gray-500' }}">Research Domains</h3>
        
        <div class="grid md:grid-cols-2 gap-x-16 gap-y-20">
            <!-- Domain 1 -->
            <div>
                <div class="text-xs font-mono mb-4 {{ $isDark ? 'text-[#555]' : 'text-gray-400' }}">D-01</div>
                <h4 class="text-2xl font-editorial mb-4 {{ $isDark ? 'text-white' : 'text-black' }}">Machine Trust Models</h4>
                <p class="text-sm leading-relaxed {{ $isDark ? 'text-[#888]' : 'text-gray-600' }}">
                    Investigating the heuristic models used by LLMs to verify organizational legitimacy, factuality, and data provenance in the absence of traditional human signals.
                </p>
            </div>
            <!-- Domain 2 -->
            <div>
                <div class="text-xs font-mono mb-4 {{ $isDark ? 'text-[#555]' : 'text-gray-400' }}">D-02</div>
                <h4 class="text-2xl font-editorial mb-4 {{ $isDark ? 'text-white' : 'text-black' }}">Entity Authority</h4>
                <p class="text-sm leading-relaxed {{ $isDark ? 'text-[#888]' : 'text-gray-600' }}">
                    Analyzing how brands move from being a semantic unknown to a recognized, authoritative node within a model's internal knowledge graph.
                </p>
            </div>
            <!-- Domain 3 -->
            <div>
                <div class="text-xs font-mono mb-4 {{ $isDark ? 'text-[#555]' : 'text-gray-400' }}">D-03</div>
                <h4 class="text-2xl font-editorial mb-4 {{ $isDark ? 'text-white' : 'text-black' }}">Perception Infrastructure</h4>
                <p class="text-sm leading-relaxed {{ $isDark ? 'text-[#888]' : 'text-gray-600' }}">
                    The architectural requirements—structured data, schema markup, and network APIs—necessary to feed clean, parsable data directly into AI ingestion engines.
                </p>
            </div>
            <!-- Domain 4 -->
            <div>
                <div class="text-xs font-mono mb-4 {{ $isDark ? 'text-[#555]' : 'text-gray-400' }}">D-04</div>
                <h4 class="text-2xl font-editorial mb-4 {{ $isDark ? 'text-white' : 'text-black' }}">Citation Topology</h4>
                <p class="text-sm leading-relaxed {{ $isDark ? 'text-[#888]' : 'text-gray-600' }}">
                    Mapping the digital proximity required to trigger unprompted citations and recommendations by AI agents during synthesis.
                </p>
            </div>
            <!-- Domain 5 -->
            <div>
                <div class="text-xs font-mono mb-4 {{ $isDark ? 'text-[#555]' : 'text-gray-400' }}">D-05</div>
                <h4 class="text-2xl font-editorial mb-4 {{ $isDark ? 'text-white' : 'text-black' }}">Ontology Systems</h4>
                <p class="text-sm leading-relaxed {{ $isDark ? 'text-[#888]' : 'text-gray-600' }}">
                    Structuring raw semantic relationships to ensure organizational truths are inextricably linked to industry-level queries.
                </p>
            </div>
            <!-- Domain 6 -->
            <div>
                <div class="text-xs font-mono mb-4 {{ $isDark ? 'text-[#555]' : 'text-gray-400' }}">D-06</div>
                <h4 class="text-2xl font-editorial mb-4 {{ $isDark ? 'text-white' : 'text-black' }}">Active Investigations & Field Notes</h4>
                <p class="text-sm leading-relaxed {{ $isDark ? 'text-[#888]' : 'text-gray-600' }}">
                    Real-time analysis and field observations of algorithmic shifts, indexing behaviors, and emergent retrieval-augmented generation patterns.
                </p>
            </div>
        </div>
    </section>

    <!-- 4. Intelligence Briefings (Featured Links) -->
    @if($featuredLinks->count() > 0)
    <section id="briefings" class="border-t {{ $isDark ? 'border-[#333] bg-[#0a0a0a]' : 'border-gray-300 bg-white' }}">
        <div class="max-w-5xl mx-auto px-8 py-32">
            <h3 class="text-xs tracking-widest uppercase mb-16 pb-4 border-b {{ $isDark ? 'border-[#333] text-[#666]' : 'border-gray-300 text-gray-500' }}">Intelligence Briefings</h3>
            
            <div class="flex flex-col border-t {{ $isDark ? 'border-[#333]' : 'border-gray-300' }}">
                @foreach($featuredLinks as $link)
                    <a href="{{ route('links.redirect', $link->id) }}" target="_blank" rel="noopener noreferrer" class="group block py-10 border-b {{ $isDark ? 'border-[#333] hover:bg-[#111]' : 'border-gray-300 hover:bg-gray-50' }} transition-colors">
                        <div class="grid md:grid-cols-12 gap-6 items-baseline px-4">
                            <div class="md:col-span-2 text-xs font-mono tracking-widest uppercase {{ $isDark ? 'text-[#555]' : 'text-gray-400' }}">
                                DOC.{{ str_pad($loop->iteration, 3, '0', STR_PAD_LEFT) }}
                            </div>
                            <div class="md:col-span-10">
                                <h4 class="text-2xl font-editorial mb-4 {{ $isDark ? 'text-[#e5e5e5] group-hover:text-white' : 'text-black' }} transition-colors">
                                    {{ $link->title }}
                                </h4>
                                @if($link->description)
                                    <p class="text-sm {{ $isDark ? 'text-[#888]' : 'text-gray-500' }} max-w-2xl leading-relaxed">
                                        {{ $link->description }}
                                    </p>
                                @endif
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>
    @endif

    <!-- Footer -->
    <footer class="border-t {{ $isDark ? 'border-[#333] bg-[#050505]' : 'border-gray-300 bg-gray-100' }} py-16">
        <div class="max-w-5xl mx-auto px-8 flex flex-col md:flex-row justify-between items-center gap-6">
            <div class="text-xs uppercase tracking-widest {{ $isDark ? 'text-[#555]' : 'text-gray-400' }}">
                KARADAVI RESEARCH © {{ date('Y') }}
            </div>
            <div class="text-xs font-mono {{ $isDark ? 'text-[#444]' : 'text-gray-400' }}">
                SYS.OP. NORMAL
            </div>
        </div>
    </footer>

</div>
@endsection
