<?php
$this->load->view('template/head');
$this->load->view('template/sidebar');
$this->load->view('template/topbar');
?>

            <div class="col-lg-12">
              <div class="card">
                <div class="card-header">
                  <h4 colspan="3">
                    <?php 
                    if(isset($biodata->nama)) 
                      print_r($biodata->nama); 
                    else
                      echo "Tidak Ada Data";
                    ?>
                      
                    </h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        
                        <tr>
                          <th  width="20%">NIS</th>
                          <th width="12%">Tanggal</th>
                          <th  width="12%">Nominal</th>
                          <th  width="12%">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
<?php                 foreach ($data_tabungan->result() as $key => $value) {   ?>
                        <tr>
                          <td><?php echo $value->nis  ?></td>
                          <td><?php echo $value->tanggal  ?></td>
                          <td><?php echo $value->nominal  ?></td>
                      
                         
                          <td>
                            <a href="<?php echo base_url('index.php/tabungan/edit/').$value->nis ?>" class="btn btn-warning btn-sm"><i class="fa fa-edit" aria-hidden="true"></i></a>
                            <a href="<?php echo base_url('index.php/tabungan/delete/').$value->nis ?>" class=" btn btn-danger btn-sm"><i class="fa fa-trash" aria-hidden="true"></i></a>
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