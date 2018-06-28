<?php
$this->load->view('template/head');
$this->load->view('template/sidebar');
$this->load->view('template/topbar');
?>
<div class="col-lg-12">
              <div class="card">
                <div class="card-header d-flex align-items-center">
                  <h4>Edit Tabungan</h4>
                </div>
                <div class="card-body">
                  <form class="form-horizontal" method="POST" action="<?php echo base_url('/index.php/tabungan/update_tabungan') ?>">
                    <input type="hidden" name="id" value="<?php echo $biodata->id ?>">
                    <div class="form-group row">
                      <label class="col-sm-2">Jenis Transaksi</label>
                      <div class="col-sm-4">

                        <select class="form-control" name="jenis_transaksi">
                          <option value="masuk" <?php  $biodata->jenis_transaksi == 'masuk' ? ' selected="selected"' : '';?>>Masuk</option>
                          <option value="keluar" <?php $biodata->jenis_transaksi == 'keluar' ? ' selected="selected"' : '';?>>Keluar</option>
                        </select>
                      </div>
                      <label class="col-sm-2">Tanggal</label>

                      <div class="col-sm-2">
                        <input id="tanggal"  type="text" name="tanggal" value="<?php echo $biodata->tanggal ?>" class="form-control datepicker">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2">Nama</label>
                      <div class="col-sm-4">
                        <input id="inputHorizontalWarning" type="text" name="nama" placeholder="Masukan Nama" value="<?php echo $biodata->nama ?>" disabled class="form-control"><small class="form-text"></small>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2">Nominal</label>
                      <div class="col-sm-4">
                        <input id="inputHorizontalWarning" type="text" name="nominal" value="<?php echo $biodata->nominal ?>" class="form-control"><small class="form-text"></small>
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
    $( "#tanggal" ).datepicker({ dateFormat: 'dd-mm-yy' });
  } );
</script>