<nav class="navbar navbar-expand-lg navbar-dark bg-success">
  <div class="container">
    <a class="navbar-brand" href="#">SPK Tanaman Obat Herbal</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link @yield('index')" aria-current="page" href="/">Beranda</a>
        </li>
        <li class=" nav-item ">
          <a class="nav-link @yield('penyakit')" href="/penyakit">Penyakit</a>
        </li>
        <li class=" nav-item ">
          <a class="nav-link @yield('tanaman')" href="/tanaman">Alternatif Tanaman</a>
        </li>
        <li class="nav-item">
          <a class="nav-link @yield('kriteria')" href="/kriteria">Kriteria</a>
        </li>
        <li class="nav-item">
          <a class="nav-link @yield('subkriteria')" href="/subkriteria">Subkriteria</a>
        </li>
        <li class="nav-item">
          <a class="nav-link @yield('hasil')" href="/hasil">Hasil</a>
        </li>
      </ul>
    </div>
  </div>
</nav>