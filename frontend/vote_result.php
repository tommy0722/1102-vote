<html>
<?php

$sql = "select * 
    from `topics`,
        `options` 
    where `topics`.`id`=`options`.`topic_id` AND 
            `topics`.`id`='{$_GET['id']}'";

$rows = q($sql);
?>

<head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {

            var data = google.visualization.arrayToDataTable([
                ['Task', 'Hours per Day'],
                <?php
                foreach ($rows as $row) {
                    echo "['" . $row['opt'] . "'," . $row['count'] . "],";
                }
                ?>
            ]);

            var options = {
                title: '<?= $rows[0]['topic']; ?>'
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart'));

            chart.draw(data, options);
        }
    </script>
</head>



<h1><?= $rows[0]['topic']; ?></h1>

<ol class="list-group col-md-4" style="font-size:1.2rem">
    <?php
    foreach ($rows as $row) {
        echo "<li class='list-group-item'>";
        echo "<span>{$row['opt']}</span>";
        echo "<span class='badge badge-info float-right'>{$row['count']}</span>";
        echo "</li>";
    }
    ?>
</ol>

<body>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
</body>

</html>