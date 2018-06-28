<?php
$this->load->view('template/head');
$this->load->view('template/sidebar');
$this->load->view('template/topbar');
?>

            <div class="col-lg-12">
              <div class="card">
                <div class="card-header">
                  <h4>Daftar Tabungan</h4>
                  
                  <a class="btn btn-success btn-sm" href="<?php echo base_url('index.php/laptab/tambah_laptab')?>">Tambah</a>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th  width="20%">Nis</th>
                          <th>Nama</th>
                          <th width="12%">Tanggal Lahir</th>
                          <th  width="12%">Tingkat</th>
                          <th  width="12%">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
<?php                 foreach ($data_siswa->result() as $key => $value) {   ?>
                        <tr>
                          <td><?php echo $value->nis  ?></td>
                          <td><?php echo $value->nama  ?></td>
                          <td><?php echo $value->tgl_lahir  ?></td>
                          <td><?php echo $value->tingkat  ?></td>
                         
                          <td>
                           <a href="<?php echo base_url('index.php/laptab/lihat_laptab/').$value->nis ?>" class=" btn btn-info btn-sm">Lihat Tabungan</a>
                           <br></br>
                           <a href="<?php echo base_url('index.php/laptab/cetak_tabungan/').$value->nis ?>" class=" btn btn-warning btn-sm btn-block">Cetak</a>
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