<!DOCTYPE html>
<?php
   require_once("items.php");

   $items = new Items();
   $products = $items->getItems();

   function start(){
      session_start();
   }
   function stop(){
      session_destroy();
   }

   start();

   $_SESSION['itemNo'] = 0;
   $_SESSION['itemName'] = 0;
   $_SESSION['itemPrice'] = 0;
   $_SESSION['quantity'] = 0;
?>

<html>
    <head>
       <title>
       	   Games-R-Us
       </title>

       <style type="text/css">
           .link_button:link {
           	   font-family:verdana;
           } 

           .link_button {
           	   text-decoration:none;
           	   border:3px #000 solid; 
           }
       </style>
    </head>
    <body>
       <h1>
          Games-R-Us 
       </h1>
       <hr>
       <form action="" method="post">	
         <h3>
            Select a game to purchase
         </h3>
       	 <select name="items">
               <?php
               foreach($products as $product){
                  echo '<option value="' . $product['itemNo'] . '">' . $product['itemName'] . '</option>';
               }
               ?>
         </select>
         Qty: <input type="text" name="qty" value="1" size="5" />
         <hr>

         <table name="cart" width="500">
         	<tr>
         		<td>Item #</td>
         		<td>Item Name</td>
         		<td>Price</td>
         		<td>Qty</td>
         		<td>Amount</td>
         	</tr>

                    <tr>
                    <td></td>
                    <td></td>
                    <td style="text-align: right;"></td>
                    <td></td>
                    <td style="text-align: right;"></td>
                    <td><a href="" class="link_button"> X </a></td>
                    </tr>
  
         </table>
         <br />  
         if ([POST]){
            $cart->putItemIntoCart(
               $_POST['itemNo'],
               $_POST['itemName'],
               $_POST['itemPrice'],
               $_POST['quantity'],)

               
         }

         <br>Total Amount Due: <br />
         <input type="submit" name="add" value="Add to Cart" />   
         <input type="submit" name="checkout" value="Check Out" />         
   	   </form>
    </body>
</html>