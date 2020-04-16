<div class="table-responsive">
    <table class="table" id="transaksiPembelians-table">
        <thead>
            <tr>
                <th>Nama Product</th>
        <th>Quantity</th>
        <th>Ammount</th>
        <th>Price</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($transaksiPembelians as $transaksiPembelian)
            <tr>
                <td>{{ $transaksiPembelian->product_name }}</td>
            <td>{{ $transaksiPembelian->quantity }}</td>
            <td>@currency($transaksiPembelian->amount)</td>
            <td>@currency($transaksiPembelian->price)</td>
                <td>
                    {!! Form::open(['route' => ['transaksiPembelians.destroy', $transaksiPembelian->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('transaksiPembelians.show', [$transaksiPembelian->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        {{-- <a href="{{ route('transaksiPembelians.edit', [$transaksiPembelian->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!} --}}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $transaksiPembelians->links() }}
</div>
