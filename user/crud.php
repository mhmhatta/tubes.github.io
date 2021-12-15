<?php
include 'header.php';
include 'body.php';
?>
<!DOCTYPE >
<html>
<head>
</head>
<body>
	<div class="container">
            <h2>Edit User</h2>
            <hr>
            <div class="row">
                <a href="tambah_user.php" class="button"><i class="fa fa-plus-circle">&nbspTambah User</i></a>
                </div>
                <table class="table table-hover table-bordered">
                    <thead>
                        <tr>
							<th>No</th>
							<th>Username</th>
							<th>Level</th>
							<th>Email</th>
							<th>Nama</th>
							<th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
				include "../Configurasi/koneksi.php";
				$no = 1;
				$data = mysqli_query($koneksi,"select * from user");
				while($d = mysqli_fetch_array($data)){
					?>
                    <tr>
				
						<td><?php echo $no++; ?></td>
						<td><?php echo $d['username']; ?></td>
						<td><?php echo $d['level']; ?></td>
                		<td><?php echo $d['email']; ?></td>
                		<td><?php echo $d['nama']; ?></td>
						<td>
							<a class="btn  btn-primary" href="edit_user.php?id_user=<?php echo $d['id_user']; ?>"><i class="fa fa-edit"></i></a>
							<a class="btn btn-danger alert_notif" href="hapus_user.php?id_user=<?php echo $d['id_user']; ?>"><i class="fa fa-trash"></i></a>
						</td>                      
                      <?php }  ?>

                    </tbody>
   				 </table>						
                    <?php  {?>				
                    <?php } ?>
                  </ul>
                </nav>
            </div>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>

    <script>
    $('.alert_notif').on('click',function(e){
        e.preventDefault();
        const href=$(this).attr('href')

        Swal.fire({
        title: 'Yakin ingin menghapus?',
        text: "Perubahan tidak dapat dikembalikan!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Hapus!'
        }).then((result) => {
        if (result.value) {
             document.location.href = href;
        }
        })

    })
    </script>
<br><br><br><br><br><br><br><br>
<?php include ('footer.php'); ?>
</body>
</html>