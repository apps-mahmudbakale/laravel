<div>
    <table id="datatables-dashboard-orders" class="table table-sm table-striped my-0">
        <thead>
            <tr>
                <th>S/N</th>
                <th>Product</th>
                <th>Price</th>
                <th>Ordered Qunatity</th>
                <th class="d-none d-xl-table-cell">Ordered By</th>
                <th class="d-none d-xl-table-cell">Order Type</th>
                <th class="d-none d-xl-table-cell">Date Ordered</th>
                <th class="d-none d-xl-table-cell"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $order)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $order->commodity->name }}</td>
                    <td>&#8358;{{ number_format($order->commodity->current_price) }}</td>
                    <td>{{$order->qty }}</td>
                    <td class="d-none d-xl-table-cell">{{ $order->user->firstname }} {{ $order->user->lastname }}</td>
                    <td class="d-none d-xl-table-cell">{{ ucwords($order->order_type) }}</td>
                    <td class="d-none d-xl-table-cell">{{$order->created_at->diffForHumans()}}</td>
                    <td class="d-none d-xl-table-cell"><a href="" class="btn btn-outline-success">Approve</a><a href="" class="btn btn-outline-danger">Discard</a</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    
</div>
