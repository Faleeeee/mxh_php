<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/like.css">
  <link rel="stylesheet" href="css/main.min.css">
  <link rel="stylesheet" href="css/cmt.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <link rel="stylesheet" href="css/luot_anh.css">
  <meta name="viewport" content="width=device-width" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
</head>
<style>
  .hidden {
    display: none;
  }

  .bia {
    margin: 11vh 5% 0 5%;
    height: 34vw;
    width: 90%;
    border-radius: 5px;
  }

  .bia>.bia1 {
    float: right;
    width: 78%;
    background-size: cover;
    background-position: center;
    border-radius: 0 5px 5px 0;
    height: 34vw;
    position: relative;
  }

  .bia>.khungcanhan {
    background: linear-gradient(to bottom, gray, white);
    float: left;
    height: 34vw;
    width: 22%;
    border-radius: 5px 0 0 5px;
    position: relative;
  }

  .bia>.khungcanhan>.canhan1 {
    height: 15vh;
    position: relative;
    padding: 9vh 0 2vh 0
  }

  .bia>.khungcanhan>.canhan1>.anhdaidien {
    background-size: cover;
    background-position: center;
    width: 15vh;
    height: 15vh;
    border-radius: 50%;
    margin: auto;
    border: 3px solid white;
    position: relative;
  }

  .bia>.khungcanhan>.name {
    font-family: Helvetica, Arial, sans-serif;
    font-size: 1.8vw;
    text-align: center;
    margin-top: 10vh;
  }

  .bia>.khungcanhan>.name>.banbe {
    font-size: 1vw;
    color: dimgray;
  }

  .bia>.khungcanhan>.name>.tieusu {
    font-size: 1.2vw
  }

  .bia>.khungcanhan>.congcu {
    right: 0;
    left: 0;
    padding: 2vw 0.9vw 0 0.9vw;
    position: absolute;
    white-space: nowrap;
    display: flex
  }

  .congcu1 {
    margin: 1vw;
    font-size: 1.1vw;
    padding: 1vw 1.5vw;
    border: none;
    border-radius: 5px;
    background-color: #cecdca;
  }

  .congcu1:hover {
    background-color: #343a40;
    color: #f8f9fa;
  }

  .story_banbe {
    width: 100%;
    height: 15vh;
    margin-top: 1%;
    background-color: #cecdca;
    float: left;
  }

  .story_banbe>.circle {
    height: 12vh;
    width: 12vh;
    background-color: none;
    border-radius: 50%;
    float: left;
    margin-top: 0.8%;
    margin-left: 6%;
    border: 2px solid white;
    box-shadow: 0 0 0 0.7px dimgray;
  }

  .ccbia,
  .ccbia1 {
    position: absolute;
    bottom: 0;
    right: 0;
    background-color: #EEE;
  }

  .ccbia1 {
    right: 10%
  }

  .anhdaidien>img {
    position: absolute;
    right: 5px;
    bottom: 0;
    width: 3.5vh;
    cursor: pointer;
  }

  .bia>.khungcanhan>.congcu>div>form>input[type=text] {
    width: 12vw;
    height: 2vw;
    padding: 12px 20px;
    margin: 0 0 1vw 0;
    border: 1px solid #ccc;
    outline: none
  }

  @media(max-width:980px) {
    .bia>.khungcanhan {
      width: 40%;
      left: 28vw;
      height: 40vh;
      background: transparent;
      float: left;
    }

    .bia>.khungcanhan>.canhan1 {
      padding: 2vw;
      height: 5vw;
    }

    .bia>.khungcanhan>.canhan1>.anhdaidien {
      width: 15vh;
      height: 15vh;
      top: -10vh
    }

    .bia>.khungcanhan>.name {
      font-size: 3.5vh;
      margin-top: 3vh
    }

    .bia>.khungcanhan>.name>.banbe {
      font-size: 2vh;
    }

    .bia>.khungcanhan>.name>.tieusu {
      font-size: 2vh
    }

    .bia {
      width: 100%;
      margin: 9vh 0 0 0;
    }

    .bia>.bia1 {
      width: 100%;
      height: 40vh;
    }

    .bia>.khungcanhan>.congcu {
      padding: 2vw;
      white-space: nowrap;
    }

    .congcu1 {
      margin-left: 1.4vw;
      font-size: 2.5vh;
      padding: 1.8vw 4vw;
    }

    .ccbia1,
    .ccbia {
      right: 13.5vh;
      font-size: 2vh;
      padding: 2vh 3vh
    }

    .ccbia {
      right: 0
    }

  }

  @media(max-width:630px) {
    .bia>.khungcanhan {
      width: 70%;
      left: 15vw
    }

    .bia>.khungcanhan>.congcu {
      padding: 2vw;
      white-space: nowrap;
    }

    .congcu1 {
      margin-left: 6vw;
      font-size: 2.5vh;
      padding: 2vw 5vw;
    }

    .ccbia1,
    .ccbia {
      right: 13.5vh;
      font-size: 2vh;
      padding: 2vh 3vh
    }

    .ccbia {
      right: 0
    }
  }
</style>

<div class="bia">
  <div class="bia1" style="background-image: url('img/<?php echo $row_id["cover_picture"] ?>')">
    <button class="ccbia congcu1" onclick="showFilePicker()">Chỉnh sửa</button>
    <form action="trangcanhan/suabia.php" method="post" enctype="multipart/form-data">
      <input type="file" id="filePicker" name="anhbia" style="display:none;" onchange="filePicked()" />
      <input type="submit" style="display:none" id="saveButton">
    </form>
    <script>
      function showFilePicker() {
        document.getElementById('filePicker').click();
      }
      function filePicked() {
        var input = document.getElementById('filePicker');
        if (input.files && input.files[0]) {
          console.log('Tệp đã chọn:', input.files[0].name);
        }
        document.getElementById('saveButton').click();
      }
    </script>
    <a onclick="return confirm('Bạn có chắc chắn muốn xóa ảnh bìa?')" href="xoabia.php">
      <button class="ccbia1 congcu1">Xóa</button>
    </a>
  </div>
  <div class="khungcanhan">
    <div class="canhan1">
      <div class="anhdaidien" style="background-image: url('img/<?php echo $row_id["avartar"] ?>')">
        <img src="https://cdn-icons-png.flaticon.com/512/3624/3624186.png" onclick="avartar()"></i>
      </div>
      <form action="trangcanhan/avartar.php" method="post" enctype="multipart/form-data" id="uploadForm">
        <input type="file" id="avatarPicker" name="anhdaidien" style="display:none;" onchange="avatarPicked()" />
        <input type="submit" style="display:none;" id="avatarSaveButton">
      </form>
      <script>
        function avartar() {
          document.getElementById('avatarPicker').click();
        }
        function avatarPicked() {
          var input = document.getElementById('avatarPicker');
          if (input.files && input.files[0]) {
            console.log('Tệp đã chọn:', input.files[0].name);
            document.getElementById('avatarSaveButton').click();
          }
        }
      </script>
    </div>
    <div class="name">
      <div><strong>
          <?php echo $row_id["username"] ?>
        </strong></div>
      <div class="banbe"><br>2939 bạn bè </div>
      <div class="tieusu"><br>
        <?php echo $row_id["bio"] ?>
      </div>
    </div>
    <div class="congcu">
      <button class="congcu1" id="editButton" onclick="FormTIEUSU()">Chỉnh sửa</button>
      <div id="inputForm" class="hidden">
        <form action="trangcanhan/suatieusu.php" method="post">
          <input type="text" value="<?php echo $row_id['bio'] ?>" name="tieusu" placeholder="Nhập tiểu sử của bạn"><br>
          <input type="submit" value="Lưu" style="border:none;padding:2px 10px">
          <button style="border:none;padding:2px 10px" type="button" onclick="cancelEdit()">Hủy</button>
        </form>
      </div>

      <script>
        function FormTIEUSU() {
          var form = document.getElementById("inputForm");
          var button = document.getElementById("editButton");
          form.style.display = "block";
          button.style.display = "none";
        }
        function cancelEdit() {
          var form = document.getElementById("inputForm");
          var button = document.getElementById("editButton");
          form.style.display = "none";
          button.style.display = "block";
        }
      </script>

      <a onclick="return confirm('Bạn có chắc chắn muốn xóa tiểu sử?')" href="trangcanhan/xoatieusu.php">
        <button class="congcu1">Xóa</button>
      </a>
    </div>
  </div>
</div>

<div class="story_banbe">
  <div class="circle"></div>
  <div class="circle"></div>
  <div class="circle"></div>
  <div class="circle"></div>
  <div class="circle"></div>
  <div class="circle"></div>
</div>

<div class="post_TCN" style="margin:0 13%">
  <div class="central-meta" style="padding:25px">
    <ul class="photos">
      <?php
      $sql = "SELECT * FROM posts inner join user on posts.post_by=user.user_id where user_id=$user_id ORDER BY post_id DESC";
      $result = $ketnoi->query($sql);

      while ($row = mysqli_fetch_assoc($result)) {
        // Kiểm tra xem người dùng đã thích bài viết hay chưa
        $sql_check = "SELECT * FROM likes WHERE post_id = " . $row["post_id"] . " AND like_by = $user_id";
        $result_post = mysqli_query($ketnoi, $sql_check);
        $liked_class = "";
        if (mysqli_num_rows($result_post) > 0) {
          // Người dùng đã thích bài viết => thêm class 'liked' vào nút like
          $liked_class = " liked";
        }
        ?>
        <!-- P1 -->
        <li>
          <div class="container" style="padding: 3px;">
            <!-- Button to Open the Modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal"
              data-target="#myModal_<?php echo $row['post_id']; ?>"
              style="padding: 0px; border: 0px; width: 45vh;height: 45vh;">

              <?php
              // Tách thành một mảng
              $images = explode(",", $row['image']);
              $num_images = count($images);
              // Lấy giá trị đầu tiên trong mảng
              $first_image = reset($images);
              ?>
              <div class="gallery-item">
                <div
                  style="background-image:url('img/<?php echo $first_image; ?>');background-size:cover; background-position:center;width: 45vh;height: 45vh;">
                </div>
                <?php if ($num_images > 1) { ?>
                  <div class="gallery-item-type">
                    <span class="visually-hidden">Gallery</span><i class="fas fa-clone" aria-hidden="true"></i>
                  </div>
                <?php } ?>

                <div class="gallery-item-info">
                  <ul>
                    <li class="gallery-item-likes"><span class="visually-hidden">Likes:</span><i class="fas fa-heart"
                        aria-hidden="true"></i>
                      <?php echo $row['like_count'] ?>
                    </li>
                    <li class="gallery-item-comments"><span class="visually-hidden">Comments:</span><i
                        class="fas fa-comment" aria-hidden="true"></i>
                      <?php echo $row['comment_count'] ?>
                    </li>
                  </ul>
                </div>
              </div>
            </button>
            <!-- The Modal -->
            <div class="modal fade" id="myModal_<?php echo $row['post_id'] ?>">
              <div class="modal-dialog modal-xl">
                <div class="modal-content" style="width: 145vh;margin:-1vh auto;height: 94vh">
                  <div class="modal-body" style="padding:0">
                    <?php
                    include 'trangcanhan/picture.php'; ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </li>
      <?php } ?>
    </ul>
  </div><!-- photos -->
</div><!-- centerl meta -->