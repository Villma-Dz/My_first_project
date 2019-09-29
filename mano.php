<?php
session_start();
include_once('prekes-db-functions.php');
$connect = getPrisijungimas();

?>
<!DOCTYPE html>
<html>
     <head>
          <title>Mano</title>
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
          <link rel="stylesheet" href="libs/bootstrap/css/bootstrap.min.css">
          <link rel="stylesheet" href="css/master.css">
     </head>
     <body>
<?php
$query = "SELECT * FROM prekes ORDER BY pozicija ASC";
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
     while($row = mysqli_fetch_array($result))
     {
?>
<div class="col-md-4 " style="width:300px; height:600px;" >
     <form method="post" action="prekiu_krepselis.php?action=add&id=<?php echo $row["id"]; ?>">
          <div style=" padding:10px;" align="center">
               <img src="img/img/<?php echo $row["nuotrauka"]; ?>" class="img-responsive" /><br />
               <h2 style="color:#0000ff" > <?php echo $row["pavadinimas"]; ?> </h2>
               <h3 class="text-success">Kaina: <?php echo $row["kaina"]; ?> &euro;</h3>
               <h4 class="text-info" > Kiekis:</h4>
               <input type="number" name="quantity" class="form-control" value="1" />
               <input type="hidden" name="hidden_name" value="<?php echo $row["pavadinimas"]; ?>" />
               <input type="hidden" name="hidden_price" value="<?php echo $row["kaina"]; ?>" /> <br />
               <input type="submit" name="detail" style="margin-right: 30px;" class="btn btn-primary btn-lg stretched-link" value="Plačiau..." />
               <input type="submit" name="add_to_cart" style="" class="btn btn-primary btn-lg" value="Pirkti" />
          </div>
     </form>
</div>
<?php
     }
}
?>
