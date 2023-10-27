<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>
<body>
<div class="main">
        <div class="card" style="width: 24rem;">
        <center><img src="<?= $user['foto'] ?? '<default-foto>' ?>" class="card-img-top" alt="Card image cap"></center>
  <div class="card-body">
    <div>
    <h2>Profile</h2>
            <br>
            <tr>
                <td><div class="..."><?= $user['nama'] ?></div></td>
            </tr>
            <br>
            <tr>
            <td><div class="..."><?= $user['nama_kelas'] ?></div></td>
            </tr>
            <br>
            <tr>
            <td><div class="..."><?= $user['npm'] ?></div></td>
            </tr>
    </div>
    <a href="<?= base_url(relativePath: 'user/')?>" class="btn btn-info">Kembali</a>
  </div>

</body>
<?= $this->endSection() ?>