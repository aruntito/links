@extends('layouts.public')

@section('title', $profile->seo_title ?: 'DOOB | Growth Infrastructure for Modern Creators')
@section('description', $profile->seo_description ?: 'APIs, infrastructure, and tools to scale your creator network across Instagram, YouTube, TikTok, and Spotify.')
@if($profile->avatar)
@section('og_image', Storage::disk('public')->url($profile->avatar))
@endif

@section('theme_styles')
<style>
    body {
        background-color: #0b0f19;
        color: #e2e8f0;
    }
</style>
@endsection

@section('content')
@php
    $featuredLinks = $profile->links->where('is_featured', true);
@endphp

<div class="w-full animate-fade-in-up font-sans selection:bg-emerald-500/30">
    
    <!-- Navbar -->
    <header class="w-full max-w-7xl mx-auto px-6 py-6 border-b border-white/5 flex items-center justify-between sticky top-0 bg-[#0b0f19]/80 backdrop-blur-xl z-50">
        <div class="flex items-center gap-3">
            @if($profile->avatar)
                <img src="{{ Storage::disk('public')->url($profile->avatar) }}" alt="{{ $profile->name }}" class="w-8 h-8 rounded-md bg-emerald-900 border border-emerald-500/30">
            @else
                <div class="w-8 h-8 rounded-md bg-emerald-600 flex items-center justify-center text-xs font-bold text-white shadow-[0_0_15px_rgba(16,185,129,0.4)]">DB</div>
            @endif
            <span class="font-bold text-lg tracking-tight text-white">DOOB</span>
        </div>
        <div class="hidden md:flex items-center gap-6 text-sm font-medium text-slate-400">
            <a href="#features" class="hover:text-emerald-400 transition-colors">Features</a>
            <a href="#infrastructure" class="hover:text-emerald-400 transition-colors">Infrastructure</a>
            <a href="#links" class="hover:text-emerald-400 transition-colors">Resources</a>
        </div>
        <div class="flex items-center gap-3">
            <a href="#" class="hidden sm:block text-sm font-medium text-slate-300 hover:text-white transition-colors">Documentation</a>
            <a href="#" class="px-4 py-2 bg-emerald-500 text-black text-sm font-bold rounded hover:bg-emerald-400 transition-colors shadow-[0_0_15px_rgba(16,185,129,0.3)]">Start Growing</a>
        </div>
    </header>

    <!-- 1. Hero Section -->
    <section class="relative overflow-hidden pt-24 pb-32">
        <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iNjAiIGhlaWdodD0iNjAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGcgc3Ryb2tlPSIjMWUyOTNiIiBzdHJva2Utd2lkdGg9IjEiIGZpbGw9Im5vbmUiPjxwYXRoIGQ9Ik0wIDYwaDYwTTYwIDB2NjAiLz48L2c+PC9zdmc+')] opacity-20"></div>
        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-full max-w-3xl h-96 bg-emerald-500/10 blur-[120px] rounded-full"></div>
        
        <div class="relative max-w-5xl mx-auto px-6 text-center z-10">
            <h1 class="text-5xl md:text-7xl font-extrabold tracking-tight mb-6 text-white leading-tight">
                Growth Infrastructure <br> For Modern Creators
            </h1>
            <p class="text-lg md:text-xl text-slate-400 font-medium mb-10 max-w-3xl mx-auto">
                Connect, automate, and scale your audience across Instagram, YouTube, TikTok, and Spotify with enterprise-grade reliability.
            </p>
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4 mb-16">
                <a href="#" class="w-full sm:w-auto px-8 py-3 bg-emerald-500 text-black font-bold rounded hover:bg-emerald-400 transition-all shadow-[0_0_20px_rgba(16,185,129,0.3)]">
                    Start Growing Free
                </a>
                <a href="#" class="w-full sm:w-auto px-8 py-3 bg-[#111827] border border-slate-700 text-white font-semibold rounded hover:border-emerald-500/50 hover:bg-[#1f2937] transition-all">
                    Become Partner
                </a>
            </div>

            <!-- Dashboard Mockup -->
            <div class="relative mx-auto max-w-4xl rounded-xl border border-slate-700 bg-[#0f172a] shadow-2xl overflow-hidden text-left">
                <div class="flex items-center px-4 py-3 border-b border-slate-800 bg-[#1e293b]">
                    <div class="flex gap-2">
                        <div class="w-3 h-3 rounded-full bg-slate-600"></div>
                        <div class="w-3 h-3 rounded-full bg-slate-600"></div>
                        <div class="w-3 h-3 rounded-full bg-slate-600"></div>
                    </div>
                </div>
                <div class="p-6 grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="col-span-2 border border-slate-800 rounded bg-[#0f172a] p-5">
                        <div class="text-sm font-medium text-slate-400 mb-1">Total Audience Reach</div>
                        <div class="text-3xl font-bold text-white mb-6">4.2M <span class="text-emerald-500 text-sm ml-2">↑ 12%</span></div>
                        <!-- Mock Graph -->
                        <div class="flex items-end gap-2 h-24 mt-4">
                            <div class="w-full bg-emerald-500/20 rounded-t h-[40%]"></div>
                            <div class="w-full bg-emerald-500/30 rounded-t h-[50%]"></div>
                            <div class="w-full bg-emerald-500/40 rounded-t h-[30%]"></div>
                            <div class="w-full bg-emerald-500/50 rounded-t h-[70%]"></div>
                            <div class="w-full bg-emerald-500/70 rounded-t h-[60%]"></div>
                            <div class="w-full bg-emerald-500 rounded-t h-[90%] shadow-[0_0_10px_rgba(16,185,129,0.5)]"></div>
                        </div>
                    </div>
                    <div class="flex flex-col gap-4">
                        <div class="border border-slate-800 rounded p-4 flex justify-between items-center bg-[#1e293b]">
                            <div>
                                <div class="text-xs text-slate-400">Instagram API</div>
                                <div class="text-sm font-bold text-white">Connected</div>
                            </div>
                            <div class="w-2 h-2 rounded-full bg-emerald-500 shadow-[0_0_8px_rgba(16,185,129,1)]"></div>
                        </div>
                        <div class="border border-slate-800 rounded p-4 flex justify-between items-center bg-[#1e293b]">
                            <div>
                                <div class="text-xs text-slate-400">YouTube Sync</div>
                                <div class="text-sm font-bold text-white">Connected</div>
                            </div>
                            <div class="w-2 h-2 rounded-full bg-emerald-500 shadow-[0_0_8px_rgba(16,185,129,1)]"></div>
                        </div>
                        <div class="border border-slate-800 rounded p-4 flex justify-between items-center bg-[#1e293b]">
                            <div>
                                <div class="text-xs text-slate-400">Spotify Playlisting</div>
                                <div class="text-sm font-bold text-white">Processing</div>
                            </div>
                            <div class="w-2 h-2 rounded-full bg-blue-500 shadow-[0_0_8px_rgba(59,130,246,1)] animate-pulse"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. Platform Features -->
    <section id="features" class="py-24 border-t border-slate-800 bg-[#0b0f19]">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-white mb-4">Built for scale, designed for speed.</h2>
                <p class="text-slate-400 max-w-2xl mx-auto">Everything you need to manage cross-platform growth without touching a spreadsheet.</p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-6">
                <div class="bg-[#111827] border border-slate-800 p-8 rounded-xl hover:border-emerald-500/30 transition-colors">
                    <div class="w-10 h-10 rounded bg-[#1f2937] border border-slate-700 flex items-center justify-center mb-6 text-emerald-400">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                    </div>
                    <h3 class="text-white font-bold text-lg mb-3">Real-time Sync</h3>
                    <p class="text-slate-400 text-sm leading-relaxed">Metrics update instantly via webhooks. Stop waiting for daily cron jobs to know your numbers.</p>
                </div>
                <div class="bg-[#111827] border border-slate-800 p-8 rounded-xl hover:border-emerald-500/30 transition-colors">
                    <div class="w-10 h-10 rounded bg-[#1f2937] border border-slate-700 flex items-center justify-center mb-6 text-emerald-400">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                    </div>
                    <h3 class="text-white font-bold text-lg mb-3">Enterprise Security</h3>
                    <p class="text-slate-400 text-sm leading-relaxed">OAuth2 compliant, SOC2 ready infrastructure. Your audience data is isolated and encrypted.</p>
                </div>
                <div class="bg-[#111827] border border-slate-800 p-8 rounded-xl hover:border-emerald-500/30 transition-colors">
                    <div class="w-10 h-10 rounded bg-[#1f2937] border border-slate-700 flex items-center justify-center mb-6 text-emerald-400">
                        <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/></svg>
                    </div>
                    <h3 class="text-white font-bold text-lg mb-3">Developer APIs</h3>
                    <p class="text-slate-400 text-sm leading-relaxed">Full programmatic access to your audience graph. Build custom apps on top of DOOB.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. Growth Categories -->
    <section class="py-24 border-t border-slate-800 bg-[#0f172a]">
        <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-16 items-center">
            <div>
                <h2 class="text-3xl font-bold text-white mb-6">Multi-platform routing.</h2>
                <p class="text-slate-400 mb-8 leading-relaxed">
                    Routing traffic from short-form video to long-form content or monetized platforms is completely broken. We built DOOB to fix the conversion leak.
                </p>
                <div class="space-y-4">
                    <div class="flex items-center gap-3">
                        <div class="w-5 h-5 rounded-full bg-emerald-500/20 flex items-center justify-center text-emerald-400 text-xs">✓</div>
                        <span class="text-slate-300 font-medium">Smart links that deep-link directly into native apps</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="w-5 h-5 rounded-full bg-emerald-500/20 flex items-center justify-center text-emerald-400 text-xs">✓</div>
                        <span class="text-slate-300 font-medium">Algorithmic A/B testing on landing pages</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <div class="w-5 h-5 rounded-full bg-emerald-500/20 flex items-center justify-center text-emerald-400 text-xs">✓</div>
                        <span class="text-slate-300 font-medium">Audience pixel tracking across 7 platforms</span>
                    </div>
                </div>
            </div>
            <div class="bg-[#1e293b] border border-slate-700 rounded-xl p-8 shadow-xl">
                <div class="text-xs font-mono text-slate-500 mb-4">// POST /v1/routing/smart-link</div>
                <pre class="text-emerald-400 font-mono text-sm overflow-x-auto"><code>{
  "destination": "spotify_album",
  "fallbacks": {
    "ios": "apple_music",
    "android": "youtube_music"
  },
  "utm_source": "tiktok_bio",
  "track_conversions": true
}</code></pre>
            </div>
        </div>
    </section>

    <!-- 4. Featured Links (CMS Integration) -->
    @if($featuredLinks->count() > 0)
    <section id="links" class="py-24 border-t border-slate-800 bg-[#0b0f19]">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <h2 class="text-2xl font-bold tracking-tight mb-8 text-white">Live Endpoints & Resources</h2>
            <div class="grid sm:grid-cols-2 gap-4 text-left">
                @foreach($featuredLinks as $link)
                    <a href="{{ route('links.redirect', $link->id) }}" target="_blank" rel="noopener noreferrer" class="group flex flex-col justify-between p-5 bg-[#111827] border border-slate-700 rounded-lg hover:border-emerald-500/50 transition-colors duration-300">
                        <div class="flex justify-between items-start mb-4">
                            <h3 class="font-bold text-white group-hover:text-emerald-400 transition-colors">{{ $link->title }}</h3>
                            <svg class="w-4 h-4 text-slate-500 group-hover:text-emerald-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                        </div>
                        @if($link->description)
                            <p class="text-sm text-slate-400">{{ $link->description }}</p>
                        @endif
                    </a>
                @endforeach
            </div>
        </div>
    </section>
    @endif

    <!-- 5. CTA -->
    <section class="py-32 border-t border-slate-800 bg-gradient-to-b from-[#0b0f19] to-black">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <h2 class="text-4xl font-bold text-white mb-6">Build your audience graph today.</h2>
            <p class="text-slate-400 mb-10">Stop losing traffic. Start capturing it.</p>
            <div class="flex justify-center gap-4">
                <a href="#" class="px-8 py-3 bg-emerald-500 text-black font-bold rounded hover:bg-emerald-400 transition-colors">
                    Create Account
                </a>
                <a href="#" class="px-8 py-3 bg-[#111827] border border-slate-700 text-white font-medium rounded hover:bg-[#1f2937] transition-colors">
                    Read the Docs
                </a>
            </div>
        </div>
    </section>

    <footer class="py-8 text-center border-t border-slate-800/50 bg-black">
        <p class="text-slate-600 text-sm">© {{ date('Y') }} DOOB Infrastructure. All systems operational.</p>
    </footer>

</div>
@endsection
