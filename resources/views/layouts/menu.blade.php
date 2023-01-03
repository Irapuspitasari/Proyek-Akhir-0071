<li class="nav-item">
    <a href="{{ route('bukus.index') }}"
       class="nav-link {{ Request::is('bukus*') ? 'active' : '' }}">
        <p>Buku</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('petugas.index') }}"
       class="nav-link {{ Request::is('petugas*') ? 'active' : '' }}">
        <p>Petugas</p>
    </a>
</li>



<li class="nav-item">
    <a href="{{ route('anggotas.index') }}"
       class="nav-link {{ Request::is('anggotas*') ? 'active' : '' }}">
        <p>Anggota</p>
    </a>
</li>


