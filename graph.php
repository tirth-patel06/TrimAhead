<?php
// Database Connection
$link = mysqli_connect("localhost", "root", "", "cc_project");
mysqli_select_db($link,"cc_project");

// Check connection
if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
}

$test =  array();
$count = 0;

// Fetch data from database
$res = mysqli_query($link, "select * from analytics2 ");

while ($row = mysqli_fetch_array($res)) {


        $test[$count]["label"] = $row["Time"]; // Time label
        $test[$count]["y"] = (int)$row["Number_of_Bookings"]; // Corrected to "y"
        $count++;


}

// Convert PHP array to JSON
$jsonData = json_encode($test, JSON_NUMERIC_CHECK);


?>

<!DOCTYPE HTML>
<html>
<head>
    <script>
        window.onload = function () {
            var dataPoints = <?php echo $jsonData; ?>;

            console.log("Data Points:", dataPoints); // Crucial for debugging

            if (!Array.isArray(dataPoints) || dataPoints.length === 0) {
                alert("No data available! Check database.");
                dataPoints = [{ y: 0, label: "No Data", indexLabel: "0" }];
            }

            var chart = new CanvasJS.Chart("chartContainer", {
                animationEnabled: true,
                exportEnabled: true,
                theme: "light1", // Or any theme you prefer
                title: {
                    text: "Bookings Over Time"
                },
                axisX: {
                    title: "Time",
                    labelAngle: -45, // Rotate labels if needed
                    interval: 1 // Important: Keep this for proper spacing since x is auto-generated
                },
                axisY: {
                    title: "Number of Bookings",
                    includeZero: true
                },
                data: [{
                    type: "column",
                    indexLabelFontColor: "#5A5757", // Customize as needed
                    indexLabelPlacement: "outside",
                    dataPoints: dataPoints
                }]
            });

            chart.render();
        };
    </script>
</head>
<body>
    <div id="chartContainer" style="height: 370px; width: 100%;"></div>
    <script src="https://cdn.canvasjs.com/canvasjs.min.js"></script>
</body>
</html>
