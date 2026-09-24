<!DOCTYPE html>
<html>
<head>
    <title>Edit Order</title>
</head>
<body>

    <h1>✏️ Edit Order</h1>

    <form action="{{ route('orders.update', $order) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Item:</label>
        <input
            type="text"
            name="item_name"
            value="{{ $order->item_name }}"
            required
        >

        <label>
            <input
                type="checkbox"
                name="is_served"
                value="1"
                @checked($order->is_served)
            >
            Served?
        </label>

        <button type="submit">Save changes</button>
    </form>

    <a href="{{ route('orders.index') }}">
        ← Back to queue
    </a>

</body>
</html>