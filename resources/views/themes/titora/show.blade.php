@extends('layouts.public')

@section('title', $profile->seo_title ?: 'TITORA | Growth Systems & Digital Infrastructure')
@section('description', $profile->seo_description ?: 'Turn Attention Into Qualified Leads. Marketing, Automation, Web Development, and Growth Infrastructure.')
@if($profile->avatar)
@section('og_image', Storage::disk('public')->url($profile->avatar))
@endif

@section('theme_styles')
<style>
    body {
        background-color: #000000;
        background-image: radial-gradient(circle at top right, rgba(30, 27, 75, 0.5) 0%, rgba(0, 0, 0, 1) 100%);
        color: #f8fafc;
    }
</style>
@endsection

@section('content')
@php
    $featuredLinks = $profile->links->where('is_featured', true);
@endphp

<div class="w-full animate-fade-in-up font-sans">
    
    <!-- Navbar / Header (Simulated) -->
    <header class="w-full max-w-6xl mx-auto px-6 py-8 flex items-center justify-between">
        <div class="flex items-center gap-3">
            @if($profile->avatar)
                <img src="{{ Storage::disk('public')->url($profile->avatar) }}" alt="{{ $profile->name }}" class="w-8 h-8 rounded border border-indigo-900/50">
            @else
                <div class="w-8 h-8 rounded bg-indigo-600 flex items-center justify-center text-xs font-bold text-white">TI</div>
            @endif
            <span class="font-bold text-xl tracking-tight text-white">TITORA</span>
        </div>
        <a href="#services" class="text-sm font-medium text-slate-400 hover:text-white transition-colors">Services</a>
    </header>

    <!-- 1. Hero Section -->
    <section class="max-w-4xl mx-auto px-6 pt-20 pb-32 text-center">
        <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-indigo-500/10 border border-indigo-500/20 text-indigo-300 text-sm font-medium mb-8">
            <span class="w-2 h-2 rounded-full bg-indigo-500 animate-pulse"></span>
            Growth Systems & Digital Infrastructure
        </div>
        <h1 class="text-5xl md:text-7xl font-extrabold tracking-tight mb-8 text-transparent bg-clip-text bg-gradient-to-r from-white via-slate-200 to-slate-500 leading-tight">
            Turn Attention Into <br> Qualified Leads
        </h1>
        <p class="text-lg md:text-xl text-slate-400 font-medium mb-12 max-w-2xl mx-auto leading-relaxed">
            Marketing. Automation. Web Development. Growth Infrastructure. We build the systems that scale your business.
        </p>
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
            <a href="mailto:hello@titora.co.in" class="w-full sm:w-auto px-8 py-4 bg-white text-black font-semibold rounded-lg hover:bg-slate-200 transition-colors duration-300 text-center">
                Book Discovery Call
            </a>
            <a href="#services" class="w-full sm:w-auto px-8 py-4 bg-slate-900 border border-slate-700 text-white font-semibold rounded-lg hover:bg-slate-800 transition-colors duration-300 text-center">
                View Services
            </a>
        </div>
    </section>

    <!-- 2. Problem Section -->
    <section class="border-y border-slate-800/50 bg-slate-900/20">
        <div class="max-w-6xl mx-auto px-6 py-24">
            <div class="grid md:grid-cols-2 gap-16 items-center">
                <div>
                    <h2 class="text-3xl font-bold tracking-tight mb-6">Traffic without conversion is just noise.</h2>
                    <p class="text-slate-400 leading-relaxed text-lg mb-6">
                        Most businesses focus entirely on top-of-funnel attention, ignoring the digital infrastructure required to actually capture and convert that attention.
                    </p>
                    <p class="text-slate-400 leading-relaxed text-lg">
                        We bridge the gap. By integrating modern web architecture with data-driven marketing, we turn passive observers into active revenue.
                    </p>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div class="bg-slate-900 border border-slate-800 p-6 rounded-2xl">
                        <div class="text-3xl mb-2 text-rose-500">80%</div>
                        <div class="text-sm font-medium text-slate-500">Traffic lost due to poor UX</div>
                    </div>
                    <div class="bg-slate-900 border border-slate-800 p-6 rounded-2xl">
                        <div class="text-3xl mb-2 text-rose-500">3x</div>
                        <div class="text-sm font-medium text-slate-500">Higher CAC without automation</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. Why TITORA -->
    <section class="max-w-6xl mx-auto px-6 py-32">
        <div class="text-center mb-16">
            <h2 class="text-3xl md:text-4xl font-bold tracking-tight mb-4">Engineering Growth</h2>
            <p class="text-slate-400">Why leading brands partner with us.</p>
        </div>
        <div class="grid md:grid-cols-3 gap-8">
            <div class="p-8 rounded-2xl bg-gradient-to-b from-slate-900 to-black border border-slate-800">
                <div class="w-12 h-12 bg-indigo-500/10 rounded-xl flex items-center justify-center mb-6 border border-indigo-500/20">
                    <svg class="w-6 h-6 text-indigo-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                </div>
                <h3 class="text-xl font-bold mb-3">Speed to Market</h3>
                <p class="text-slate-400 leading-relaxed">We deploy modern tech stacks that launch faster and perform better than legacy platforms.</p>
            </div>
            <div class="p-8 rounded-2xl bg-gradient-to-b from-slate-900 to-black border border-slate-800">
                <div class="w-12 h-12 bg-indigo-500/10 rounded-xl flex items-center justify-center mb-6 border border-indigo-500/20">
                    <svg class="w-6 h-6 text-indigo-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4"/></svg>
                </div>
                <h3 class="text-xl font-bold mb-3">Data-Driven Architecture</h3>
                <p class="text-slate-400 leading-relaxed">Every decision is backed by analytics. We build systems that track, measure, and optimize.</p>
            </div>
            <div class="p-8 rounded-2xl bg-gradient-to-b from-slate-900 to-black border border-slate-800">
                <div class="w-12 h-12 bg-indigo-500/10 rounded-xl flex items-center justify-center mb-6 border border-indigo-500/20">
                    <svg class="w-6 h-6 text-indigo-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"/></svg>
                </div>
                <h3 class="text-xl font-bold mb-3">End-to-End Automation</h3>
                <p class="text-slate-400 leading-relaxed">We connect your marketing tools to your backend logic to remove friction and save hours.</p>
            </div>
        </div>
    </section>

    <!-- 4. Services Grid -->
    <section id="services" class="max-w-6xl mx-auto px-6 py-24">
        <h2 class="text-3xl font-bold tracking-tight mb-12">Core Capabilities</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="group relative bg-slate-900 border border-slate-800 rounded-2xl p-8 hover:bg-slate-800 transition-colors duration-300">
                <h3 class="text-2xl font-bold mb-4">Web Development</h3>
                <p class="text-slate-400 mb-6 max-w-sm">High-performance React, Vue, and Laravel applications engineered for conversion.</p>
                <ul class="space-y-2 text-sm text-slate-500 font-medium">
                    <li>• Custom Web Apps</li>
                    <li>• SaaS Architecture</li>
                    <li>• Marketing Landing Pages</li>
                </ul>
            </div>
            <div class="group relative bg-slate-900 border border-slate-800 rounded-2xl p-8 hover:bg-slate-800 transition-colors duration-300">
                <h3 class="text-2xl font-bold mb-4">Growth Marketing</h3>
                <p class="text-slate-400 mb-6 max-w-sm">Scalable acquisition systems across paid media, organic search, and social.</p>
                <ul class="space-y-2 text-sm text-slate-500 font-medium">
                    <li>• Performance Ads</li>
                    <li>• SEO Strategy</li>
                    <li>• Funnel Optimization</li>
                </ul>
            </div>
            <div class="group relative bg-slate-900 border border-slate-800 rounded-2xl p-8 hover:bg-slate-800 transition-colors duration-300">
                <h3 class="text-2xl font-bold mb-4">Automation</h3>
                <p class="text-slate-400 mb-6 max-w-sm">Connecting your tech stack to automate lead nurture, sales routing, and support.</p>
                <ul class="space-y-2 text-sm text-slate-500 font-medium">
                    <li>• CRM Integrations</li>
                    <li>• Workflow Automation</li>
                    <li>• Email Marketing Systems</li>
                </ul>
            </div>
            <div class="group relative bg-slate-900 border border-slate-800 rounded-2xl p-8 hover:bg-slate-800 transition-colors duration-300">
                <h3 class="text-2xl font-bold mb-4">Brand Strategy</h3>
                <p class="text-slate-400 mb-6 max-w-sm">Premium positioning, visual identity, and messaging frameworks that demand attention.</p>
                <ul class="space-y-2 text-sm text-slate-500 font-medium">
                    <li>• Brand Identity</li>
                    <li>• Positioning</li>
                    <li>• UX/UI Design</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- 5. Featured Links (CMS Integration) -->
    @if($featuredLinks->count() > 0)
    <section class="bg-slate-900/30 border-y border-slate-800/50 py-24">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <h2 class="text-2xl font-bold tracking-tight mb-8">Selected Case Studies & Links</h2>
            <div class="flex flex-col gap-4">
                @foreach($featuredLinks as $link)
                    <a href="{{ route('links.redirect', $link->id) }}" target="_blank" rel="noopener noreferrer" class="group flex items-center justify-between p-6 bg-slate-900 border border-slate-700 rounded-xl hover:border-indigo-500 transition-all duration-300 shadow-sm hover:shadow-indigo-500/10">
                        <div class="text-left">
                            <h3 class="font-bold text-white text-lg group-hover:text-indigo-400 transition-colors">{{ $link->title }}</h3>
                            @if($link->description)
                                <p class="text-sm text-slate-400 mt-1">{{ $link->description }}</p>
                            @endif
                        </div>
                        <svg class="w-5 h-5 text-slate-500 group-hover:text-indigo-400 transition-colors transform group-hover:translate-x-1" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                    </a>
                @endforeach
            </div>
        </div>
    </section>
    @endif

    <!-- 6. Trust Section -->
    <section class="max-w-6xl mx-auto px-6 py-24 text-center">
        <p class="text-sm font-semibold text-slate-500 uppercase tracking-widest mb-10">Trusted by modern companies</p>
        <div class="flex flex-wrap justify-center gap-12 md:gap-24 opacity-50 grayscale hover:grayscale-0 hover:opacity-100 transition-all duration-500">
            <div class="text-2xl font-bold tracking-tighter">Acme Corp</div>
            <div class="text-2xl font-bold tracking-tighter font-serif">GlobalTech</div>
            <div class="text-2xl font-black tracking-widest">NEXUS</div>
            <div class="text-2xl font-medium tracking-tight">Opal</div>
        </div>
    </section>

    <!-- 7. CTA Section -->
    <section class="border-t border-slate-800">
        <div class="max-w-4xl mx-auto px-6 py-32 text-center">
            <h2 class="text-4xl font-extrabold tracking-tight mb-6">Ready to scale?</h2>
            <p class="text-slate-400 mb-10 text-lg">Let's build a growth infrastructure that turns your traffic into revenue.</p>
            <a href="mailto:hello@titora.co.in" class="inline-flex items-center justify-center px-8 py-4 bg-indigo-600 text-white font-bold rounded-lg hover:bg-indigo-500 transition-colors duration-300">
                Start a Project
            </a>
        </div>
    </section>

    <footer class="border-t border-slate-800/50 py-10 text-center">
        <p class="text-slate-600 text-sm">© {{ date('Y') }} TITORA. All rights reserved.</p>
    </footer>

</div>
@endsection
