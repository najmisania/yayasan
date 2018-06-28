<?php
$this->load->view('template/head');
$this->load->view('template/sidebar');
$this->load->view('template/topbar');
?>
<div class="row">
<div class="col-lg-12 forms">
              <div class="card">
                <div class="card-header d-flex align-items-center">
                  <h4>Infaq Form</h4>
                </div>
                <div class="card-body">
                  <form class="form-horizontal" method="post" action="<?php echo base_url('index.php/lapinfaq/simpan_infaq')?>">

                    <div class="form-group row">
                      <label class="col-sm-2">Bulan</label>
                      <div class="col-sm-4">
                        <select class="form-control" name="bulan">
                          <option value="juli">Juli</option>
                          <option value="agustus">Agustus</option>
                          <option value="september">September</option>
                          <option value="oktober">Oktober</option>
                          <option value="november">November</option>
                          <option value="desember">Desember</option>
                          <option value="januari">Januari</option>
                          <option value="februari">Februari</option>
                          <option value="maret">Maret</option>
                          <option value="april">April</option>
                          <option value="mei">Mei</option>
                          <option value="juni">Juni</option>
                          
                        </select>
                      </div>
                      <label class="col-sm-2">Tanggal</label>
                      <div class="col-sm-2">
                        <input id="tanggal" type="text" name="tanggal" class="form-control datepicker">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label class="col-sm-2">Nama Siswa</label>
                      <div class="col-sm-5">
                        <select class="form-control" name="nis" id="nis">
<?php                     foreach ($data_siswa->result() as $key => $value) {  ?>
                             <option value="<?php echo $value->nis ?>"><?php echo "( ".$value->nis." ) ".$value->nama ?></option>

<?php } ?>
                        </select>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label class="col-sm-2">Nominal</label>
                      <div class="col-sm-4">
                        <div class="input-group">
                            <div class="input-group-prepend"><span class="input-group-text">Rp</span></div>
                            <input type="text" name="nominal" class="form-control">
                          </div>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label class="col-sm-2">Admin</label>
                      <div class="col-sm-4">
                        <input type="text" name="username" class="form-control" value="<?php print_r($_SESSION['username']); ?>" readonly>
                      </div>
                    </div>
                    <div class="form-group row">       
                      <div class="col-sm-10 offset-sm-2">
                        <input type="submit" value="submit" class="btn btn-primary">
                      </div>
                    </div>
                  </form>
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
    $( "#nis" ).select2();
  } );
</script>