<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DocuTrack | Customizable System</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased bg-slate-50 text-slate-900 overflow-x-hidden">

    <div class="blob w-96 h-96 bg-indigo-200 -top-20 -left-20 animate-[drift_20s_infinite_linear]"></div>
    <div class="blob w-80 h-80 bg-blue-200 top-1/2 -right-20 animate-[pulse-slow_10s_infinite_ease-in-out]"></div>

    <div class="relative z-10">
        <nav class="p-6 bg-white/70 backdrop-blur-md sticky top-0 z-50 border-b border-slate-200">
            <div class="container mx-auto flex justify-between items-center">
                <a href="{{ route('welcome') }}">
                    <div class="text-2xl font-bold text-indigo-600 cursor-pointer">
                        DocuTrack
                    </div>
                </a>
                <div class="space-x-4">
                    <a href="" class="font-medium text-slate-600 hover:text-indigo-600">Log in</a>
                    <a href="{{ route('subscribe') }}" class="px-6 py-2 bg-indigo-600 text-white rounded-full hover:bg-indigo-700 transition">Get Started</a>
                </div>
            </div>
        </nav>

        <header class="py-24 text-center">
            <h1 class="text-6xl font-black mb-6">Track Your <span class="text-indigo-600">Documents</span><br>With Absolute Precision</h1>
            <p class="text-xl text-slate-600 max-w-2xl mx-auto mb-10">Ditch the spreadsheets. A high-performance tracking system that evolves with your business.</p>
            <a href="{{ route('subscribe') }}" class="px-8 py-4 bg-indigo-600 text-white font-bold rounded-2xl shadow-lg shadow-indigo-200">Start Tracking Now</a>
        </header>

        <section class="container mx-auto px-6 py-12 grid md:grid-cols-3 gap-8">
            <div class="bg-white/80 p-8 rounded-3xl border border-white shadow-sm hover:shadow-md transition">
                <div class="text-3xl mb-4">📂</div>
                <h3 class="text-xl font-bold mb-2">Chan</h3>
                <p class="text-slate-500">HAHA Kilay</p>
            </div>

            <div class="bg-white/80 p-8 rounded-3xl border border-white shadow-sm hover:shadow-md transition">
                <div class="text-3xl mb-4">📂</div>
                <h3 class="text-xl font-bold mb-2">Feature Name</h3>
                <p class="text-slate-500">Feature Description</p>
            </div>

            <div class="bg-white/80 p-8 rounded-3xl border border-white shadow-sm hover:shadow-md transition">
                <div class="text-3xl mb-4">📂</div>
                <h3 class="text-xl font-bold mb-2">Feature Name</h3>
                <p class="text-slate-500">Feature Description</p>
            </div>
        </section>
    </div>
</body>
</html>