<?php
// $data = fopen("test.json","w")or die("Didnt open");
// $data = fopen("test.json","a");
// $userinfo = array(array( "username"=> $_POST["password"],"password"=>$_POST["username"]));
// $fin = json_encode($userinfo);
// echo $fin;

// fwrite($data, $fin);
// fclose($data)
$username = $_POST["username"];
$password = $_POST["password"];
if($username =="" || $password =="")
{
 echo "error";
}
else{
 ausgabe();
}
function ausgabe()
{
    global $username;
    global $password;
    $import = file_get_contents('test.json');
    $tempArray = json_decode($import,true);
    var_dump($tempArray[0]["username"]);

    for($i=0;$i<=count($tempArray)-1;$i++)
    {
        
        if($username == $tempArray[$i]["username"] && $password == $tempArray[$i]["password"])
        {
            header("Location: http://localhost:8080/jonathan/webdev/index.php");
        }
        else if($username == "admin" && $password == "admin")
        {
            header("Location: http://localhost:8080/jonathan/webdev/admin.php");
        }
    }
}
?>
<?php include "header.php" ?>
<body id="signIn">

    <h1 id="Header">Log in</h1>
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