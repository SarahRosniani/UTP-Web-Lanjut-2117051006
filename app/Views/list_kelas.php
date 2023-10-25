<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>
<div>
<body>
    <div class="login-ladmin screen">
        <div class="overlap-group4">
        <div class="rectangle-2"></div>
     
        <div class="sipbi valign-text-bottom">Praktikum Web Lanjut</div>
    </div>
    <div class= "main">
    <table class="table">
        <thead>
            <tr class="table-danger">
                <th>ID</th>
                <th>Kelas</th>
                <th>Aksi</th>
            </tr>
        </thead>
    <tbody>
        <?php
        foreach ($users as $user){
            ?>
            <tr class="table-success">
                <td><?= $user['id'] ?></td>
                <td><?= $user['nama_kelas'] ?></td>
                <td>
                    <a href="<?= base_url('kls/' . $user['id']) ?>">Detail</a>
                    <a href="<?= base_url('/kls/'. $user['id'] . '/edit') ?>">Edit</a>
                    <form action="<?= base_url('kls/' . $user['id']) ?>" method="post">
                        <input type="hidden" name="_method" value="DELETE">
                        <?= csrf_field() ?>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>

            </tr>
        <?php
        }
        ?>
    </tbody>
</table>
        
</body>
</div>

<?= $this->endSection() ?>