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
    <li class="li"><a href="bimeـname.php" class="active">بیمه نامه</a></li>
    <li class="li"><a href="aghsat.php">اقساط</a></li>
  </ul>
</div>

<div class="right_part">

  <div class="sub_menu" onload="close_part()">
    <div id="navbar">
      <a onclick="open_part('add')">افزودن</a>
      <a onclick="open_part('show')">مشاهده</a>
      <a href="php/exit.php" target="_self" style="float:right">خروج</a>
    </div>
  </div>

  <div class="content">
    <main>
      <div id="add">
        <div class="form">
          <form action="php/add_bime_name.php">
            <label  for="ins_type">نوع بیمه :</label>
            <select id="ins_type" name="bime_type" class="input">
              <option value="">ثالث اتومبیل</option>
              <option value="">بدنه ی اتومبیل</option>
              <option value="">آتش سوزی</option>
              <option value="">مسئولیت</option>
              <option value="">مهندسی</option>
              <option value="">باربری</option>
              <option value="">عمر و سرمایه گذاری</option>
              <option value="">حوادث انفرادی</option>
            </select>

            <label for="ins_nmber">شماره ی بیمه نامه :</label>
            <input type="text" class="input" id="ins_nmber" name="ins_nmber">

            <label for="issue_date">تاریخ صدور :</label>
            <input type="text" class="input" id="issue_date" name="issue_date">

            <label for="name">نام بیمه گذار :</label>
            <input type="text" class="input" id="name" name="name">

            <label for="national_code">کد ملی :</label>
            <input type="text" class="input" id="national_code" name="national_code">

            <label for="telephone">تلفن :</label>
            <input type="text" class="input" id="telephone" name="telephone">

            <label for="time">مدت بیمه نامه ( به روز ) :</label>
            <input type="text" class="input" id="time" name="time">

            <label for="adviser_name">نام مشاور :</label>
            <input type="text" class="input" id="adviser_name" name="adviser_name">

            <input class="input_button" type="submit" value="ثبت">
          </form>
        </div>
      </div>

      <div id="show" class="show_div">
        <label for="filter_input">متن مورد نظر را جست و جو کنید</label>
        <input type="text" class="input" id="filter_input" onkeyup="filter_table()">

        <label for="td_num">شماره ستون</label>
        <input type="text" class="input" id="td_num">

        <table class="panel_table" id="panel_table">
          <tr class="header">
            <th>تلفن 0</th>
            <th>مدت بیمه نامه 1</th>
            <th>نام مشاور 3</th>
            <th>کد ملی 3</th>
            <th>نام بیمه گذار 4</th>
            <th>تاریخ صدور 5</th>
            <th>شماره ی بیمه نامه 6</th>
            <th>نوع بیمه 7</th>
            <th>شماره 8</th>
          </tr>
          <?php
          include "php/lib/database.php";
          try {

            $obj = new database();
            $conn = $obj->connect();

            $sql = 'SELECT * FROM bime_name';

            $q = $conn->query($sql);
            $q->setFetchMode(PDO::FETCH_ASSOC);

            while ($r = $q->fetch()):

              echo "<tr>";
              echo "<td>" . $r['telephone'] . "</td>";
              echo "<td>" . $r['time'] . "</td>";
              echo "<td>" . $r['adviser_name'] . "</td>";
              echo "<td>" . $r['national_code'] . "</td>";
              echo "<td>" . $r['name'] . "</td>";
              echo "<td>" . $r['date'] . "</td>";
              echo "<td>" . $r['ins_nmber'] . "</td>";
              echo "<td>" . $r['ins_type'] . "</td>";
              echo "<td>" . $r['ins_id'] . "</td>";
              echo "</tr>";

            endwhile;

          } catch (PDOException $pe) {
            die("Could not connect to the database :" . $pe->getMessage());
          }

          ?>

        </table>

      </div>
    </main>
  </div>

</div>

</body>

</html>
