<!--Nurul Najihah (1915634)-->

<?php
session_start();
 ?>

 <!DOCTYPE html>
<html>
<head>
   <link rel="stylesheet" href="main.css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<style media="screen">
#green {
    width: 860px;
    border: 1px solid black;
    float: left;
    height: auto;
    margin: 20px;
}
#red {
    width: 400px;
    border: 1px solid black;
    margin: 20px;
    float: left;
}

#blue {
  position: absolute;
  bottom: 30px;
  border: 1px solid black;
  left: 920px;
  width: 25%;
  margin: 20px;
}


</style>

</head>
<body>
  <h1>POS Kedai Makan Kita</h1>


<div id="green"><form action="" method="post">
  <table class="table table-bordered">
    <thead>
      <tr>
        <th colspan="4" style="text-align: center;
  font-weight: 900;">MENUS</th>
      </tr>
    </thead>

    <!-- Siti Nor Farihan (1911992)-->
    <tbody>
      <tr>
        <th colspan="4">Please choose the item(s) and fill in the quantity.<br><br></th>
      </tr>
      <tr>
        <td><img src="images/MEE.jpg" alt="mee goreng"><p>RM2.50</p></td>
        <td><img src="images/nasigoreng.jpg" alt="nasi goreng"><p>RM3.50</p></td>
        <td><img src="images/Nasi_Lemak.jpg" alt="nasi lemak"><p>RM1.50</p></td>
        <td><img src="images/rotibakar.jpg" alt="roti bakar"><p>RM2.50</p></td>
      </tr>

      <!--Nurul Najihah (1915634)-->
      <tr>
         <td><input  id="meeGorengCheck" onclick="disableMeeGoreng()" type="checkbox" name="foods[]" value="meeGoreng" /><strong>Mee Goreng</strong>
          <br>Quantity:<input type="text" id="inputMeeGoreng" name="quantity[]"  min="1" disabled="true">
        </td>
        <td><input id="nasiGorengCheck" onclick="disableNasiGoreng()" type="checkbox" name="foods[]" value="nasiGoreng" /><strong>Nasi Goreng</strong>
          <br>Quantity:<input id="inputNasiGoreng" type="text" name="quantity[]" value="" min="1" disabled="true">
        </td>
        <td><input id="nasiLemakCheck" onclick="disableNasiLemak()" type="checkbox" name="foods[]" value="nasiLemak" /><strong>Nasi Lemak</strong>
          <br>Quantity:<input id="inputNasiLemak" type="text" name="quantity[]" value="" min="1" disabled="true">
        </td>
        <td><input id="rotiBakarCheck" onclick="disableRotiBakar()" type="checkbox" name="foods[]" value="rotiBakar" /><strong>Roti Bakar</strong>
          <br>Quantity:<input type="text" id="inputRotiBakar" name="quantity[]" value="" min="1" disabled="true">
        </td>
      </tr>

      <!--Siti Nor Farihan (1911992)-->
      <tr>
        <td><img src="images/Roti-canai.jpg" alt="roti canai"><p>RM1.00</p></td>
        <td><img src="images/capati.jpg" alt="capati"><p>RM1.50</p></td>
        <td><img src="images/lontong.jpg" alt="lontong"><p>RM4.00</p></td>
        <td><img src="images/bubur.png" alt="bubur"><p>RM2.50</p></td>

      </tr>

      <!--Nurul Najihah (1915634)-->
      <tr>
        <td><input id="rotiCanaiCheck" onclick="disableRotiCanai()" type="checkbox" name="foods[]" value="rotiCanai" /><strong>Roti Canai</strong>
          <br>Quantity:<input type="text" id="inputRotiCanai" name="quantity[]" value="" min="1" disabled="true">
        </td>
        <td><input id="capatiCheck" onclick="disableCapati()" type="checkbox" name="foods[]" value="capati" /><strong>Capati</strong>
          <br>Quantity:<input type="text" id="inputCapati" name="quantity[]" value="" min="1" disabled="true">
        </td>
        <td><input id="longtongCheck" onclick="disableLongtong()" type="checkbox" name="foods[]" value="lontong" /><strong>Lontong</strong>
          <br>Quantity:<input type="text" id="inputLongtong" name="quantity[]" value="" min="1" disabled="true">
        </td>
        <td><input id="buburCheck" onclick="disableBubur()" type="checkbox" name="foods[]" value="bubur" /><strong>Bubur</strong>
          <br>Quantity:<input type="text" id="inputBubur" name="quantity[]" value="" min="1" disabled="true">
        </td>
      </tr>
      
      <!--Siti Nor Farihan (1911992)-->
      <tr>
        <td><img src="images/rotidol.jpg" alt="roti dol"><p>RM3.50</p></td>
        <td><img src="images/rotinaan.jpg" alt="roti naan"><p>RM2.00</p></td>
        <td><img src="images/soto.jpg" alt="soto"><p>RM4.00</p></td>
        <td><img src="images/cucur.jpg" alt="cucur"><p>RM1.00</p></td>
      </tr>

      <!--Nurul Najihah (1915634)-->
      <tr>
        <td><input id="rotiDolCheck" onclick="disableRotiDol()" type="checkbox" name="foods[]" value="rotiDol" /><strong>Roti Dol</strong>
          <br>Quantity:<input type="text" id="inputRotiDol" name="quantity[]" value="" min="1" disabled="true">
        </td>
        <td><input id="rotiNaanCheck" onclick="disableRotiNaan()" type="checkbox" name="foods[]" value="rotiNaan" /><strong>Roti Naan</strong>
          <br>Quantity:<input type="text" id="inputRotiNaan" name="quantity[]" value="" min="1" disabled="true">
        </td>
        <td><input id="sotoCheck" onclick="disableSoto()" type="checkbox" name="foods[]" value="soto" /><strong>Soto</strong>
          <br>Quantity:<input id="inputSoto" type="text" inputmode="inputSoto" name="quantity[]" value="" min="1" disabled="true">
        </td>
        <td><input id="cucurCheck" onclick="disableCucur()" type="checkbox" name="foods[]" value="cucur" /><strong>Cucur</strong>
          <br>Quantity:<input id="inputCucur" type="text" name="quantity[]" value="" min="1" disabled="true">
        </td>
      </tr>
      <tr>
        <td><input type="submit" name="submit" value="Enter"><td><td><td></td></td></td></td>
      </tr>
    </tbody>
  </table>
</form>
</div>

<?php

if (isset($_POST['submit']))
{

  if (empty($_POST['foods']) && (empty($_POST['quantity']))) {
  $error = true;
  echo "ERROR: All fields are required. Please choose an item and fill in the quantity.";

} elseif (isset($_POST["quantity"])) {
    $quan = array();
    $quan = $_POST["quantity"];
    $arrLength = count($quan);

    for ($x=0; $x<$arrLength; $x++) {

      if (!is_numeric($quan[$x])) {
        $isNum = 1;
      } else {
          $isNum = 0;
      }
    } if ($isNum == 1) {
      echo 'ERROR: Please enter a number for the quantity.';
    } elseif ($isNum == 0) {
      ?>

      <div id="red">
        <table>
          <tr><th>Product</th>
              <th>Quantity</th>
              <th>Price</th>
          </tr>

      <?php
      echo '<tbody>';
      $foods = array();
      $foods = $_POST['foods'];
      $cost = array();
      for ($x=0;$x<$arrLength;$x++) {
        switch ($foods[$x]) {
          case 'meeGoreng':
            $cost[$x] = 2.50 * $quan[$x];
            break;
          case 'nasiGoreng':
            $cost[$x] = 3.50 * $quan[$x];
            break;
          case 'nasiLemak':
            $cost[$x] = 1.50 * $quan[$x];
            break;
          case 'rotiBakar':
            $cost[$x] = 2.50 * $quan[$x];
            break;
          case 'rotiCanai':
            $cost[$x] = 1.00 * $quan[$x];
            break;
          case 'capati':
            $cost[$x] = 1.50 * $quan[$x];
            break;
          case 'lontong':
            $cost[$x] = 4.00 * $quan[$x];
            break;
          case 'bubur':
            $cost[$x] = 2.50 * $quan[$x];
            break;
          case 'rotiDol':
            $cost[$x] = 3.50 * $quan[$x];
            break;
          case 'rotiNaan':
            $cost[$x] = 2.00 * $quan[$x];
            break;
          case 'soto':
            $cost[$x] = 4.00 * $quan[$x];
            break;
          case 'cucur':
            $cost[$x] = 1.00 * $quan[$x];
            break;
          default:
            echo "Please fill in the required details.";
            break;
        }
      }


      for ($x=0;$x<$arrLength;$x++) {
        echo '<tr><td>'.$foods[$x].'</td><td>'.$quan[$x].'</td><td>'.$cost[$x].'</td></tr>';
      }
        echo '</tbody>';
        $total = array_sum($cost);
        $total = number_format($total, 2);
        echo '<tr><td>'."".'</td><td>'."Total:".'</td><td>'.$total.'</td></tr>';
          echo '</tbody>';

        $tax = $total * 0.06;
        $total = $total + $tax;
        echo '<tr><td>'."".'</td><td>'."GST (6% tax):".'</td><td>'.$tax.'</td></tr>';
        echo '<tr><td>'."".'</td><td>'."Grand Total after GST:".'</td><td>'.$total.'</td></tr>';

          ?>



        </table>

<!--Nisa Syazana (1914200)-->
        <?php
          if(isset ($_GET['calculate'])) {
            $name =$_GET["Total"];
            $name =$_GET["money2"];
          }

          ?>
          <form action="receipt.php" method="get">
            Please fill in the grand total price of the items and the cash given by the customer.<br><br>
              <label for="Total">Total amount:</label>
              <input type="text" id="Total" name="Total"><br><br>
              <label for="money2">Cash:</label>
              <input type="text" id="money2" name="money2"><br><br>
              <button type ="submit">calculate</button> <br><br>
          </form>

       </div>
<!--Nurul Najihah (1915634)-->

        <?php
        }
      }
  }

    if(isset($_POST['calculate'])) {
      $cash = $_POST['cash'];
      $balance = '';
    if (empty($_POST["cash"])) {
      $error = true;
      echo "Please fill in the cash.";
    } elseif (is_numeric($cash)){
        $balance = $cash - $total;
        echo $balance;
    }
  }
  ?>
  </body>

<script type="text/javascript" >

     function disableMeeGoreng(){
          if(document.getElementById("meeGorengCheck").checked == true){
              document.getElementById("inputMeeGoreng").disabled = false;
          }else{
            document.getElementById("inputMeeGoreng").disabled = true;
          }
     }
     function disableNasiGoreng(){
          if(document.getElementById("nasiGorengCheck").checked == true){
              document.getElementById("inputNasiGoreng").disabled = false;
          }else{
            document.getElementById("inputNasiGoreng").disabled = true;
          }
     }
     function disableNasiLemak(){
          if(document.getElementById("nasiLemakCheck").checked == true){
              document.getElementById("inputNasiLemak").disabled = false;
          }else{
            document.getElementById("inputNasiLemak").disabled = true;
          }
     }
     function disableRotiBakar(){
          if(document.getElementById("rotiBakarCheck").checked == true){
              document.getElementById("inputRotiBakar").disabled = false;
          }else{
            document.getElementById("inputRotiBakar").disabled = true;
          }
     }
     function disableRotiCanai(){
          if(document.getElementById("rotiCanaiCheck").checked == true){
              document.getElementById("inputRotiCanai").disabled = false;
          }else{
            document.getElementById("inputRotiCanai").disabled = true;
          }
     }
     function disableCapati(){
          if(document.getElementById("capatiCheck").checked == true){
              document.getElementById("inputCapati").disabled = false;
          }else{
            document.getElementById("inputCapati").disabled = true;
          }
     }
     function disableLongtong(){
          if(document.getElementById("longtongCheck").checked == true){
              document.getElementById("inputLongtong").disabled = false;
          }else{
            document.getElementById("inputLongtong").disabled = true;
          }
     }
     function disableBubur(){
          if(document.getElementById("buburCheck").checked == true){
              document.getElementById("inputBubur").disabled = false;
          }else{
            document.getElementById("inputBubur").disabled = true;
          }
     }
     function disableRotiDol(){
          if(document.getElementById("rotiDolCheck").checked == true){
              document.getElementById("inputRotiDol").disabled = false;
          }else{
            document.getElementById("inputRotiDol").disabled = true;
          }
     }
     function disableRotiNaan(){
          if(document.getElementById("rotiNaanCheck").checked == true){
              document.getElementById("inputRotiNaan").disabled = false;
          }else{
            document.getElementById("inputRotiNaan").disabled = true;
          }
     }
     function disableSoto(){
          if(document.getElementById("sotoCheck").checked == true){
              document.getElementById("inputSoto").disabled = false;
          }else{
            document.getElementById("inputSoto").disabled = true;
          }
     }
     function disableCucur(){
          if(document.getElementById("cucurCheck").checked == true){
              document.getElementById("inputCucur").disabled = false;
          }else{
            document.getElementById("inputCucur").disabled = true;
          }
     }
</script>


</html>
