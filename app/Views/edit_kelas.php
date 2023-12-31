<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>
<div>
<body>
<div class="main">
    <div class="login-ladmin screen">
        <div class="overlap-group4">
        <div class="rectangle-2"></div>
     
        <div class="sipbi valign-text-bottom">Edit Data Kelas</div>
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
                                    <form action="<?= base_url('/kls/' . $kelas['id']) ?>" method="POST" enctype="multipart/form-data" >
                                        <?= csrf_field() ?>
                                        <input type="hidden" name="_method" value="PUT">
                                            
                                            <div class="form-floating mb-3">
                                                <input class="form-control" name="kelas"  id="kelas" type="text" placeholder="Kelas" value="<?= $kelas['nama_kelas'] ?>" />
                                                <label for="kelas" >Kelas</label>
                                                
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