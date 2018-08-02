<?php
$this->load->view('template/head');
$this->load->view('template/sidebar');
$this->load->view('template/topbar');
?>
<div class="row">
<div class="col-lg-12 forms">
              <div class="card">
                <div class="card-header d-flex align-items-center">
                  <h4>Edit Infaq</h4>
                </div>
                <div class="card-body">
                  <form class="form-horizontal" method="post" action="<?php echo base_url('index.php/lapinfaq/update_infaq')?>">
                    <input type="hidden" name="id" value="<?php echo $data->id ?>">
                    <input type="hidden" name="nis" value="<?php echo $data->nis ?>">
                    <div class="form-group row">
                      <label class="col-sm-2">Bulan</label>
                      <div class="col-sm-4">
                        <select class="form-control" name="bulan">
                          <option <?php if(trim($data->bulan)=="juli") echo "selected" ?> value="juli">Juli</option>
                          <option <?php if(trim($data->bulan)=="agustus") echo "selected" ?> value="agustus">Agustus</option>
                          <option <?php if(trim($data->bulan)=="september") echo "selected" ?> value="september">September</option>
                          <option <?php if(trim($data->bulan)=="oktober") echo "selected" ?> value="oktober">Oktober</option>
                          <option <?php if(trim($data->bulan)=="november") echo "selected" ?> value="november">November</option>
                          <option <?php if(trim($data->bulan)=="desember") echo "selected" ?> value="desember">Desember</option>
                          <option <?php if(trim($data->bulan)=="januari") echo "selected" ?> value="januari">Januari</option>
                          <option <?php if(trim($data->bulan)=="februari") echo "selected" ?> value="februari">Februari</option>
                          <option <?php if(trim($data->bulan)=="maret") echo "selected" ?> value="maret">Maret</option>
                          <option <?php if(trim($data->bulan)=="april") echo "selected" ?> value="april">April</option>
                          <option <?php if(trim($data->bulan)=="mei") echo "selected" ?> value="mei">Mei</option>
                          <option <?php if(trim($data->bulan)=="juni") echo "selected" ?> value="juni">Juni</option>
                          
                        </select>
                      </div>
                      <label class="col-sm-2">Tanggal</label>
                      <div class="col-sm-2">
                        <input id="tanggal" type="text" name="tanggal" value="<?php echo $data->tanggal ?>" class="form-control datepicker">
                      </div>
                    </div>
										<div class="form-group row">
                      <label class="col-sm-2">NIS</label>
                      <div class="col-sm-4">
                        <input id="inputHorizontalWarning" type="text" name="nama" placeholder="Masukan Nama" value="<?php echo $data->nis ?>" disabled class="form-control"><small class="form-text"></small>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2">Nominal</label>
                      <div class="col-sm-4">
                        <div class="input-group">
                            <div class="input-group-prepend"><span class="input-group-text">Rp</span></div>
                            <input type="text" name="nominal" value="<?php echo $data->nominal ?>" class="form-control">
                          </div>
                      </div>
                    </div>

                    <div class="form-group row">
                      <label class="col-sm-2">Admin</label>
                      <div class="col-sm-4">
                        <input type="text" name="username" class="form-control" value="<?php echo $data->username ?>" readonly>
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
