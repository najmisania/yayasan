<?php
$this->load->view('template/head');
$this->load->view('template/sidebar');
$this->load->view('template/topbar');
?>
<div class="col-lg-12">
              <div class="card">
                <div class="card-header d-flex align-items-center">
                  <h4>From Guru Baru</h4>
                </div>
                <div class="card-body">
                  <form class="form-horizontal" method="POST" action="<?php echo base_url('/index.php/guru/simpan_guru') ?>">
                    <div class="form-group row">
                      <label class="col-sm-2">NUPTK</label>
                      <div class="col-sm-4">
                        <input id="inputHorizontalSuccess" type="text" name="nuptk" placeholder="Masukan Nuptk" class="form-control form-control-success"><small class="form-text"></small>
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
                      <label class="col-sm-2">Jenis Kelamin</label>
                      <div class="col-sm-1">
                        <select name="jenis_kelamin" class="form-control">
                          <option value="L">L</option>
                          <option value="P">P</option>
                        </select>
                       </div>
                    </div>
                     <div class="form-group row">
                      <label class="col-sm-2">Jabatan</label>
                      <div class="col-sm-4">
                        <input id="inputHorizontalWarning" type="text" name="jabatan" placeholder="Masukan Jabatan" class="form-control form-control-warning"><small class="form-text"></small>
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
          
<?php
$this->load->view('template/footer');

?>