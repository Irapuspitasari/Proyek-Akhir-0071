<div class="table-responsive">
    <table class="table" id="bukus-table">
        <thead>
        <tr>
            <th>Kode Buku</th>
        <th>Nama Buku</th>
        <th>Kategori</th>
        <th>Pengarang</th>
        <th>Penerbit</th>
            <th colspan="3">Aksi</th>
        </tr>
        </thead>
        <tbody>
        @foreach($bukus as $buku)
            <tr>
                <td>{{ $buku->kode_buku }}</td>
            <td>{{ $buku->nama_buku }}</td>
            <td>{{ $buku->kategori }}</td>
            <td>{{ $buku->pengarang }}</td>
            <td>{{ $buku->penerbit }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['bukus.destroy', $buku->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('bukus.show', [$buku->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('bukus.edit', [$buku->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
