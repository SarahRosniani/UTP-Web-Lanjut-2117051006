<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>
<body>
<div class="main">
<div class="container">
        <div class="card" data-tilt> 

            <h2>Kelas</h2>
            <br>
            <tr>
            <td><div class="..."><?= $user['nama_kelas'] ?></div></td>
            </tr>
            <a href="<?= base_url('/kls') ?>">Kembali</a>
            
</div>
</body>
<?= $this->endSection() ?>