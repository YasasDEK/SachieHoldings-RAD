<!DOCTYPE html>
<html>
<head>
	<title>REPORTS</title>
	<script type="text/javascript" src="<?php echo base_url();?>js/fusioncharts.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/themes/fusioncharts.theme.fusion.js"></script>
</head>
<body>

<?php
       /* Include the `fusioncharts.php` file that contains functions to embed the charts. */
      include("js/fusioncharts.php");
    // chart object
   // $Chart = new FusionCharts("column2d", "MyFirstChart" , "700", "400", "chart-container", "json", $jsonEncodedData);

$arrChartConfig = array(
        "chart" => array(
            "caption" => "Monthly Reservations",
            "subCaption" => "",
            "xAxisName" => "Month",
            "yAxisName" => "Reservations",
            "numberSuffix" => "",
            "theme" => "fusion"
        )
    );
    // An array of hash objects which stores data
    $arrChartData = array(
        ["January", "20"],
        ["February", "26"],
        ["March", "18"],
        ["April", "14"],
        ["May", "11"],
        ["June", "10"],
        ["July", "3"],
        ["August", "3"],
		["September", "11"],
        ["October", "10"],
        ["November", "30"],
        ["December", "30"]
    );

    $arrLabelValueData = array();

    // Pushing labels and values
    for($i = 0; $i < count($arrChartData); $i++) {
        array_push($arrLabelValueData, array(
            "label" => $arrChartData[$i][0], "value" => $arrChartData[$i][1]
        ));
    }

    $arrChartConfig["data"] = $arrLabelValueData;

    // JSON Encode the data to retrieve the string containing the JSON representation of the data in the array.
    $jsonEncodedData = json_encode($arrChartConfig);

    // chart object
    $Chart = new FusionCharts("column2d", "MyFirstChart" , "700", "400", "chart-container", "json", $jsonEncodedData);

    // Render the chart
    $Chart->render();
    ?>

    <center>
        <div id="chart-container">Chart will render here!</div>
    </center>

</body>
</html>

