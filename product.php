<?php
if(isset($_SESSION['username'])){
    echo"<h1>Hello! Welcome to my product page</h1>".<br/>;
    echo "<a href='welcome.php'><input type=button name=back value=back</a>";
}
else{

}
?>