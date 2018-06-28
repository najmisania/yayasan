<?php
$this->load->view('template/head');
$this->load->view('template/sidebar');
$this->load->view('template/topbar');
?>

            <div class="col-lg-12">
              <div class="card">
                <div class="card-header">
                  <h4>Daftar Gaji</h4>
                  
                  <a class="btn btn-success btn-sm" href="<?php echo base_url('index.php/gaji/tambah_gaji')?>">Tambah</a>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th  width="20%">NUPTK</th>
                          <th>Nama</th>
                          <th width="12%">Tanggal Lahir</th>
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
                          <td><?php echo $value->tgl_lahir  ?></td>
                          <td><?php echo $value->jenis_kelamin  ?></td>
                          <td><?php echo $value->jabatan  ?></td>
                         
                          <td>
                           <a href="<?php echo base_url('index.php/gaji/lihat_gaji/').$value->nuptk ?>" class=" btn btn-info btn-sm">Lihat Gaji</a>
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