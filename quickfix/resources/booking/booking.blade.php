<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book a Service | QuickFix</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Manrope:wght@400;600;700;800&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'DM Sans', sans-serif; }
        h1, h2, .brand { font-family: 'Manrope', sans-serif; }
        .field { width: 100%; border: 1px solid #dbe4f0; border-radius: 12px; padding: 12px 14px; outline: none; background: white; }
        .field:focus { border-color: #2563eb; box-shadow: 0 0 0 3px #2563eb18; }
    </style>
</head>
<body class="min-h-screen bg-slate-50 text-slate-900">

<header class="border-b border-slate-100 bg-white">
    <div class="mx-auto flex h-[76px] max-w-6xl items-center justify-between px-5">
        <a href="{{ url('/') }}" class="brand flex items-center gap-2 text-xl font-extrabold">
            <span class="grid h-9 w-9 place-items-center rounded-xl bg-blue-600 text-white">✦</span>
            Quick<span class="text-blue-600">Fix</span>
        </a>
        <a href="{{ url('/services') }}" class="rounded-xl border border-slate-200 px-4 py-2 text-sm font-bold hover:bg-slate-50">
            ← Back to Services
        </a>
    </div>
</header>

<main class="mx-auto max-w-6xl px-5 py-10 sm:py-14">
    <div class="grid gap-8 lg:grid-cols-[.8fr_1.2fr]">

        <aside class="rounded-3xl bg-gradient-to-br from-blue-600 to-indigo-700 p-8 text-white sm:p-10">
            <p class="text-xs font-extrabold uppercase tracking-[.18em] text-blue-100">QUICKFIX BOOKING</p>
            <h1 class="mt-4 text-3xl font-extrabold leading-tight sm:text-4xl">Let's get it fixed.</h1>
            <p class="mt-4 leading-7 text-blue-100">
                Tell us what you need. Add your preferred time and address to prepare your booking request.
            </p>

            <div class="mt-10 space-y-5">
                <div class="flex gap-3">
                    <span class="grid h-10 w-10 shrink-0 place-items-center rounded-xl bg-white/15">✓</span>
                    <div><p class="font-bold">Choose your service</p><p class="mt-1 text-sm text-blue-100">Select the help you need.</p></div>
                </div>
                <div class="flex gap-3">
                    <span class="grid h-10 w-10 shrink-0 place-items-center rounded-xl bg-white/15">◷</span>
                    <div><p class="font-bold">Pick a convenient time</p><p class="mt-1 text-sm text-blue-100">Tell us your preferred date.</p></div>
                </div>
                <div class="flex gap-3">
                    <span class="grid h-10 w-10 shrink-0 place-items-center rounded-xl bg-white/15">⌂</span>
                    <div><p class="font-bold">Provide your address</p><p class="mt-1 text-sm text-blue-100">Let us know where help is needed.</p></div>
                </div>
            </div>

            <a href="{{ url('/services') }}" class="mt-10 inline-flex items-center gap-2 font-bold text-white hover:text-blue-100">
                ← Browse all services
            </a>
        </aside>

        <section class="rounded-3xl border border-slate-200 bg-white p-6 shadow-sm sm:p-9">
            <p class="text-xs font-extrabold uppercase tracking-widest text-blue-600">BOOK AN APPOINTMENT</p>
            <h2 class="mt-2 text-2xl font-extrabold sm:text-3xl">Your booking details</h2>
            <p class="mt-2 text-sm text-slate-500">Fill in the form below.</p>

            @if ($errors->any())
                <div class="mt-5 rounded-xl border border-red-200 bg-red-50 p-4 text-sm text-red-700">
                    <ul class="list-inside list-disc">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ url('/booking') }}" method="POST" class="mt-7 space-y-5">
                @csrf

                <div>
                    <label for="name" class="mb-2 block text-sm font-bold">Full name</label>
                    <input id="name" name="name" type="text" class="field"
                           value="{{ old('name', auth()->user()->name ?? '') }}" required>
                </div>

                <div>
                    <label for="phone" class="mb-2 block text-sm font-bold">Phone number</label>
                    <input id="phone" name="phone" type="tel" class="field"
                           value="{{ old('phone') }}" placeholder="Enter your phone number" required>
                </div>

                <div>
                    <label for="service" class="mb-2 block text-sm font-bold">Choose a service</label>
                    <select id="service" name="service" class="field" required>
                        <option value="">Select a service</option>
                        @foreach (['Electrician', 'Plumbing', 'Home Cleaning', 'AC Repair', 'Carpentry', 'Painting'] as $service)
                            <option value="{{ $service }}" @selected(old('service', request('service')) === $service)>
                                {{ $service }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="grid gap-5 sm:grid-cols-2">
                    <div>
                        <label for="date" class="mb-2 block text-sm font-bold">Preferred date</label>
                        <input id="date" name="date" type="date" min="{{ date('Y-m-d') }}"
                               value="{{ old('date') }}" class="field" required>
                    </div>
                    <div>
                        <label for="time" class="mb-2 block text-sm font-bold">Preferred time</label>
                        <select id="time" name="time" class="field" required>
                            <option value="">Select time</option>
                            @foreach (['09:00'=>'9:00 AM','11:00'=>'11:00 AM','13:00'=>'1:00 PM','15:00'=>'3:00 PM','17:00'=>'5:00 PM'] as $value => $label)
                                <option value="{{ $value }}" @selected(old('time') === $value)>{{ $label }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div>
                    <label for="address" class="mb-2 block text-sm font-bold">Service address</label>
                    <textarea id="address" name="address" rows="3" class="field"
                              placeholder="Enter your complete address" required>{{ old('address') }}</textarea>
                </div>

                <div>
                    <label for="description" class="mb-2 block text-sm font-bold">Describe the issue <span class="font-normal text-slate-400">(optional)</span></label>
                    <textarea id="description" name="description" rows="3" class="field"
                              placeholder="Add any helpful details">{{ old('description') }}</textarea>
                </div>

                <button type="submit" class="w-full rounded-xl bg-blue-600 px-5 py-4 font-extrabold text-white shadow-lg shadow-blue-600/20 transition hover:bg-blue-700">
                    Submit Booking Request →
                </button>

                <p class="text-center text-xs leading-5 text-slate-400">
                    Submitting this form requires a matching Laravel POST route and booking handler.
                </p>
            </form>
        </section>
    </div>
</main>

<footer class="border-t border-slate-100 bg-white py-6 text-center text-sm text-slate-500">
    © {{ date('Y') }} QuickFix. Making home services simpler.
</footer>
</body>
</html>