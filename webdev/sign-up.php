<?php
// $data = fopen("test.json","w")or die("Didnt open");
// $data = fopen("test.json","a");
// $userinfo = array(array( "username"=> $_POST["password"],"password"=>$_POST["username"]));
// $fin = json_encode($userinfo);
// echo $fin;

// fwrite($data, $fin);  
// fclose($data)
$import = file_get_contents('test.json');
$tempArray = json_decode($import);
$id=count($tempArray)+1;
$username = $_POST["username"];
$password = $_POST["password"];
$data =array("id"=>$id,"username"=> $username,"password"=>$password,"active"=>FALSE);


if($username =="" || $password =="")
{
 echo "error";
}
else{
 ausgabe();
}
function ausgabe()
{
    global $data;
    global $tempArray;
    array_push($tempArray, $data);
    $jsonData = json_encode($tempArray,JSON_PRETTY_PRINT);
    file_put_contents('test.json', $jsonData);
}
?>

<?php include "header.php" ?>

<?php
    var_dump($_REQUEST);
?>

<body id="signIn">
    
    <h1 id="Header">Sign up</h1>
    <div class="div_Buttons">
        <button id="Button1" class="Buttons" onclick="window.location.href='index.php'">Home</button>
        <button id="Button2" class="Buttons" onclick="window.location.href='Prices.php'">Prices</button>
        <button id="Button3" class="Buttons" onclick="window.location.href='Contacts.php'">Contacts</button>
    </div>

<form method="POST" id="div_form" class="forms">
    <b>UserName:</b>
    <input type="text" class="inputs" id="name" name="username">
    <b>Password:</b>
    <input type="password" class="inputs" id="password" name="password">
    <button id="sign_in_button" name="signup">Sign Up</button>
</form>

<?php include "footer.php" ?>


</body>
</html>