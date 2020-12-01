<div class="table-responsive">
    <table class="table" id="transaksiPembelians-table">
        <thead>
            <tr>
                <th>Email</th>
                <th>Full Name</th>
                <th>Hak Akses</th>
                <th>status</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($datausers as $item)
            <tr>
                <td>{{ $item->email }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->level }}</td>
                @if($item->status == 1 )
                    <td><span class="label label-success">Aktif</span></td>
                @elseif($item->status == 2)
                    <td><span class="label label-danger">Block</span></td>
                @endif
                <td>
                   <div class='btn-group'>
                        <a href="{{ route('users.show', [$item->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        @if($item->status == 1)
                            <a href="{{ route('users.block', [$item->id]) }}" class='btn btn-danger btn-xs'><i class="glyphicon glyphicon-ban-circle"></i></a>
                        @else
                        @endif
                    </div>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{ $datausers->links() }}
</div>
