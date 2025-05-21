<head>
  <h4 class="text-center">Parameter Peta Kerapatan Petir</h4>
</head>
<style>
  /* Pastikan container dan body punya min-height dan padding bawah untuk ruang scroll */
  body,
  html {
    height: 100%;
    margin: 0;
    padding-bottom: 80px;
    /* beri ruang bawah agar tombol / card tidak tertutup */
  }

  /* Container utama beri padding bawah juga untuk ruang tombol */
  .container {
    padding-bottom: 1.5rem;
  }

  /* Tambah gap vertikal antar baris kartu */
  .row.g-4>.col {
    margin-bottom: 1.5rem;
  }

  /* Jika butuh jarak tombol dengan atas-nya */
  .btn-primary.px-5 {
    margin-top: 1rem;
  }
</style>

<body>
  <div class="container mt-4">

    <!-- Tanggal -->
    <div class="mb-3 row">
      <label class="col-sm-3 col-form-label">Tanggal</label>
      <div class="col-sm-9 d-flex gap-2">
        <input type="date" class="form-control" name="startDate" placeholder="Tanggal Mulai">
        <span class="align-self-center">s/d</span>
        <input type="date" class="form-control" name="endDate" placeholder="Tanggal Akhir">
      </div>
    </div>



    <!-- Ukuran Grid -->
    <div class="mb-3 row">
      <label for="gridSize" class="col-sm-3 col-form-label">Grid Size</label>
      <div class="col-sm-9">
        <input type="text" class="form-control" id="gridSize" name="gridSize" value="144 x 144" readonly>
      </div>
    </div>



    <!-- Koordinat Batas -->
    <div class="mb-3 row">
      <label class="col-sm-3 col-form-label">Batas Koordinat</label>
      <div class="col-sm-9">
        <div class="row g-2 mb-3">
          <div class="col-md-6">
            <label for="lat_min" class="form-label small">Latitude Min</label>
            <input type="number" step="any" class="form-control" id="lat_min" name="lat_min" placeholder="Latitude Min" value="-9.2">
          </div>
          <div class="col-md-6">
            <label for="lat_max" class="form-label small">Latitude Max</label>
            <input type="number" step="any" class="form-control" id="lat_max" name="lat_max" placeholder="Latitude Max" value="-8.0">
          </div>
        </div>
        <div class="row g-2">
          <div class="col-md-6">
            <label for="lon_min" class="form-label small">Longitude Min</label>
            <input type="number" step="any" class="form-control" id="lon_min" name="lon_min" placeholder="Longitude Min" value="114.4">
          </div>
          <div class="col-md-6">
            <label for="lon_max" class="form-label small">Longitude Max</label>
            <input type="number" step="any" class="form-control" id="lon_max" name="lon_max" placeholder="Longitude Max" value="115.7">
          </div>
        </div>
      </div>
    </div>


    <!-- Tombol -->
    <div class="text-center mt-3">
      <button type="submit" class="btn btn-primary px-5">Proses Peta</button>
    </div>
  </div>

  <!-- Peta Kerapatan -->
  <div class="row row-cols-1 row-cols-md-2 g-4">
    <div class="col">
      <div class="card">
        <div class="card-header">
          Peta Kerapatan Petir
        </div>
        <!-- Kalau gambar ada, ganti src di bawah ini -->
        <div style="aspect-ratio:1 / 1; background-color:#ccc; display:flex; align-items:center; justify-content:center; color:#666; font-size:1.2rem;">
          No Image
        </div>
        <div class="card-body text-center">
          <button type="button" class="btn btn-primary">Download</button>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <div class="card-header">
          Lightning Strike Density Map
        </div>
        <!-- Contoh ada gambar -->
        <img src="path/to/image.jpg" class="card-img-top" alt="Card Image 2" style="aspect-ratio: 1 / 1; object-fit: cover;">
        <div class="card-body text-center">
          <button type="button" class="btn btn-primary">Download</button>
        </div>
      </div>
    </div>
  </div>


</body>