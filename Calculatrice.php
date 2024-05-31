<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculatrice</title>
</head>
<body>
    <?php 
    

    $variable = $_POST['TX1'];
   
    $hello = $_POST['TX2'];
    
    $wel = $_POST['Sel1'];
    
    
    $Result = 0 ;
    if ( $wel == '+'){
        $Result = $variable + $hello;
        
    }else if( $wel == '-'){
        $Result = $variable - $hello;
    }else if ($wel == '*' ){
        $Result = $variable * $hello;
    }else{
        $Result = $variable / $hello;
    }

    echo "Result : " . $Result;




 ?>
</body>
</html>