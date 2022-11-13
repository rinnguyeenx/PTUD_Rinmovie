<html lang="en">
<head>
    <title>Quản lý website xem phim</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="adminStyle.css">
    <link rel="stylesheet" href="quanlyStyle.css">
</head>
<body onload="time()" class="app sidebar-mini rtl">
    <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
    <!-- sidebar left -->
    <aside class="app-sidebar">
        <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="/img/ang-ry-bird.jpeg" width="50px" alt="User Image">
          <div>
            <p class="app-sidebar__user-name"><b>Nguyễn Thị Linh</b></p>
            <p class="app-sidebar__user-designation">Chào mừng bạn trở lại</p>
          </div>
        </div>
        <hr>
        <ul class="app-menu">
          <li><a class="app-menu-item" href="quanly-admin.php"><i class="fa-solid fa-user"></i>
              <span class="app-menu-label">Quản lý admin</span></a></li>
          <li><a class="app-menu-item active" href="quanly-phim.php"><i class="fa-solid fa-film"></i><span
                class="app-menu-label">Quản lý phim</span></a></li>
          <li><a class="app-menu-item " href="quanly-taikhoan.php"><i class="fa-solid fa-eye"></i> <span
                class="app-menu-label">Quản lý người xem</span></a></li>
          <li><a class="app-menu-item" href="quanly-tap.php"><i class='app-menu__icon bx bx-user-voice'></i><span
                class="app-menu-label">Quản lý các tập phim</span></a></li>
        </ul>
      </aside>

    <main id="content">
        <div class="thanh-thong-tin">
            <p>Quản lý thông tin phim trên hệ thống</p>
            <div id="clock"></div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="tile">
                    <div class="tile-body">
                        <div class="row element-button">
                            <div class="col-sm-2">
                              <a class="btn btn-add btn-sm" href="formAddphim.php" title="Thêm"><i class="fas fa-plus"></i>
                                Thêm phim mới</a>
                            </div>
              
                            <div class="col-sm-2">
                              <a class="btn btn-delete btn-sm print-file" type="button" title="In" onclick="myApp.printTable()"><i
                                  class="fas fa-print"></i> In thông tin phim</a>
                            </div>
              
                            <div class="col-sm-2">
                              <a class="btn btn-delete btn-sm" type="button" title="Xóa" onclick="myFunction(this)"><i
                                  class="fas fa-trash-alt"></i> Xóa tất cả phim </a>
                            </div>
                          </div>
                          <hr>
                        <table class="table table-hover table-bordered" id="sampleTable">
                            <thead>
                                <tr>
                                    <th width="10">Đã check</th>
                                    <th>Mã phim</th>
                                    <th>Tên phim</th>
                                    <th>Ảnh phim</th>
                                    <th>Thể loại</th>
                                    <th>Diễn viên</th>
                                    <th>Nội dung</th>
                                    <th>Chức năng</th>
                                </tr>
                            </thead>
                          
                            <tbody>
                              
                                <tr>
                                    <td width="10"><input type="checkbox" name="check1" value="1"></td>
                                    <td>movie1</td>
                                    <td>Nữ hoàng băng giá Frozen</td>
                                    <td><img src="img/frozen.jpg" alt="" width="100px;"></td>
                                    <td>Hoạt hình</td>
                                    <td><span class="badge bg-success">Elsa</span></td>
                                    <td>Bộ phim Frozen thuộc thể loại nhạc kịch, được dựa trên nội dung câu chuyện về Bà chúa tuyết của nhà văn Đan Mạch Hans Christian Andersen. Cốt truyện xoay quanh hai chị em gái.</td>
                                    <td>
                                      <a href="delete.php?id_movie='.$movies['id_movie'].'"><i class="fas fa-trash-alt"></i></a>
                                      <a href="edit.php?id_movie='.$movies['id_movie'].'"><i class="fas fa-edit"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td width="10"><input type="checkbox" name="check1" value="1"></td>
                                    <td>movie2</td>
                                    <td>Harry Potter và chiếc cốc lửa</td>
                                    <td><img src="img/harry-potter.jpeg" alt="" width="100px;"></td>
                                    <td>Viễn tưởng</td>
                                    <td><span class="badge bg-success">Daniel Radcliffed</span></td>
                                    <td>Harry Potter, một phù thủy thiếu niên chỉ biết về tiềm năng phép thuật của mình sau khi nhận thư mời nhập học tại Học viện Ma thuật và Pháp thuật Hogwarts vào đúng vào dịp sinh nhật thứ mười một.</td>
                                    <td>
                                      <a href="delete.php?id_movie='.$movies['id_movie'].'"><i class="fas fa-trash-alt"></i></a>
                                      <a href="edit.php?id_movie='.$movies['id_movie'].'"><i class="fas fa-edit"></i></a>
                                    </td>
                                </tr><tr>
                                    <td width="10"><input type="checkbox" name="check1" value="1"></td>
                                    <td>movie3</td>
                                    <td>Grinch</td>
                                    <td><img src="img/grinch.jpg" alt="" width="100px;"></td>
                                    <td>40</td>
                                    <td><span class="badge bg-success">Hoạt hình</span></td>
                                    <td>Chuyện phim The Grinch xoay quanh nhân vật Grinch (Benedict Cumberbatch) - một sinh vật lông lá, xanh lè thuộc chủng tộc Người Ta (Who). Trái với đồng bào tại Làng Ta (Whoville), gã chỉ thích sống cô độc trên núi cùng chú chó trung thành Max.</td>
                                    <td>
                                      <a href="delete.php?id_movie='.$movies['id_movie'].'"><i class="fas fa-trash-alt"></i></a>
                                      <a href="edit.php?id_movie='.$movies['id_movie'].'"><i class="fas fa-edit"></i></a>
                                    </td>
                                </tr>
                            </tbody>

                            <!-- <?php
                              require 'connectdb.php';
                              $sql ="select * from movies";
                              $result = mysqli_query($conn,$sql);
                              $n = mysqli_num_rows($result);
                              if($n>0){
                                while ($movies = mysqli_fetch_assoc($result))
                                {
                                  echo '
                                    <tr>
                                    <td >'.$movies['id_movie'].'</td>;
                                    <td >'.$movies['name_movie'].'</td>;
                                    <td >'.$movies['anh_phim'].'</td>;
                                    <td >'.$movies['id_cat_movie'].'</td>;
                                    <td >'.$movies['id_dienvien'].'</td>;
                                    <td >'.$movies['noi_dung'].'</td>;
                                    <td >
                                    <a href="delete.php?id_movie='.$movies['id_movie'].'"><i class="fas fa-trash-alt"></i></a>
                                    <button class="btn btn-primary btn-sm edit" type="button" title="Sửa" id="show-emp" data-toggle="modal"
                                        data-target="#ModalUP"><i class="fas fa-edit"></i></button>
                                    </td>;
                                    </tr>';
                                }
                              }
                              ?> -->

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>


      <script>
         var ctxl = $("#lineChartDemo").get(0).getContext("2d");
    var lineChart = new Chart(ctxl).Line(data);

    var ctxb = $("#barChartDemo").get(0).getContext("2d");
    var barChart = new Chart(ctxb).Bar(data);
  </script>

<script type="text/javascript">
    var data = {
      labels: ["Tháng 1", "Tháng 2", "Tháng 3", "Tháng 4", "Tháng 5", "Tháng 6"],
      datasets: [{
        label: "Dữ liệu đầu tiên",
        fillColor: "rgba(255, 213, 59, 0.767), 212, 59)",
        strokeColor: "rgb(255, 212, 59)",
        pointColor: "rgb(255, 212, 59)",
        pointStrokeColor: "rgb(255, 212, 59)",
        pointHighlightFill: "rgb(255, 212, 59)",
        pointHighlightStroke: "rgb(255, 212, 59)",
        data: [20, 59, 90, 51, 56, 100]
      },
      {
        label: "Dữ liệu kế tiếp",
        fillColor: "rgba(9, 109, 239, 0.651)  ",
        pointColor: "rgb(9, 109, 239)",
        strokeColor: "rgb(9, 109, 239)",
        pointStrokeColor: "rgb(9, 109, 239)",
        pointHighlightFill: "rgb(9, 109, 239)",
        pointHighlightStroke: "rgb(9, 109, 239)",
        data: [48, 48, 49, 39, 86, 10]
      }
      ]
    };
    var ctxl = $("#lineChartDemo").get(0).getContext("2d");
    var lineChart = new Chart(ctxl).Line(data);

    var ctxb = $("#barChartDemo").get(0).getContext("2d");
    var barChart = new Chart(ctxb).Bar(data);
  </script>
  
  <script type="text/javascript">

        function time() {
      var today = new Date();
      var weekday = new Array(7);
      weekday[0] = "Chủ Nhật";
      weekday[1] = "Thứ Hai";
      weekday[2] = "Thứ Ba";
      weekday[3] = "Thứ Tư";
      weekday[4] = "Thứ Năm";
      weekday[5] = "Thứ Sáu";
      weekday[6] = "Thứ Bảy";
      var day = weekday[today.getDay()];
      var dd = today.getDate();
      var mm = today.getMonth() + 1;
      var yyyy = today.getFullYear();
      var h = today.getHours();
      var m = today.getMinutes();
      var s = today.getSeconds();
      m = checkTime(m);
      s = checkTime(s);
      nowTime = h + " giờ " + m + " phút " + s + " giây";
      if (dd < 10) {
        dd = '0' + dd
      }
      if (mm < 10) {
        mm = '0' + mm
      }
      today = day + ', ' + dd + '/' + mm + '/' + yyyy;
      tmp = '<span class="date"> ' + today + ' - ' + nowTime +
        '</span>';
      document.getElementById("clock").innerHTML = tmp;
      clocktime = setTimeout("time()", "1000", "Javascript");

      function checkTime(i) {
        if (i < 10) {
          i = "0" + i;
        }
        return i;
      }
    }
      </script>
</body>
</html>