<div class="content-wrapper mt-3">
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Tambah Kategori artikel</h3>
            </div>

            <form action="<?= base_url('admin/tambah_kategoriartikel') ?>" method="post" enctype="multipart">
              <div class="card-body">

                <input type='hidden' name='id' value=''>

                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Nama Kategori</label>
                  <div class="col-sm-6">
                    <input type='text' class='form-control' name='a' required>
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Aktif</label>
                  <div class="col-sm-6">

                    <input type='radio' name='b' value='Y' checked> Ya &nbsp; <input type='radio' name='b' value='N'> Tidak
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Posisi</label>
                  <div class="col-sm-6">
                    <input type='text' class='form-control' name='c'>
                  </div>
                </div>

                <button type='submit' name='submit' class='btn btn-primary btn-sm'>Simpan</button>
                <a href='<?= base_url('admin/kategoriartikel') ?>'><button type='button' class='btn btn-secondary btn-sm float-right'>Batal</button></a>

              </div>
            </form>

          </div>
        </div>
      </div>
    </div>
  </section>
</div>