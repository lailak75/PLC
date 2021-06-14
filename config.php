<?php
$db=pg_connect('host=localhost dbname=laundry port=5432 user=postgres password=bismillah');
if( !$db ){
    die("Gagal terhubung dengan database: " . pg_connect_error());
}
?>
