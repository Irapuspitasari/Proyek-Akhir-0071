<!-- Kode Buku Field -->
<div class="col-sm-12">
    {!! Form::label('kode_buku', 'Kode Buku:') !!}
    <p>{{ $buku->kode_buku }}</p>
</div>

<!-- Nama Buku Field -->
<div class="col-sm-12">
    {!! Form::label('nama_buku', 'Nama Buku:') !!}
    <p>{{ $buku->nama_buku }}</p>
</div>

<!-- Kategori Field -->
<div class="col-sm-12">
    {!! Form::label('kategori', 'Kategori:') !!}
    <p>{{ $buku->kategori }}</p>
</div>

<!-- Pengarang Field -->
<div class="col-sm-12">
    {!! Form::label('pengarang', 'Pengarang:') !!}
    <p>{{ $buku->pengarang }}</p>
</div>

<!-- Penerbit Field -->
<div class="col-sm-12">
    {!! Form::label('penerbit', 'Penerbit:') !!}
    <p>{{ $buku->penerbit }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $buku->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $buku->updated_at }}</p>
</div>

