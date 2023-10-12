<!DOCTYPE html>
<html>
<head>
    <title>Exemple PHP</title>
    
</head>
<body>
    <?php
    $verification= 158;
    ?>
    <?php

if($_GET['nombre']>$verification):

   ?>
   trop grand
   <?php

elseif($_GET['nombre']<$verification):
    ?>
    Trop petit  

    <?php 
else:?> 
      vous avez gagner le chiffre est <?php echo $verification ?>
      <?php endif ?>

    <form action="deviner.php" method="GET">

    <input type="number" name="nombre" placeholder="entre 0 et 1000" >
    <button>click</button> 
    </form>
        
        
    </body>
</html>