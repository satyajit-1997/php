<?php 

echo"<h1 style='color:green'>Php with HTML </h1>"


?>


<?php 

$name="satyajit";
$h2_color="pink";
echo "<h2 style='color:blue'> my name is $name</h2>"

?>


<h1 style='color:brown'>

My name is <?php echo $name ?>

</h1>


<h2 style="color:<?php echo $h2_color ?>"><?php echo"this is h2 tag" ?></h2>
<h2 style="color:<?php echo $h2_color ?>">  <?php echo"$name" ?></h2>
<h2 style="color:<?php echo $h2_color ?>"> My Name is <?php echo $name ?></h2>