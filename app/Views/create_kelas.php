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
     
        <div class="sipbi valign-text-bottom">Tambah Data Kelas</div>
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
                                    <form action="<?= base_url('/kls/store') ?>" method="POST" enctype="multipart/form-data" >
                                            
                                            <div class="form-floating mb-3">
                                                <input class="form-control" name="kelas"  id="kelas" type="text" placeholder="Kelas" />
                                                <label for="nama">Kelas</label>
                                                
                                            </div>
                                            
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <button class="btn btn-primary" name="submit" >Submit</button>
                                                <a href="<?= base_url(relativePath: 'kls/')?>" class="btn btn-info">Kembali</a>
                                            </div>
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