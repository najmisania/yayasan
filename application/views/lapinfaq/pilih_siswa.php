<?php
$this->load->view('template/head');
$this->load->view('template/sidebar');
$this->load->view('template/topbar');
?>

            <div class="col-lg-12">
              <div class="card">
                <div class="card-header">
                  <h4>Daftar Infaq</h4>
                  <a class="btn btn-success btn-sm" href="<?php echo base_url('index.php/lapinfaq/tambah_infaq')?>">Tambah</a><p>
                    <form method="POST" action="<?php echo base_url('index.php/lapinfaq/cetak_infaq')?>">
                  <div class="form-group row">
                      <div class="col-sm-4">
                        <select class="form-control" name="tingkat">
                          <option>-- Pilih Kelas --</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                          <option value="6">6</option>
                        </select>
                      </div>
                      <div class="col-sm-4">
                       <input type="submit" class="form-control btn btn-success" value="Cetak" name="submit">
                     </div>
                  </form>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th  width="20%">Nis</th>
                          <th  width="12%">Nama</th>
                          <th  width="12%">Tanggal Lahir</th>
                          <th  width="12%">Tingkat</th>
                          <th  width="12%">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
<?php                 foreach ($data_siswa->result() as $key => $value) {   ?>
                        <tr>
                          <td><?php echo $value->nis  ?></td>
                          <td><?php echo $value->nama  ?></td>
                          <td><?php 
                          $tgl = explode("-", $value->tgl_lahir);
                          echo "$tgl[2]-$tgl[1]-$tgl[0]";  
                           ?></td>
                          <td><?php echo $value->tingkat  ?></td>
                         
                          <td>
                           <a href="<?php echo base_url('index.php/lapinfaq/lihat_infaq/').$value->nis ?>" class=" btn btn-info btn-sm btn-block">Lihat Infaq</a>
                           <br>
                           <a href="<?php echo base_url('index.php/lapinfaq/cetak_siswa/').$value->nis ?>" class=" btn btn-warning btn-sm btn-block">Cetak</a>
                          </td>
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