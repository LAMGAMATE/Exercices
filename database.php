<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php  
    
$pdo = new PDO('Person.db');
$result = $pdo->query("SELECT * FROM Personne");
$row = $result->fetchAll(PDO::FETCH_ASSOC);


echo "<table border = 1>";
echo "<tr>";
echo "<td> Nom </td>";
echo "<td> Prenom </td>";
echo "<td> Age </td>";


foreach($movie as $row => $Personne) {
echo "<tr>";
echo "<td>" . $Personne['Nom']   .  "</td>";
echo "<td>" . $Personne['Prenom']   .  "</td>";
echo "<td>" . $Personne['Age']   .  "</td>";

echo "<tr>";
}
echo "</table>";



?>
</body>
</html>