<?php  
  // menampilkan seluruh data 
  function tampilData($query) {
    global $koneksi;

    $dataAlter = mysqli_query($koneksi, $query);
    $row = [];
    while ($data = mysqli_fetch_assoc($dataAlter)) {
      $row [] = $data;
    }

    return $row;
  } 

  $alternatif = tampilData("SELECT * FROM tb_alternatif");
  $kriteria = tampilData("SELECT * FROM tb_kriteria");
  $penilaian  = tampilData("SELECT * FROM tb_penilaian");

  // proses perhitungan
  if (isset($_POST['hitung'])) {

    $sql1 = "SELECT COUNT(*) FROM tb_penilaian";
    $dataPenilai = mysqli_query($koneksi, $sql1);
    $isiPenilai = mysqli_fetch_row($dataPenilai);

    $sql2 = "SELECT COUNT(*) FROM tb_normalisasi";
    $dataNorm = mysqli_query($koneksi, $sql2);
    $isiNorm = mysqli_fetch_row($dataNorm);

    $sql3 = "SELECT COUNT(*) FROM tb_preferensi";
    $dataPref = mysqli_query($koneksi, $sql3);
    $isiPref = mysqli_fetch_row($dataPref);

    if ($isiPenilai[0] == 0) {
      echo "<script>
              alert('Mohon Inputkan Data Terlebih Dahulu');
           </script>";
    } else if ($isiNorm[0] > 0 && $isiPref[0] > 0) {
      echo "<script>
              alert('Proses Hitung Telah Dilakukan');
           </script>";
    } else {
      // fungsi menambil data dari DB    
      function Data($sql) {
        global $koneksi;

        $dataNilai = mysqli_query($koneksi, $sql);
        $baris = [];
        while ($hasil = mysqli_fetch_row($dataNilai)) {
          $baris [] = $hasil;
        }

        return $baris;
      } 

      // proses normalisasi
      $ambil = Data("SELECT * FROM tb_penilaian");

      function normalisasi($r11, $r21, $r31, $r41, $r51, $r61) {
        global $koneksi;

        // rumus keuntungan (Max)
        $max = array($r11, $r21 , $r31, $r41, $r51);
        $nilaiTerbesar = max($max);

        $hasilR11 = $r11 / $nilaiTerbesar;
        $hasilR21 = $r21 / $nilaiTerbesar;
        $hasilR31 = $r31 / $nilaiTerbesar;
        $hasilR41 = $r41 / $nilaiTerbesar;
        $hasilR51 = $r51 / $nilaiTerbesar;
        // $hasilR61 = $r61 / $nilaiTerbesar;

        // memformat panjang nominal angka jumlah hasil   
        $norm1 = number_format($hasilR11, 3);
        var_dump($hasilR61);
        $norm2 = number_format($hasilR21, 3);
        $norm3 = number_format($hasilR31, 3);
        $norm4 = number_format($hasilR41, 3);
        $norm5 = number_format($hasilR51, 3);
        // $norm6 = number_format($hasilR61, 3);

        $query = "INSERT INTO tb_normalisasi
        VALUES (0, '$norm1', '$norm2', '$norm3', '$norm4', '$norm5')";

        mysqli_query($koneksi, $query);
        return mysqli_affected_rows($koneksi);

      }

      normalisasi($ambil[0][2], $ambil[1][2], $ambil[2][2], $ambil[3][2], $ambil[4][2], $ambil[5][2]);
      normalisasi($ambil[0][3], $ambil[1][3], $ambil[2][3], $ambil[3][3], $ambil[4][3], $ambil[5][3]);
      normalisasi($ambil[0][4], $ambil[1][4], $ambil[2][4], $ambil[3][4], $ambil[4][4], $ambil[5][4]);
      normalisasi($ambil[0][5], $ambil[1][5], $ambil[2][5], $ambil[3][5], $ambil[4][5], $ambil[5][5]);
      normalisasi($ambil[0][6], $ambil[1][6], $ambil[2][6], $ambil[3][6], $ambil[4][6], $ambil[5][6]);
      // normalisasi($ambil[0][7], $ambil[1][7], $ambil[2][7], $ambil[3][7], $ambil[4][7], $ambil[5][7]);
      
      // proses preferensi
      $bobot = Data("SELECT * FROM tb_kriteria");

      // data / nilai bobot
      // $bobotK1 = $bobot[0][1];
      // $bobotK2 = $bobot[0][2];
      // $bobotK3 = $bobot[0][3];
      // $bobotK4 = $bobot[0][4];
      // $bobotK5 = $bobot[0][5];
      // $bobotK6 = $bobot[0][6];

      $bobotK1 = $bobot[0][2];
      $bobotK2 = $bobot[1][2];
      $bobotK3 = $bobot[2][2];
      $bobotK4 = $bobot[3][2];
      $bobotK5 = $bobot[4][2];
      // $bobotK6 = $bobot[5][2];

      function preferensi($id,$r11, $r21, $r31, $r41, $r51, $r61) {
        global $koneksi;
        global $bobotK1;
        global $bobotK2;
        global $bobotK3;
        global $bobotK4;
        global $bobotK5;
        // global $bobotK6;

        $prefR1 = $bobotK1 * $r11;
        $prefR2 = $bobotK2 * $r21;
        $prefR3 = $bobotK3 * $r31;
        $prefR4 = $bobotK4 * $r41;
        $prefR5 = $bobotK5 * $r51;
        // $prefR6 = $bobotK6 * $r61;

        // memformat panjang nominal angka jumlah hasil  
        $pre1 = number_format($prefR1, 3);
        $pre2 = number_format($prefR2, 3);
        $pre3 = number_format($prefR3, 3);
        $pre4 = number_format($prefR4, 3);
        $pre5 = number_format($prefR5, 3);
        // $pre6 = number_format($prefR6, 3);

        $totalPref = $pre1 + $pre2 + $pre3 + $pre4 + $pre5;

        // memformat panjang nominal jumlah angka  total hasil  
        $hasilTotal = number_format($totalPref, 3);

        

        $query = "INSERT INTO tb_preferensi
        VALUES ($id, '$pre1', '$pre2', '$pre3', '$pre4', '$pre5', '$hasilTotal')";

        mysqli_query($koneksi, $query);
        return mysqli_affected_rows($koneksi);

      }

      $hasilNorm = Data("SELECT * FROM tb_normalisasi");

      $test1 = preferensi($penilaian [0]['id_penilaian'],$hasilNorm[0][1], $hasilNorm[1][1], $hasilNorm[2][1], $hasilNorm[3][1], $hasilNorm[4][1],$hasilNorm[5][1]);
      $test2 = preferensi($penilaian [1]['id_penilaian'],$hasilNorm[0][2], $hasilNorm[1][2], $hasilNorm[2][2], $hasilNorm[3][2], $hasilNorm[4][2],$hasilNorm[5][2]);
      $test3 = preferensi($penilaian [2]['id_penilaian'],$hasilNorm[0][3], $hasilNorm[1][3], $hasilNorm[2][3], $hasilNorm[3][3], $hasilNorm[4][3],$hasilNorm[5][3]);
      $test4 = preferensi($penilaian [3]['id_penilaian'],$hasilNorm[0][4], $hasilNorm[1][4], $hasilNorm[2][4], $hasilNorm[3][4], $hasilNorm[4][4],$hasilNorm[5][4]);
      $test5 = preferensi($penilaian [4]['id_penilaian'],$hasilNorm[0][5], $hasilNorm[1][5], $hasilNorm[2][5], $hasilNorm[3][5], $hasilNorm[4][5],$hasilNorm[5][5]);
      // $test6 = preferensi($hasilNorm[0][6], $hasilNorm[1][6], $hasilNorm[2][6], $hasilNorm[3][6], $hasilNorm[4][6],$hasilNorm[5][6]);
      
      echo "<script>
                document.location.href = 'index.php?page=hasil_normalisasi';
             </script>";
    }    
  } 	

  $hasilNormalisasi = tampilData("SELECT * FROM tb_normalisasi");
  
  $sqlHasilpref = "SELECT tb_penilaian.alternatif, tb_preferensi.K1, tb_preferensi.K2, tb_preferensi.K3, 
  tb_preferensi.K4, tb_preferensi.K5, tb_preferensi.total FROM tb_penilaian
  INNER JOIN tb_preferensi ON tb_penilaian.id_penilaian = tb_preferensi.id_preferensi ORDER BY Total DESC";
  
  // $sqlHasilpref = "SELECT tb_alternatif.nama, tb_preferensi.K1, tb_preferensi.K2, tb_preferensi.K3, 
  // tb_preferensi.K4, tb_preferensi.K5, tb_preferensi.total FROM tb_alternatif 
  // RIGHT JOIN tb_preferensi ON tb_penilaian.id_penilaian = tb_preferensi.id_preferensi ORDER BY Total DESC";
  $hasilPreferensi = tampilData($sqlHasilpref);

  if (isset($_POST['reset'])) {
    $sqlNorm = "SELECT COUNT(*) FROM tb_normalisasi";
    $dataNorm = mysqli_query($koneksi, $sqlNorm);
    $isiNorm = mysqli_fetch_row($dataNorm);

    $sqlPref = "SELECT COUNT(*) FROM tb_preferensi";
    $dataPref = mysqli_query($koneksi, $sqlPref);
    $isiPref = mysqli_fetch_row($dataPref);

    if ($isiNorm[0] == 0 && $isiPref[0] == 0) {
      echo "<script>
              alert('Tidak Bisa Mereset, Karena Tidak Ada Data Satupun');
           </script>";
    } else {
      $resetAlter = "TRUNCATE TABLE tb_alternatif";
      $resetKrite = "TRUNCATE TABLE tb_kriteria";
      $resetPen = "TRUNCATE TABLE tb_penilaian";
      $resetNorm = "TRUNCATE TABLE tb_normalisasi";
      $resetPref = "TRUNCATE TABLE tb_preferensi";

      mysqli_query($koneksi, $resetAlter);
      mysqli_query($koneksi, $resetKrite);
      mysqli_query($koneksi, $resetPen);
      mysqli_query($koneksi, $resetNorm);
      mysqli_query($koneksi, $resetPref);

      echo "<script>
                alert('Reset Berhasil');
                document.location.href = 'index.php';
             </script>"; 
    }  
  } 

?>