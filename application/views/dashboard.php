<?php
$this->load->view('template/head');
$this->load->view('template/sidebar');
$this->load->view('template/topbar');
?>

<section class="dashboard-header section-padding">
  <div class="container-fluid">
    <div class="row d-flex align-items-md-stretch">
      <div class="content-wrapper" style="min-height: 574px;">
        

        <section class="content-header">
          <h1> 
              Informasi MI Ziyadatul Ahsan 
          </h1>
        </section>


        <section class="content">
          <div class="row">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
              <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                  <img class="" src="<?php echo base_url('assets/img/mizam.png')?>" alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="" src="<?php echo base_url('assets/img/guru1.jpg')?>" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="" src="<?php echo base_url('assets/img/guru 2.jpg')?>" alt="Third slide">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>

          
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title"></h3>
            </div>
            <div class="box-body">
              
              <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="false"><i class="fa fa-desktop" aria-hidden="true"></i>  Data Sekolah &ensp; </a></li>
                  <li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="false"><i class="fa fa-map-signs" aria-hidden="true"></i>  Lokasi  &ensp;</a></li>
                  <li class=""><a href="#tab_3" data-toggle="tab" aria-expanded="true"><i class="fa fa-phone" aria-hidden="true"></i>  Kontak  &ensp;</a></li>
                </ul>
                <div class="tab-content">
                  <div class="tab-pane active" id="tab_1">
                    
                    
                    <table class="table table-bordered">
                      <tbody>
                        <tr>
                          <th style="width: 300px;">NSM</th>
                          <td>111232750115</td>
                        </tr>
                        <tr>
                          <th>NPSN</th>
                          <td>60709920</td>
                        </tr>
                        <tr>
                          <th>Nama Madrasah</th>
                          <td>Ziyadatul Ahsan</td>
                        </tr>
                        <tr>
                          <th>Status Madrasah</th>
                          <td>Swasta         </td>
                        </tr>
                        <tr>
                          <th>Waktu Belajar</th>
                          <td>Pagi         </td>
                        </tr>
                       
                        <tr>
                          <th>Kategori Madrasah</th>
                          <td>Madrasah Reguler</td>
                        </tr>
                        <tr>
                          <th>NPWP</th>
                          <td>21.070.189.2-432.001</td>
                        </tr>
                        
                         <tr>
                          <th>Penempatan DIPA</th>
                          <td>Kanwil Kemenag</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  
                  
                  <div class="tab-pane" id="tab_2">
                    <table class="table table-bordered">
                      <tbody>
                        <tr>
                          <th style="width: 300px;">Jalan/Kampung</th>
                          <td>Jl Swadaya II, No. 37</td>
                        </tr>
                        <tr>
                          <th>Provinsi</th>
                          <td>Jawa Barat</td>
                        </tr>
                        <tr>
                          <th>Kabupaten/Kota</th>
                          <td>Kota Bekasi</td>
                        </tr>
                        <tr>
                          <th>Kecamatan</th>
                          <td>Rawalumbu</td>
                        </tr>
                        <tr>
                          <th>Desa/Kelurahan</th>
                          <td>Bojong Menteng</td>
                        </tr>
                        <tr>
                          <th>Kode Pos</th>
                          <td>17117</td>
                        </tr>
                      </tbody>
                    </table>
                    
                  </div>
                  
                  
                  <div class="tab-pane" id="tab_3">
                    <table class="table table-bordered">
                      <tbody>
                        <tr>
                          <th style="width: 300px;">Nomor Telepon</th>
                          <td>021-82621269</td>
                        </tr>
                        <tr>
                          <th>Nomor Fax</th>
                          <td>021-82621269</td>
                        </tr> 
                        <tr>
                          <th>Alamat Website</th>
                          <td>
                            <a href="www.miziyadatulahsan.blogspot.com" target="_blank">www.miziyadatulahsan.blogspot.com</a>
                          </td>
                        </tr>
                        <tr>
                          <th>Alamat Email</th>
                          <td>mi.ziyadatulahsan@gmail.com                                        </td>
                        </tr>
                      </tbody>
                    </table>
                  </div> 
                </div> 
              </div>

              
            </div> 
          </div> 
        </section>
      </div>
      <?php
      $this->load->view('template/footer');

      ?>
      <script type="text/javascript">
        $("#myCarousel").carousel();
      </script>