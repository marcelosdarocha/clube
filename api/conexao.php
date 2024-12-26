<?php
try {
  $conn = new PDO('mysql:host=localhost;dbname=db_clube', 'root', 'root');
  echo "Conetado com sucesso ao Clube";
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
?>