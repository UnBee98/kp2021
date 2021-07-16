<!DOCTYPE html>
<html lang="en" class="h-100">


<!-- Mirrored from zenix.dexignzone.com/xhtml/page-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 May 2021 09:19:36 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Zenix -  Crypto Admin Dashboard </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
	<link href="vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>
<?php 

// connect to database
include_once("views/config.php");

$errors   = array();
$success   = array(); 

// call the register() function if register_btn is clicked
if (isset($_POST['Submit'])) {
    Submit();
}

// REGISTER USER
function Submit(){
    global $conn, $errors;
    global $conn, $success;
    
    // receive all input values from the form
    $nama_lengkap    =  e($_POST['nama_lengkap']);
    $username    =  e($_POST['username']);
    $password    =  e($_POST['password']);
    $hak_akses    =  e($_POST['hak_akses']);

    if(empty($nama_lengkap) ||
     empty($username) || 
     empty($password) || 
     empty($hak_akses)) {
            echo "<script>window.alert('Data Yang Di Input  Tidak Lengkap')
           window.location=''</script>";
    } else {	
        $cek = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM user WHERE username  = '$username'"));
        if ($cek > 0){
                   echo "<script>window.alert('username Sudah Terdaftar')
        window.location=''</script>";
                
          }else{
       // register user if there are no errors in the form
    if (count($errors) == 0) {

        if (isset($_POST['nama_lengkap'])) {
            $nama_lengkap = e($_POST['nama_lengkap']);
            $query = "INSERT INTO user (nama_lengkap, 
            username, 
            password, 
            hak_akses) 
                      VALUES('$nama_lengkap', 
                      '$username', 
                      '$password', 
                      '$hak_akses')";
            mysqli_query($conn, $query);
           echo "<script>window.alert('Sukses Daftar Akun')
           window.location='./'</script>";
        }
            
        }
      }
    }

}

// return user array from their id
function getUserById($id){
    global $conn;

}
// LOGIN USER

// escape string
function e($val){
    global $conn;
    return mysqli_real_escape_string($conn, trim($val));
}

?>
<body class="vh-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
									<div class="text-center mb-3">
										<img src="images/logo-full.png" alt="">
									</div>
                                    <h4 class="text-center mb-4">Sign up your account</h4>
                                    <form method="POST" enctype="multipart/form-data">
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Nama Lengkap</strong></label>
                                            <input type="text" class="form-control" placeholder="Nama Lengkap" name='nama_lengkap'>
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Username</strong></label>
                                            <input type="text" class="form-control" placeholder="username" name='username'>
                                        </div>
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Password</strong></label>
                                            <input type="password" class="form-control" placeholder="Password" name='password'>
                                            <input type="hidden" class="form-control" name='hak_akses' value="user">
                                        </div>
                                        <div class="text-center mt-4">
                                            <button type="submit" id="submit" name="Submit" class="btn btn-primary btn-block">Registrasi</button>
                                        </div>
                                    </form>
                                    <div class="new-account mt-3">
                                        <p>Already have an account? <a class="text-primary" href="./">Sign in</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!--**********************************
	Scripts
***********************************-->
<!-- Required vendors -->
<script src="vendor/global/global.min.js"></script>
<script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<script src="js/custom.min.js"></script>
<script src="js/deznav-init.js"></script>
<script src="js/demo.js"></script>
<script src="js/styleSwitcher.js"></script>
</body>

<!-- Mirrored from zenix.dexignzone.com/xhtml/page-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 18 May 2021 09:19:36 GMT -->
</html>