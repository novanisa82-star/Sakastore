<aside class="w-72 bg-white border-r border-gray-100 p-8 flex flex-col sticky top-0 h-screen">
    <div class="flex items-center gap-3 mb-12">
        <div class="bg-[#4ADE80] p-2 rounded-xl text-white shadow-lg shadow-green-100">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M14 10l-2 1m0 0l-2-1m2 1v2.5M20 7l-2 1m2-1l-2-1m2 1v2.5M14 4l-2-1-2 1M4 7l2-1M4 7l2 1M4 7v2.5M12 21l-2-1m2 1l2-1m-2 1v-2.5M6 18l-2-1v-2.5M18 18l2-1v-2.5" />
            </svg>
        </div>
        <div>
            <h1 class="font-bold text-gray-800 text-lg leading-none">Admin Panel</h1>
            <span class="text-[10px] font-bold text-gray-400 uppercase tracking-widest">Game Master Mode</span>
        </div>
    </div>

    <nav class="space-y-2 flex-1">
        <a href="{{ route('admin.dashboard') }}"
            class="flex items-center gap-4 {{ request()->routeIs('admin.dashboard') ? 'bg-[#F0FDF4] text-[#22C55E]' : 'text-gray-400 hover:bg-gray-50' }} p-4 rounded-2xl font-bold transition-all">
            <span>📊</span> Dashboard
        </a>

        <a href="{{ route('admin.games.index') }}"
            class="flex items-center gap-4 {{ request()->routeIs('admin.games.*') ? 'bg-[#F0FDF4] text-[#22C55E]' : 'text-gray-400 hover:bg-gray-50' }} p-4 rounded-2xl font-semibold transition-all">
            <span>🎮</span> Games
        </a>

        <a href="{{ route('admin.transactions.index') }}"
            class="flex items-center gap-4 {{ request()->routeIs('admin.transactions.*') ? 'bg-[#F0FDF4] text-[#22C55E]' : 'text-gray-400 hover:bg-gray-50' }} p-4 rounded-2xl font-semibold transition-all">
            <span>💳</span> Transaksi
        </a>
    </nav>
    
    <form action="{{ route('logout') }}" method="POST" class="mt-auto">
        @csrf
        <button type="submit"
            class="w-full flex items-center gap-4 text-red-400 p-4 rounded-2xl font-semibold hover:bg-red-50 transition-all">
            <span>🚪</span> Logout
        </button>
    </form>
</aside>