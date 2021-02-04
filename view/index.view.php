<?php 
    use OOP\Vehicle; 
    use OOP\Car; 
    use OOP\Bike; 
    use OOP\Bicycle; 
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP OOP demo</title>
    </head>
    <body>
        <?php 
           $car = new Vehicle('BMW', '850L');
           $car->setPrice('35000€');
           echo $car . '<br>';
           $bike = new Bike ('Kawasaki', 'Ryukyu');
           $audi = new Car ('Audi', 'A4');
           $dviratis = new Bicycle ('Firma', 'Viena');
           echo $bike .'<br>'. $audi . '<br>' . $dviratis;
        ?>
    </body>
</html>