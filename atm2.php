<?php
require_once 'class_accountbank.php';
$ab1 = new Accountbank("085",7000000,"mark");
$ab2 = new Accountbank("095",1000000,"lusi");

/*$ab1->cetak();
echo '<hr/>';
$ab2->cetak(); 
echo 'lusi transfer uang ke mark 10000<br/>';
echo 'biaya admin : '.accountbank::$biaya_admin; */
$ab2->transfer($ab1,10000);
/*$ab1->cetak();
echo '<hr/>';
$ab2->cetak();
*/
$ar_ab = [$ab1,$ab2];

$_norek = $_POST['norek'];
$_costumer = $_POST['costumer'];
$_saldo = $_POST['saldo'];
$_radio = $_POST['radio'];

$ab3 = new Accountbank($_norek,$_saldo,$_costumer);
array_push($ar_ab,$ab3);
?>

<table class="table table-hover table-dark" >
<thead>
<tr>
<th>no</th><th>No.rekening</th><th>costumer</th><th>saldo</th>
</tr>
</thead>
<tbody>
<?php
$nomor = 1; 
foreach  ($ar_ab as $obj){

?>
<tr>
 <td><?=$nomor?></td>
 <td><?=$obj->nomor?></td>
 <td><?=$obj->costumer?></td>
 <td><?=$obj->getsaldo()?></td>
</tr>
<?php
$nomor++;
}
?>
</tbody>
</table>
<?php
print_r ($_radio);
?>
