<!-- resources/views/home.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAKANEEDS - Home</title>

    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">

<!-- Navbar -->
<nav class="bg-white shadow-sm px-8 py-4 flex justify-between items-center">
    <h1 class="text-2xl font-bold text-green-600">SAKAANEEDS</h1>

    <ul class="flex gap-8 text-gray-600 font-medium">
        <li class="text-green-600 border-b-2 border-green-600 pb-1">Games</li>
        <li>Top-Up</li>
        <li>History</li>
        <li>Support</li>
    </ul>

    <div class="flex gap-4 text-xl">
        <span>🛒</span>
        <span>🔔</span>
    </div>
</nav>

<!-- Hero Section -->
<section class="px-10 mt-8">
    <div class="bg-green-200 rounded-3xl p-10 flex items-center justify-between">

        <div class="max-w-xl">
            <p class="text-sm bg-white px-4 py-1 rounded-full inline-block mb-4">
                ⚡ LIGHTNING FAST TOP-UPS
            </p>

            <h2 class="text-4xl font-bold text-gray-800 mb-4">
                Level Up With <br>
                <span class="text-green-600">Kawaii Energy!</span>
            </h2>

            <p class="text-gray-600 mb-6">
                Get your game credits instantly in a cute, safe, and squishy
                environment. Start dominating your favorite games today.
            </p>

            <div class="flex">
                <input type="text"
                    placeholder="Search for games (e.g., Genshin Impact)"
                    class="px-4 py-3 rounded-l-full w-full outline-none">

                <button class="bg-green-600 text-white px-6 py-3 rounded-r-full hover:bg-green-700">
                    Find
                </button>
            </div>
        </div>

        <div class="hidden md:block">
            <img src="https://cdn-icons-png.flaticon.com/512/4712/4712027.png"
                 class="w-64">
        </div>

    </div>
</section>

<!-- Trending Games -->
<section class="px-10 mt-10">

    <h2 class="text-2xl font-bold mb-6">
        ⭐ Trending Games
    </h2>

    <div class="grid md:grid-cols-3 gap-6">

        <!-- Card 1 -->
        <div class="bg-white rounded-2xl shadow p-4">
            <img src="https://via.placeholder.com/300x180"
                 class="rounded-xl mb-4 w-full">

            <h3 class="text-lg font-semibold">Mobile Legends</h3>
            <p class="text-gray-500 mb-4">Instant Diamonds top-up.</p>

            <button class="bg-green-500 w-full py-2 rounded-full text-white hover:bg-green-600">
                Top-Up Now
            </button>
        </div>

        <!-- Card 2 -->
        <div class="bg-white rounded-2xl shadow p-4">
            <img src="https://via.placeholder.com/300x180"
                 class="rounded-xl mb-4 w-full">

            <h3 class="text-lg font-semibold">Free Fire</h3>
            <p class="text-gray-500 mb-4">Weekly passes & Diamonds.</p>

            <button class="bg-green-500 w-full py-2 rounded-full text-white hover:bg-green-600">
                Top-Up Now
            </button>
        </div>

        <!-- Card 3 -->
        <div class="bg-white rounded-2xl shadow p-4">
            <img src="https://via.placeholder.com/300x180"
                 class="rounded-xl mb-4 w-full">

            <h3 class="text-lg font-semibold">Genshin Impact</h3>
            <p class="text-gray-500 mb-4">Genesis Crystals & Blessings.</p>

            <button class="bg-green-500 w-full py-2 rounded-full text-white hover:bg-green-600">
                Top-Up Now
            </button>
        </div>

    </div>

</section>

<!-- Daily Deals -->
<section class="px-10 mt-12 mb-12">

    <div class="bg-yellow-400 rounded-3xl p-10 flex justify-between items-center">

        <div>
            <p class="bg-white px-4 py-1 rounded-full inline-block mb-4">
                🔥 Flash Sale
            </p>

            <h2 class="text-3xl font-bold mb-3">
                Daily Deals
            </h2>

            <p class="text-gray-700 mb-4">
                Grab these bubbly discounts before they float away!
            </p>

            <button class="bg-white px-5 py-2 rounded-full shadow">
                ⏱ Ends in: 04:12:59
            </button>
        </div>

        <div class="bg-white p-6 rounded-2xl shadow w-80">

            <div class="flex items-center gap-4">

                <img src="https://via.placeholder.com/60"
                     class="rounded-lg">

                <div>
                    <h3 class="font-semibold">
                        1000 + 150 Diamonds
                    </h3>

                    <p class="text-green-600 font-bold text-lg">
                        $14.99
                    </p>

                    <div class="w-full bg-gray-200 h-2 rounded-full mt-2">
                        <div class="bg-green-600 h-2 rounded-full w-4/5"></div>
                    </div>

                    <p class="text-sm text-gray-500 mt-1">
                        85% Claimed
                    </p>
                </div>

            </div>

        </div>

    </div>

</section>

<!-- Footer -->
<footer class="bg-green-100 px-10 py-6 flex justify-between items-center">

    <h2 class="font-bold text-green-700">
        SAKANEEDS
    </h2>

    <div class="flex gap-6 text-gray-600 text-sm">
        <a href="#">About Us</a>
        <a href="#">Terms of Service</a>
        <a href="#">Privacy Policy</a>
        <a href="#">Refund Policy</a>
    </div>

    <p class="text-sm text-gray-600">
        © 2026 SAKANEEDS. Keep Gaming, Stay Bubbly!
    </p>

</footer>

</body>
</html>