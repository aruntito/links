@extends('layouts.public')

@section('title', 'TITORA Ecosystem | Products. Platforms. Infrastructure.')
@section('description', 'The central hub for the TITORA ecosystem of digital infrastructure and growth platforms.')

@section('theme_styles')
<style>
    body {
        background-color: #000000;
        background-image: radial-gradient(circle at top, rgba(20, 20, 25, 1) 0%, rgba(0, 0, 0, 1) 100%);
        color: #ededed;
    }
</style>
@endsection

@section('content')
<div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 py-20 animate-fade-in-up font-sans">
    
    <!-- Hero Section -->
    <div class="text-center mb-24 mt-12">
        <h1 class="text-5xl md:text-7xl font-extrabold tracking-tighter mb-6 bg-clip-text text-transparent bg-gradient-to-b from-white to-gray-500">
            TITORA Ecosystem
        </h1>
        <p class="text-xl md:text-2xl font-medium text-gray-400 tracking-tight">
            Products. Platforms. Infrastructure.
        </p>
    </div>

    <!-- Core Platforms Grid -->
    <div class="mb-32">
        <h2 class="text-xs font-semibold text-gray-500 uppercase tracking-widest mb-8 text-center">Core Platforms</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            @php
                $mainProfiles = $profiles->filter(fn($p) => in_array($p->slug, ['titora', 'doob', 'karadavi', 'smxm']));
            @endphp
            
            @foreach($mainProfiles as $profile)
                <a href="{{ route('profile.show', $profile->slug) }}" class="group block relative rounded-2xl bg-gradient-to-b from-[#111] to-[#0a0a0a] border border-[#222] p-8 hover:border-gray-500 transition-all duration-500 overflow-hidden">
                    <div class="absolute inset-0 bg-gradient-to-br from-white/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    
                    <div class="relative z-10 flex flex-col h-full">
                        <div class="flex items-center justify-between mb-6">
                            @if($profile->avatar)
                                <img src="{{ Storage::disk('public')->url($profile->avatar) }}" alt="{{ $profile->name }}" class="w-12 h-12 rounded-full border border-gray-700">
                            @else
                                <div class="w-12 h-12 rounded-full border border-gray-700 bg-gray-800 flex items-center justify-center text-sm font-bold text-white">
                                    {{ strtoupper(substr($profile->name, 0, 2)) }}
                                </div>
                            @endif
                            
                            <div class="text-gray-500 group-hover:text-white transition-colors duration-300">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                            </div>
                        </div>
                        
                        <h3 class="text-2xl font-bold text-white mb-2 tracking-tight">{{ $profile->name }}</h3>
                        <p class="text-gray-400 font-medium mb-6 flex-grow">{{ $profile->headline }}</p>
                    </div>
                </a>
            @endforeach
        </div>
    </div>

    <!-- Founder Section -->
    @php
        $arun = $profiles->firstWhere('slug', 'arun');
    @endphp
    @if($arun)
    <div class="mb-32">
        <div class="rounded-3xl border border-[#222] bg-[#0a0a0a] p-10 md:p-16 relative overflow-hidden group">
            <div class="absolute top-0 right-0 -mt-20 -mr-20 w-96 h-96 bg-blue-900/10 rounded-full blur-3xl group-hover:bg-blue-900/20 transition-all duration-700"></div>
            
            <div class="relative z-10 flex flex-col md:flex-row items-center md:items-start gap-10">
                @if($arun->avatar)
                    <img src="{{ Storage::disk('public')->url($arun->avatar) }}" alt="{{ $arun->name }}" class="w-32 h-32 rounded-full border border-gray-700 shadow-2xl">
                @else
                    <div class="w-32 h-32 rounded-full border border-gray-700 bg-gray-900 flex items-center justify-center text-3xl font-bold text-white shadow-2xl shrink-0">
                        {{ strtoupper(substr($arun->name, 0, 2)) }}
                    </div>
                @endif
                
                <div class="text-center md:text-left flex-grow">
                    <h2 class="text-3xl font-bold text-white mb-2 tracking-tight">{{ $arun->name }}</h2>
                    <p class="text-gray-400 font-medium mb-6">{{ $arun->headline }}</p>
                    <p class="text-gray-300 max-w-xl leading-relaxed mb-8">{{ $arun->bio ?? 'Building Digital Infrastructure. Overseeing the TITORA ecosystem of brands and products.' }}</p>
                    
                    <a href="{{ route('profile.show', $arun->slug) }}" class="inline-flex items-center justify-center px-6 py-3 border border-[#333] hover:border-gray-400 bg-white/5 hover:bg-white/10 rounded-full text-sm font-semibold text-white transition-all duration-300">
                        View Founder OS
                    </a>
                </div>
            </div>
        </div>
    </div>
    @endif

</div>
@endsection
