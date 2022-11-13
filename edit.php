<?php
    require 'connectdb.php';
    $idmovie = $_GET['id_movie'];
    
    $sql = "select * from movies where id_movie = $idmovie";
    $result = mysqli_query($conn,$sql);
    $phim=mysqli_fetch_assoc($result);
?>  

<form method = "POST" action="" align = "center">
    <label>Mã phim</label> <input type="text" name="ma-phim" value= "<?php echo $movies['id_movie']; ?>" readonly="True"> <br>
    <label>Tên phim</label> <input type="text" name="ten-phim" value= "<?php echo $movies['name_movie']; ?>"> <br>
    <label>Ảnh phim</label> <input type="text" name="anh" value= "<?php echo $movies['anh_phim']; ?>"> <br>
    <label>Thể loại</label> <input type="text" name="the-loai" value= "<?php echo $movies['id_cat_mmovie']; ?>"><br>
    <label>Diễn viên</label> <input type="text" name="dien-vien" value= "<?php echo $movies['id_dienvien']; ?>"> <br>
    <label>Nội dung</label> <input type="text" name="noi-dung" value= "<?php echo $movies['noi-dung']; ?>"> <br>
    <input type="submit" name="sua" value ="SỬA">
</form>

<?php
    if(isset($_POST["sua"])){
        $tenphim =$_POST['ten-phim'];
        $anhphim = $_POST['anh-phim'];
        $theloai = $_POST['the-loai'];
        $dienvien = $_POST['dienvien'];
        $noidung = $_POST['noi-dung'];

        $sql = "UPDATE movies SET id_movie='$idmovie',name_movie=n'$tenphim',anh_phim='$anhphim'id_cat_movie='$theloai',id_dienvien='$dienvien',noi_dung=n'$noidung' WHERE id_movie='$idmovie'";
        $result = mysqli_query($conn,$sql);
        
        header("location:quanly-phim.php");
    }
?>