<?php
$conn = pg_connect("host=db port=5432 dbname=test_db user=test password=vJklopqw12");
if (!$conn) {
  echo "Произошла ошибка.\n";
  exit;
}

if (!pg_ping($conn))
  die("Соединение нарушено\n");
?>
<?php
phpinfo();
?>