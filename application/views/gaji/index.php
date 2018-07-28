<?php
$this->load->view('template/head');
$this->load->view('template/sidebar');
$this->load->view('template/topbar');
?>
            <div class="col-lg-12">
              <div class="card">
                <div class="card-header">
                <h4 colspan="3"><?php echo $biodata[0]->nama ?></h4>
                </div> 
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead>                      
                        <tr>
                          <th  width="12%">Bulan</th>
                          <th  width="12%">Gaji Pokok</th>
                          <th  width="12%">Tunjangan Jabatan</th> 
                          <th  width="12%">Masa Kerja</th>
                          <th  width="12%">Jumlah Pelajaran</th>
                          <th  width="12%">Jumlah Kehadiran</th>
                          <th  width="12%">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
<?php                 foreach ($data_gaji->result() as $key => $value) {   ?>
                        <tr>
                          <td><?php echo $value->bulan  ?></td>
                          <td><?php echo $value->gaji_pokok  ?></td>
                          <td><?php echo $value->tunjangan_jab ?></td>
                          <td><?php echo $value->masa_kerja ?></td>
                          <td><?php echo $value->jumlah_pel ?></td>
                          <td><?php echo $value->jumlah_hadir ?></td>
                          <td>
                           <a href="<?php echo base_url('index.php/gaji/edit/').$value->id ?>" class="btn btn-warning btn-sm"><i class="fa fa-edit" aria-hidden="true"></i></a>  <a href="<?php echo base_url('index.php/gaji/delete/').$value->id.'/'.$value->nuptk ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i></a>
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