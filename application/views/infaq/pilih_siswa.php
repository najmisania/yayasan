<?php
$this->load->view('template/head');
$this->load->view('template/sidebar');
$this->load->view('template/topbar');
?>

            <div class="col-lg-12">
              <div class="card">
                <div class="card-header">
                  <h4>Daftar infaq</h4>
                  
                  <a class="btn btn-success btn-sm" href="<?php echo base_url('index.php/lapinfaq/tambah_infaq')?>">Tambah</a>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th  width="12%">Bulan</th>
                          <th  width="20%">Tanggal</th>
                          <th  width="12%">Nominal</th>
                          <th  width="12%">NIS</th>
                          <th  width="12%">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
<?php                 foreach ($data_siswa->result() as $key => $value) {   ?>
                        <tr>
                          <td><?php echo $value->bulan ?></td>
                          <td><?php echo $value->tanggal  ?></td>
                          <td><?php echo $value->nominal  ?></td>
                          <td><?php echo $value->nis  ?></td>
                         
                          <td>
                           <a href="<?php echo base_url('index.php/infaq/lihat_infaq/').$value->nis ?>" class=" btn btn-info btn-sm">Lihat infaq</a>
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