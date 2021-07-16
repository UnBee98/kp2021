<?php
//including the database koneksi file
include_once("./../../views/config.php");
$id_pinjaman=$_GET['id_pinjaman'];
	$result=mysqli_query($mysqli, "SELECT * FROM pinjaman WHERE id_pinjaman=$id_pinjaman");
    while($res=mysqli_fetch_array($result))
    {
        $no_trx = $res['no_trx'];
        $tanggal_update = $res['tanggal_update'];
        $status = $res['status'];
       
        

        
    }
?>
<div class="modal-dialog">
    <div class="modal-content">

		<div class="modal-header">
        <h5 class="modal-title">Edit Pinjaman Status : <?php echo $status; ?> | <?php echo $no_trx; ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

        <div class="modal-body">
        	<form  action="prosesedit/ppinjedit.php" name="modal_popup"  enctype="multipart/form-data" method="POST" onsubmit="return true;">
        		
                <div class="form-group" style="padding-bottom: 20px;">
                	<label for="Modal Name">Modal Name</label>
                    <input type="hidden" name="id_pinjaman" id="edit-id"  class="form-control" value="<?php echo $id_pinjaman; ?>" />
     				<input type="text" name="modal_name" id="edit-name" class="form-control" Readonly value="<?php echo $no_trx; ?>"/>
                </div>

                <div class="form-group" style="padding-bottom: 20px;">
                	<label for="Description">Status</label>
                     <select name="status" id="edit-status" class="mr-sm-2 default-select form-control" required>
                                                                                                                <option value="<?php echo $status; ?>"><?php echo $status; ?></option>
                                                                                                                <option value="Dikonfirmasi">Dikonfirmasi</option>
                                                                                                                <option value="Ditolak">Ditolak</option>
                                                                                                                
                                                                                                            </select>
                </div>
                <input type="hidden" name="tanggal_update"  class="form-control" value="<?php date_default_timezone_set('Asia/Jakarta'); echo date(' Y-m-d H:i:s');?>" />
	            <div class="modal-footer">
	                <button class="btn btn-success" type="submit" name="update" value="update">
	                    Update
	                </button>

	                <button type="reset" class="btn btn-danger"  data-dismiss="modal" aria-hidden="true">
	               		Cancel
	                </button>
	            </div>

            	</form>

             

            </div>

           
        </div>
    </div>