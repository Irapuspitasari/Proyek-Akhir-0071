<div class="table-responsive">
    <table class="table" id="anggotas-table">
        <thead>
        <tr>
            <th>Kode Anggota</th>
        <th>Nama Anggota</th>
        <th>No Tlp</th>
        <th>Status</th>
        <th>Alamat</th>
            <th colspan="3">Aksi</th>
        </tr>
        </thead>
        <tbody>
        @foreach($anggotas as $anggota)
            <tr>
                <td>{{ $anggota->kode_anggota }}</td>
            <td>{{ $anggota->nama_anggota }}</td>
            <td>{{ $anggota->no_tlp }}</td>
            <td>{{ $anggota->status }}</td>
            <td>{{ $anggota->alamat }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['anggotas.destroy', $anggota->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('anggotas.show', [$anggota->id]) }}"
                           class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('anggotas.edit', [$anggota->id]) }}"
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
