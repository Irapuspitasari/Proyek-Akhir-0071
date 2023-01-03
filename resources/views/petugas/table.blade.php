<div class="table-responsive">
    <table class="table" id="petugas-table">
        <thead>
        <tr>
            <th>Kode Petugas</th>
        <th>Nama Petugas</th>
        <th>Shift</th>
        <th>Jabatan</th>
        <th>Alamat</th>
            <th colspan="3">Aksi</th>
        </tr>
        </thead>
        <tbody>
        @foreach($petugas as $petugas)
            <tr>
                <td>{{ $petugas->kode_petugas }}</td>
            <td>{{ $petugas->nama_petugas }}</td>
            <td>{{ $petugas->shift }}</td>
            <td>{{ $petugas->jabatan }}</td>
            <td>{{ $petugas->alamat }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['petugas.destroy', $petugas->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('petugas.show', [$petugas->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('petugas.edit', [$petugas->id]) }}"
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
