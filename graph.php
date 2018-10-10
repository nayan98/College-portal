
<html>
<head>
<?php
include 'establish_connection.php';
$conn=connect();
$sno1='161112028';
    $s=1;
   

$sql = "select * from pastresult where sno=$sno1";
$qresult= mysqli_query($conn, $sql);
    $result=mysqli_fetch_assoc($qresult);


 

$column_chart_data = array();
    
    $column_chart_data[0]=array("Past Sem Result",(float)$result["sem1"],(float)$result["sem2"],(float)$result["sem3"]);

$column_chart_data = json_encode($column_chart_data);
    
mysqli_free_result($qresult);





?>          
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
   <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
     
     
     
        google.load('visualization', '1.0',{'packages':['corechart'] } );
       
       
       
       
        google.setOnLoadCallback(pastresult);
        
       


        function pastresult(){

            var data = new google.visualization.DataTable();
            data.addColumn('string', 'past result');
            data.addColumn('number', '1st sem');
data.addColumn('number', '2nd sem');
data.addColumn('number', '3rd sem');

            
    data.addRows(<?php echo $column_chart_data?>);
            

            var options = {
  'legend':'left',
  'title':'Past Result',
  'is3D':true,
  'width':1100,
  'height':900,
                vAxis: { ticks: [0,1,2,3,4,5,6,7,8,9,10]}
};
            var chart = new google.visualization.ColumnChart(document.getElementById('pastresult'));
            chart.draw(data, options);
        }
        
        
        </script>
</head>
  



<body>
    
      <div id="pastresult" style="border: 1px solid #ccc"></div>
        
          
          
  
  </body>
</html>
 