<?php
include 'conexion2.php';
$sql = "SELECT * FROM home";
$result6 = mysqli_query($conexion, $sql);
while ($mostrar6 = mysqli_fetch_array($result6)) {
?>
    <img src="data:image/jpg;base64,<?php echo base64_encode($mostrar6['logo']) ?>" alt="" class="logo_nav">
<?php
}
?>