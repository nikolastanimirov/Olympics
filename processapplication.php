
<?php
//Validates the User inputs
if (!empty($_POST['realname']) and !empty($_POST['e_mail']) and !empty($_POST['standing']) && !empty($_POST['quote']) && !empty($_POST['other_clubs']) && !empty($_POST['department']) && !empty($_POST['sport']) && !empty($_POST['funky_question']) && !empty($_POST['fictional_sport'])) {
    $realname = $_POST['realname'];

    $data =
        "1. Name: " . PHP_EOL
        . $_POST['realname'] . PHP_EOL
        . "2. AUBG Email Address: \n\n \t" . PHP_EOL
        . $_POST['e_mail'] . PHP_EOL . PHP_EOL
        . "3. What is your current academic standing and majors? \n\n \t" . PHP_EOL
        . $_POST['standing'] . PHP_EOL . PHP_EOL
        . "6. Is there a department you prefer? Why? \n\n \t" . PHP_EOL
        . $_POST['department'] . PHP_EOL . PHP_EOL
        . "5.  Are you currently involved in any other AUBG club/s or activities? If not, do you have any experience in extracurricular activities? \n\n \t" . PHP_EOL
        . $_POST['other_clubs'] . PHP_EOL . PHP_EOL
        . "6. Tell us your favorite quote. Why is it so special to you? \n\n \t" . PHP_EOL
        . $_POST['quote'] . PHP_EOL . PHP_EOL
        . "7. What sports person do you connect yourself with the most. Why?\n\n \t " . PHP_EOL
        . $_POST['sport'] . PHP_EOL . PHP_EOL
        . "8. What would you rather be, a mirror or a window? Why? (We know it’s a funky question.) \n\n \t" . PHP_EOL
        . $_POST['funky_question'] . PHP_EOL . PHP_EOL
        . "9. If you could create a fictional sport what would it be?  Wh?\n\n \t" . PHP_EOL
        . $_POST['fictional_sport'] . PHP_EOL . PHP_EOL
        . "\f";

    try {
        date_default_timezone_set("Europe/Sofia");
        $file = fopen("Appforms.txt", 'ab');
        fwrite($file, "===========START===========" . " " . date("Y-m-d h:i:sa") . PHP_EOL);
        fwrite($file, $data);
        fwrite($file, "============END============" . PHP_EOL);
        fclose($file);
    } catch (Exception $e) {

    }
    echo "<script>
    alert('Thank you for applying for AUBG Olympics. You will be hearing from us in a couple of days!');
    </script>";
    echo "<script>";
    echo "window.setTimeout(function(){
              // Move to a new location or you can do something else
              window.location.href='http://www.aubgolympics.com';
          }, 600);</script>";
    die();
} else {
    echo "<script>
        alert('Make sure all fields are filled out. For more infomation, contact us at: aubgolympicscommittee@gmail.com');
        </script>";
    echo "<script>window.setTimeout(function(){
            window.location.href='http://www.aubgolympics.com/application';
        }, 600);</script>";
}
?>