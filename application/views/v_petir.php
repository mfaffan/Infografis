<h2 class="Infografis">Infografis Petir</h2>

<ul class="nav nav-tabs">
  <li class="nav-item tab-costum">
    <a class="nav-link <?= ($tab == 'v_input_petir') ? 'active' : '' ?>" href="<?= base_url('Main/petir/input') ?>">Input Data</a>
  </li>
  <li class="nav-item tab-costum" >
    <a class="nav-link <?= ($tab == 'v_peta_petir') ? 'active' : '' ?>" href="<?= base_url('Main/petir/peta') ?>">Peta Kerapatan</a>
  </li>
  <li class="nav-item tab-costum">
    <a class="nav-link <?= ($tab == 'v_sambaran_petir') ? 'active' : '' ?>" href="<?= base_url('Main/petir/jumlah') ?>">Jumlah Sambaran</a>
  </li>
  <li class="nav-item tab-costum">
    <a class="nav-link <?= ($tab == 'v_laporan') ? 'active' : '' ?>" href="<?= base_url('Main/petir/laporan') ?>">Laporan</a>
  </li>
</ul>

<div class="mt-3">
  <?php $this->load->view($tab); ?>
</div>
