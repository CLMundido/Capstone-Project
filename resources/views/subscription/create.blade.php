<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Activate Workspace | DocuTrack</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700,800&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased bg-slate-50">

    <div class="min-h-screen flex items-center justify-center p-6 lg:p-12">

        <div class="w-full max-w-7xl bg-white shadow-2xl rounded-[2rem] overflow-hidden flex flex-col lg:flex-row border border-gray-100 min-h-[850px]">

            <div class="hidden lg:flex lg:w-5/12 bg-gradient-to-br from-blue-900 via-blue-800 to-emerald-700 p-16 flex-col justify-between text-white relative">
                <div class="relative z-10">
                    <div class="inline-block p-4 bg-white/10 rounded-2xl backdrop-blur-xl mb-10 border border-white/20">
                        <img src="{{ asset('images/logo.png') }}" class="w-14 h-14" alt="DocuTrack Logo">
                    </div>
                    <h1 class="text-6xl font-extrabold tracking-tight leading-tight">
                        DocuTrack
                    </h1>
                    <p class="mt-6 text-xl text-blue-100 font-light max-w-md">
                        The next generation of document management. Secure, customizable, and built for your team.
                    </p>
                </div>

                <div class="space-y-10 relative z-10">
                    <div class="flex items-center space-x-6">
                        <div class="h-12 w-12 rounded-xl bg-white/10 flex items-center justify-center text-emerald-300 font-bold text-xl border border-white/10">01</div>
                        <div>
                            <h4 class="font-bold text-lg">Identity First</h4>
                            <p class="text-sm text-blue-200">Choose your own Login ID for full ownership.</p>
                        </div>
                    </div>
                    <div class="flex items-center space-x-6">
                        <div class="h-12 w-12 rounded-xl bg-white/10 flex items-center justify-center text-blue-300 font-bold text-xl border border-white/10">02</div>
                        <div>
                            <h4 class="font-bold text-lg">OTP Protection</h4>
                            <p class="text-sm text-blue-200">Military-grade 2FA on every login attempt.</p>
                        </div>
                    </div>
                </div>

                <div class="mt-12 text-blue-300 text-xs font-mono uppercase tracking-widest">
                    Version 2.0 • 2026 Production Ready
                </div>
            </div>

            <div class="w-full lg:w-7/12 p-10 lg:p-20 overflow-y-auto">
                <form method="POST" action="{{ route('subscription.store') }}">
                    @csrf

                    <nav class="mb-4">
                        <a href="{{ route('welcome') }}" class="inline-flex items-center text-sm font-semibold text-blue-600 hover:text-blue-800 transition-colors">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                            </svg>
                            Back to Welcome Page
                        </a>
                    </nav>

                    <header class="mb-12">
                        <h2 class="text-4xl font-extrabold text-slate-900 tracking-tight">Activate Your System</h2>
                        <p class="text-slate-500 mt-3 text-lg">Fill in all required fields to deploy your workspace.</p>
                    </header>

                    <div class="mb-12">
                        <div class="flex items-center space-x-3 mb-6">
                            <span class="w-8 h-8 rounded-full bg-blue-100 text-blue-600 flex items-center justify-center font-bold">1</span>
                            <h3 class="text-xl font-bold text-slate-800">Administrator Credentials</h3>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            <div class="space-y-2">
                                <label class="text-sm font-bold text-slate-600 uppercase tracking-wide">Full Name</label>
                                <input type="text" name="name" placeholder="Juan Dela Cruz" required class="w-full px-5 py-4 rounded-2xl border-slate-200 bg-slate-50 focus:bg-white focus:ring-4 focus:ring-blue-100 focus:border-blue-500 transition-all">
                            </div>

                            <div class="space-y-2">
                                <label class="text-sm font-bold text-slate-600 uppercase tracking-wide">Business Email</label>
                                <input type="email" name="email" placeholder="admin@org.com" required class="w-full px-5 py-4 rounded-2xl border-slate-200 bg-slate-50 focus:bg-white focus:ring-4 focus:ring-blue-100 focus:border-blue-500 transition-all">
                            </div>

                            <div class="space-y-2">
                                <label class="text-sm font-bold text-slate-600 uppercase tracking-wide">Employee ID Number</label>
                                <input type="text" name="id_number" placeholder="e.g., ADM-2026-01" required class="w-full px-5 py-4 rounded-2xl border-slate-200 bg-slate-50 focus:bg-white focus:ring-4 focus:ring-blue-100 focus:border-blue-500 transition-all">
                                @error('id_number') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                            </div>

                            <div class="space-y-2">
                                <label class="text-sm font-bold text-slate-600 uppercase tracking-wide">Contact Number</label>
                                <input type="text" name="contact_number" placeholder="+63 9xx xxxx" required class="w-full px-5 py-4 rounded-2xl border-slate-200 bg-slate-50 focus:bg-white focus:ring-4 focus:ring-blue-100 focus:border-blue-500 transition-all">
                            </div>
                        </div>
                    </div>

                    <div class="mb-12">
                        <div class="flex items-center space-x-3 mb-6">
                            <span class="w-8 h-8 rounded-full bg-emerald-100 text-emerald-600 flex items-center justify-center font-bold">2</span>
                            <h3 class="text-xl font-bold text-slate-800">Organization Information</h3>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                            <div class="md:col-span-2 space-y-2">
                                <label class="text-sm font-bold text-slate-600 uppercase tracking-wide">Organization / Agency Name</label>
                                <input type="text" name="org_name" placeholder="Department of Social Welfare" required class="w-full px-5 py-4 rounded-2xl border-slate-200 bg-slate-50">
                            </div>

                            <div class="space-y-2">
                                <label class="text-sm font-bold text-slate-600 uppercase tracking-wide">Industry Type</label>
                                <select name="industry" class="w-full px-5 py-4 rounded-2xl border-slate-200 bg-slate-50 focus:ring-blue-500">
                                    <option value="Government">Government Agency</option>
                                    <option value="Medical">Healthcare & Medical</option>
                                    <option value="Legal">Legal & Law Firms</option>
                                    <option value="Educational">Educational Institution</option>
                                    <option value="Private">Private Corporate</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="mb-12">
                        <div class="flex items-center space-x-3 mb-6">
                            <span class="w-8 h-8 rounded-full bg-slate-200 text-slate-600 flex items-center justify-center font-bold">3</span>
                            <h3 class="text-xl font-bold text-slate-800">Select Subscription Tier</h3>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <label class="group relative p-6 border-2 border-slate-100 rounded-3xl cursor-pointer hover:border-blue-500 transition-all bg-white shadow-sm">
                                <input type="radio" name="plan" value="Standard" checked class="absolute top-4 right-4 text-blue-600 focus:ring-blue-500">
                                <div class="pr-6">
                                    <h5 class="font-extrabold text-slate-900 text-lg">Standard Plan</h5>
                                    <p class="text-sm text-slate-500 mt-1">Up to 25 users, 10GB cloud storage, and automated tracking.</p>
                                    <div class="mt-4 text-blue-600 font-bold">$29.00 / mo</div>
                                </div>
                            </label>

                            <label class="group relative p-6 border-2 border-slate-100 rounded-3xl cursor-pointer hover:border-emerald-500 transition-all bg-white shadow-sm">
                                <input type="radio" name="plan" value="Enterprise" class="absolute top-4 right-4 text-emerald-600 focus:ring-emerald-500">
                                <div class="pr-6">
                                    <h5 class="font-extrabold text-slate-900 text-lg">Enterprise Plan</h5>
                                    <p class="text-sm text-slate-500 mt-1">Unlimited users, 1TB storage, custom API, and 24/7 support.</p>
                                    <div class="mt-4 text-emerald-600 font-bold">$99.00 / mo</div>
                                </div>
                            </label>
                        </div>
                    </div>

                    <div class="pt-6">
                        <button type="submit" class="w-full bg-slate-900 text-white font-bold py-5 rounded-[1.5rem] text-xl shadow-2xl hover:bg-blue-700 hover:-translate-y-1 transition-all duration-300">
                            Finalize and Launch System
                        </button>
                        <p class="text-center mt-6 text-slate-400 text-sm">
                            Need help? Contact <a href="#" class="text-blue-500 underline">System Support</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>