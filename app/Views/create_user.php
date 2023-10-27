<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>
<div>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="#">Home</a>
        <a class="nav-link" href="<?= base_url(relativePath: 'user/')?>">User</a>
        <a class="nav-link" href="<?= base_url(relativePath: 'kls/')?>">Kelas</a>
      </div>
    </div>
  </div>
</nav>
<body>
<div class="main">
    <div class="login-ladmin screen">
        <div class="overlap-group4">
        <div class="rectangle-2"></div>
     
        <div class="sipbi valign-text-bottom">Tambah Data User</div>
    </div>
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Input Form</h3></div>

                                    

                                    <div class="card-body">
                                    <form action="<?= base_url('/user/store') ?>" method="POST" enctype="multipart/form-data" >
                                            
                                            <div class="form-floating mb-3">
                                                <input class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid': ''; ?>" name="nama"  id="nama" type="text" placeholder="nama" />
                                                <label for="nama">Nama</label>
                                                <div class="invalid-feedback">
                                                    <?= $validation->getError('nama'); ?>
                                                </div>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <input class="form-control" name="npm" id="npm" type="number" placeholder="npm" />
                                                <label for="npm">NPM</label>
                                            </div>
                                            <div class="form-floating mb-3">
                                            
                                                <select class="form-select" name="kelas" id="kelas" >
                                                <label for="kelas">Kelas</label>
                                                <?php
                                                foreach ($kelas as $item){
                                                    ?>
                                                    <option value="<?= $item['id'] ?>">
                                                    <?= $item['nama_kelas'] ?>
                                                </option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                            </div>
                                            <label class="input-group mb-3" for="foto">Upload Foto</label>
                                            <input type="file" class="form-control" name='foto' id="foto">
                                            </div>
                                            <ul>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <div class="btn-group">
                                                    <button class="btn btn-primary" name="submit" >Submit</button>
                                                    <a href="<?= base_url(relativePath: 'user/')?>" class="btn btn-info">Kembali</a>
                                                </div>
                                            </div>
                                            </ul>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </div>
</form>
</div>
</body>
</div>
<?= $this->endSection() ?>