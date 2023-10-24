<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>
<body>
<div class="main">
<center><img src="<?php echo base_url('assets/img/bg.jpeg'); ?>" class="rounded" width="250px"></center>
<div class="container">
        <div class="card" data-tilt>
            <h2>Profile</h2>
            <br>
            <tr>
                <td><?=$nama?></td>
            </tr>
            <br>
            <tr>
            <td><?=$kelas?></td>
            </tr>
            <br>
            <tr>
            <td><?=$npm?></td>
            </tr>
</div>
</body>
<?= $this->endSection() ?>