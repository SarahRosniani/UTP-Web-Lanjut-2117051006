<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>
<div>
<body>
<div class="main">
        <div class="card" style="width: 24rem;">
     <div class="card-body">
    <div>
            <h2>Kelas</h2>
            <br>
            <tr>
            <td><div class="..."><?= $user['nama_kelas'] ?></div></td>
            </tr>
            <br>
            <br>
            
    </div>
    <a href="<?= base_url(relativePath: 'kls/')?>" class="btn btn-info">Kembali</a>
  </div>

</body>
<?= $this->endSection() ?>