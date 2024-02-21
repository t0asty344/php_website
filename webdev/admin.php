<?php

function delete_user()
{

}

?>
<?php include "header.php" ?>

<body id="admin">
<h1 id="Header">Admin</h1>
<div class="dropdown">
    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
      Options
    </button>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="index.php">Home</a></li>
    </ul>
</div>
<div id="users" name="users">
</div>
<?php 
$import = file_get_contents('test.json');
$tempArray = json_decode($import,true);
echo "<p id='adm'>"."id"." "."name"." "."password"." "."activation"."</p>"."<br>";
for($i=0;$i<=count($tempArray)-1;$i++)
{
echo "<form method='post'>"."<div class='names'>"."<p id='adm'>" .$tempArray[$i]["id"]." ".$tempArray[$i]["username"]." ".$tempArray[$i]["password"]."</p>"."<input type='submit' id=id".$tempArray[$i]["id"]." name='button_activate' class='buttonName' type='button' onclick='change_user_activation()' value=".$tempArray[$i]["id"]." >"."</div>"."</form>"."<br>";
}
if(array_key_exists('button_activate' ,$_POST)){
 change_user_activation();
 $jsonData=json_encode($tempArray,JSON_PRETTY_PRINT);
 file_put_contents('test.json', $jsonData);
}
function change_user_activation()
{
    
    $import = file_get_contents('test.json');
    $tempArray = json_decode($import,true);
    $id = $_POST["button_activate"];
    for($i=0;$i<=count($tempArray)-1;$i++)
{

    if($tempArray[$i]["id"]==$id)
    {
     var_dump($tempArray[$i]["active"]);
     if($tempArray[$i]["active"] == true){ 
        //$replace= array("active"=>"false");
        $tempArray[$i]["active"]="false";
     }
     elseif($tempArray[$i]["active"] == false) {
        //array_replace($tempArray[$i],$replace);
        $tempArray[$i]["active"]="true";
    }
    
    }

}

}
?>
<?php include "footer.php"?>
</body>
</html>