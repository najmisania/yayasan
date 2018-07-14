<?php
$this->load->view('template/head');
$this->load->view('template/sidebar');
$this->load->view('template/topbar');
?>

            <div class="col-lg-12">
              <div class="card">
                <div class="card-header">
                  <h4>Daftar Gaji</h4>
                  <form method="POST" action="<?php echo base_url('index.php/lapgaji/cetak_gaji')?>">
                    
                  <div class="form-group row">
                      <div class="col-sm-6">
                        <select class="form-control" name="bulan">
                          <option>-- Pilih Bulan --</option>
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
                      <div class="col-sm-6">
                       <input type="submit" class="form-control btn btn-success" value="cetak" name="submit">
                     </div>
                  </form>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th  width="20%">NUPTK</th>
                          <th  width="20%">Nama</th>
                          <th  width="12%">Tanggal Lahir</th>
                          <th  width="12%">Jenis Kelamin</th>
                          <th  width="12%">Jabatan</th>
                          <th  width="12%">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
<?php                 foreach ($data_guru->result() as $key => $value) {   ?>
                        <tr>
                          <td><?php echo $value->nuptk  ?></td>
                          <td><?php echo $value->nama  ?></td>
                          <td><?php 
                          $tgl = explode("-", $value->tgl_lahir);
                          echo "$tgl[2]-$tgl[1]-$tgl[0]";  
                           ?>
                          </td>
                          <td><?php echo $value->jenis_kelamin  ?></td>
                          <td><?php echo $value->jabatan  ?></td>

                          <td>
                           <a href="<?php echo base_url('index.php/lapgaji/lihat_gaji/').$value->nuptk ?>" class=" btn btn-info btn-sm btn-block">Lihat Gaji</a></td>
                        </tr>
<?php }  ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
<?php

?>