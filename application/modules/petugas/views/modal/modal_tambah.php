<div class="modal fade" tabindex="-1" role="dialog" id="mtambah">
  <div class="modal-dialog modal-md" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="bootbox-close-button close" data-dismiss="modal" aria-hidden="true">
          ×
        </button>
        <h4 class="modal-title">Tambah Petugas Baru</h4>
      </div>
      <div class="modal-body">
        <!-- loading -->
        <div id="loading_wrap" style="display: none; position: fixed; left: 0; top: 0; background: rgba(255,255,255,.8);width: 100%; height: 100%; z-index: 1000;">
          <div id="loading"></div>
        </div>
        <!-- loading -->

        <form id="frm_add_petugas">
          
          <div class="form-group">
            <label>Asal Warga</label>
            <div class="radio">
              <label class="display-inline-block custom-control custom-radio ml-1">
                <input type="radio" name="asal" value="dalam" class="custom-control-input radio-asal" checked>
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description ml-0">Warga perumahan</span>
              </label>
              <label class="display-inline-block custom-control custom-radio ml-1">
                <input type="radio" name="asal" value="luar" class="custom-control-input radio-asal">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description ml-0">Warga luar perumahan</span>
              </label>
              <!-- <label>
                <input name="asal" type="radio" value="dalam" class="ace radio-asal" checked>
                <span class="lbl"> Warga perumahan</span>
              </label>
              <label>
                <input name="asal" type="radio" value="luar" class="ace radio-asal">
                <span class="lbl"> Warga luar perumahan</span>
              </label> -->
            </div>
          </div>
          <div class="form-group">
            <label>Nama calon petugas</label>
            <select required class="form-control select2" multiple name="nama[]"></select>
            <small class="text-muted"><i>*Bisa pilih lebih dari satu orang</i></small>
          </div>

          <!-- Warga luar -->
          <div class="warga-luar" style="display: none;">
            <div class="form-group">
              <label>Nama Lengkap</label>
              <input type="text" class="form-control" name="nama_lengkap" placeholder="Nama lengkap petugas">
            </div>
            <div class="form-group">
              <label>Alamat</label>
              <textarea style="min-width: 100%; max-width: 100%; min-height: 50px;" class="form-control" name="alamat" placeholder="Alamat lengkap"></textarea>
            </div>
            <div class="form-group">
              <label>Username</label>
              <input type="text" class="form-control" name="username" placeholder="Username petugas">
            </div>
            <div class="form-group">
              <label>Password</label>
              <input type="password" name="password" class="form-control" placeholder="Password petugas">
            </div>
          </div>
          <!-- Warga luar -->

          <div class="form-group">
            <label>Petugas</label>
            <div class="radio">
              <label class="display-inline-block custom-control custom-radio ml-1">
                <input type="radio" name="tipe" value="iuran" class="custom-control-input" checked>
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description ml-0">Penarikan Iuran</span>
              </label>
            </div>
            <div class="radio">
              <label class="display-inline-block custom-control custom-radio ml-1">
                <input type="radio" name="tipe" value="satpam" class="custom-control-input">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description ml-0">Penarikan Iuran</span>
              </label>
            </div>
          </div>
          <div class="form-group">
            <label>Masa Jabatan</label>
            <div class="row">
              <div class="col-md-12">
                <div class="input-daterange input-group">
                  <input type="text" class=" form-control" name="masa_start" placeholder="Dari" />
                  <span class="input-group-addon">
                    <i class="icon-chevron-right2"></i>
                  </span>
                  <input type="text" class=" form-control" name="masa_end" placeholder="Sampai" />
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <label>Status</label>
            <div class="radio">
              <label class="display-inline-block custom-control custom-radio ml-1">
                <input type="radio" name="status" value="1" class="custom-control-input" checked>
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description ml-0">
                  <i class="icon-check text-success"></i> Aktifkan
                </span>
              </label>
            </div>
            <div class="radio">
              <label class="display-inline-block custom-control custom-radio ml-1">
                <input type="radio" name="status" value="2" class="custom-control-input">
                <span class="custom-control-indicator"></span>
                <span class="custom-control-description ml-0">
                  <i class="icon-clock-o text-warning"></i> Pending
                </span>
              </label>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button data-dismiss="modal" class="btn btn-outline-secondary" autofocus="">Tutup</button>
        <button type="button" class="btn btn-success" id="add_petugas_now">Simpan</button>
      </div>
    </div>
  </div>
</div>

<!-- nama, tipe, masa_start, masa_end -->