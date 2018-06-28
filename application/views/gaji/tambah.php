<?php
$this->load->view('template/head');
$this->load->view('template/sidebar');
$this->load->view('template/topbar');
?>
<div class="row">
<div class="col-lg-12 forms">
              <div class="card">
                <div class="card-header d-flex align-items-center">
                  <h4>Gaji Form</h4>
                </div>
                <div class="card-body">
                  <form class="form-horizontal" method="post" action="<?php echo base_url('index.php/gaji/simpan_gaji')?>">

                    <div class="form-group row">
                      <label class="col-sm-2">Bulan</label>
                      <div class="col-sm-3">
                        <select class="form-control" name="bulan">
                          <option value="januari">Januari</option>
                          <option value="februari">Februari</option>
                          <option value="maret">Maret</option>
                          <option value="april">April</option>
                          <option value="mei">Mei</option>
                          <option value="juni">Juni</option>
                          <option value="juli">Juli</option>
                          <option value="agustus">Agustus</option>
                          <option value="september">September</option>
                          <option value="oktober">Oktober</option>
                          <option value="november">November</option>
                          <option value="desember">Desember</option>
                        </select>
                      </div>
                          <label class="col-sm-2">JPL/Minggu</label>
                        <div class="col-sm-1">
                          <input id="" type="text" name="jumlah_pel" class="form-control">
                        </div>
                    </div>

                    <div class="form-group row">
                      <label class="col-sm-2">Nama Guru</label>
                      <div class="col-sm-3">
                     
                        <select class="form-control" name="nuptk" id="nuptk">
<?php                     foreach ($data_guru->result() as $key => $value) {  ?>
                             <option value="<?php echo $value->nuptk ?>"><?php echo $value->nama ?></option>
<?php } ?>
                        </select>
                      </div>
                      <label class="col-sm-2">JML Hadir</label>
                      <div class="col-sm-1">
                          <input id="" type="text" name="jumlah_hadir" class="form-control">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2">Gaji Pokok</label>
                      <div class="col-sm-2">
                        <div class="input-group">
                            <div class="input-group-prepend"><span class="input-group-text">Rp</span></div>
                            <input type="text" name="gaji_pokok" class="form-control">
                          </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2">Jabatan</label>
                      <div class="col-sm-2">
                        <div class="input-group">
                            <div class="input-group-prepend"><span class="input-group-text">Rp</span></div>
                            <input type="text" name="tunjangan_jab" class="form-control">
                          </div>
                    </div>
                  </div>
                    <div class="form-group row">
                      <label class="col-sm-2">Masa Kerja</label>
                      <div class="col-sm-2">
                        <div class="input-group">
                            <div class="input-group-prepend"><span class="input-group-text">Thn</span></div>
                            <input type="text" name="masa_kerja" class="form-control">
                          </div>
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