
 <!DOCTYPE html>
 <html>
 <head>
  <title>kalkulator</title>
 </head>
 <body>
  <?php 
    @$a = $_POST['pertama'];
    @$b = $_POST['kedua'];
  if (isset($_POST['tambah'])) {
      $hasil = $a + $b;
      //echo $hasil;
  }
  else if (isset($_POST['kurang'])) {
      $hasil = $a - $b;
      //echo $hasil;
  }
  else if (isset($_POST['kali'])) {
      $hasil = $a * $b;
      // echo $hasil;
  }
  else if (isset($_POST['bagi'])) {
      $hasil = $a / $b;
      // echo $hasil;
  }
  else if (isset($_POST['modulus'])) {
      $hasil = $a % $b;
      // echo $hasil;
  }
  else if (isset($_POST['besar'])) {
      if ($hasil = $a >= $b ){
        echo $hasil = "benar";
      }
      else{
        echo $hasil = "Salah";
      }
  }
  else if  (isset($_POST['kecil'])) {
     if ($hasil = $a <= $b ){
        echo $hasil = "benar";
      }
      else{
        echo $hasil = "Salah";
      }
  }
  else if  (isset($_POST['sama'])) {
     if ($hasil = $a == $b ){
        echo $hasil = "benar";
      }
      else{
        echo $hasil = "Salah";
      }
  }
  else if  (isset($_POST['beda'])) {
     if ($hasil = $a != $b ){
        echo $hasil = "benar";
      }
      else{
        echo $hasil = "Salah";
      }
  }
  else if (isset($_POST['reset'])) {
     echo $hasil = "  ";
     echo $a = "  ";
     echo $b = "  ";
  }

 ?>
  <form method="post">
    <table>
      <tr>
        <td>masukan angka pertama</td>
        <td>:</td>
        <td>
          <input type="number" name="pertama" placeholder="angka pertama" value="<?php echo $a ?>">
        </td>
      </tr>
      <tr>
        <td>Masukan angka kedua</td>
        <td>:</td>
        <td>
          <input type="number" name="kedua" placeholder="angka kedua" value="<?php echo $b ?>">
        </td>
      </tr>
      <tr>
        <td></td>
        <td></td>
        <td>
          <input type="submit" name="tambah" value="+">
          <input type="submit" name="kurang" value="-">
          <input type="submit" name="kali" value="*">
          <input type="submit" name="bagi" value="/">
          <input type="submit" name="modulus" value="%">
          <input type="submit" name="besar" value=">">
          <input type="submit" name="kecil" value="<">
          <input type="submit" name="sama" value="=">
          <input type="submit" name="beda" value="<>">
          <input type="submit" name="reset" value="reset">

        </td>
      </tr>
      <tr>
        
        <td>
          Hasil
        </td>
        <td>
          :
        </td>
        <td class="hasil">
          <?php 
            echo @$hasil;
           ?>
        </td>
      </tr>
    </table>
  </form>
 </body>
 </html>