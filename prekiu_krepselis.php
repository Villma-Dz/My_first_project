<?php
session_start();
include_once('prekes-db-functions.php');
$connect = getPrisijungimas();
if(isset($_POST["add_to_cart"]))
{
     if(isset($_SESSION["shopping_cart"]))
     {
          $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
          if(!in_array($_GET["id"], $item_array_id))
          {
               $count = count($_SESSION["shopping_cart"]);
               $item_array = array(
                    'item_id'      =>     $_GET["id"],
                    'item_name'    =>     $_POST["hidden_name"],
                    'item_price'   =>     $_POST["hidden_price"],
                    'item_quantity'=>     $_POST["quantity"],
                    'cart_id'      =>     $_POST["count"],
               );
               $_SESSION["shopping_cart"][$count] = $item_array;

          }
          else
          {
               echo '<script>alert("Prekė jau įdėta")</script>';
               echo '<script>window.location="prekiu_krepselis.php"</script>';
          }
     }
     else
     {
          $item_array = array(
               'item_id'               =>     $_GET["id"],
               'item_name'               =>     $_POST["hidden_name"],
               'item_price'          =>     $_POST["hidden_price"],
               'item_quantity'          =>     $_POST["quantity"]
          );
          $_SESSION["shopping_cart"][0] = $item_array;
     }
}
if(isset($_GET["action"]))
{
     if($_GET["action"] == "delete")
     {
          foreach($_SESSION["shopping_cart"] as $keys => $values)
          {
               if($values["item_id"] == $_GET["id"])
               {
                    unset($_SESSION["shopping_cart"][$keys]);
                    echo '<script>alert("Prekė pašalinta")</script>';
                    echo '<script>window.location="prekiu_krepselis.php"</script>';
               }
          }
     }
}
?>
<!DOCTYPE html>
<html>
     <head>
          <title>Prekiu krepselis</title>
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
          <link rel="stylesheet" href="libs/bootstrap/css/bootstrap.min.css">
          <link rel="stylesheet" href="css/master.css">
     </head>
     <body>

            <div class="container">
               <h1>Užsakymo detalės</h1>
                        <table id="t01" >
                         <tr>
                              <th width="40%">Prekės pavadinimas</th>
                              <th width="10%">Kiekis</th>
                              <th width="20%">Kaina</th>
                              <th width="15%">Viso</th>
                              <th width="5%">veiksmas</th>
                         </tr>
                         <?php
                         if(!empty($_SESSION["shopping_cart"]))
                         {
                              $total = 0;
                              foreach($_SESSION["shopping_cart"] as $keys => $values)
                              {
                         ?>
                         <tr>
                              <td><?php echo $values["item_name"]; ?></td>
                              <td><?php echo $values["item_quantity"]; ?></td>
                              <td> <?php echo $values["item_price"]; ?> &euro;</td>
                              <td> <?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?> &euro;</td>
                              <td><a href="prekiu_krepselis.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Pašalinti</span></a></td>
                         </tr>
                         <?php
                                   $total = $total + ($values["item_quantity"] * $values["item_price"]);
                              }
                         ?>
                         <tr>
                              <td colspan="3" align="right">Iš viso:</td>
                              <td align="right"> <?php echo number_format($total, 2); ?>&euro;</td>
                              <td></td>
                         </tr>
                         <?php
                         }
                         ?>
                    </table>

               <a class="btn btn-lg btn-success" href="registracija.php">Pirkti</a>


          </div>
           <!-- konteinerio pabaiga -->


          <script src="libs/jquery-3.4.1.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
          <script type="text/javascript" src="libs/bootstrap/js/bootstrap.min.js"> </script>
          <script type="text/javascript" src="main.js"> </script>
     </body>
</html>
