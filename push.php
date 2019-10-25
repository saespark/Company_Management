  

<?php 

  $con = mysqli_connect("localhost", "root", "", "f_c_e");


  $Username     = $_POST['Username']; 
  $fullname     = $_POST['fullname']; 
  $alamat       = $_POST['alamat'];
  $notlpn       = $_POST['notlpn']; 
  $jabatan      = $_POST['jabatan'];
  $jmlhanak     = $_POST['jmlhanak'];
  
    $query = mysqli_query($con, "INSERT INTO edit_data (Username, fullname, alamat, notlpn, jabatan, jmlhanak) VALUES ('$Username', '$fullname', '$alamat', '$notlpn', '$jabatan', '$jmlhanak')");
          

          if ($query) {
          echo "<script type='text/javascript'>alert('Submitted! See you at the evening!')</script>";
            } else {
           echo "<script type='text/javascript'>alert('Fail to submit! Our satelite unable to find you!')</script>";
           }
?>

