```blade
<!DOCTYPE html>
<html>
<head>
    <title>Cafe Order Queue</title>
</head>
<body>

    <h1>☕ Order Queue</h1>

    <a href="{{ route('orders.create') }}">
        + Take a New Order
    </a>

    <ul>
        @forelse ($orders as $order)
            <li>
                @if ($order->is_served)
                    <s>{{ $order->item_name }}</s> ✅ Served
                @else
                    {{ $order->item_name }} — Brewing...
                @endif

                <a href="{{ route('orders.edit', $order) }}">
                    Edit
                </a>

                <form
                    action="{{ route('orders.destroy', $order) }}"
                    method="POST"
                    style="display: inline;"
                >
                    @csrf
                    @method('DELETE')

                    <button type="submit">
                        Delete
                    </button>
                </form>
            </li>
        @empty
            <li>No orders yet. The counter is quiet!</li>
        @endforelse
    </ul>

</body>
</html>
```
