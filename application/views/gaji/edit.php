<?php
$this->load->view('template/head');
$this->load->view('template/sidebar');
$this->load->view('template/topbar');
?>
<div class="row">
<div class="col-lg-12 forms">
              <div class="card">
                <div class="card-header d-flex align-items-center">
                  <h4>Edit Gaji</h4>
                </div>
                <div class="card-body">
                  <form class="form-horizontal" method="post" action="<?php echo base_url('index.php/gaji/update_gaji')?>">
                    <input type="hidden" name="id" value="<?php echo $data_gaji->id ?>">
                    <input type="hidden" name="nuptk" value="<?php echo $data_gaji->nuptk ?>">
                    <div class="form-group row">
                      <label class="col-sm-2">Bulan</label>
                      <div class="col-sm-3">
                        <input id="inputHorizontalSuccess" type="text" name="bulan" placeholder="" value="<?php echo $data_gaji->bulan ?>" class="form-control form-control-success"><small class="form-text"></small>
                      </div>
                    
                          <label class="col-sm-2">JPL/Minggu</label>
                        <div class="col-sm-1">
                          <input id="inputHorizontalSuccess" type="text" name="jumlah_pel" placeholder="" value="<?php echo $data_gaji->jumlah_pel ?>" class="form-control form-control-success"><small class="form-text"></small>
                        </div>
                    </div>

                    <div class="form-group row">
                      <label class="col-sm-2">Nama Guru</label>
                      <div class="col-sm-3">
                       <input id="inputHorizontalWarning" type="text" name="nama" placeholder="" value="<?php echo $data_gaji->nama ?>" class="form-control form-control-warning"><small class="form-text"></small>
                      </div>
                      <label class="col-sm-2">JML Hadir</label>
                      <div class="col-sm-1">
                          <input id="inputHorizontalWarning" type="text" name="jumlah_hadir" placeholder="" value="<?php echo $data_gaji->jumlah_hadir ?>" class="form-control form-control-warning"><small class="form-text"></small>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2">Gaji Pokok</label>
                      <div class="col-sm-2">
                        <div class="input-group">
                            <div class="input-group-prepend"><span class="input-group-text">Rp</span></div>
                            <input id="inputHorizontalWarning" type="text" name="gaji_pokok" placeholder="" value="<?php echo $data_gaji->gaji_pokok ?>" class="form-control form-control-warning"><small class="form-text"></small>
                          </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2">Jabatan</label>
                      <div class="col-sm-2">
                        <div class="input-group">
                            <div class="input-group-prepend"><span class="input-group-text">Rp</span></div>
                            <input id="inputHorizontalWarning" type="text" name="tunjangan_jab" placeholder="" value="<?php echo $data_gaji->tunjangan_jab ?>" class="form-control form-control-warning"><small class="form-text"></small>
                          </div>
                    </div>
                  </div>
                    <div class="form-group row">
                      <label class="col-sm-2">Masa Kerja</label>
                      <div class="col-sm-2">
                        <div class="input-group">
                            <div class="input-group-prepend"><span class="input-group-text">Thn</span></div>
                            <input id="inputHorizontalWarning" type="text" name="masa_kerja" placeholder="" value="<?php echo $data_gaji->masa_kerja ?>" class="form-control form-control-warning"><small class="form-text"></small>
                          </div>
                    </div>
                  </div>
                    <div class="form-group row">       
                      <div class="col-sm-10 offset-sm-2">
                        <input type="submit" value="submit" class="btn btn-primary">
                      </div>
                    </div>
                </div>
              </div>
            </div>
</div>
<?php
$this->load->view('template/footer');

?>