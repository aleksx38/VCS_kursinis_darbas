<?php error_reporting (E_ALL ^ E_NOTICE); ?> 

<?php  
    if(isset($_POST['submit'])) {
    include 'db.php';
    $vardas = mysqli_real_escape_string($conn, $_POST['fname']);
    $pavarde = mysqli_real_escape_string($conn, $_POST['lname']);
    $email = trim($_POST['email']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    $bobcat =trim($_POST['paslauga1']);
    $veja = trim($_POST['paslauga2']);
    $trinkeles = trim($_POST['paslauga3']);

    if(empty($vardas) && empty($pavarde) && empty($email) ) {
        header("Location: ../public/kontaktai.php?informacija-truksta");
        exit();}
    else {
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            header("Location: ../public/kontaktai.php?el.pastas-blogas");
            exit();}
        else {
            if(!preg_match("/^[a-zA-Z]*$/", $vardas) || !preg_match("/^[a-zA-Z]*$/", $pavarde) || !preg_match("/^[a-zA-Z0-9]*$/", $message)) {
                header("Location: ../public/kontaktai.php?klaida");
                exit();}
                else {

mysqli_query($conn, "INSERT INTO klientai (vardas, pavarde, email, bobcat, veja, trinkeles, message) VALUES('$vardas', '$pavarde', '$email', '$bobcat', '$veja', '$trinkeles', '$message')");
            $from = $email;
            $to = "1995aleks@gmail.com";
            $subject = "Nauja zinute";
            $autorius = 'Nuo: ' . $vardas . ' ' . $pavarde . ', ' . $email;
            $zinute = htmlspecialchars($message);
           // mail($to, $subject, $autorius, $zinute, $from);
        }
           
            
            
           

} ?>

<script>alert('Dekojame. Jusu zinute gavome. Netrukus susisieksime')</script>


<?php
}
    }
    ?>