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
    //link to scouting page with fields refreshed and blanked
    $previous = "javascript:history.go(-1)";
        if(isset($_SERVER['HTTP_REFERER'])) {
            $previous = $_SERVER['HTTP_REFERER'];
        }
    ?>
    <!-- link back -->
    <a class="link" href="<?= $previous ?>">Back</a>

    <?php
        //prevents user from going to url directly (from hidayatabisena.medium.com)
        if ( $_SERVER['REQUEST_METHOD']=='GET' && realpath(__FILE__) == realpath( $_SERVER['SCRIPT_FILENAME'] ) ) {
            header( 'HTTP/1.0 403 Forbidden', TRUE, 403 );
            die ("<h2>Access Denied!</h2>");
        }
        //database info
        $servername = "###";
        $username = "###";
        $password = "###";
        $dbname = "###";

        //cleans input of malicious intent
        function sanitize($input) {
            $input = trim($input);
            $input = stripslashes($input);
            $input = htmlspecialchars($input);
            return $input;
        } 

        //
        //      INFO DATA
        //
        $scouterName = sanitize($_POST['scouter-name']);
        $matchNumber = sanitize($_POST['match-number']);
        $teamNumber = sanitize($_POST['team-number']);
        $didRobotBreak = sanitize($_POST['auto-driving-broke']);

        //
        //      AUTO DATA
        //


        $autoDriving =  sanitize($_POST['auto-driving']);
        $autoMobility = sanitize($_POST['auto-driving-mobility']);

        //scores
        $autoHighHits = sanitize($_POST['auto-score-high-hits']);
        $autoHighMisses = sanitize($_POST['auto-score-high-misses']);
        $autoMidHits = sanitize($_POST['auto-score-mid-hits']);
        $autoMidMisses = sanitize($_POST['auto-score-mid-misses']);
        $autoLowHits = sanitize($_POST['auto-score-low-hits']);
        $autoLowMisses = sanitize($_POST['auto-score-low-misses']);

        //
        //      TELEOP DATA
        //
        $teleopHighHits = sanitize($_POST['teleop-score-high-hits']);
        $teleopHighMisses = sanitize($_POST['teleop-score-high-misses']);
        $teleopMidHits = sanitize($_POST['teleop-score-mid-hits']);
        $teleopMidMisses = sanitize($_POST['teleop-score-mid-misses']);
        $teleopLowHits = sanitize($_POST['teleop-score-low-hits']);
        $teleopLowMisses = sanitize($_POST['teleop-score-low-misses']);

        //
        //      ENDGAME DATA
        //
        $endgameDriving = sanitize($_POST['endgame-driving']);
        $endgameParked = sanitize($_POST['endgame-driving-parked']);
        $endgameClimb = sanitize($_POST['teleop-qual']);

        $starCycleSpeedRating = sanitize($_POST['star-cycle-speed-rating']);
        $starManeuverabilityRating = sanitize($_POST['star-maneuverability-rating']);
        $starDefensiveAbilityRating = sanitize($_POST['star-defensive-ability-rating']);
        $starOverallRating = sanitize($_POST['star-overall-rating']);

        $comments = sanitize($_POST['comments']);

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        
        //prevents sql injection
        //template
        $stmt = $conn->prepare("INSERT INTO WMRI 
            (scouterName,matchNumber,teamNumber,autoDrivings,autoMobility,  
            autoScoreHighHits,autoScoreHighMisses,autoScoreMidHits,autoScoreMidMisses,autoScoreLowHits,autoScoreLowMisses,
            teleopScoreHighHits,teleopScoreHighMisses,teleopScoreMidHits,teleopScoreMidMisses,teleopScoreLowHits,
            teleopScoreLowMisses,endgameDriving,endgameParking,endgameClimb,starCycleSpeedRating,starManeuverabilityRating,
            starDefensiveAbilityRating,starOverallRating,comments) 
                VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");

        //bind parameters to template
        $stmt->bind_param("siissiiiiiiiiiiiisssiiiis", 
            $scouterName,$matchNumber,$teamNumber,$autoDriving,$autoMobility,$autoHighHits,$autoHighMisses,
            $autoMidHits,$autoMidMisses,$autoLowHits,$autoLowMisses,$teleopHighHits,$teleopHighMisses,
            $teleopMidHits,$teleopMidMisses,$teleopLowHits,$teleopLowMisses,$endgameDriving,$endgameParked
            $endgameClimb,$starCycleSpeedRating,$starManeuverabilityRating,$starDefensiveAbilityRating,$starOverallRating,$comments 
        );

        $stmt->execute();

        //if all goes well
        echo "<div class='container'><h1 id='text'>Submission Successful!<h1></div>";
        $submission_message = "";

        $stmt->close();
        $conn->close();
    ?>
    

</body>
</html>
