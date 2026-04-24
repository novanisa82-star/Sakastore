<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <style>body { font-family: 'Plus Jakarta Sans', sans-serif; }</style>
</head>
<body class="bg-[#F8FAFC] flex min-h-screen">

    <aside class="w-72 bg-white border-r p-8 flex flex-col">
        <div class="mb-10 text-xl font-bold text-gray-800">KawaiiTopUp</div>
        <nav class="space-y-2">
            <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-4 text-gray-400 p-4 rounded-2xl font-semibold hover:bg-gray-50"><span>📊</span> Dashboard</a>
            <a href="#" class="flex items-center gap-4 bg-[#F0FDF4] text-[#22C55E] p-4 rounded-2xl font-bold"><span>🎮</span> Games</a>
            </nav>
    </aside>

    <main class="flex-1 p-10">
        <header class="flex justify-between items-start mb-10">
            <div>
                <h2 class="text-gray-600 font-semibold text-lg">Games Management</h2>
                <p class="text-gray-400 text-sm">Manage available titles and top-up packages.</p>
            </div>
            <button class="bg-[#3F8E00] hover:bg-green-700 text-white px-6 py-3 rounded-2xl font-bold flex items-center gap-2 shadow-lg shadow-green-100 transition-all">
                <span class="text-xl">+</span> Add New Game
            </button>
        </header>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            
            @foreach($games as $game)
            <div class="bg-white rounded-[2.5rem] overflow-hidden border border-gray-50 shadow-sm hover:shadow-xl transition-all group">
                <div class="relative h-48 overflow-hidden">
                    <img src="https://via.placeholder.com/400x200" alt="Game cover" class="w-full h-full object-cover group-hover:scale-110 transition-duration-500">
                    <span class="absolute top-4 left-4 bg-yellow-400 text-[10px] font-bold px-3 py-1 rounded-full uppercase text-white shadow-sm">Popular</span>
                </div>

                <div class="p-6">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-xl font-bold text-gray-800">{{ $game->nama_game }}</h3>
                        <div class="flex gap-2">
                            <a href="#" class="text-green-500 hover:scale-110 transition-transform">✏️</a>
                            <form action="{{ route('admin.games.destroy', $game->id) }}" method="POST">
                                @csrf @method('DELETE')
                                <button type="submit" class="text-red-500 hover:scale-110 transition-transform">🗑️</button>
                            </form>
                        </div>
                    </div>

                    <div class="space-y-3 text-sm text-gray-500 font-medium">
                        <div class="flex items-center gap-3">
                            <span>📑</span> 12 Packages Active
                        </div>
                        <div class="flex items-center gap-3">
                            <span>📈</span> 1.2k Transactions (24h)
                        </div>
                    </div>

                    <div class="mt-6">
                        <div class="flex justify-between text-[10px] font-bold text-gray-400 mb-2 uppercase tracking-widest">
                            <span>Inventory Level</span>
                            <span class="text-green-500">85%</span>
                        </div>
                        <div class="h-2 w-full bg-gray-50 rounded-full">
                            <div class="h-full bg-green-500 rounded-full" style="width: 85%"></div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

            <div class="bg-transparent border-4 border-dashed border-green-100 rounded-[2.5rem] flex flex-col items-center justify-center p-10 group hover:border-green-300 transition-all cursor-pointer">
                <div class="w-16 h-16 bg-green-50 rounded-full flex items-center justify-center text-green-500 text-3xl mb-4 group-hover:scale-110 transition-transform">
                    +
                </div>
                <span class="text-green-500 font-bold">Add New Game</span>
            </div>

        </div>

        <div class="grid grid-cols-2 gap-8 mt-12">
            <div class="bg-white p-6 rounded-[2rem] flex items-center gap-6 border border-gray-50 shadow-sm">
                <div class="bg-yellow-50 p-4 rounded-2xl">📈</div>
                <div>
                    <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">Total Sales (Today)</p>
                    <h4 class="text-xl font-bold text-gray-800">$12,450.00</h4>
                    <p class="text-xs text-green-500 font-bold">▲ 14% vs yesterday</p>
                </div>
            </div>
            <div class="bg-white p-6 rounded-[2rem] flex items-center gap-6 border border-gray-50 shadow-sm">
                <div class="bg-green-50 p-4 rounded-2xl">👥</div>
                <div>
                    <p class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">Active Players Buying</p>
                    <h4 class="text-xl font-bold text-gray-800">4,829</h4>
                    <p class="text-xs text-green-500 font-bold">▲ 8% vs yesterday</p>
                </div>
            </div>
        </div>
    </main>

</body>
</html>