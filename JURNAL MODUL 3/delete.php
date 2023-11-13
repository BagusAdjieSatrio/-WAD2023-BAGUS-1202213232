<!-- Pada file ini kalian membuat coding untuk logika delete / menghapus data mobil pada showroom sesuai id-->
<?php 
// (1) Jangan lupa sertakan koneksi database dari yang sudah kalian buat yaa
 include('connect.php');       
// (2) Tangkap nilai "id" mobil (CLUE: gunakan GET)
      $id = $_GET['id'];  
    // (3) Buatkan perintah SQL DELETE untuk menghapus data dari tabel berdasarkan id mobil
       $delete = mysqli_query($connect, "DELETE FROM showroom_mobil WHERE id='$id'"); 
    // (4) Buatkan perkondisi jika eksekusi query berhasil
 if ($delete){
        header('Location: list_mobil.php');
    } else {
        echo "<script>
                alert('Error')
                document.location.href = 'form_update_mobil.php'
                </script>";
    }

// Tutup koneksi ke database setelah selesai menggunakan database
mysqli_close($connect);
?>
