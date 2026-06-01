@extends('layouts.public')

@section('title', $profile->seo_title ?: 'KARADAVI | The Machine Trust Era')
@section('description', $profile->seo_description ?: 'Machine Trust, AI Discoverability, Perception Infrastructure, and Entity Authority.')
@if($profile->avatar)
@section('og_image', Storage::disk('public')->url($profile->avatar))
@endif

@section('theme_styles')
<style>
    body {
        background-color: #fcfcfc;
        color: #1a1a1a;
    }
    .dark-mode-override {
        background-color: #111111;
        color: #e5e5e5;
    }
    /* Simple custom serif override for editorial feel */
    .font-editorial {
        font-family: ui-serif, Georgia, Cambria, "Times New Roman", Times, serif;
    }
</style>
@endsection

@section('content')
@php
    $featuredLinks = $profile->links->where('is_featured', true);
    // Determine background based on profile config, defaulting to dark mode override for a Stripe Press feel
    $isDark = true; 
@endphp

<div class="w-full animate-fade-in-up font-sans {{ $isDark ? 'dark-mode-override' : '' }}">
    
    <!-- Navbar -->
    <header class="w-full max-w-5xl mx-auto px-8 py-10 flex items-center justify-between border-b {{ $isDark ? 'border-[#333]' : 'border-gray-200' }}">
        <div class="flex items-center gap-4">
            @if($profile->avatar)
                <img src="{{ Storage::disk('public')->url($profile->avatar) }}" alt="{{ $profile->name }}" class="w-10 h-10 object-cover grayscale">
            @else
                <div class="w-10 h-10 border {{ $isDark ? 'border-[#444] bg-[#1a1a1a]' : 'border-black bg-white' }} flex items-center justify-center text-sm tracking-widest font-editorial">
                    KR
                </div>
            @endif
            <span class="font-bold text-lg tracking-[0.2em] uppercase {{ $isDark ? 'text-white' : 'text-black' }}">KARADAVI</span>
        </div>
        <div class="hidden md:flex gap-8 text-sm tracking-widest uppercase">
            <a href="#briefings" class="{{ $isDark ? 'text-[#888] hover:text-white' : 'text-gray-500 hover:text-black' }} transition-colors">Briefings</a>
            <a href="#research" class="{{ $isDark ? 'text-[#888] hover:text-white' : 'text-gray-500 hover:text-black' }} transition-colors">Research</a>
        </div>
    </header>

    <!-- 1. Editorial Hero -->
    <section class="max-w-5xl mx-auto px-8 py-24 md:py-32">
        <h1 class="text-6xl md:text-8xl font-editorial tracking-tight mb-8 leading-[1.1] {{ $isDark ? 'text-white' : 'text-black' }}">
            The Machine<br>Trust Era.
        </h1>
        <p class="text-xl md:text-2xl font-editorial italic max-w-2xl leading-relaxed {{ $isDark ? 'text-[#a1a1a1]' : 'text-gray-600' }}">
            Researching the intersection of AI discoverability, perception infrastructure, and entity authority.
        </p>
    </section>

    <!-- 2. Latest Briefing -->
    <section class="border-t border-b {{ $isDark ? 'border-[#333] bg-[#161616]' : 'border-gray-200 bg-gray-50' }}">
        <div class="max-w-5xl mx-auto px-8 py-16 grid md:grid-cols-12 gap-8 items-start">
            <div class="md:col-span-3 text-sm tracking-widest uppercase {{ $isDark ? 'text-[#666]' : 'text-gray-400' }}">
                Latest Briefing
            </div>
            <div class="md:col-span-9">
                <h2 class="text-3xl font-editorial mb-4 hover:underline cursor-pointer {{ $isDark ? 'text-white' : 'text-black' }}">How LLMs perceive organizational entities in 2026.</h2>
                <p class="mb-6 leading-relaxed {{ $isDark ? 'text-[#888]' : 'text-gray-600' }}">
                    The transition from SEO to AEO (Artificial Engine Optimization) requires a fundamental shift from keyword density to knowledge graph proximity. We analyze the exact mechanisms by which prominent language models assign trust and authority to digital entities.
                </p>
                <a href="#" class="inline-flex items-center gap-2 text-sm uppercase tracking-widest {{ $isDark ? 'text-white hover:text-[#888]' : 'text-black hover:text-gray-500' }} transition-colors">
                    Read Report <svg class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
                </a>
            </div>
        </div>
    </section>

    <!-- 3. Intelligence Areas -->
    <section class="max-w-5xl mx-auto px-8 py-24">
        <div class="grid md:grid-cols-2 gap-16">
            <div>
                <h3 class="text-sm tracking-widest uppercase mb-8 pb-4 border-b {{ $isDark ? 'border-[#333] text-[#666]' : 'border-gray-200 text-gray-400' }}">Area I</h3>
                <h4 class="text-2xl font-editorial mb-4 {{ $isDark ? 'text-white' : 'text-black' }}">Perception Infrastructure</h4>
                <p class="leading-relaxed {{ $isDark ? 'text-[#888]' : 'text-gray-600' }}">
                    Building the structural data necessary for language models to correctly categorize, parse, and cite your brand as an authoritative source in zero-click environments.
                </p>
            </div>
            <div>
                <h3 class="text-sm tracking-widest uppercase mb-8 pb-4 border-b {{ $isDark ? 'border-[#333] text-[#666]' : 'border-gray-200 text-gray-400' }}">Area II</h3>
                <h4 class="text-2xl font-editorial mb-4 {{ $isDark ? 'text-white' : 'text-black' }}">Entity Authority</h4>
                <p class="leading-relaxed {{ $isDark ? 'text-[#888]' : 'text-gray-600' }}">
                    Moving beyond traditional link equity into semantic relationship strength. How to weave your brand into the training corpus of the next generation of models.
                </p>
            </div>
        </div>
    </section>

    <!-- 4. Research Archive (Featured Links) -->
    @if($featuredLinks->count() > 0)
    <section id="research" class="border-t {{ $isDark ? 'border-[#333]' : 'border-gray-200' }}">
        <div class="max-w-5xl mx-auto px-8 py-24">
            <h3 class="text-sm tracking-widest uppercase mb-12 {{ $isDark ? 'text-[#666]' : 'text-gray-400' }}">Research Archive & Publications</h3>
            
            <div class="flex flex-col">
                @foreach($featuredLinks as $link)
                    <a href="{{ route('links.redirect', $link->id) }}" target="_blank" rel="noopener noreferrer" class="group block py-8 border-b {{ $isDark ? 'border-[#333] hover:border-[#666]' : 'border-gray-200 hover:border-black' }} transition-colors">
                        <div class="grid md:grid-cols-12 gap-4 items-baseline">
                            <div class="md:col-span-2 text-sm font-mono {{ $isDark ? 'text-[#555]' : 'text-gray-400' }}">
                                No. {{ str_pad($loop->iteration, 3, '0', STR_PAD_LEFT) }}
                            </div>
                            <div class="md:col-span-10">
                                <h4 class="text-2xl font-editorial mb-2 {{ $isDark ? 'text-[#e5e5e5] group-hover:text-white' : 'text-black group-hover:text-gray-600' }} transition-colors">
                                    {{ $link->title }}
                                </h4>
                                @if($link->description)
                                    <p class="{{ $isDark ? 'text-[#888]' : 'text-gray-500' }} max-w-2xl leading-relaxed">
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

    <!-- 6. Newsletter CTA -->
    <section class="max-w-5xl mx-auto px-8 py-32 text-center">
        <h2 class="text-3xl font-editorial mb-6 {{ $isDark ? 'text-white' : 'text-black' }}">Intelligence, delivered.</h2>
        <p class="max-w-xl mx-auto mb-10 {{ $isDark ? 'text-[#888]' : 'text-gray-500' }}">
            Subscribe to receive our latest research on machine trust and perception engineering directly to your inbox.
        </p>
        <form class="max-w-md mx-auto flex gap-2">
            <input type="email" placeholder="Email address" class="w-full px-4 py-3 bg-transparent border {{ $isDark ? 'border-[#444] text-white focus:border-[#888]' : 'border-gray-300 text-black focus:border-black' }} rounded-none outline-none transition-colors">
            <button type="submit" class="px-8 py-3 {{ $isDark ? 'bg-white text-black hover:bg-gray-200' : 'bg-black text-white hover:bg-gray-800' }} tracking-widest uppercase text-sm transition-colors">Subscribe</button>
        </form>
    </section>

    <!-- Footer -->
    <footer class="border-t {{ $isDark ? 'border-[#333]' : 'border-gray-200' }} py-12">
        <div class="max-w-5xl mx-auto px-8 text-center text-sm uppercase tracking-widest {{ $isDark ? 'text-[#555]' : 'text-gray-400' }}">
            KARADAVI Research © {{ date('Y') }}
        </div>
    </footer>

</div>
@endsection
