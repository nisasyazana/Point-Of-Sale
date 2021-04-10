<!--Nisa Syazana (1914200)-->

<html>
    <head>
        <meta charset="utf-8">
        <title>YOUR RECEIPT</title>
        <link rel="stylesheet" href="style.css">
    </head>

<body>
<div class = receipt>
    <div>
        <h2 class= name>YOUR BILL</h2>
    </div>

    <?php
    echo "Date : ".date("d-m-y"); 
    echo "<br>";
    echo "Time : ".date("h:i:s"); 
    ?>

    <hr>
    <h3 class=Total> Your Balance </h3>
    <?php
      $a=$_GET["Total"];
      $b=$_GET["money2"];
     echo "RM".$b-$a;
    ?>

    <br><br>

    <hr>
    <h4 class=Thanks> Thank you and Come again :)</h3>
    

    </div>
</div>
</body>
</html>
