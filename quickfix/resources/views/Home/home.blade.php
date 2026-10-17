<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="QuickFix helps you book trusted home services in minutes.">
    <title>QuickFix — Home services, made easy</title>

    {{-- Optional: remove this CDN and use your own local stylesheet if preferred. --}}
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        :root {
            --blue: #2563eb;
            --navy: #10213f;
            --muted: #64748b;
            --line: #e8edf5;
        }
        * { box-sizing: border-box; }
        html { scroll-behavior: smooth; }
        body {
            margin: 0;
            font-family: 'DM Sans', sans-serif;
            color: var(--navy);
            background: #fff;
        }
        h1, h2, h3, .brand { font-family: 'Manrope', sans-serif; }
        .container { width: min(1160px, calc(100% - 40px)); margin: 0 auto; }
        .nav-link { color: #53627a; transition: color .2s; }
        .nav-link:hover { color: var(--blue); }
        .btn-primary {
            display: inline-flex; align-items: center; justify-content: center; gap: 9px;
            border: 0; border-radius: 12px; padding: 13px 19px; background: var(--blue);
            color: white; font-weight: 700; box-shadow: 0 8px 20px rgba(37,99,235,.18);
            transition: transform .2s, background .2s;
        }
        .btn-primary:hover { background: #1d4ed8; transform: translateY(-1px); }
        .btn-outline {
            display: inline-flex; align-items: center; justify-content: center;
            border: 1px solid #dbe4f0; border-radius: 12px; padding: 12px 18px;
            color: var(--navy); font-weight: 700; background: white;
        }
        .hero-bg {
            background:
                radial-gradient(circle at 83% 17%, rgba(191,219,254,.65), transparent 28%),
                linear-gradient(135deg, #f5f9ff 0%, #fff 58%, #f3f7ff 100%);
        }
        .hero-art {
            min-height: 410px; position: relative; overflow: hidden; border-radius: 28px;
            background: linear-gradient(145deg, #dbeafe, #eff6ff 55%, #c7ddff);
        }
        .hero-art img { width: 100%; height: 410px; object-fit: cover; display: block; }
        .floating-card {
            position: absolute; background: rgba(255,255,255,.96); border: 1px solid rgba(255,255,255,.8);
            border-radius: 16px; padding: 13px 15px; box-shadow: 0 16px 45px rgba(15,23,42,.13);
            backdrop-filter: blur(8px);
        }
        .service-card {
            border: 1px solid var(--line); border-radius: 18px; padding: 22px;
            background: #fff; transition: transform .2s, box-shadow .2s, border-color .2s;
        }
        .service-card:hover { transform: translateY(-5px); border-color: #c7d9ff; box-shadow: 0 18px 35px rgba(15,23,42,.07); }
        .service-icon {
            width: 52px; height: 52px; display: grid; place-items: center;
            border-radius: 15px; font-size: 25px; background: #eff6ff;
        }
        .step-number {
            width: 46px; height: 46px; display: grid; place-items: center; border-radius: 14px;
            background: #dbeafe; color: #1d4ed8; font-weight: 800; font-size: 18px;
        }
        .section-kicker { color: var(--blue); font-weight: 800; font-size: 12px; letter-spacing: .14em; text-transform: uppercase; }
        .soft-panel { background: #f6f9ff; border: 1px solid #e7eefb; }
        @media (max-width: 760px) {
            .container { width: min(100% - 28px, 600px); }
            .hero-art, .hero-art img { min-height: 300px; height: 300px; }
            .desktop-nav { display: none; }
        }
    </style>
</head>
<body>
    {{-- Header --}}
    <header class="sticky top-0 z-50 border-b border-slate-100 bg-white/90 backdrop-blur-xl">
        @include('components.navbar')
    </header>

    <main>
        {{-- Hero --}}
        <section id="home" class="hero-bg">
            <div class="container grid items-center gap-12 py-14 md:grid-cols-2 md:py-20">
                <div class="py-2">
                    <div class="mb-6 inline-flex items-center gap-2 rounded-full border border-blue-100 bg-white px-4 py-2 text-xs font-bold text-blue-700 shadow-sm">
                        <span class="h-2 w-2 rounded-full bg-emerald-500"></span>
                        HOME SERVICES, WITHOUT THE HASSLE
                    </div>
                    <h1 class="max-w-xl text-4xl font-extrabold leading-[1.12] tracking-tight text-slate-950 sm:text-5xl lg:text-[58px]">
                        Your home, in<br>
                        <span class="text-blue-600">good hands.</span>
                    </h1>
                    <p class="mt-6 max-w-lg text-base leading-7 text-slate-600 sm:text-lg">
                        From a dripping tap to a full home refresh, book trusted local professionals in just a few clicks.
                    </p>

                    <form action="{{ route('services.index') }}" method="GET" class="mt-8 flex max-w-xl flex-col gap-3 rounded-2xl border border-slate-200 bg-white p-3 shadow-lg shadow-blue-900/5 sm:flex-row">
                        <label class="flex min-w-0 flex-1 items-center gap-3 px-2">
                            <span class="text-xl" aria-hidden="true">⌕</span>
                            <span class="min-w-0 flex-1">
                                <span class="block text-[11px] font-bold uppercase tracking-wide text-slate-400">What do you need?</span>
                                <input type="search" name="q" placeholder="Try “plumber” or “cleaning”" class="w-full border-0 bg-transparent py-1 text-sm text-slate-800 outline-none placeholder:text-slate-400 focus:ring-0">
                            </span>
                        </label>
                        <button type="submit" class="btn-primary">Explore services <span aria-hidden="true">→</span></button>
                    </form>

                    <div class="mt-7 flex flex-wrap items-center gap-x-6 gap-y-3 text-sm text-slate-600">
                        <span class="flex items-center gap-2"><span class="font-bold text-emerald-600">✓</span> Vetted professionals</span>
                        <span class="flex items-center gap-2"><span class="font-bold text-emerald-600">✓</span> Upfront pricing</span>
                        <span class="flex items-center gap-2"><span class="font-bold text-emerald-600">✓</span> Easy booking</span>
                    </div>
                </div>

                <div class="hero-art">
                    {{-- Replace this remote image with a local image in public/images if desired. --}}
                    <img src="https://images.unsplash.com/photo-1621905251189-08b45d6a269e?auto=format&fit=crop&w=1200&q=85"
                         alt="Professional technician working on a home repair"
                         onerror="this.onerror=null;this.src='https://images.unsplash.com/photo-1581578731548-c64695cc6952?auto=format&fit=crop&w=1200&q=85';">
                    <div class="floating-card left-4 top-5 flex items-center gap-3 sm:left-6 sm:top-7">
                        <span class="grid h-11 w-11 place-items-center rounded-xl bg-emerald-50 text-xl">✓</span>
                        <span><strong class="block text-sm">Trusted help</strong><small class="text-xs text-slate-500">Right when you need it</small></span>
                    </div>
                    <div class="floating-card bottom-5 right-4 sm:bottom-7 sm:right-6">
                        <div class="flex items-center gap-3">
                            <div class="flex -space-x-2">
                                <span class="grid h-9 w-9 place-items-center rounded-full border-2 border-white bg-amber-100">👨🏽‍🔧</span>
                                <span class="grid h-9 w-9 place-items-center rounded-full border-2 border-white bg-blue-100">👩🏻‍🔧</span>
                                <span class="grid h-9 w-9 place-items-center rounded-full border-2 border-white bg-emerald-100">👨🏻‍🔧</span>
                            </div>
                            <div><strong class="block text-sm">Local experts</strong><span class="text-xs text-slate-500">Ready to lend a hand</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- Trust strip --}}
        <section class="border-y border-slate-100 bg-white">
            <div class="container grid grid-cols-2 gap-6 py-6 text-center sm:grid-cols-4">
                <div><p class="text-2xl font-extrabold text-slate-900">Easy</p><p class="mt-1 text-xs text-slate-500">Online booking</p></div>
                <div><p class="text-2xl font-extrabold text-slate-900">Local</p><p class="mt-1 text-xs text-slate-500">Service professionals</p></div>
                <div><p class="text-2xl font-extrabold text-slate-900">Clear</p><p class="mt-1 text-xs text-slate-500">Service details</p></div>
                <div><p class="text-2xl font-extrabold text-slate-900">Simple</p><p class="mt-1 text-xs text-slate-500">Booking updates</p></div>
            </div>
        </section>

        {{-- Services --}}
        <section id="services" class="py-16 sm:py-20">
            <div class="container">
                <div class="flex flex-col justify-between gap-5 sm:flex-row sm:items-end">
                    <div>
                        <p class="section-kicker">What can we help with?</p>
                        <h2 class="mt-3 text-3xl font-extrabold tracking-tight sm:text-4xl">Services for every corner</h2>
                        <p class="mt-3 max-w-xl leading-7 text-slate-500">Find the right person for the little fixes and the bigger to-do list.</p>
                    </div>
                    <a href="{{ route('services.index') }}" class="inline-flex items-center gap-2 text-sm font-bold text-blue-600 hover:text-blue-800">View all services <span>→</span></a>
                </div>

                @php
                    $homeServices = isset($services) && $services->count()
                        ? $services->take(6)
                        : collect([
                            ['name' => 'Electrician', 'description' => 'Electrical repairs, lights and installations.', 'price' => 299, 'icon' => '⚡', 'tone' => 'bg-amber-50'],
                            ['name' => 'Plumbing', 'description' => 'Leaky taps, pipe repairs and fittings.', 'price' => 399, 'icon' => '🚿', 'tone' => 'bg-blue-50'],
                            ['name' => 'Home Cleaning', 'description' => 'Fresh, tidy spaces from top to bottom.', 'price' => 249, 'icon' => '🧹', 'tone' => 'bg-emerald-50'],
                            ['name' => 'Appliance Repair', 'description' => 'Help with everyday home appliances.', 'price' => 499, 'icon' => '🔧', 'tone' => 'bg-violet-50'],
                            ['name' => 'Carpentry', 'description' => 'Furniture fixes, shelves and fittings.', 'price' => 599, 'icon' => '🪚', 'tone' => 'bg-orange-50'],
                            ['name' => 'Painting', 'description' => 'Refresh a room with a clean finish.', 'price' => 499, 'icon' => '🎨', 'tone' => 'bg-pink-50'],
                        ]);
                @endphp

                <div class="mt-9 grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach ($homeServices as $service)
                        @php
                            $name = is_array($service) ? $service['name'] : $service->name;
                            $description = is_array($service) ? $service['description'] : $service->description;
                            $price = is_array($service) ? $service['price'] : $service->price;
                            $icon = is_array($service) ? $service['icon'] : '✦';
                            $tone = is_array($service) ? $service['tone'] : 'bg-blue-50';
                        @endphp
                        <article class="service-card">
                            <div class="flex items-start justify-between">
                                <div class="service-icon {{ $tone }}">{{ $icon }}</div>
                                <span class="rounded-full bg-emerald-50 px-3 py-1 text-xs font-bold text-emerald-700">Available</span>
                            </div>
                            <h3 class="mt-5 text-lg font-extrabold">{{ $name }}</h3>
                            <p class="mt-2 min-h-[48px] text-sm leading-6 text-slate-500">{{ $description }}</p>
                            <div class="mt-5 flex items-center justify-between border-t border-slate-100 pt-4">
                                <p class="text-xs text-slate-500">Starting from <strong class="text-base text-slate-900">₹{{ number_format((float) $price, 0) }}</strong></p>
                                <a href="{{ route('services.index') }}" class="grid h-9 w-9 place-items-center rounded-xl bg-blue-50 font-bold text-blue-600 transition hover:bg-blue-600 hover:text-white" aria-label="Explore {{ $name }}">→</a>
                            </div>
                        </article>
                    @endforeach
                </div>
            </div>
        </section>

        {{-- How it works --}}
        <section id="how-it-works" class="bg-slate-50 py-16 sm:py-20">
            <div class="container">
                <div class="mx-auto max-w-2xl text-center">
                    <p class="section-kicker">Simple from start to finish</p>
                    <h2 class="mt-3 text-3xl font-extrabold tracking-tight sm:text-4xl">Three steps to a happier home</h2>
                    <p class="mt-4 leading-7 text-slate-500">No long phone calls. No guesswork. Just a straightforward way to get help.</p>
                </div>
                <div class="mt-12 grid gap-8 md:grid-cols-3">
                    <div class="rounded-2xl bg-white p-7 shadow-sm">
                        <div class="step-number">01</div>
                        <h3 class="mt-5 text-lg font-extrabold">Choose a service</h3>
                        <p class="mt-2 text-sm leading-6 text-slate-500">Browse services and pick the one that matches what you need.</p>
                    </div>
                    <div class="rounded-2xl bg-white p-7 shadow-sm">
                        <div class="step-number">02</div>
                        <h3 class="mt-5 text-lg font-extrabold">Book a time</h3>
                        <p class="mt-2 text-sm leading-6 text-slate-500">Share your address, preferred date and any useful details.</p>
                    </div>
                    <div class="rounded-2xl bg-white p-7 shadow-sm">
                        <div class="step-number">03</div>
                        <h3 class="mt-5 text-lg font-extrabold">Track your request</h3>
                        <p class="mt-2 text-sm leading-6 text-slate-500">Check your booking status anytime from your account.</p>
                    </div>
                </div>
            </div>
        </section>

        {{-- Why us + CTA --}}
        <section id="why-quickfix" class="py-16 sm:py-20">
            <div class="container grid items-center gap-10 md:grid-cols-2">
                <div class="soft-panel rounded-3xl p-8 sm:p-10">
                    <div class="grid grid-cols-2 gap-4">
                        <div class="rounded-2xl bg-white p-5"><span class="text-2xl">🛡️</span><h3 class="mt-3 font-extrabold">Peace of mind</h3><p class="mt-1 text-sm text-slate-500">Clear booking details</p></div>
                        <div class="rounded-2xl bg-white p-5"><span class="text-2xl">🗓️</span><h3 class="mt-3 font-extrabold">Your schedule</h3><p class="mt-1 text-sm text-slate-500">Choose a preferred date</p></div>
                        <div class="rounded-2xl bg-white p-5"><span class="text-2xl">💬</span><h3 class="mt-3 font-extrabold">Stay informed</h3><p class="mt-1 text-sm text-slate-500">Follow booking status</p></div>
                        <div class="rounded-2xl bg-white p-5"><span class="text-2xl">🏡</span><h3 class="mt-3 font-extrabold">Home-first</h3><p class="mt-1 text-sm text-slate-500">Everyday help, simplified</p></div>
                    </div>
                </div>
                <div>
                    <p class="section-kicker">Why QuickFix?</p>
                    <h2 class="mt-3 text-3xl font-extrabold tracking-tight sm:text-4xl">More time for what matters.</h2>
                    <p class="mt-5 leading-7 text-slate-500">Home maintenance shouldn't take over your day. QuickFix keeps the process organized, from choosing a service to checking your booking status.</p>
                    <ul class="mt-6 space-y-3 text-sm font-semibold text-slate-700">
                        <li class="flex gap-3"><span class="text-emerald-600">✓</span> Simple, easy-to-use booking experience</li>
                        <li class="flex gap-3"><span class="text-emerald-600">✓</span> Service details and starting prices in one place</li>
                        <li class="flex gap-3"><span class="text-emerald-600">✓</span> Booking history available in your account</li>
                    </ul>
                    <a href="{{ route('services.index') }}" class="btn-primary mt-8">Find your service <span>→</span></a>
                </div>
            </div>
        </section>

        <section class="pb-16">
            <div class="container">
                <div class="overflow-hidden rounded-3xl bg-blue-600 px-7 py-10 text-white sm:px-12 sm:py-12">
                    <div class="flex flex-col items-start justify-between gap-6 md:flex-row md:items-center">
                        <div>
                            <p class="text-sm font-bold text-blue-100">YOUR TO-DO LIST CAN WAIT NO MORE</p>
                            <h2 class="mt-2 text-3xl font-extrabold tracking-tight sm:text-4xl">Let's get it fixed.</h2>
                            <p class="mt-3 max-w-xl text-sm leading-6 text-blue-100">Find a service, make a booking, and get one step closer to a home that works for you.</p>
                        </div>
                        <a href="{{ route('services.index') }}" class="inline-flex shrink-0 items-center gap-2 rounded-xl bg-white px-5 py-3 font-extrabold text-blue-700 transition hover:bg-blue-50">Explore services <span>→</span></a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    {{-- Footer --}}
    <footer class="border-t border-slate-100 bg-white">
        <div class="container flex flex-col justify-between gap-5 py-8 sm:flex-row sm:items-center">
            <a href="{{ route('services.index') }}" class="brand flex items-center gap-2 font-extrabold text-slate-900">
                <span class="grid h-8 w-8 place-items-center rounded-lg bg-blue-600 text-white">✦</span>
                Quick<span class="text-blue-600">Fix</span>
            </a>
            <p class="text-sm text-slate-500">Making home services a little simpler.</p>
            <p class="text-xs text-slate-400">© {{ date('Y') }} QuickFix. Built with Laravel.</p>
        </div>
    </footer>
</body>
</html>
