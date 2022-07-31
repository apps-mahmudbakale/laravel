<div>
    <div class="col-12 col-lg-12 d-flex">
        <div class="card flex-fill">
            <div class="card-header">
                <div class="card-actions float-end">
                    <input type="text" class="form-control" wire:model.debounce.300ms='search' placeholder="Search">
                </div>
                <h5 class="card-title mb-0">Markets</h5>
            </div>
            <table id="datatables-dashboard-markets" class="table table-sm table-striped my-0">
                <thead>
                    <tr>
                        <th>Product</th>
                        <th>Price</th>
                        <th class="d-none d-xl-table-cell">No of Deals</th>
                        <th class="d-none d-xl-table-cell">Change</th>
                        <th class="d-none d-xl-table-cell">Buys</th>
                        <th class="d-none d-xl-table-cell"></th>
                        <th class="d-none d-xl-table-cell">Sales</th>
                        <th class="d-none d-xl-table-cell"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($markets as $market)
                        <tr>
                            <td>{{ $market->name }}</td>
                            <td>&#8358;{{ number_format($market->current_price) }}</td>
                            <td class="d-none d-xl-table-cell">{{ $market->no_of_deals }}</td>
                            <td class="d-none d-xl-table-cell {{ $market->getCommodityPriceChange() < 0 ? 'text-danger' : 'text-success' }}">{{ $market->getCommodityPriceChange() < 0 ? $market->getCommodityPriceChangePercentageFormatted() : '+'. $market->getCommodityPriceChangePercentageFormatted()}}</td>
                            <td class="d-none d-xl-table-cell">{{ $market->no_of_buys }}</td>
                            <td class="d-none d-xl-table-cell"><a href="" class="btn btn-outline-success"  wire:click.prevent="selectedProduct({{$market->id}}, 'buy')">Buy</a></td></td>
                            <td class="d-none d-xl-table-cell">{{ $market->no_of_sells }}</td>
                            <td class="d-none d-xl-table-cell"><a href="" class="btn btn-outline-danger" wire:click.prevent="selectedProduct({{$market->id}}, 'sell')">Sell</a></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            @include('partials.modals.buy-modal')
            @include('partials.modals.sell-modal')
            <!-- END primary modal -->
        </div>
    </div>
</div>
