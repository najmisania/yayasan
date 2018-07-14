<?php
$this->load->view('template/head');
$this->load->view('template/sidebar');
$this->load->view('template/topbar');
?>

            <div class="col-lg-12">
              <div class="card">
                <div class="card-header">
                  <h4>Daftar Siswa</h4>
                  <a class="btn btn-success btn-sm" href="<?php echo base_url('index.php/siswa/tambah_siswa')?>"><i class="fa fa-plus-circle" aria-hidden="true"></i>  Tambah </a>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th  width="20%">NIS</th>
                          <th>Nama</th>
                          <th width="12%">Tanggal Lahir</th>
                          <th  width="12%">Kelas</th>
                          <th  width="12%">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
<?php                 foreach ($data_siswa->result() as $key => $value) {   ?>
                        <tr>
                          <td><?php echo $value->nis  ?></td>
                          <td><?php echo $value->nama  ?></td>
                          <td>
                            <?php
                             $tgl = explode("-", $value->tgl_lahir);
                             echo "$tgl[2]-$tgl[1]-$tgl[0]";
                             ?>
                          </td>
                          <td><?php echo $value->tingkat  ?></td>
                          <td>
                            <a href="<?php echo base_url('index.php/siswa/edit/').$value->nis ?>" class="btn btn-warning btn-sm"><i class="fa fa-edit" aria-hidden="true"></i></a>
                            <a href="<?php echo base_url('index.php/siswa/delete/').$value->nis ?>" class=" btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i></a>
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