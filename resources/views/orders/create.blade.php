
<!DOCTYPE html>
<html>
<head>
    <title>New Order</title>
</head>
<body>

    <h1>☕ Take a New Order</h1>

    <form action="{{ route('orders.store') }}" method="POST">
        @csrf

        <label for="item_name">Item:</label>
        <input
            type="text"
            id="item_name"
            name="item_name"
            required
        >

        <label>
            <input
                type="checkbox"
                name="is_served"
                value="1"
            >
            Served?
        </label>

        <button type="submit">Place Order</button>
    </form>

    <a href="{{ route('orders.index') }}">
        ← Back to Queue
    </a>

</body>
</html>

