<?= $this->extend('layouts/app') ?>

<?= $this->section('content') ?>
<div>
<body>
<div class="main">
    <div class="login-ladmin screen">
        <div class="overlap-group4">
        <div class="rectangle-2"></div>
     
        <div class="sipbi valign-text-bottom">Praktikum Web Lanjut</div>
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
                                    <form action="<?= base_url('/user/' . $user['id']) ?>" method="POST" enctype="multipart/form-data" >
                                            <input type="hidden" name="_method" value="PUT">
                                            <?= csrf_field() ?>
                                            <div class="form-floating mb-3">
                                            <label for="nama">Nama</label>
                                                <div class="col-sm-10">
                                                    <input type="text" name="nama" class="form-control" value="<?= $user['nama'] ?>" id="nama">
                                                </div>
                                            </div>
                                            <div class="form-floating mb-3">
                                                <label for="npm">NPM</label>
                                                <div class="col-sm-10">
                                                    
                                                    <input type="" name="npm" class="form-control <?= ($validation->hasError('npm')) ? 'is-invalid' : '' ; ?>" id="npm" value="<?= $user['nama'] ?>">
                                                    <div class="invalid-feedback">
                                                        <?= $validation->getError('npm'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-floating mb-3">
                                            
                                                <select class="form-select" name="kelas" id="kelas" >
                                                <label for="kelas">Kelas</label>
                                                <?php
                                                foreach ($kelas as $item){
                                                    ?>
                                                    <option value="<?= $item['id'] ?>" <?= $user['id_kelas'] == $item['id'] ? 'selected' : ''?> >
                                                     <?= $item['nama_kelas'] ?>
                                                   
                                                    </option>
                                                <?php
                                                }
                                                ?>
                                            </select>
                                            </div>
                                                <img src="<?= $user['foto'] ?? '<default-foto>' ?>">
                                                <label class="input-group mb-3" for="foto">Upload Foto</label>
                                                <input type="file" class="form-control" name='foto' id="foto">
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <button class="btn btn-primary" name="submit" >Submit</button>
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