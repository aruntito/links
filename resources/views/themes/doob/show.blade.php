@extends('layouts.ecosystem')

@section('title', $profile->seo_title ?: 'DOOB | Network Observability')
@section('description', $profile->seo_description ?: 'Live system state and routing architecture.')
@if($profile->avatar)
@section('og_image', Storage::disk('public')->url($profile->avatar))
@endif

@section('theme_styles')
<style>
    body {
        background-color: #000000;
        color: #e5e5e5;
    }
    .dark-mode-override {
        background-color: #000000;
        color: #e5e5e5;
    }
    /* Dashboard specific styling */
    .dashboard-panel {
        background: #0a0a0a;
        border: 1px solid #1f1f1f;
        border-radius: 4px;
        overflow: hidden;
    }
    .panel-header {
        background: #111111;
        border-bottom: 1px solid #1f1f1f;
        padding: 8px 12px;
        font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
        font-size: 0.65rem;
        letter-spacing: 0.1em;
        text-transform: uppercase;
        color: #888;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    .data-value {
        font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, monospace;
        font-size: 2rem;
        font-weight: 700;
        letter-spacing: -0.05em;
        line-height: 1;
        color: #fff;
    }
    .data-label {
        font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, monospace;
        font-size: 0.7rem;
        color: #666;
        margin-top: 4px;
    }
    /* Status indicators */
    .status-dot {
        width: 6px;
        height: 6px;
        border-radius: 50%;
        display: inline-block;
        margin-right: 6px;
    }
    .status-ok { background-color: #10b981; box-shadow: 0 0 8px rgba(16, 185, 129, 0.5); }
    .status-warn { background-color: #f59e0b; box-shadow: 0 0 8px rgba(245, 158, 11, 0.5); }
    
    /* Animations for "live" feel */
    @keyframes pulse-opacity {
        0%, 100% { opacity: 1; }
        50% { opacity: 0.5; }
    }
    .animate-pulse-fast {
        animation: pulse-opacity 1.5s cubic-bezier(0.4, 0, 0.6, 1) infinite;
    }
    @keyframes scroll-up {
        0% { transform: translateY(0); }
        100% { transform: translateY(-50%); }
    }
    .log-stream {
        display: flex;
        flex-direction: column;
        animation: scroll-up 20s linear infinite;
    }
    .chart-bar {
        background: #10b981;
        width: 100%;
        border-radius: 2px 2px 0 0;
        transition: height 0.5s ease;
    }
    /* Flow animation */
    @keyframes dash {
        to { stroke-dashoffset: -20; }
    }
    .flow-line {
        stroke-dasharray: 4 4;
        animation: dash 1s linear infinite;
    }
</style>
<script>
    // Simulate live dashboard data
    document.addEventListener('DOMContentLoaded', () => {
        // Randomize chart bars slightly every 2 seconds
        setInterval(() => {
            document.querySelectorAll('.chart-bar').forEach(bar => {
                const currentHeight = parseFloat(bar.style.height || 50);
                const variance = (Math.random() - 0.5) * 20;
                let newHeight = currentHeight + variance;
                if(newHeight > 100) newHeight = 90;
                if(newHeight < 10) newHeight = 20;
                bar.style.height = `${newHeight}%`;
            });
        }, 2000);

        // Update throughput number
        const throughputEl = document.getElementById('live-throughput');
        if(throughputEl) {
            setInterval(() => {
                const base = 2450000;
                const variance = Math.floor(Math.random() * 50000) - 25000;
                throughputEl.innerText = ((base + variance) / 1000000).toFixed(2) + 'M';
            }, 3000);
        }
    });
</script>
@endsection

@section('content')
<div class="w-full min-h-screen animate-fade-in-up font-sans dark-mode-override selection:bg-emerald-500/30">
    
    <!-- Top System Bar -->
    <header class="w-full border-b border-[#1f1f1f] bg-[#050505]">
        <div class="px-6 py-3 flex items-center justify-between text-xs font-mono text-[#888]">
            <div class="flex items-center gap-6">
                <span class="font-bold text-white tracking-widest uppercase">DOOB // NOC</span>
                <span class="hidden md:inline border-l border-[#333] pl-6">US-EAST-1 (PRIMARY)</span>
            </div>
            <div class="flex items-center gap-4">
                <div class="flex items-center">
                    <span class="status-dot status-ok"></span>
                    ALL SYSTEMS OPERATIONAL
                </div>
                <span>{{ now()->timezone('UTC')->format('H:i:s T') }}</span>
            </div>
        </div>
    </header>

    <div class="p-6 max-w-[1600px] mx-auto">
        
        <!-- 1. Hero / Global State Dashboard -->
        <div class="mb-6">
            <h1 class="text-3xl font-bold text-white tracking-tight mb-2">Network Backbone</h1>
            <p class="text-sm font-mono text-[#666]">DOOB Attention Routing Infrastructure / Global State Overview</p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4 mb-6">
            <div class="dashboard-panel p-4 flex flex-col justify-between">
                <div class="data-label mb-4">STATUS</div>
                <div class="flex items-center gap-3">
                    <div class="w-3 h-3 rounded-full bg-emerald-500 shadow-[0_0_12px_rgba(16,185,129,0.8)] animate-pulse-fast"></div>
                    <div class="text-emerald-500 font-mono text-sm font-bold tracking-widest">OPERATIONAL</div>
                </div>
            </div>
            
            <div class="dashboard-panel p-4 flex flex-col justify-between">
                <div class="data-label mb-4">ACTIVE NODES</div>
                <div class="data-value">142</div>
            </div>

            <div class="dashboard-panel p-4 flex flex-col justify-between lg:col-span-2">
                <div class="data-label mb-4 flex justify-between">
                    <span>EXECUTION CAPACITY (24H)</span>
                    <span class="text-emerald-500">+12.4%</span>
                </div>
                <div class="flex items-end gap-2">
                    <div class="data-value" id="live-throughput">2.45M</div>
                    <div class="text-[#666] font-mono text-sm mb-1">req/day</div>
                </div>
            </div>

            <div class="dashboard-panel p-4 flex flex-col justify-between">
                <div class="data-label mb-4">PROVIDER MESH</div>
                <div class="data-value text-emerald-500">99.9%</div>
            </div>

            <div class="dashboard-panel p-4 flex flex-col justify-between">
                <div class="data-label mb-4">QUEUE HEALTH</div>
                <div class="data-value text-emerald-500">NOMINAL</div>
            </div>
        </div>

        <!-- 2. Observability Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            
            <!-- Left Column: Traffic Flow & Execution Streams -->
            <div class="lg:col-span-2 flex flex-col gap-6">
                
                <!-- Live Routing Map (Simulated) -->
                <div class="dashboard-panel">
                    <div class="panel-header">
                        <span>Traffic Flow Topology</span>
                        <span class="text-emerald-500 animate-pulse-fast">● LIVE</span>
                    </div>
                    <div class="p-8 h-[300px] flex items-center justify-center bg-[#050505] relative overflow-hidden">
                        <!-- Abstract Flow Visualization -->
                        <svg class="w-full h-full max-w-2xl opacity-80" viewBox="0 0 600 200" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- Input Nodes -->
                            <circle cx="50" cy="50" r="15" fill="#111" stroke="#333" stroke-width="2"/>
                            <text x="50" y="30" fill="#666" font-family="monospace" font-size="10" text-anchor="middle">IG_SRC</text>
                            
                            <circle cx="50" cy="100" r="15" fill="#111" stroke="#333" stroke-width="2"/>
                            <text x="50" y="130" fill="#666" font-family="monospace" font-size="10" text-anchor="middle">X_SRC</text>
                            
                            <circle cx="50" cy="150" r="15" fill="#111" stroke="#333" stroke-width="2"/>
                            <text x="50" y="180" fill="#666" font-family="monospace" font-size="10" text-anchor="middle">WEB_SRC</text>

                            <!-- Routing Engine (Center) -->
                            <rect x="250" y="60" width="100" height="80" rx="4" fill="#111" stroke="#10b981" stroke-width="2"/>
                            <text x="300" y="90" fill="#10b981" font-family="monospace" font-size="12" font-weight="bold" text-anchor="middle">ROUTING</text>
                            <text x="300" y="110" fill="#10b981" font-family="monospace" font-size="12" font-weight="bold" text-anchor="middle">ENGINE</text>

                            <!-- Output Nodes -->
                            <circle cx="550" cy="75" r="15" fill="#111" stroke="#333" stroke-width="2"/>
                            <text x="550" y="55" fill="#666" font-family="monospace" font-size="10" text-anchor="middle">CONV_A</text>

                            <circle cx="550" cy="125" r="15" fill="#111" stroke="#333" stroke-width="2"/>
                            <text x="550" y="155" fill="#666" font-family="monospace" font-size="10" text-anchor="middle">CONV_B</text>

                            <!-- Flow Lines (Animated) -->
                            <path class="flow-line" d="M65 50 Q 150 50 250 80" stroke="#333" stroke-width="2" fill="none"/>
                            <path class="flow-line" d="M65 50 Q 150 50 250 80" stroke="#10b981" stroke-width="2" fill="none" opacity="0.5"/>
                            
                            <path class="flow-line" d="M65 100 Q 150 100 250 100" stroke="#333" stroke-width="2" fill="none"/>
                            <path class="flow-line" d="M65 100 Q 150 100 250 100" stroke="#10b981" stroke-width="2" fill="none" opacity="0.5"/>
                            
                            <path class="flow-line" d="M65 150 Q 150 150 250 120" stroke="#333" stroke-width="2" fill="none"/>
                            <path class="flow-line" d="M65 150 Q 150 150 250 120" stroke="#10b981" stroke-width="2" fill="none" opacity="0.5"/>

                            <path class="flow-line" d="M350 90 Q 450 75 535 75" stroke="#333" stroke-width="2" fill="none"/>
                            <path class="flow-line" d="M350 90 Q 450 75 535 75" stroke="#10b981" stroke-width="2" fill="none" opacity="0.5"/>

                            <path class="flow-line" d="M350 110 Q 450 125 535 125" stroke="#333" stroke-width="2" fill="none"/>
                            <path class="flow-line" d="M350 110 Q 450 125 535 125" stroke="#10b981" stroke-width="2" fill="none" opacity="0.5"/>
                        </svg>
                        
                        <!-- Grid Overlay -->
                        <div class="absolute inset-0 bg-[url('data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAiIGhlaWdodD0iMjAiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyI+PGNpcmNsZSBjeD0iMSIgY3k9IjEiIHI9IjEiIGZpbGw9IiMzMzMiLz48L3N2Zz4=')] opacity-20 pointer-events-none"></div>
                    </div>
                </div>

                <!-- Execution Streams (Log output) -->
                <div class="dashboard-panel">
                    <div class="panel-header">
                        <span>Execution Streams / Reconciliation Logs</span>
                        <span>TAIL -F</span>
                    </div>
                    <div class="p-4 h-[250px] bg-[#050505] overflow-hidden relative font-mono text-xs leading-relaxed text-[#888]">
                        <div class="log-stream">
                            @for($i = 0; $i < 40; $i++)
                                @php
                                    $sources = ['IG_SRC', 'X_SRC', 'WEB_SRC', 'API_NODE'];
                                    $status = rand(1, 100) > 95 ? '<span class="text-orange-500">[RETRY]</span>' : '<span class="text-emerald-500">[OK]</span>';
                                    $id = substr(md5(rand()), 0, 8);
                                    $ms = rand(12, 85);
                                @endphp
                                <div class="whitespace-nowrap opacity-80 hover:opacity-100 hover:text-white hover:bg-[#111]">
                                    <span class="text-[#444]">{{ now()->subSeconds(100 - $i)->format('Y-m-d H:i:s.u') }}</span> | 
                                    <span class="text-blue-400">{{ $sources[array_rand($sources)] }}</span> -> 
                                    REQ_{{ strtoupper($id) }} | 
                                    ROUTE: EVAL_MATCH | 
                                    {!! $status !!} | 
                                    {{ $ms }}ms
                                </div>
                            @endfor
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-b from-[#050505] via-transparent to-[#050505] pointer-events-none"></div>
                    </div>
                </div>
            </div>

            <!-- Right Column: Provider Health & Endpoints -->
            <div class="flex flex-col gap-6">
                
                <!-- Ingestion Rate Chart -->
                <div class="dashboard-panel">
                    <div class="panel-header">
                        <span>Ingestion Rate (req/sec)</span>
                    </div>
                    <div class="p-4 h-[150px] bg-[#050505] flex items-end justify-between gap-1 border-b border-[#1f1f1f]">
                        @for($i = 0; $i < 30; $i++)
                            <div class="w-full h-full flex items-end">
                                <div class="chart-bar" style="height: {{ rand(30, 80) }}%; background-color: {{ rand(1, 100) > 90 ? '#f59e0b' : '#10b981' }};"></div>
                            </div>
                        @endfor
                    </div>
                    <div class="p-3 text-center">
                        <span class="text-2xl font-mono font-bold text-white">428.4</span> <span class="text-xs font-mono text-[#666]">RPS</span>
                    </div>
                </div>

                <!-- Provider Mesh Health -->
                <div class="dashboard-panel">
                    <div class="panel-header">
                        <span>Provider Mesh Health</span>
                    </div>
                    <div class="p-0 text-sm font-mono">
                        <div class="flex items-center justify-between p-3 border-b border-[#1f1f1f] hover:bg-[#111]">
                            <div class="flex items-center gap-3"><span class="status-dot status-ok"></span> <span>Node Alpha</span></div>
                            <span class="text-[#666]">14ms</span>
                        </div>
                        <div class="flex items-center justify-between p-3 border-b border-[#1f1f1f] hover:bg-[#111]">
                            <div class="flex items-center gap-3"><span class="status-dot status-ok"></span> <span>Node Beta</span></div>
                            <span class="text-[#666]">18ms</span>
                        </div>
                        <div class="flex items-center justify-between p-3 border-b border-[#1f1f1f] hover:bg-[#111]">
                            <div class="flex items-center gap-3"><span class="status-dot status-warn animate-pulse-fast"></span> <span>Node Gamma (Syncing)</span></div>
                            <span class="text-orange-500">145ms</span>
                        </div>
                        <div class="flex items-center justify-between p-3 hover:bg-[#111]">
                            <div class="flex items-center gap-3"><span class="status-dot status-ok"></span> <span>Node Delta</span></div>
                            <span class="text-[#666]">12ms</span>
                        </div>
                    </div>
                </div>

                <!-- Active Network Endpoints -->
                <div class="dashboard-panel flex-grow">
                    <div class="panel-header">
                        <span>Active Network Endpoints</span>
                    </div>
                    <div class="p-0 text-sm font-mono">
                        @foreach($profile->links->where('is_featured', true) as $link)
                            <a href="{{ route('links.redirect', $link->id) }}" target="_blank" class="block p-4 border-b border-[#1f1f1f] hover:bg-[#111] transition-colors group">
                                <div class="flex justify-between items-center mb-1">
                                    <span class="text-white font-bold">{{ $link->title }}</span>
                                    <span class="text-[10px] text-emerald-500 bg-emerald-500/10 px-2 py-0.5 rounded">ACTIVE</span>
                                </div>
                                @if($link->description)
                                    <div class="text-xs text-[#666] truncate group-hover:text-[#888]">{{ $link->description }}</div>
                                @endif
                                <div class="mt-2 text-[10px] text-[#444] break-all">
                                    > ROUTE: {{ route('links.redirect', $link->id) }}
                                </div>
                            </a>
                        @endforeach
                        @if($profile->links->where('is_featured', true)->count() === 0)
                            <div class="p-4 text-[#666] text-xs italic">No active endpoints detected.</div>
                        @endif
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
