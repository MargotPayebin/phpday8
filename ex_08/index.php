<?php
if (!isset($_POST["name"])){
    ?>
    <form action="index.php" method="post">
        <p>Votre nom : <input type="text" name="name" /></p>
        <p><input type="submit" value="SUBMIT"></p>
    </form>
<?php
}
else {
    echo "Hello ". $_POST["name"];
}?>