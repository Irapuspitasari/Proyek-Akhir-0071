<!-- Kode Anggota Field -->
<div class="col-sm-12">
    {!! Form::label('kode_anggota', 'Kode Anggota:') !!}
    <p>{{ $anggota->kode_anggota }}</p>
</div>

<!-- Nama Anggota Field -->
<div class="col-sm-12">
    {!! Form::label('nama_anggota', 'Nama Anggota:') !!}
    <p>{{ $anggota->nama_anggota }}</p>
</div>

<!-- No Tlp Field -->
<div class="col-sm-12">
    {!! Form::label('no_tlp', 'No Tlp:') !!}
    <p>{{ $anggota->no_tlp }}</p>
</div>

<!-- Status Field -->
<div class="col-sm-12">
    {!! Form::label('status', 'Status:') !!}
    <p>{{ $anggota->status }}</p>
</div>

<!-- Alamat Field -->
<div class="col-sm-12">
    {!! Form::label('alamat', 'Alamat:') !!}
    <p>{{ $anggota->alamat }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $anggota->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $anggota->updated_at }}</p>
</div>

