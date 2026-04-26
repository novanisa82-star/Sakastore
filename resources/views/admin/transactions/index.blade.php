@extends('admin.layouts.admin')
@section('title', 'Transaction History')

@section('content')
<div class="p-6 bg-gray-50 min-h-screen">

  <!-- TITLE -->
  <h2 class="text-xl font-semibold mb-4">Transaction History</h2>

  <!-- FILTER -->
  <div class="flex flex-wrap gap-2 mb-4">
    <button class="px-4 py-1 rounded-full bg-green-500 text-white text-sm">All</button>
    <button class="px-4 py-1 rounded-full border text-sm">Success</button>
    <button class="px-4 py-1 rounded-full border text-sm">Pending</button>
    <button class="px-4 py-1 rounded-full border text-sm">Cancelled</button>
  </div>

  <!-- CARD -->
  <div class="bg-white rounded-2xl shadow p-4">

    <!-- TABLE -->
    <div class="overflow-x-auto">
      <table class="w-full text-sm">
        <thead>
          <tr class="text-left text-gray-500 border-b">
            <th class="py-2">Order ID</th>
            <th>Customer</th>
            <th>Game/Product</th>
            <th>Method</th>
            <th>Status</th>
            <th>Amount</th>
            <th></th>
          </tr>
        </thead>

        <tbody class="divide-y">

          <tr>
            <td class="py-3">#KTU-99281</td>
            <td>UsagiKun</td>
            <td>Genshin 6480+ Crystals</td>
            <td>
              <span class="px-2 py-1 bg-gray-200 rounded-full text-xs">QRIS</span>
            </td>
            <td>
              <span class="px-2 py-1 bg-green-100 text-green-600 rounded-full text-xs">SUCCESS</span>
            </td>
            <td>$99.99</td>
            <td>👁</td>
          </tr>

          <tr>
            <td class="py-3">#KTU-99282</td>
            <td>MomoChan</td>
            <td>Valorant 2800 VP</td>
            <td>
              <span class="px-2 py-1 bg-blue-100 text-blue-600 rounded-full text-xs">Bank</span>
            </td>
            <td>
              <span class="px-2 py-1 bg-yellow-100 text-yellow-600 rounded-full text-xs">PENDING</span>
            </td>
            <td>$25.50</td>
            <td>👁</td>
          </tr>

          <tr>
            <td class="py-3">#KTU-99283</td>
            <td>SoraNeko</td>
            <td>Steam Wallet $50</td>
            <td>
              <span class="px-2 py-1 bg-gray-200 rounded-full text-xs">QRIS</span>
            </td>
            <td>
              <span class="px-2 py-1 bg-red-100 text-red-600 rounded-full text-xs">FAILED</span>
            </td>
            <td>$50.00</td>
            <td>👁</td>
          </tr>

        </tbody>
      </table>
    </div>

  </div>
</div>
@endsection
