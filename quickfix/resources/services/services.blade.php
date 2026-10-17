
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Services | QuickFix</title>
    <style>
        * { box-sizing: border-box; }
        body { margin: 0; font-family: Arial, sans-serif; background: #f5f7fb; color: #1f2937; }
        nav { background: #102a43; padding: 18px 7%; display: flex; justify-content: space-between; align-items: center; }
        nav a { color: white; text-decoration: none; margin-left: 22px; }
        .logo { font-size: 25px; font-weight: bold; color: #38bdf8; }
        header { text-align: center; padding: 55px 20px; background: #e0f2fe; }
        header h1 { font-size: 38px; margin-bottom: 12px; }
        header p { color: #475569; }
        .services { max-width: 1100px; margin: 40px auto; padding: 0 20px; display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 22px; }
        .card { background: white; padding: 28px; border-radius: 14px; box-shadow: 0 5px 18px #0000000d; }
        .icon { font-size: 38px; }
        .card h2 { font-size: 21px; }
        .card p { color: #64748b; line-height: 1.6; }
        .price { font-weight: bold; color: #0284c7; }
        .btn { display: inline-block; background: #0284c7; color: white; padding: 11px 18px; border-radius: 7px; text-decoration: none; margin-top: 10px; }
        footer { text-align: center; padding: 24px; color: #64748b; }
    </style>
</head>
<body>
<nav>
    <a class="logo" href="{{ url('/') }}">QuickFix</a>
    <div>
        <a href="{{ url('/services') }}">Services</a>
        <a href="{{ url('/booking') }}">Book Now</a>
        <a href="{{ route('login') }}">Login</a>
    </div>
</nav>

<header>
    <h1>Our Home Services</h1>
    <p>Reliable professionals to help fix things around your home.</p>
</header>

<section class="services">
    @php
        $services = [
            ['icon' => '🔧', 'name' => 'Plumbing', 'description' => 'Leaky taps, pipe repairs and bathroom fittings.', 'price' => 'From ₹299'],
            ['icon' => '⚡', 'name' => 'Electrical', 'description' => 'Electrical repairs, switches and fan installation.', 'price' => 'From ₹399'],
            ['icon' => '❄️', 'name' => 'AC Repair', 'description' => 'AC servicing, troubleshooting and maintenance.', 'price' => 'From ₹499'],
            ['icon' => '🧹', 'name' => 'Home Cleaning', 'description' => 'Cleaning help for rooms, kitchens and bathrooms.', 'price' => 'From ₹599'],
            ['icon' => '🪚', 'name' => 'Carpentry', 'description' => 'Furniture repairs, shelves and door adjustments.', 'price' => 'From ₹349'],
            ['icon' => '🎨', 'name' => 'Painting', 'description' => 'Touch-ups and painting assistance for your home.', 'price' => 'From ₹999'],
        ];
    @endphp

    @foreach ($services as $service)
        <article class="card">
            <div class="icon">{{ $service['icon'] }}</div>
            <h2>{{ $service['name'] }}</h2>
            <p>{{ $service['description'] }}</p>
            <p class="price">{{ $service['price'] }}</p>
            <a class="btn" href="{{ url('/booking') }}?service={{ urlencode($service['name']) }}">Book Service</a>
        </article>
    @endforeach
</section>

<footer>© {{ date('Y') }} QuickFix. All rights reserved.</footer>
</body>
</html>
