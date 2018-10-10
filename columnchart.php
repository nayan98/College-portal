
<html>
<head>



<?php

$servername = 'localhost';

$username = 'root';

$password = '';

$dbname = 'student';



$mysql = new mysqli($servername, $username, $password, $dbname);
if($mysql->connect_error){
    die("Connection failed: ". $mysql->connect_error);
}

$sno1='161112028';
    $sno2='161112047';

$query = "select * from Sheet1 where sno=$sno1 or sno=$sno2";
$qresult= $mysql->query($query);
$results = array();

while ($res = $qresult->fetch_assoc()) {
    $results[] = $res;
    
}

 

$column_chart_data_attend = array();
$column_chart_data_mini = array();
$column_chart_data_mid = array();
$column_chart_data_end = array();    
    $column_chart_data_attend[0]=array("attend",(int)$results[1]["attend"],(int)$results[0]["attend"]);
$column_chart_data_mini[0]=array("mini",(int)$results[1]["mini"],(int)$results[0]["mini"]);
    $column_chart_data_mid[0]=array("mid",(int)$results[1]["mid"],(int)$results[0]["mid"]);
    $column_chart_data_end[0]=array("end",(int)$results[1]["end"],(int)$results[0]["end"]);


$column_chart_data_attend = json_encode($column_chart_data_attend);
    $column_chart_data_mini = json_encode($column_chart_data_mini);
    $column_chart_data_mid = json_encode($column_chart_data_mid);
    $column_chart_data_end = json_encode($column_chart_data_end);

mysqli_free_result($qresult);



$mysql->close();

?>          
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
   <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
     
     
     
        google.load('visualization', '1.0',{'packages':['corechart'] } );
       
       
       
       
        google.setOnLoadCallback(attendance);
        google.setOnLoadCallback(mini);
        google.setOnLoadCallback(mid);
        google.setOnLoadCallback(end);
       


        function attendance(){

            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Attendance');
            data.addColumn('number', <?php echo $sno1?>);
             data.addColumn('number', <?php echo $sno2?>);
            data.addRows(<?php echo $column_chart_data_attend?>);
            

            var options = {
  'legend':'left',
  'title':'My Big Pie Chart',
  'is3D':true,
  'width':400,
  'height':300
};
            var chart = new google.visualization.ColumnChart(document.getElementById('attendance'));
            chart.draw(data, options);
        }
        
        function mini(){

            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Mini marks');
            data.addColumn('number', <?php echo $sno1?>);
             data.addColumn('number', <?php echo $sno2?>);
            data.addRows(<?php echo $column_chart_data_mini?>);
            

            var options = {
                'title':'comparison',
                'width':400,
                       'height':300

            };

            var chart = new google.visualization.ColumnChart(document.getElementById('mini'));
            chart.draw(data, options);
        }
        
        function mid(){

            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Mid marks');
            data.addColumn('number', <?php echo $sno1?>);
             data.addColumn('number', <?php echo $sno2?>);
            data.addRows(<?php echo $column_chart_data_mid?>);
            

            var options = {
                'title':'comparison',
                'width':400,
                       'height':300

            };

            var chart = new google.visualization.ColumnChart(document.getElementById('mid'));
            chart.draw(data, options);
        }
        
        function end(){

            var data = new google.visualization.DataTable();
            data.addColumn('string', 'End marks');
            data.addColumn('number', <?php echo $sno1?>);
             data.addColumn('number', <?php echo $sno2?>);
            data.addRows(<?php echo $column_chart_data_end?>);
            

            var options = {
                'title':'comparison',
                'width':400,
                       'height':300

            };

            var chart = new google.visualization.ColumnChart(document.getElementById('end'));
            chart.draw(data, options);
        }


        
        </script>
</head>
  



<body>
    <!--Table and divs that hold the pie charts-->
    <table class="columns">
      <tr>
        <td><div id="attendance" style="border: 1px solid #ccc"></div></td>
        <td><div id="mini" style="border: 1px solid #ccc"></div></td>
          <td><div id="mid" style="border: 1px solid #ccc"></div></td>
          <td><div id="end" style="border: 1px solid #ccc"></div></td>
          
          
      </tr>
    </table>
  </body>
</html>
 