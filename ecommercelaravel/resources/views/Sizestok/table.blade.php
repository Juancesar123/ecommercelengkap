<div class="table-responsive">
    <table class="table" id="transaksiPembelians-table">
        <thead>
            <tr>
                <th>Size</th>
                <th>Stok</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($data as $item)
            <tr>
                <td>{{ $item->size }}</td>
                <td>{{ $item->stok }}</td>
                <td>
                    {!! Form::open(['route' => ['sizestok.destroy', $item->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('sizestok.edit', ['id'=>$item->id,'id_product'=>$item->id_product]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $data->links() }}
</div>
