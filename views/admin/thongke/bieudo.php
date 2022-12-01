
<?php require_once "./views/admin/layout/header_admin.php" ?>
<div class="main-contents">
    <div id="piechart">
    </div>  
    <a href="index.php?ctr=thongke" class="btn btn-primary">Thống kê</a>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <script type="text/javascript">
    // Load google charts
    google.charts.load('current', {'packages':['corechart']});
    google.charts.setOnLoadCallback(drawChart);

    // Draw the chart and set the chart values
    function drawChart() {
    var data = google.visualization.arrayToDataTable([
    ['Danh Mục', 'Số lượng sản phẩm'],
    <?php
        $tongdm = count($tk_sp);
        $i = 1;
        foreach($tk_sp as $tk){
            if ($i == $tongdm)
                $dauphay = "";
            else
                $dauphay = ",";
                echo "['".$tk['cate_name']."',".$tk['countsp']."]".$dauphay;
                $i += 1;
        }
    ?>
    
    ]);

    // Optional; add a title and set the width and height of the chart
    var options = {'title':'Thống kê sản phẩm theo danh mục', 'width':1450, 'height':600};

    // Display the chart inside the <div> element with id="piechart"
    var chart = new google.visualization.PieChart(document.getElementById('piechart'));
    chart.draw(data, options);
    }
    </script>
</div>
<?php require_once "./views/admin/layout/footer_admin.php" ?>