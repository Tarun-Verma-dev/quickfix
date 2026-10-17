<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services | QuickFix</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@400;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'DM Sans', sans-serif; }
        h1, h2, h3, .brand { font-family: 'Manrope', sans-serif; }
        .service-card { transition: transform .2s, box-shadow .2s; }
        .service-card:hover { transform: translateY(-4px); box-shadow: 0 15px 30px #10213f12; }
    </style>
</head>
<body class="bg-white text-slate-900">

<header class="sticky top-0 z-40 border-b border-slate-100 bg-white/95">
    @include('components.navbar')
</header>

<main>
    <section class="bg-gradient-to-br from-blue-50 via-white to-indigo-50">
        <div class="mx-auto max-w-6xl px-5 py-16 sm:py-20">
            <p class="text-xs font-extrabold uppercase tracking-[.18em] text-blue-600">QUICKFIX SERVICES</p>
            <h1 class="mt-4 text-4xl font-extrabold tracking-tight sm:text-5xl">How can we help<br>your home today?</h1>
            <p class="mt-5 max-w-xl leading-7 text-slate-600">
                Find the right professional for repairs, cleaning and everyday home maintenance.
            </p>

            <form method="GET" action="{{ url('/services') }}" class="mt-8 flex max-w-xl gap-3 rounded-2xl border border-slate-200 bg-white p-3 shadow-sm">
                <input name="q" value="{{ request('q') }}" placeholder="Search plumbing, cleaning..." class="min-w-0 flex-1 rounded-lg px-3 py-2 outline-none focus:ring-2 focus:ring-blue-200">
                <button class="rounded-xl bg-blue-600 px-5 py-3 text-sm font-bold text-white hover:bg-blue-700">Search</button>
            </form>
        </div>
    </section>

    @php
        $items = [
            ['name'=>'Electrician','description'=>'Electrical repairs, lights, switches and installations.','price'=>299,'icon'=>'⚡','tone'=>'bg-amber-50'],
            ['name'=>'Plumbing','description'=>'Leaky taps, blocked drains, pipes and fittings.','price'=>399,'icon'=>'🚿','tone'=>'bg-blue-50'],
            ['name'=>'Home Cleaning','description'=>'Cleaning help for rooms, kitchens and bathrooms.','price'=>249,'icon'=>'🧹','tone'=>'bg-emerald-50'],
            ['name'=>'AC Repair','description'=>'Air conditioner maintenance and troubleshooting.','price'=>499,'icon'=>'❄️','tone'=>'bg-cyan-50'],
            ['name'=>'Carpentry','description'=>'Furniture repairs, shelves, doors and fittings.','price'=>349,'icon'=>'🪚','tone'=>'bg-orange-50'],
            ['name'=>'Painting','description'=>'Wall painting and small touch-up jobs.','price'=>499,'icon'=>'🎨','tone'=>'bg-pink-50'],
        ];
        $filteredItems = collect($items)->filter(fn($item) =>
            !request('q') ||
            str_contains(strtolower($item['name']), strtolower(request('q'))) ||
            str_contains(strtolower($item['description']), strtolower(request('q')))
        );
    @endphp

    <section class="mx-auto max-w-6xl px-5 py-14 sm:py-16">
        <div class="mb-8">
            <p class="text-xs font-extrabold uppercase tracking-widest text-blue-600">WHAT WE OFFER</p>
            <h2 class="mt-2 text-3xl font-extrabold">Explore our services</h2>
            <p class="mt-2 text-slate-500">Choose a service to get started.</p>
        </div>

        <div class="grid gap-5 sm:grid-cols-2 lg:grid-cols-3">
            @forelse ($filteredItems as $item)
                <article class="service-card rounded-2xl border border-slate-200 bg-white p-6">
                    <div class="flex items-center justify-between">
                        <div class="grid h-14 w-14 place-items-center rounded-2xl text-2xl {{ $item['tone'] }}">
                            {{ $item['icon'] }}
                        </div>
                        <span class="rounded-full bg-emerald-50 px-3 py-1 text-xs font-bold text-emerald-700">Available</span>
                    </div>
                    <h3 class="mt-5 text-xl font-extrabold">{{ $item['name'] }}</h3>
                    <p class="mt-2 min-h-12 text-sm leading-6 text-slate-500">{{ $item['description'] }}</p>
                    <div class="mt-5 flex items-center justify-between border-t border-slate-100 pt-4">
                        <div>
                            <p class="text-xs text-slate-500">Starting from</p>
                            <p class="text-lg font-extrabold">₹{{ number_format($item['price']) }}</p>
                        </div>
                        <a href="{{ route('booking.create', ['service' => $item['name']]) }}"
                           class="rounded-xl bg-blue-600 px-4 py-3 text-sm font-bold text-white hover:bg-blue-700">
                            Book now →
                        </a>
                    </div>
                </article>
            @empty
                <p class="col-span-full rounded-2xl bg-slate-50 p-8 text-slate-500">
                    No services match your search. Try another keyword.
                </p>
            @endforelse
        </div>

        <div class="mt-10">
            <a href="{{ url('/') }}" class="inline-flex items-center gap-2 font-bold text-blue-600 hover:text-blue-800">
                ← Back to Home
            </a>
        </div>
    </section>
</main>

<footer class="border-t border-slate-100 py-7 text-center text-sm text-slate-500">
    © {{ date('Y') }} QuickFix. Making home services simpler.
</footer>
</body>
</html>
