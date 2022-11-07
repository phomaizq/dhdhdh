<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hệ thống tra cứu giấy phép lái xe</title>
  </head>
  <body>
  <h1></h1>
  <h1>  </h1>
  <h1><center>Hệ thống quản lý giấy phép lái xe</center></h1>
  <h6><center>Dev by HPT</center></h6>
  <h1></h1>
<table class="table">
<thead>
           <tr>
               <th>So CCCD</th>
               <th>Họ và tên</th>
               <th>Giới tính</th>
               <th>Mã GPLX</th>
               <th>Mã hạng</th>
               <th>Ngày sinh</th>
               <th>Ngày cấp</th>
               <th>Ngày hết hạn</th>
               <th>SĐT</th>
               <th>Địa chỉ</th>
               <th>Điểm lý thuyết</th>
               <th>Điểm thực hành</th>
               <th>Trung tâm</th>
           </tr>
       </thead>
       <tbody>
      <?php
        $conn_array = array (
    "UID" => "sqlserver",
    "PWD" => "admin",
    "Database" => "qlgplx",
);
$conn = sqlsrv_connect('35.222.184.247', $conn_array);
if ($conn){
    echo "  ";
    if (isset($_POST['submit'])) {
      $maGLLX = $_POST['maGPLX'];
     $sql = "EXEC proc_TimHoSoGPLX  '$maGLLX'"; 
  
    if(($result = sqlsrv_query($conn,$sql)) !== false){
      while( $obj = sqlsrv_fetch_object( $result )) {
            echo "<tr>
            <td>$obj->SoCCCD</td>
            <td>$obj->Hoten</td>
            <td>$obj->GioiTinh</td>
            <td>$obj->MaGPLX</td>
            <td>$obj->MaHang</td>
            <td>$obj->NgaySinh</td>
            <td>$obj->NgayCap</td>
            <td>$obj->NgayHetHan</td>
            <td>$obj->SDT</td>
            <td>$obj->DiaChi</td>
            <td>$obj->DiemLT</td>
            <td>$obj->DiemTH</td>
            <td>$obj->TenTT</td>
        </tr>";
             
      }
    }
    }
}
else{
    die(print_r(sqlsrv_errors(), true));
}
      ?>

       </tbody>
</table>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>