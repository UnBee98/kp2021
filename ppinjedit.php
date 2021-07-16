
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Dwiki Firmansyah || Update Pinjaman  </title>
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<?php
// including the database koneksi file
include_once("./../../views/config.php");

if(isset($_POST['update']))
{	
        $id_pinjaman = $_POST['id_pinjaman']; 
        $status = $_POST['status'];
        $tanggal_update = $_POST['tanggal_update'];
     

	// checking empty fields
    if(empty($status) ||
    empty($tanggal_update)) 
    {

       
        echo '<script>
   swal({
    title: "Maaf!",
    text: "Data Yang Di Input  Tidak Lengkap",
    icon: "error",
    button: "oke!",
  }).then(function() {
    window.location = "";
  });
            </script>';
        
    } 
    else 
    {	
		//updating the table
	    $result = mysqli_query($mysqli, "UPDATE pinjaman SET status='$status', 
        tanggal_update='$tanggal_update' WHERE id_pinjaman=$id_pinjaman");
        echo '<script>
  swal({
   title: "Good job!",
   text: "Status, Berhasil Di Ubah. ",
   icon: "success",
   button: "oke!",
 }).then(function() {
   window.location = "./../../admin/datapengajuan";
 });
           </script>';
	}
}
?>
<?php
// including the database koneksi file
include_once("./../../views/config.php");

if(isset($_POST['update2']))
{	
        $id_pinjaman = $_POST['id_pinjaman']; 
        $status = $_POST['status'];
        $tanggal_dibayar = $_POST['tanggal_dibayar'];


	// checking empty fields
    if(empty($status) ||
    empty($tanggal_dibayar)) 
    {

       
        echo '<script>
   swal({
    title: "Maaf!",
    text: "Data Yang Di Input  Tidak Lengkap",
    icon: "error",
    button: "oke!",
  }).then(function() {
    window.location = "";
  });
            </script>';
        
    } 
    else 
    {	
		//updating the table
	    $result = mysqli_query($mysqli, "UPDATE pinjaman SET status='$status', tanggal_dibayar='$tanggal_dibayar' WHERE id_pinjaman=$id_pinjaman");
        echo '<script>
  swal({
   title: "Good job!",
   text: "Status, Berhasil Di Ubah. ",
   icon: "success",
   button: "oke!",
 }).then(function() {
   window.location = "./../../admin/datapengajuan";
 });
           </script>';
	}
}
?>
<?php
// including the database koneksi file
include_once("./../../views/config.php");

if(isset($_POST['update3']))
{	
        $id_pinjaman = $_POST['id_pinjaman']; 
        $status = $_POST['status']; 

       
        $foto = $_FILES['foto']['name'];    
        $tmp = $_FILES['foto']['tmp_name']; 
        $ext = strtolower(end(explode('.', $foto)));
        $valid_ext = array('jpg','jpeg','png','gif','bmp');
        // $direktori   = "foto/".$_FILES['foto']['name'];
        $acak           = mt_rand(1,999999);
         $photo_bukti = "photo_bukti/".$acak.$foto;
         $direktori   = "./../../photo_bukti/".$photo_bukti;
      
        move_uploaded_file($_FILES['foto']['tmp_name'], "./../../photo_bukti/".$acak.$_FILES['foto']['name']);
        $ext = strtolower(end(explode('.', $foto)));
        $valid_ext = array('jpg','jpeg','png','gif','bmp');

	// checking empty fields
    if(empty($photo_bukti) ||
    empty($status)) 
    {

            echo "<script>window.alert('Data Yang  DI Ubah Tidak Lengkap')
            window.location=''</script>";
        
    }else{
        if(in_array($ext, $valid_ext))
        {
            $ukuran =$_FILES['foto']['size'];								
            if ($ukuran>800000)
            {
    
              echo '<script>
              swal({
               title: "Waduh!",
               text: "Ukuran File Terlalu Besar,Max 800kb",
               icon: "error",
               button: "oke!",
             }).then(function() {
               window.location = "";
             });
                       </script>';
                            exit;
                    exit;
            }	
        $result = mysqli_query($mysqli, "UPDATE pinjaman SET 
        photo_bukti='$photo_bukti', status='$status' WHERE id_pinjaman=$id_pinjaman");
        echo '<script>
        swal({
        title: "Good job!",
        text: " Foto Berhasil Berhasil DI Upload",
        icon: "success",
        button: "oke!",
        }).then(function() {
        window.location = "./../../admin/datapengajuan";
        });
              </script>';
        } 
    }

   
}
?>
</body>
</html>