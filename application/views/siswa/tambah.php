<?php
$this->load->view('template/head');
$this->load->view('template/sidebar');
$this->load->view('template/topbar');
?>
<div class="col-lg-12">
              <div class="card">
                <div class="card-header d-flex align-items-center">
                  <h4>From Siswa Baru</h4>
                </div>
                <div class="card-body">
                  <form class="form-horizontal" method="POST" action="<?php echo base_url('/index.php/siswa/simpan_siswa') ?>">
                    <div class="form-group row">
                      <label class="col-sm-2">NIS</label>
                      <div class="col-sm-4">
                        <input id="inputHorizontalSuccess" type="text" name="nis" placeholder="No Induk Siswa" class="form-control form-control-success"><small class="form-text"></small>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2">Nama</label>
                      <div class="col-sm-4">
                        <input id="inputHorizontalWarning" type="text" name="nama" placeholder="Masukan Nama" class="form-control form-control-warning"><small class="form-text"></small>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2">Tanggal Lahir</label>
                      <div class="col-sm-2">
                        <input id="tgl_lahir" type="text" name="tgl_lahir" class="form-control datepicker">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2">Masuk Kekelas</label>
                      <div class="col-sm-4">
                        <input id="inputHorizontalWarning" type="text" name="tingkat" placeholder="Masuk Kekelas" class="form-control form-control-warning"><small class="form-text"></small>
                      </div>
                    </div>
                    </div>
                    <div class="form-group row">       
                      <div class="col-sm-10 offset-sm-2">
                        <input type="submit" value="Tambah" class="btn btn-primary">
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
<?php
$this->load->view('template/footer');

?>
<script type="text/javascript">
   $( function() {
    $( "#tgl_lahir" ).datepicker({ dateFormat: 'dd-mm-yy' });
  } );
</script>