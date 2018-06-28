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
                        <input id="tanggal" type="text" name="tanggal" value="<?php echo $data->tanggal ?>" class="form-control datepicker">
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