<?= $this->extend('layouts/app') ?>

<?= $this->section('content')?>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="navbar-brand" href="<?= base_url(relativePath: 'user/')?>">User</a>
        <a class="navbar-brand" href="<?= base_url(relativePath: 'kls/')?>">Kelas</a>
      </div>
    </div>
  </div>
</nav>
    <div class="ratio ratio-16x9">
    <div class="main">
    <hr/>
    <div class="profile-area">
        <div class="container">
            <div class="row">
    <center><div class="card border-danger" style="max-width: 700px;">
            <div class="card-header bg-primary">
               
                <h2> Tabel User </h2>
            </div> 
            <div class="card-body ">  
                <table class="table">
                                <thead>
                                    <tr class="table-dark">
                                        <th>ID</th>
                                        <th>Nama</th>
                                        <th>NPM</th>
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
                                        <td><?= $user['nama'] ?></td>
                                        <td><?= $user['npm'] ?></td>
                                        <td><?= $user['nama_kelas'] ?></td>
                                        <td>
                                            <a href="<?= base_url('user/' . $user['id']) ?>" type="button" class="btn btn-primary">Detail</a>
                                            <a href="<?= base_url('/user/'. $user['id'] . '/edit') ?>" type="button" class="btn btn-info">Edit</a>
                                            <form action="<?= base_url('user/' . $user['id']) ?>" method="post">
                                                <input type="hidden" name="_method" value="DELETE">
                                                <?= csrf_field() ?>
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>

                                    </tr>
                                <?php
                                }
                                ?>
                            </table>
                            <a href="<?= base_url(relativePath: 'user/create')?>" class="btn btn-primary">Tambah Data</a>
                    </div>
                <div class="card-footer">
                Table list User 
                </div>
        </div> </center>
    </div>
</div>
</div>
</div>
<?= $this->endSection() ?>