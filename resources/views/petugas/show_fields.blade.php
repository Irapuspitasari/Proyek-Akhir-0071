<!-- Kode Petugas Field -->
<div class="col-sm-12">
    {!! Form::label('kode_petugas', 'Kode Petugas:') !!}
    <p>{{ $petugas->kode_petugas }}</p>
</div>

<!-- Nama Petugas Field -->
<div class="col-sm-12">
    {!! Form::label('nama_petugas', 'Nama Petugas:') !!}
    <p>{{ $petugas->nama_petugas }}</p>
</div>

<!-- Shift Field -->
<div class="col-sm-12">
    {!! Form::label('shift', 'Shift:') !!}
    <p>{{ $petugas->shift }}</p>
</div>

<!-- Jabatan Field -->
<div class="col-sm-12">
    {!! Form::label('jabatan', 'Jabatan:') !!}
    <p>{{ $petugas->jabatan }}</p>
</div>

<!-- Alamat Field -->
<div class="col-sm-12">
    {!! Form::label('alamat', 'Alamat:') !!}
    <p>{{ $petugas->alamat }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $petugas->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $petugas->updated_at }}</p>
</div>

