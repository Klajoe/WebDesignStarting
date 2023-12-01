<html>
  <head>
  	<title>In-Class-Activity5</title>
  </head>

  <body>
    <form method="post">
      <table>

        <tr>
          <td>From:<input type="text" name="from"></td>
          <td>Currency: 
            <select name="from_currency">
              <option value="CAD">CAD</option>
              <option value="USD">USD</option>
              <option value="EUR">EUR</option>
            </select>
          </td>
        </tr>

        <tr>
          <td>To:<input type="text" name="to"></td>
          <td>Currency: 
            <select name="to_currency">
              <option value="CAD">CAD</option>
              <option value="USD">USD</option>              
              <option value="EUR">EUR</option>
            </select>
          </td>
        </tr>
        <tr>
          <td colspan="2" align="right"><input type="submit"></td>
        </tr>
      </table>
    </form>

    <?php
    
      $from = $_POST['from'];
		  $from_currency = $_POST['from_currency'];
		  $to_currency = $_POST['to_currency'];

        //   Current exchange rates
		  $exchange_array = array(
            'CAD' => array('USD' => 0.74, 'EUR' => 0.67),
		  	'USD' => array('CAD' => 1.36, 'EUR' => 0.91),
		  	'EUR' => array('USD' => 1.10, 'CAD' => 1.47)
		  );

		  $exchange_rate = $exchange_array[$from_currency][$to_currency];

		  $new_exchange = $from * $exchange_rate;
            // I make it float otherwise can't echo the exponential part

            // Printing again to the screen
            echo '<script>document.getElementsByName("from_currency")[0].value = "' . $from_currency . '";</script>';
            echo '<script>document.getElementsByName("to_currency")[0].value = "' . $to_currency . '";</script>';
            
            
            echo '<script>document.getElementsByName("from")[0].value = "' . number_format($from, 2) . '";</script>';
            echo '<script>document.getElementsByName("to")[0].value = "' . number_format($new_exchange, 2) . '";</script>';
            echo '<script>document.getElementById("to").value = "' . number_format($new_exchange, 2) . '";</script>';
    
    ?>

  </body>
  

</html>