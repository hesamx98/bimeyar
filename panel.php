<!doctype html>
<html lang="fa">

<head>
  <meta charset="utf-8">
  <title>پنل مدیریت</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="manifest" href="site.webmanifest">
  <meta name="theme-color" content="#fafafa">
  <script type="text/javascript" src="js/loader.js"></script>
  <script src="js/main.js"></script>
  <link rel="stylesheet" href="css/main.css">
</head>

<body class="body_panel">

<div class="menu">
  <ul class="ul">
    <li class="li"><h2>بیمه یار</h2></li>
    <li class="li"><a href="panel.php" class="active">خانه</a></li>
    <li class="li"><a href="bimeـname.php">بیمه نامه</a></li>
    <li class="li"><a href="aghsat.php">اقساط</a></li>
  </ul>
</div>

<div class="right_part">

  <div class="sub_menu">
    <div id="navbar">
      <a href="php/exit.php"  style="float:right">خروج</a>
    </div>
  </div>

  <div class="content">
    <main>
      <div class="row">
        <div class="column" style="background-color:blue;">
          <h2> بیمه نامه ها</h2>
          <h2 class="panel_text">134</h2>
        </div>
        <div class="column" style="background-color:red;">
          <h2>اقساط</h2>
          <h2 class="panel_text">1234</h2>
        </div>
        <div class="column" style="background-color:green;">
          <h2>اقساط نزدیک سر رسید</h2>
          <h2 class="panel_text">123</h2>
        </div>
        <div class="column" style="background-color:orange;">
          <h2>مبلغ قابل دریافت</h2>
          <h2 class="panel_text">123 تومان</h2>
        </div>
      </div>

      <div class="row chart">
        <div id="piechart"></div>
      </div>
    </main>
  </div>

</div>
<script type="text/javascript">
  // Load google charts
  google.charts.load('current', {'packages':['corechart']});
  google.charts.setOnLoadCallback(drawChart);

  // Draw the chart and set the chart values
  function drawChart() {
    var data = google.visualization.arrayToDataTable([
      ['Task', 'Hours per Day'],
      ['Work', 8],
      ['Eat', 2],
      ['TV', 4],
      ['Gym', 2],
      ['Sleep', 8]
    ]);

    // Optional; add a title and set the width and height of the chart
    var options = {'title':'My Average Day', 'width':550, 'height':400};

    // Display the chart inside the <div> element with id="piechart"
    var chart = new google.visualization.PieChart(document.getElementById('piechart'));
    chart.draw(data, options);
  }
</script>
</body>

</html>
