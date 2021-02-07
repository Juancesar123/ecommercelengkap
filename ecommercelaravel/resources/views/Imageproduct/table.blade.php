<div class="table-responsive">
    <table class="table" id="transaksiPembelians-table">
        <thead>
            <tr>
                <th>Image</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($data as $item)
            <tr>
                <td><img src="{{asset('storage/'.$item->image)}}" style="width:100px;height:100px"></td>
                <td>
                    {!! Form::open(['route' => ['imageproduct.destroy', $item->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('imageproduct.edit', ['id'=>$item->id,'id_product'=>$item->id_product]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
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
