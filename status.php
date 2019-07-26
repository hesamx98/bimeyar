<!doctype html>
<html lang="fa">

<head>
  <meta charset="utf-8">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="manifest" href="site.webmanifest">
  <meta name="theme-color" content="#fafafa">
  <script src="js/main.js"></script>
  <link rel="stylesheet" href="css/main.css">
</head>

<body class="body_panel" onload="close_part()">

<div class="menu">
  <ul class="ul">
    <li class="li"><h2>بیمه یار</h2></li>
    <li class="li"><a href="panel.php">خانه</a></li>
    <li class="li"><a href="bimeـname.php">بیمه نامه</a></li>
    <li class="li"><a href="aghsat.php">اقساط</a></li>
  </ul>
</div>

<div class="right_part">

  <div class="sub_menu" onload="close_part()">
    <div id="navbar">
      <a href="php/exit.php" target="_self" style="float:right">خروج</a>
    </div>
  </div>

  <div class="content">
    <main>
      <?php
      $status = $_GET['status'];

      if ($status == true)
        echo "انجام شد";

      if ($status == false)
        echo "انجام نشد";

      else
        echo "ورودی نامعبر است اطلاعات شما جهت بررسی مشکل ذخیره شد";
      ?>
    </main>
  </div>

</div>

</body>

</html>
