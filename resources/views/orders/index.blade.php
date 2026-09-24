@extends('layouts.app')
@section('title', 'Cafe / Nonton Index')
@section('content')

    <div class="flex items-center justify-between mb-6">
        <h1 class='text-2xl font-bold text-amber-900'>☕ Order Queue</h1>
        <a href="{{ route('orders.create') }}"
            class="bg-amber-700 text-white text-sm font-medium px-4 py-2 rounded-lg hover:bg-amber-800 transition">
            + Take a New Order
        </a>
    </div>

    {{-- aimee --}}

    <ul class="bg-white rounded-xl shadow-sm divide-y divide-amber-200">
        @forelse ($orders as $order)
            <li class="flex items-center justify-between gap-3 px-4 py-3">
                <span class="flex-1 {{ $order->is_served ? 'line-through text-stone-400' : 'text-stone-800' }}">
                    {{ $order->item_name }}

                    @if ($order->is_served)
                        <span class="ml-2 text-xs bg-emerald-100 text-emerald-700 px-2 py-0.5 rounded-full">served</span>
                    @else
                        <span class="ml-2 text-xs bg-amber-100 text-amber-800 px-2 py-0.5 rounded-full">Brewing...</span>
                    @endif
                </span>

                <div class="flex items-center gap-3 shrink-0">
                    <a href="{{ route('orders.edit', $order) }}" class="text-sm text-amber-700 hover:underline">
                        Edit
                    </a>
                    <form action="{{ route('orders.destroy', $order) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="text-sm text-red-600 hover:underline">
                            Delete
                        </button>
                    </form>
                </div>
            </li>
        @empty
            <li>No orders yet. The counter is quiet!</li>
        @endforelse
    </ul>

@endsection
