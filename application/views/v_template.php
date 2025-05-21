<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $judul ?></title>

  <!-- Favicon -->
  <link rel="icon" href="<?= base_url('assets/img/favicon_BMKG.ico') ?>" type="image/png">

  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>

<body>

  <!-- HEADER / NAVBAR SEDERHANA -->
  <nav class="navbar">
    <div class="container">
      <a class="navbar-brand navbar-text" href="<?= base_url('') ?>">
        <img src="<?= base_url('assets/img/Logo_BMKG.png') ?>" alt="Logo BMKG" class="logo-img d-inline-block align-text-mid">
        INFOGRAFIS STASIUN GEOFISIKA DENPASAR
      </a>
      <ul class="nav">
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('/petir') ?>">Petir</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Gempa Bumi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Terbit Terbenam</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container mt-4">
    <?php $this->load->view($main_view); ?>
  </div>

  <footer class="footer">
    <div class="container text-center">
      <p>Affan 2025</p>
    </div>
  </footer>

</body>

</html>