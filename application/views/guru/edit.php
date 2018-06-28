<?php
$this->load->view('template/head');
$this->load->view('template/sidebar');
$this->load->view('template/topbar');
?>
<div class="col-lg-12">
              <div class="card">
                <div class="card-header d-flex align-items-center">
                  <h4>Edit Master Guru</h4>
                </div>
                <div class="card-body">
                  <form class="form-horizontal" method="POST" action="<?php echo base_url('/index.php/guru/update_guru') ?>">
                    <div class="form-group row">
                      <label class="col-sm-2">NUPTK</label>
                      <div class="col-sm-4">
                        <input id="inputHorizontalSuccess" type="text" name="nuptk" placeholder="Masukan No NUPTK" value="<?php echo $biodata_guru[0]->nuptk ?>" class="form-control form-control-success"><small class="form-text"></small>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2">Nama</label>
                      <div class="col-sm-4">
                        <input id="inputHorizontalWarning" type="text" name="nama" placeholder="Masukan Nama" value="<?php echo $biodata_guru[0]->nama ?>" class="form-control form-control-warning"><small class="form-text"></small>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2">Tanggal Lahir</label>
<?php
                      $data_tgl = explode("-", $biodata_guru[0]->tgl_lahir);
?>
                      <div class="col-sm-2">
                        <input id="tgl_lahir" type="text" name="tgl_lahir" value='<?php echo "$data_tgl[2]-$data_tgl[1]-$data_tgl[0]" ?>' class="form-control datepicker">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2">Jenis Kelamin</label>
                      <div class="col-sm-1">
                        <input id="inputHorizontalWarning" type="text" name="jenis_kelamin" value="<?php echo $biodata_guru[0]->jenis_kelamin ?>" class="form-control form-control-warning"><small class="form-text"></small>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2">Jabatan</label> 
                      <div class="col-sm-4">
                        <input id="inputHorizontalWarning" type="text" name="jabatan" value="<?php echo $biodata_guru[0]->jabatan ?>" class="form-control form-control-warning"><small class="form-text"></small>
                      </div>
                    </div>
                  </div>
                    <div class="form-group row">       
                      <div class="col-sm-10 offset-sm-2">
                        <input type="submit" value="Update" class="btn btn-primary">
                      </div>
                    </div>
                  </div>
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
