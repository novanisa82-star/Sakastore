@extends('admin.layouts.admin')

@section('title', 'Dashboard')

@section('content')
    <div class="flex justify-between items-end mb-10">
        <div>
            <h2 class="text-3xl font-extrabold text-gray-800 tracking-tight">Ohayou, Admin-san! 👋</h2>
            <p class="text-gray-400 mt-1">Here's what's happening in KawaiiTopUp today.</p>
        </div>
        <button class="bg-[#22C55E] hover:bg-[#16a34a] text-white px-6 py-3 rounded-2xl font-bold shadow-lg shadow-green-100 transition-all flex items-center gap-2">
            <span>➕</span> Generate Report
        </button>
    </div>

    <div class="grid grid-cols-3 gap-8 mb-10">
        <div class="bg-white p-8 rounded-[2rem] border border-gray-50 shadow-sm relative overflow-hidden">
            <div class="flex justify-between items-start mb-4">
                <div class="p-3 bg-green-50 rounded-xl">💵</div>
                <span class="text-green-500 font-bold text-sm">+12.5%</span>
            </div>
            <p class="text-xs font-bold text-gray-400 uppercase tracking-widest mb-1">Total Revenue</p>
            <h3 class="text-3xl font-extrabold text-gray-800 tracking-tight">$42,890.00</h3>
            <div class="mt-4 h-1.5 w-full bg-gray-50 rounded-full">
                <div class="h-full bg-green-500 rounded-full w-3/4"></div>
            </div>
        </div>

        <div class="bg-white p-8 rounded-[2rem] border border-gray-50 shadow-sm relative overflow-hidden">
            <div class="flex justify-between items-start mb-4">
                <div class="p-3 bg-yellow-50 rounded-xl">🛍️</div>
                <span class="text-green-500 font-bold text-sm">+5.2%</span>
            </div>
            <p class="text-xs font-bold text-gray-400 uppercase tracking-widest mb-1">Total Orders</p>
            <h3 class="text-3xl font-extrabold text-gray-800 tracking-tight">1,248</h3>
            <div class="mt-4 h-1.5 w-full bg-gray-50 rounded-full">
                <div class="h-full bg-yellow-500 rounded-full w-1/2"></div>
            </div>
        </div>

        <div class="bg-white p-8 rounded-[2rem] border border-gray-50 shadow-sm relative overflow-hidden">
            <div class="flex justify-between items-start mb-4">
                <div class="p-3 bg-blue-50 rounded-xl">👥</div>
                <span class="text-green-500 font-bold text-sm">+18%</span>
            </div>
            <p class="text-xs font-bold text-gray-400 uppercase tracking-widest mb-1">Active Users</p>
            <h3 class="text-3xl font-extrabold text-gray-800 tracking-tight">8,902</h3>
            <div class="mt-4 h-1.5 w-full bg-gray-50 rounded-full">
                <div class="h-full bg-blue-500 rounded-full w-[85%]"></div>
            </div>
        </div>
    </div>

    <div class="grid grid-cols-3 gap-8">
        <div class="col-span-2 bg-white rounded-[2rem] p-8 border border-gray-50 shadow-sm">
            <div class="flex justify-between items-center mb-8">
                <h3 class="text-xl font-extrabold text-gray-800 tracking-tight">Recent Transactions</h3>
                <a href="#" class="text-green-500 font-bold text-sm hover:underline">View All</a>
            </div>
            <table class="w-full text-left">
                <thead>
                    <tr class="text-[10px] font-bold text-gray-400 uppercase tracking-[0.2em] border-b border-gray-50">
                        <th class="pb-4">Transaction ID</th>
                        <th class="pb-4">User</th>
                        <th class="pb-4">Game</th>
                        <th class="pb-4">Amount</th>
                        <th class="pb-4">Status</th>
                    </tr>
                </thead>
                <tbody class="text-sm font-medium">
                    <tr class="border-b border-gray-50/50">
                        <td class="py-5 text-gray-400">#KTU-9821</td>
                        <td class="py-5 flex items-center gap-3">
                            <div class="w-8 h-8 rounded-lg bg-green-100 text-[10px] flex items-center justify-center font-bold text-green-600 uppercase">JD</div>
                            <span>Jun Doe</span>
                        </td>
                        <td class="py-5">Genshin Impact</td>
                        <td class="py-5 font-bold">$49.99</td>
                        <td class="py-5"><span class="bg-green-100 text-green-600 px-3 py-1 rounded-full text-[10px] font-bold uppercase">Completed</span></td>
                    </tr>
                    </tbody>
            </table>
        </div>

        <div class="space-y-8">
            <div class="bg-white rounded-[2rem] p-8 border border-gray-50 shadow-sm">
                <h3 class="text-xl font-extrabold text-gray-800 tracking-tight mb-6">Quick Actions</h3>
                <div class="grid grid-cols-2 gap-4">
                    <button class="flex flex-col items-center justify-center p-4 bg-green-50 rounded-2xl hover:bg-green-100 transition-all group">
                        <span class="text-2xl mb-2">➕</span>
                        <span class="text-[10px] font-bold text-green-600 uppercase">Add Game</span>
                    </button>
                    <button class="flex flex-col items-center justify-center p-4 bg-yellow-50 rounded-2xl hover:bg-yellow-100 transition-all">
                        <span class="text-2xl mb-2">🏷️</span>
                        <span class="text-[10px] font-bold text-yellow-600 uppercase">Promotions</span>
                    </button>
                </div>
            </div>

            <div class="bg-[#0D1117] rounded-[2rem] p-8 text-white relative overflow-hidden">
                <div class="flex items-center gap-2 mb-4">
                    <div class="w-2 h-2 bg-green-500 rounded-full animate-pulse"></div>
                    <span class="text-[10px] font-bold uppercase tracking-widest text-gray-400">Laravel Pulse</span>
                </div>
                <p class="text-xs text-gray-300 leading-relaxed">System performance is optimal. Database latency is 12ms.</p>
                <div class="mt-6 flex justify-between items-center text-[10px] font-bold text-gray-500">
                    <span>Last sync: 2 mins ago</span>
                    <span class="text-green-500">RUNNING</span>
                </div>
            </div>
        </div>
    </div>
@endsection