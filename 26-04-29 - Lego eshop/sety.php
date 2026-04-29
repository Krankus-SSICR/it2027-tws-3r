<?php include('layout/header.php')?>

<?php
$sql = "SELECT * FROM sety";
$vysledek = $conn->query($sql);
$sety = $vysledek->fetch_assoc();
?>
<div class="container mt-4">
  <h2 class="alert alert-primary">Nabídka lego setů</h2>
</div>

<?php include('layout/footer.php')?>