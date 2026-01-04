<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DocuTrack | Customizable System</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased bg-slate-50 text-slate-900 overflow-x-hidden">
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

    <section class="py-24 relative overflow-hidden bg-slate-50">
        <div class="container mx-auto px-6 relative z-10">
            <div class="text-center mb-16">
                <h2 class="text-4xl md:text-5xl font-black text-slate-900 mb-4">Ready to upgrade your workflow?</h2>
                <p class="text-lg text-slate-600 max-w-xl mx-auto">TEXT HERE</p>
            </div>

            <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto">

                <div class="bg-white/60 backdrop-blur-sm p-8 rounded-3xl border border-slate-200 flex flex-col hover:border-indigo-300 transition">
                    <h3 class="text-xl font-bold text-slate-900 mb-2">Name Subscription</h3>
                    <div class="flex items-baseline gap-1 mb-6">
                        <span class="text-4xl font-black text-slate-900">Price</span>
                        <span class="text-slate-500 text-sm">/for?</span>
                    </div>
                    <ul class="space-y-4 mb-8 flex-grow">
                        <li class="flex items-center gap-3 text-slate-600">
                            <svg class="w-5 h-5 text-indigo-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Service Here
                        </li>
                    </ul>
                    <button class="w-full py-3 px-6 bg-slate-100 text-slate-900 font-bold rounded-xl hover:bg-slate-200 transition">Button</button>
                </div>

                <div class="bg-white/60 backdrop-blur-sm p-8 rounded-3xl border border-slate-200 flex flex-col hover:border-indigo-300 transition">
                    <h3 class="text-xl font-bold text-slate-900 mb-2">Name Subscription</h3>
                    <div class="flex items-baseline gap-1 mb-6">
                        <span class="text-4xl font-black text-slate-900">Price</span>
                        <span class="text-slate-500 text-sm">/for?</span>
                    </div>
                    <ul class="space-y-4 mb-8 flex-grow">
                        <li class="flex items-center gap-3 text-slate-600">
                            <svg class="w-5 h-5 text-indigo-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Service Here
                        </li>
                    </ul>
                    <button class="w-full py-3 px-6 border border-slate-300 text-slate-900 font-bold rounded-xl hover:bg-slate-50 transition">Button</button>
                </div>

                <div class="bg-white/60 backdrop-blur-sm p-8 rounded-3xl border border-slate-200 flex flex-col hover:border-indigo-300 transition">
                    <h3 class="text-xl font-bold text-slate-900 mb-2">Name Subscription</h3>
                    <div class="flex items-baseline gap-1 mb-6">
                        <span class="text-4xl font-black text-slate-900">Price</span>
                        <span class="text-slate-500 text-sm">/for?</span>
                    </div>
                    <ul class="space-y-4 mb-8 flex-grow">
                        <li class="flex items-center gap-3 text-slate-600">
                            <svg class="w-5 h-5 text-indigo-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                            </svg>
                            Service Here
                        </li>
                    </ul>
                    <button class="w-full py-3 px-6 border border-slate-300 text-slate-900 font-bold rounded-xl hover:bg-slate-50 transition">Button</button>
                </div>
            </div>
        </div>
    </section>
</body>

</html>