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
    <li class="li"><a href="aghsat.php" class="active">اقساط</a></li>
  </ul>
</div>

<div class="right_part">

  <div class="sub_menu" onload="close_part()">
    <div id="navbar">
      <a onclick="open_part('add')">افزودن</a>
      <a onclick="open_part('show')">مشاهده</a>
      <a href="php/exit.php" target="_blank" style="float:right">خروج</a>
    </div>
  </div>

  <div class="content">
    <main>
      <main>
        <div id="add">
          <div class="form">
            <form action="php/add_aghsat.php">

              <label for="price">مبلغ کل :</label>
              <input type="text" class="input" id="price" name="price">

              <label for="issue_date">تاریخ صدور :</label>
              <input type="text" class="input" id="issue_date" name="issue_date">

              <label for="percent">میزان سود به درصد :</label>
              <input type="text" class="input" id="percent" name="percent">

              <label for="telephone">تلفن :</label>
              <input type="text" class="input" id="telephone" name="telephone">

              <label for="time">مدت بیمه نامه به روز  :</label>
              <input type="text" class="input" id="time" name="time">

              <label for="name">نام :</label>
              <input type="text" class="input" id="name" name="name">

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

              <th>وضعیت 0</th>
              <th>مبلغ کل 1</th>
              <th>تاریخ صدور 2</th>
              <th>میزان سود به درصد 3</th>
              <th>تلفن 4</th>
              <th>مدت بیمه نامه 5</th>
              <th>نام 6</th>
              <th>شماره 7</th>
            </tr>
            <?php
            include "php/lib/database.php";
            try {

              $obj = new database();
              $conn = $obj->connect();

              $sql = 'SELECT * FROM aghsat';

              $q = $conn->query($sql);
              $q->setFetchMode(PDO::FETCH_ASSOC);

              while ($r = $q->fetch()):

                echo "<tr>";
                echo "<td>" . $r['status'] . "</td>";
                echo "<td>" . $r['price'] . "</td>";
                echo "<td>" . $r['date'] . "</td>";
                echo "<td>" . $r['percent'] . "</td>";
                echo "<td>" . $r['telephone'] . "</td>";
                echo "<td>" . $r['time'] . "</td>";
                echo "<td>"  . $r['name'] . "</td>";
                echo "<td>" . $r['ghest_id'] . "</td>";
                echo "</tr>";

              endwhile;

            } catch (PDOException $pe) {
              die("Could not connect to the database :" . $pe->getMessage());
            }

            ?>
          </table>

        </div>
      </main>
    </main>
  </div>

</div>

</body>

</html>
