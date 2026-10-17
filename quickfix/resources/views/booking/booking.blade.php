<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Book trusted home services with QuickFix.">
    <title>Book a Service — QuickFix</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        * { box-sizing: border-box; }
        body {
            margin: 0;
            font-family: 'DM Sans', sans-serif;
            color: #10213f;
            background: #f8faff;
        }
        h1, h2, h3, .brand { font-family: 'Manrope', sans-serif; }
        .container { width: min(1160px, calc(100% - 40px)); margin: auto; }
        .nav-link { color: #53627a; transition: color .2s; }
        .nav-link:hover { color: #2563eb; }
        .btn-primary {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            border: 0;
            border-radius: 12px;
            padding: 13px 19px;
            background: #2563eb;
            color: white;
            font-weight: 700;
            transition: background .2s, transform .2s;
        }
        .btn-primary:hover { background: #1d4ed8; transform: translateY(-1px); }
        .btn-outline {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            border: 1px solid #dbe4f0;
            border-radius: 12px;
            padding: 11px 16px;
            color: #10213f;
            background: white;
            font-size: 14px;
            font-weight: 700;
        }
        .hero-bg {
            background:
                radial-gradient(circle at 85% 10%, rgba(191,219,254,.65), transparent 28%),
                linear-gradient(135deg, #f5f9ff, #fff 60%, #f3f7ff);
        }
        .field {
            width: 100%;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            padding: 13px 14px;
            background: #fff;
            color: #10213f;
            font: inherit;
            outline: none;
            transition: border .2s, box-shadow .2s;
        }
        .field:focus {
            border-color: #93b4ff;
            box-shadow: 0 0 0 4px rgba(37,99,235,.08);
        }
        .field::placeholder { color: #94a3b8; }
        .section-kicker {
            color: #2563eb;
            font-size: 12px;
            font-weight: 800;
            letter-spacing: .14em;
            text-transform: uppercase;
        }
        .form-card {
            border: 1px solid #e8edf5;
            border-radius: 24px;
            background: white;
            box-shadow: 0 15px 45px rgba(16,33,63,.05);
        }
        .info-card {
            border: 1px solid #e7eefb;
            border-radius: 18px;
            background: #f6f9ff;
        }
        @media (max-width: 640px) {
            .container { width: calc(100% - 28px); }
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
        <section class="hero-bg border-b border-slate-100">
            <div class="container py-12 sm:py-16">
                <div class="max-w-3xl">
                    <div class="mb-5 inline-flex items-center gap-2 rounded-full border border-blue-100 bg-white px-4 py-2 text-xs font-bold text-blue-700 shadow-sm">
                        <span class="h-2 w-2 rounded-full bg-emerald-500"></span>
                        YOUR HOME, IN GOOD HANDS
                    </div>

                    <h1 class="text-4xl font-extrabold leading-tight tracking-tight text-slate-950 sm:text-5xl">
                        Book a service,<br>
                        <span class="text-blue-600">the easy way.</span>
                    </h1>

                    <p class="mt-5 max-w-2xl text-base leading-7 text-slate-600 sm:text-lg">
                        Share a few details and your preferred schedule. QuickFix makes it simple to request help for your home.
                    </p>
                </div>
            </div>
        </section>

        {{-- Booking content --}}
        <section class="container py-10 sm:py-14">
            <div class="grid items-start gap-8 lg:grid-cols-[.72fr_1.28fr]">

                {{-- Left information panel --}}
                <aside class="space-y-5">
                    <div class="rounded-3xl bg-blue-600 p-7 text-white shadow-lg shadow-blue-900/10 sm:p-8">
                        <div class="grid h-12 w-12 place-items-center rounded-2xl bg-white/15 text-2xl">✦</div>

                        <h2 class="mt-6 text-2xl font-extrabold">Let's get it fixed.</h2>

                        <p class="mt-3 text-sm leading-6 text-blue-100">
                            From small repairs to everyday home care, tell us what you need and choose a convenient time.
                        </p>

                        <div class="mt-8 space-y-5">
                            <div class="flex items-start gap-3">
                                <span class="grid h-10 w-10 shrink-0 place-items-center rounded-xl bg-white/15">✓</span>
                                <div>
                                    <p class="font-bold">Choose your service</p>
                                    <p class="mt-1 text-sm text-blue-100">Pick the right help for your home.</p>
                                </div>
                            </div>

                            <div class="flex items-start gap-3">
                                <span class="grid h-10 w-10 shrink-0 place-items-center rounded-xl bg-white/15">◷</span>
                                <div>
                                    <p class="font-bold">Choose your schedule</p>
                                    <p class="mt-1 text-sm text-blue-100">Select your preferred date and time.</p>
                                </div>
                            </div>

                            <div class="flex items-start gap-3">
                                <span class="grid h-10 w-10 shrink-0 place-items-center rounded-xl bg-white/15">⌂</span>
                                <div>
                                    <p class="font-bold">Add your address</p>
                                    <p class="mt-1 text-sm text-blue-100">Tell us where the service is needed.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="info-card p-6">
                        <h3 class="font-extrabold">Need to change your mind?</h3>
                        <p class="mt-2 text-sm leading-6 text-slate-500">
                            You can return to the services list and choose a different service.
                        </p>
                        <a href="{{ route('services.index') }}" class="mt-4 inline-flex items-center gap-2 text-sm font-bold text-blue-600 hover:text-blue-800">
                            ← Explore services
                        </a>
                    </div>
                </aside>

                {{-- Form --}}
                <section class="form-card p-6 sm:p-9">
                    <div class="border-b border-slate-100 pb-6">
                        <p class="section-kicker">BOOK AN APPOINTMENT</p>
                        <h2 class="mt-2 text-2xl font-extrabold tracking-tight sm:text-3xl">Your booking details</h2>
                        <p class="mt-2 text-sm leading-6 text-slate-500">
                            Complete the details below to prepare your booking request.
                        </p>
                    </div>

                    @if ($errors->any())
                        <div class="mt-6 rounded-xl border border-red-200 bg-red-50 p-4 text-sm text-red-700">
                            <p class="mb-2 font-bold">Please check the following:</p>
                            <ul class="list-inside list-disc space-y-1">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ url('/booking') }}" method="POST" class="mt-7 space-y-5">
                        @csrf

                        <div>
                            <label for="name" class="mb-2 block text-sm font-bold text-slate-700">Full name</label>
                            <input
                                id="name"
                                name="name"
                                type="text"
                                autocomplete="name"
                                class="field"
                                placeholder="Enter your full name"
                                value="{{ old('name', auth()->user()->name ?? '') }}"
                                required
                            >
                            @error('name')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="phone" class="mb-2 block text-sm font-bold text-slate-700">Phone number</label>
                            <input
                                id="phone"
                                name="phone"
                                type="tel"
                                autocomplete="tel"
                                class="field"
                                placeholder="Enter your phone number"
                                value="{{ old('phone') }}"
                                required
                            >
                            @error('phone')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="service" class="mb-2 block text-sm font-bold text-slate-700">Service required</label>
                            <select id="service" name="service" class="field" required>
                                <option value="">Choose a service</option>
                                @foreach (['Electrician', 'Plumbing', 'Home Cleaning', 'AC Repair', 'Carpentry', 'Painting'] as $service)
                                    <option value="{{ $service }}" @selected(old('service', request('service')) === $service)>
                                        {{ $service }}
                                    </option>
                                @endforeach
                            </select>
                            @error('service')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="grid gap-5 sm:grid-cols-2">
                            <div>
                                <label for="date" class="mb-2 block text-sm font-bold text-slate-700">Preferred date</label>
                                <input
                                    id="date"
                                    name="date"
                                    type="date"
                                    min="{{ date('Y-m-d') }}"
                                    value="{{ old('date') }}"
                                    class="field"
                                    required
                                >
                                @error('date')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div>
                                <label for="time" class="mb-2 block text-sm font-bold text-slate-700">Preferred time</label>
                                <select id="time" name="time" class="field" required>
                                    <option value="">Choose a time</option>
                                    @foreach (['09:00'=>'9:00 AM','11:00'=>'11:00 AM','13:00'=>'1:00 PM','15:00'=>'3:00 PM','17:00'=>'5:00 PM'] as $value => $label)
                                        <option value="{{ $value }}" @selected(old('time') === $value)>
                                            {{ $label }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('time')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div>
                            <label for="address" class="mb-2 block text-sm font-bold text-slate-700">Service address</label>
                            <textarea
                                id="address"
                                name="address"
                                rows="3"
                                autocomplete="street-address"
                                class="field"
                                placeholder="House number, street, area and city"
                                required
                            >{{ old('address') }}</textarea>
                            @error('address')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div>
                            <label for="description" class="mb-2 block text-sm font-bold text-slate-700">
                                Describe the issue <span class="font-normal text-slate-400">(optional)</span>
                            </label>
                            <textarea
                                id="description"
                                name="description"
                                rows="3"
                                class="field"
                                placeholder="Tell us about the repair or service you need"
                            >{{ old('description') }}</textarea>
                            @error('description')
                                <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="rounded-xl bg-blue-50 p-4 text-sm leading-6 text-slate-600">
                            <span class="font-bold text-blue-700">Before you submit:</span>
                            Please check that your contact details, address and preferred schedule are correct.
                        </div>

                        <button type="submit" class="btn-primary w-full py-4">
                            Submit Booking Request <span aria-hidden="true">→</span>
                        </button>

                        <p class="text-center text-xs leading-5 text-slate-400">
                            Booking submission requires a working Laravel POST route and a backend handler.
                        </p>
                    </form>
                </section>
            </div>
        </section>

        {{-- Bottom call to action --}}
        <section class="container pb-14">
            <div class="flex flex-col items-start justify-between gap-5 rounded-3xl border border-blue-100 bg-white p-7 sm:flex-row sm:items-center sm:p-9">
                <div>
                    <h2 class="text-xl font-extrabold">Looking for another service?</h2>
                    <p class="mt-2 text-sm text-slate-500">Browse the available services and find the right fit.</p>
                </div>
                <a href="{{ route('services.index') }}" class="btn-outline">
                    ← Back to Services
                </a>
            </div>
        </section>
    </main>

    {{-- Footer --}}
    <footer class="border-t border-slate-100 bg-white">
        <div class="container flex flex-col justify-between gap-4 py-8 sm:flex-row sm:items-center">
            <a href="{{ url('/') }}" class="brand flex items-center gap-2 font-extrabold text-slate-900">
                <span class="grid h-8 w-8 place-items-center rounded-lg bg-blue-600 text-white">✦</span>
                Quick<span class="text-blue-600">Fix</span>
            </a>
            <p class="text-sm text-slate-500">Making home services a little simpler.</p>
            <p class="text-xs text-slate-400">© {{ date('Y') }} QuickFix. Built with Laravel.</p>
        </div>
    </footer>
</body>
</html>