<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles2.css">
    <title>Submission</title>
</head>
<body>
    <?php 
     $previous = "javascript:history.go(-1)";
        if(isset($_SERVER['HTTP_REFERER'])) {
            $previous = $_SERVER['HTTP_REFERER'];
    }
    ?>

    <a class="link" href="<?= $previous ?>">Back</a>
    <?php
        //prevents user from going to url directly (from hidayatabisena.medium.com)
        if ( $_SERVER['REQUEST_METHOD']=='GET' && realpath(__FILE__) == realpath( $_SERVER['SCRIPT_FILENAME'] ) ) {
            header( 'HTTP/1.0 403 Forbidden', TRUE, 403 );
            die ("<h2>Access Denied!</h2>");
        }
        //database info
        $servername = "#######";
        $username = "#######";
        $password = "#######";
        $dbname = "#######";

        //cleans input of malicious intent
        function sanitize($input) {
            $input = trim($input);
            $input = stripslashes($input);
            $input = htmlspecialchars($input);
            return $input;
        } 

        //sanitize data
        $scouterName = sanitize($_POST['scouter-name']);
        $matchNumber = sanitize($_POST['match-number']);
        $teamNumber = sanitize($_POST['team-number']);
        $autoScore = sanitize($_POST['auto-score']);
        $autoMisses = sanitize($_POST['auto-misses']);
        $autoDriving = sanitize($_POST['auto-driving']);
        $teleopScore = sanitize($_POST['teleop-score']);
        $teleopMisses =  sanitize($_POST['teleop-misses']);
        $endgameDriving = sanitize($_POST['teleop-driving']);
        $comments = sanitize($_POST['comments']);

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        
        //prevents sql injection
        //template
        $stmt = $conn->prepare("INSERT INTO practice (scouterName, matchNumber, teamNumber, autoDriving, autoScore, autoMisses, teleopScore, teleopMisses, endgameDriving, comments) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

        //bind parameters to template
        $stmt->bind_param("siisiiiiss", $scouterName, $matchNumber, $teamNumber, $autoDriving, $autoScore, $autoMisses, $teleopScore, $teleopMisses, $endgameDriving, $comments );
        $stmt->execute();

        //if all goes well
        echo "<div class='container'><h1 id='text'>Submission Successful!<h1></div>";
        $submission_message = ""

        $stmt->close();
        $conn->close();
    ?>
    

</body>
</html>
