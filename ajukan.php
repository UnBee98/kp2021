<?php
session_start();

if( !isset($_SESSION['saya_user']) )
{
	header('location:./../'.$_SESSION['akses']);
	exit();
}

$id_user2 = ( isset($_SESSION['id_user']) ) ? $_SESSION['id_user'] : '';
$hak_akses2 = ( isset($_SESSION['hak_akses']) ) ? $_SESSION['hak_akses'] : '';
$nama2 = ( isset($_SESSION['username']) ) ? $_SESSION['username'] : '';
$foto2 = ( isset($_SESSION['foto_user']) ) ? $_SESSION['foto_user'] : '';
$nama_lengkap2 = ( isset($_SESSION['nama_lengkap']) ) ? $_SESSION['nama_lengkap'] : '';
?>
<?php
include "./../views/config.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Zenix - Crypto Pengajuan Dashboard </title>
    <!-- Favicon icon -->
	<?php
include "tampilan/cssatas1.php"
?>
	<!-- Favicon icon end-->
</head>
<body>

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="index.php" class="brand-logo">
                <svg class="logo-abbr" width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
					<rect class="svg-logo-rect" width="50" height="50" rx="20" fill="#EB8153"/>
					<path class="svg-logo-path"  d="M17.5158 25.8619L19.8088 25.2475L14.8746 11.1774C14.5189 9.84988 15.8701 9.0998 16.8205 9.75055L33.0924 22.2055C33.7045 22.5589 33.8512 24.0717 32.6444 24.3951L30.3514 25.0095L35.2856 39.0796C35.6973 40.1334 34.4431 41.2455 33.3397 40.5064L17.0678 28.0515C16.2057 27.2477 16.5504 26.1205 17.5158 25.8619ZM18.685 14.2955L22.2224 24.6007L29.4633 22.6605L18.685 14.2955ZM31.4751 35.9615L27.8171 25.6886L20.5762 27.6288L31.4751 35.9615Z" fill="white"/>
				</svg>
                <svg class="brand-title" width="74" height="22" viewBox="0 0 74 22" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path class="svg-logo-path"  d="M0.784 17.556L10.92 5.152H1.176V1.12H16.436V4.564L6.776 16.968H16.548V21H0.784V17.556ZM25.7399 21.28C24.0785 21.28 22.6599 20.9347 21.4839 20.244C20.3079 19.5533 19.4025 18.6387 18.7679 17.5C18.1519 16.3613 17.8439 15.1293 17.8439 13.804C17.8439 12.3853 18.1519 11.088 18.7679 9.912C19.3839 8.736 20.2799 7.79333 21.4559 7.084C22.6319 6.37467 24.0599 6.02 25.7399 6.02C27.4012 6.02 28.8199 6.37467 29.9959 7.084C31.1719 7.79333 32.0585 8.72667 32.6559 9.884C33.2719 11.0413 33.5799 12.2827 33.5799 13.608C33.5799 14.1493 33.5425 14.6253 33.4679 15.036H22.6039C22.6785 16.0253 23.0332 16.7813 23.6679 17.304C24.3212 17.808 25.0585 18.06 25.8799 18.06C26.5332 18.06 27.1585 17.9013 27.7559 17.584C28.3532 17.2667 28.7639 16.8373 28.9879 16.296L32.7959 17.36C32.2172 18.5173 31.3119 19.46 30.0799 20.188C28.8665 20.916 27.4199 21.28 25.7399 21.28ZM22.4919 12.292H28.8759C28.7825 11.3587 28.4372 10.6213 27.8399 10.08C27.2612 9.52 26.5425 9.24 25.6839 9.24C24.8252 9.24 24.0972 9.52 23.4999 10.08C22.9212 10.64 22.5852 11.3773 22.4919 12.292ZM49.7783 21H45.2983V12.74C45.2983 11.7693 45.1116 11.0693 44.7383 10.64C44.3836 10.192 43.9076 9.968 43.3103 9.968C42.6943 9.968 42.069 10.2107 41.4343 10.696C40.7996 11.1813 40.3516 11.8067 40.0903 12.572V21H35.6103V6.3H39.6423V8.764C40.1836 7.90533 40.949 7.23333 41.9383 6.748C42.9276 6.26267 44.0663 6.02 45.3543 6.02C46.3063 6.02 47.0716 6.19733 47.6503 6.552C48.2476 6.888 48.6956 7.336 48.9943 7.896C49.3116 8.43733 49.517 9.03467 49.6103 9.688C49.7223 10.3413 49.7783 10.976 49.7783 11.592V21ZM52.7548 4.62V0.559999H57.2348V4.62H52.7548ZM52.7548 21V6.3H57.2348V21H52.7548ZM63.4657 6.3L66.0697 10.444L66.3497 10.976L66.6297 10.444L69.2337 6.3H73.8537L68.9257 13.608L73.9657 21H69.3457L66.6017 16.884L66.3497 16.352L66.0977 16.884L63.3537 21H58.7337L63.7737 13.692L58.8457 6.3H63.4657Z" fill="black"/>
				</svg>
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->
		
		<!--**********************************
            Chat box start
        ***********************************-->
		
		<!--**********************************
            Chat box End
        ***********************************-->
		
		<?php
include "tampilan/menu1.php"
?>
		
		  <!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
			<div class="container-fluid">
				
                <div class="row page-titles mx-0">
                    <div class="col-sm-6 p-md-0">
                        <div class="welcome-text">
                            <h4>Hi, welcome back!</h4>
                            <p class="mb-0">Your business dashboard template</p>
                        </div>
                    </div>
                    <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">App</a></li>
                            <li class="breadcrumb-item active"><a href="javascript:void(0)">Profile</a></li>
                        </ol>
                    </div>
                </div>
                <?php 

// connect to database
include_once("./../views/config.php");

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
    $no_trx    =  e($_POST['no_trx']);
    $no_t    =  e($_POST['no_t']);
    $jml_pinjaman    =  e($_POST['jml_pinjaman']);
    $keterangan    =  e($_POST['keterangan']);
    $tanggal_create    =  e($_POST['tanggal_create']);
    $id_user    =  e($_POST['id_user']);
    

    if(empty($no_trx) ||
    empty($no_t) ||
     empty($jml_pinjaman) || 
     empty($keterangan) || 
     empty($tanggal_create) || 
     empty($id_user)) {
				
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
        } else {	
            $cek = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM pinjaman WHERE  id_user= '$id_user' AND status='Pending'  "));
            if ($cek > 0){
                echo '<script>
                swal({
                title: "Toneng!!",
                text: "Dana Masih Ada Yang Pending.",
                icon: "error",
                button: "oke!",
                }).then(function() {
                window.location = "";
                });
                       </script>';
          
            }else{	
                $cek = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM pinjaman WHERE  id_user= '$id_user' AND status='Dikonfirmasi'  "));
                if ($cek > 0){
                    echo '<script>
                    swal({
                    title: "Toneng!!",
                    text: "Dana Masih Ada Yang Dikonfirmasi.",
                    icon: "error",
                    button: "oke!",
                    }).then(function() {
                    window.location = "";
                    });
                           </script>';
              
                }else{	
                    $cek = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM pinjaman WHERE  id_user= '$id_user' AND status='Ditransfer'  "));
                    if ($cek > 0){
                        echo '<script>
                        swal({
                        title: "Toneng!!",
                        text: "Dana Masih Ada Yang Ditransfer.",
                        icon: "error",
                        button: "oke!",
                        }).then(function() {
                        window.location = "";
                        });
                               </script>';
                  
                    }else
                    {	
                        $hari_ini = date("Y-m-d");
                        $cek = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM pinjaman WHERE  id_user= '$id_user' AND tanggal_create = '$hari_ini'  "));
                        if ($cek > 0){
                            echo '<script>
                            swal({
                            title: "Toneng!!",
                            text: "Anda Hanya Bisa mengajukan 1 Bulan Sekali.",
                            icon: "error",
                            button: "oke!",
                            }).then(function() {
                            window.location = "";
                            });
                                   </script>';
                      
                        }else {	
                $cek = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM pinjaman WHERE  tanggal_create = '$tanggal_create'  "));
                if  (date('d') > 24 || date('d') < 2){
                    echo '<script>
                    swal({
                    title: "Toneng!!",
                    text: "Pengajuan dana talangan belum dibuka.",
                    icon: "error",
                    button: "oke!",
                    }).then(function() {
                    window.location = "";
                    });
                           </script>';
              
                
                  
                    }else{
                
        
       // register user if there are no errors in the form
    if (count($errors) == 0) {

        if (isset($_POST['no_trx'])) {
            $no_trx = e($_POST['no_trx']);
            $query = "INSERT INTO pinjaman (no_trx,no_t, 
            jml_pinjaman, 
            keterangan, 
            tanggal_create, 
            id_user) 
                      VALUES('$no_trx','$no_t',
                      '$jml_pinjaman', 
                      '$keterangan', 
                      '$tanggal_create', 
                      '$id_user')";
            mysqli_query($conn, $query);
            echo '<script>
  swal({
   title: "Good job!",
   text: "Apply Pinjaman Sukses",
   icon: "success",
   button: "oke!",
 }).then(function() {
   window.location = "";
 });
           </script>';
            
}
        }
      }
    }
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
                <?php

// mencari kode barang dengan nilai paling besar
$query = "SELECT max(no_t) as maxKode FROM pinjaman";
$hasil = mysqli_query($koneksi,$query);
$data = mysqli_fetch_array($hasil);
$no_t = $data['maxKode'];
$noUrut = (int) substr($no_t, 2, 2);
$noUrut++;
$char = "00";
$no_t = $char . sprintf("%1s", $noUrut);
?>           
                <div class="row">
                   
                    <div class="col-xl-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="profile-tab">
                                    <div class="custom-tab-1">
                                        <ul class="nav nav-tabs">
                                            
                                            <li class="nav-item"><a href="#profile-settings" data-toggle="tab" class="nav-link active show">Form Pengajuan Pinajaman </a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <div id="profile-settings" class="tab-pane fade active show">
                                                <div class="pt-3">
                                                    <div class="settings-form">
                                                        <h4 class="text-primary">Pengajuan Pinjaman</h4>
                                                        <form action="" method="POST" enctype="multipart/form-data">

                                                            <div class="form-row">
                                                                <div class="form-group col-md-6">
                                                                    <label>No TRX Pnjmn</label>
                                                                    <input type="text" placeholder="Email" name="no_trx" value="DT/<?php date_default_timezone_set('Asia/Jakarta'); echo date('dmy');?>/<?php echo $no_t; ?>"  readonly class="form-control">
                                                                    <input class="form-control" type="hidden" id="no_t" name="no_t" value="<?php echo $no_t; ?>" required readonly>
                                                                    <input class="form-control" type="hidden" id="id_user" name="id_user" value="<?php echo $id_user2; ?>"  readonly>
                                                                    <input class="form-control" type="hidden" id="tanggal_create" name="tanggal_create" value="<?php date_default_timezone_set('Asia/Jakarta'); echo date(' Y-m-d');?>"  readonly>
                                                                </div>
                                                            </div>
                                                            <div class="form-row">
                                                                <div class="form-group col-md-6">
                                                                    <label>Nama Lengkap</label>
                                                                    <input type="text" placeholder="Password" value='<?php echo $nama_lengkap2; ?>' readonly  class="form-control">                                                                 
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                <label>Jumlah Pinjaman</label>
                                                                <select name="jml_pinjaman" id="total" class="mr-sm-2 default-select form-control" required>
                                                    <option>Pilih Jumlah Dana </option>
                                            <?php

                                                        //selecting data associated with this particular id
                                                    $result = mysqli_query($mysqli, "SELECT * FROM dana WHERE status = 'Active' ");
                                                    while($res = mysqli_fetch_array($result))
                                                {
                                            ?>
                                                    <option value="<?php echo $res['loans']?>">Rp.<?php echo (number_format($res['loans'])) ?></option>
                                            <?php

                                                }
                                            ?>
                                                                                                               
                                                                                                            </select>                                                                </div>
                                                            </div>
                                                            <div class="form-row">
                                                                <div class="form-group col-md-6">
                                                                    <label>Alasan Mengajukan Pinjaman</label>
                                                                    <textarea type="text" placeholder="tanggal" name='keterangan'   class="form-control" required>   </textarea>            
                                                                </div>
                                                                <!-- <div class="form-group col-md-6">
                                                                <label>Posisi</label>
                                                                    <select class="mr-sm-2 default-select form-control" id="inlineFormCustomSelect" name='posisi'>
                                                                        <option value='<?php echo $posisi; ?>'><?php echo $posisi; ?></option>
                                                                        <option value="Kiper">Kiper</option>
                                                                        <option value="Bek">Belakang</option>
                                                                        <option value="Gelandang">Gelandang</option>
                                                                        <option value="Penyerang">Penyerang</option>
                                                                    </select>
                                                                </div> -->
                                                            </div>
                                                            <!-- <div class="form-row">
                                                                <div class="form-group col-md-6">
                                                                    <label>Bobot Dribling</label>
                                                                    <input type="text"  value='<?php echo $bobot1; ?>' name='bobot1'   class="form-control">              
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                <label>Bobot Passing </label>
                                                                <input type="text"  value='<?php echo $bobot2; ?>' name='bobot2'   class="form-control">              
                                                                </div>
                                                            </div>
                                                            <div class="form-row">
                                                                <div class="form-group col-md-6">
                                                                    <label>Bobot Shooting</label>
                                                                    <input type="text"  value='<?php echo $bobot3; ?>' name='bobot3'   class="form-control">              
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                <label>Bobot Heading </label>
                                                                <input type="text"  value='<?php echo $bobot4; ?>' name='bobot4'   class="form-control">              
                                                                </div>
                                                            </div>
                                                            <div class="form-row">
                                                                <div class="form-group col-md-6">
                                                                    <label>Bobot Agility</label>
                                                                    <input type="text"  value='<?php echo $bobot5; ?>' name='bobot5'   class="form-control">              
                                                                </div>
                                                               
                                                            </div> -->
                                                            
                                                          
                                                            <button class="btn btn-primary" type="submit" id="submit" name="Submit"  value="Submit" >Simpan </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
									<!-- Modal -->
									<div class="modal fade" id="replyModal">
										<div class="modal-dialog modal-dialog-centered" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title">Post Reply</h5>
													<button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
												</div>
												<div class="modal-body">
													<form>
														<textarea class="form-control" rows="4">Message</textarea>
													</form>
												</div>
												<div class="modal-footer">
													<button type="button" class="btn btn-danger light" data-dismiss="modal">Close</button>
													<button type="button" class="btn btn-primary">Reply</button>
												</div>
											</div>
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
            Content body end
        ***********************************-->

       
		<?php
include "tampilan/footer1.php"
?>
		
		
		
		
		<!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

  
	<?php
include "tampilan/cssbawah1.php"
?>
</body>

</html>