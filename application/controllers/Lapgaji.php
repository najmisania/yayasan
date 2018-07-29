<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lapgaji extends CI_Controller {

	public function pilih_guru()
	{
		    $query = $this->db
          ->order_by('urutan','ASC')
          ->order_by('nama','ASC')
          ->get('guru');
        $data['data_guru'] = $query;
		    $this->load->view('lapgaji/pilih_guru',$data);
	}
  public function daftar_gaji()
  {
        $query = $this->db->get('gaji');
        $data['data_lapgaji'] = $query;
        $this->load->view('lapgaji/index',$data);
  }
  public function lihat_gaji()
  {
        $nuptk = $this->uri->rsegment(3);
        $data['data_lapgaji'] = $this->db->where('nuptk',$nuptk)->get('gaji');
        $data['biodata']      = $this->db->where('nuptk',$nuptk)->get('guru')->result();
        // echo "<pre>";
        // print_r($data);
        // exit;
        $this->load->view('lapgaji/index',$data);

  }
	public function cetak_gaji()
	{
		$nuptk = $this->uri->rsegment(3);
		$sql = "SELECT * FROM gaji, guru where gaji.nuptk = guru.nuptk and gaji.bulan='$_POST[bulan]' ORDER BY guru.urutan ASC";
    // echo $sql;
    // exit;
        $datagaji = $this->db->query($sql)->result_array();

        // echo "<pre>";
        // print_r($datagaji);
        // exit;
        $tahun_sekarang = date('Y');
        $tahun_lalu = $tahun_sekarang-1;
         $this->load->library('pdf');
         $pdf = $this->pdf->load();
        ob_start();
        echo '<style type="text/css">
				.tg  {border-collapse:collapse;border-spacing:0;}
				.tg td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
				.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
				.tg .tg-c3ow{border-color:inherit;text-align:center;vertical-align:top}
				.tg .tg-uys7{border-color:inherit;text-align:center}
				</style>
		   <h3 style="text-align:center">'."DAFTAR HONORARIUM GURU DAN PEGAWAI <br> MI. ZIYADATUL AHSAN <br> TAHUN PELAJARAN $tahun_lalu - $tahun_sekarang".'</h3>
		   <h4 >'."Bulan $_POST[bulan] $tahun_sekarang".'</h4>
		   <table class="tg">
  			<tr>
    			<th class="tg-uys7" rowspan="4">NO</th>
    			<th class="tg-uys7" rowspan="4">NAMA GURU</th>
    			<th class="tg-uys7" rowspan="4">JABATAN</th>
    			<th class="tg-uys7" rowspan="4">POKOK</th>
    			<th class="tg-uys7" colspan="10">JENIS HONORARIUM</th>
    			<th class="tg-uys7" rowspan="4">JUMLAH<br>HONOR YANG<br>DITERIMA (Rp)</th>
    			<th class="tg-uys7" rowspan="4">TANDA TANGAN</th>
  			</tr>
  			<tr>
    			<td class="tg-uys7" colspan="4">TUNJANGAN</td>
    			<td class="tg-uys7" colspan="3">ALOKASI JPL PERMINGGU</td>
    			<td class="tg-uys7" colspan="3">ALOKASI KEHADIRAN</td>
  			</tr>
  			<tr>
    			<td class="tg-uys7" rowspan="2">JABATAN</td>
    			<td class="tg-uys7" colspan="3">MASA KERJA</td>
    			<td class="tg-uys7" rowspan="2">JPL/<br>MGG</td>
    			<td class="tg-uys7" rowspan="2">SATUAN<br>(Rp)</td>
    			<td class="tg-uys7" rowspan="2">JUMLAH<br>(Rp)</td>
    			<td class="tg-uys7" rowspan="2">JML<br>HARI<br>HADIR</td>
    			<td class="tg-uys7" rowspan="2">SATUAN<br>(Rp)</td>
    			<td class="tg-uys7" rowspan="2">JUMLAH<br>(Rp)</td>
  			</tr>
  			<tr>
    			<td class="tg-c3ow">THN</td>
    			<td class="tg-c3ow">SATUAN<br>(Rp)</td>
    			<td class="tg-c3ow">JUMLAH<br>(Rp)</td>
  			</tr>';
        
  			$no=0;
        $pokok = 0;
        $jabatan = 0;
        $grandTot_masa_kerja = 0;
        $grandTot_jpl = 0;
        $grandTot_hadir = 0;
        $grandTot_totalHadir = 0;
        $grandTot_gaji = 0;
        $total_pel = 0;
        $tot_sat_jpl = 0;
  			foreach($datagaji as $value){
  				$no=$no+1;
  				$total_masa_kerja = $value[masa_kerja] * 8000;
  				$total_jpl		  = $value[jumlah_pel] * 2000;
  				$total_hadir	  = $value[jumlah_hadir] * 8000;
  				$total_gaji		  = $value[gaji_pokok] + $value[tunjangan_jab] + $total_masa_kerja + $total_jpl + $total_hadir;
          $jumlah_rp      = $value[gaji_pokok];
          $pokok += $value[gaji_pokok];
          $jabatan += $value[tunjangan_jab];
          $satuan += 8000;
           $grandTot_masa_kerja += $total_masa_kerja;
           $total_pel+=$value[jumlah_pel];
           $tot_sat_jpl+=2000;
           $grandTot_jpl+=$total_jpl;
           $grandTot_hadir+=$value[jumlah_hadir];
           $grandTot_totalHadir+=$total_hadir;
           $grandTot_gaji+=$total_gaji;
  				echo "
  						<tr>
  							<td>$no</td>
  							<td>$value[nama]</td>
  							<td>$value[jabatan]</td>
  							<td>$value[gaji_pokok]</td>
  							<td>$value[tunjangan_jab]</td>
  							<td>$value[masa_kerja]</td>
  							<td>8000</td>
  							<td>$total_masa_kerja</td>
  							<td>$value[jumlah_pel]</td>
  							<td>2000</td>
  							<td>$total_jpl</td>
  							<td>$value[jumlah_hadir]</td>
  							<td>8000</td>
  							<td>$total_hadir</td>
  							<td>$total_gaji</td>

  							<td>      </td>
  						</tr>
  					";
  			}
    echo "
        <tr>
          <td colspan='3'>JUMLAH(Rp)</td>
          <td>$pokok</td>
          <td>$jabatan</td>
          <td></td>
          <td>$satuan</td>
          <td>$grandTot_masa_kerja</td>
          <td>$total_pel</td>
          <td>$tot_sat_jpl</td>
          <td>$grandTot_jpl</td>
          <td>$grandTot_hadir</td>
          <td>$satuan</td>
          <td>$grandTot_totalHadir</td>
          <td>$grandTot_gaji</td>
          <td></td>
        </tr>
        ";
		echo '</table>';
		$html = ob_get_contents();
        ob_end_clean();
        $pdf->WriteHTML(utf8_encode($html));
        $pdf->Output(); // save to file because we c

	}
}
