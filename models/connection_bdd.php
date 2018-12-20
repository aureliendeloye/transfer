 <?php 
$basedonne = new PDO("mysql:host=localhost;dbname=transfer; charset=utf8", "root", "online@2017");
$baseurl = ( strpos($_SERVER["HTTP_HOST"], ":8080") === false ) ? "http://localhost/transfer/" : "http://localhost:8080/transfer/";
 