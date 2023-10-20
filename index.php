<!DOCTYPE html>
<html>
    <head>
        <title>Scouting Application</title>
        <link rel="stylesheet" href="styles.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="script.js" defer></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    </head>
    <body>
    <div class="header">
        <div class="header-text">
            <p>Demons</p>
            <p>Team 858</p>
        </div>
    </div>
    <div class="tabs">
        <div data-target=".info-content" class="tab active">
           <p>Info</p>
           <img class="icon" src="imgs/info-solid.svg"></img>
        </div>
        <div data-target=".auto-content" class="tab">
            <p>Auto</p>
            <img class="icon" src="imgs/robot-solid.svg"></img>
        </div>
        <div data-target=".teleop-content" class="tab">
            <p>Teleop</p>
            <img  class="icon" src="imgs/gamepad-solid.svg"></img>
    
        </div>
        <div data-target=".endgame-content" class="tab">
            <p>Endgame</p>
            <img class="icon" src="imgs/flag-checkered-solid.svg"></img>
        </div>
    </div>
    <form action="submission.php" method="post">
        <div class="body">
            <div class="body-content">

                <!-- info tab -->
                <div class="info-content tab-content tab-active">
                    <header>Info</header>
                    <div class="divider"></div>
                    <div class="input-info">
                        <div class="row">
                            <label>Scouter Name:</label>
                            
                        <input type="text" name="scouter-name" required>
                        
                        </div>
                        <div class="row">
                            <label>Match #:</label>
                        <input type="text" name="match-number" required>
                        </div>
                        <div class="row">
                            <label>Team #:</label>
                            <input type="text" name="team-number" required>
                        </div>
                    </div>
                    <div class="radio-buttons">
                        <div>
                            <input type="checkbox" name="auto-driving-broke" value="Broke">
                            <label>Robot Broke</label>
                        </div>
                    </div>
                    
               </div>

                <!-- auto content  -->
                <div class="auto-content tab-content">
                    <header>Auto</header>
                    <div class="divider"></div>
                    <div class="radio-buttons">
                        <div>
                            <input type="radio" name="auto-driving" value="Engaged">
                            <label>Engaged</label>
                        </div>
                        <div>
                            <input type="radio" name="auto-driving" value="Docked">
                            <label>Docked</label>
                        </div>
                        <div>
                            <input type="radio" data-id="none" name="auto-driving" value="None">
                            <label>None</label>
                        </div>
                        <div>
                            <input type="checkbox" name="auto-driving-mobility" value="Mobility">
                            <label>Mobility</label>
                        </div>
                    </div>
                    <div class="teleop-score-container">
                        <!-- <div style="color:orange" class="piece-logo centered">▲</div> -->
                        <div class="hits-title">Hits</div>
                        <div class="misses-title">Misses</div>
                        <div class="row-title centered">High</div>
                        <div class="score-button centered" data-value="1">+</div>
                        <div class="score-value centered">0</div>
                            <input type="hidden" id="auto-score-high-hits" name="auto-score-high-hits" value="0">
                        <div class="score-button centered" data-value="-1">-</div>
                        <div class="score-button centered" data-value="1">+</div>
                        <div class="score-value centered">0</div>
                            <input type="hidden" id="auto-score-high-misses" name="auto-score-high-misses" value="0">
                        <div class="score-button centered" data-value="-1">-</div>
                        <div class="row-title centered">Mid</div>
                        <div class="score-button centered" data-value="1">+</div>
                        <div class="score-value centered">0</div>
                            <input type="hidden" id="auto-score-mid-hits" name="auto-score-mid-hits" value="0">
                        <div class="score-button centered" data-value="-1">-</div>
                        <div class="score-button centered" data-value="1">+</div>
                        <div  class="score-value centered">0</div>
                            <input type="hidden" id="auto-score-mid-misses" name="auto-score-mid-misses" value="0">
                        <div class="score-button centered" data-value="-1">-</div>
                        <div class="row-title centered">Low</div>
                        <div class="score-button centered" data-value="1">+</div>
                        <div class="score-value centered">0</div>
                            <input type="hidden" id="auto-score-low-hits" name="auto-score-low-hits" value="0">
                        <div class="score-button centered" data-value="-1">-</div>
                        <div class="score-button centered" data-value="1">+</div>
                        <div  class="score-value centered">0</div>
                            <input type="hidden" id="auto-score-low-misses" name="auto-score-low-misses" value="0">
                        <div class="score-button centered" data-value="-1">-</div>
                    </div>
                    <!-- <div class="teleop-score-container">
                        <div class="piece-logo centered">■</div>
                        <div class="hits-title">Hits</div>
                        <div class="misses-title">Misses</div>
                        <div class="row-title centered">High</div>
                        <div class="score-button centered" data-value="1">+</div>
                        <div class="score-value centered">0</div>
                            <input type="hidden" id="auto-cube-score-high-hits" name="auto-cube-score-high-hits" value="0">
                        <div class="score-button centered" data-value="-1">-</div>
                        <div class="score-button centered" data-value="1">+</div>
                        <div class="score-value centered">0</div>
                            <input type="hidden" id="auto-cube-score-high-misses" name="auto-cube-score-high-misses" value="0">
                        <div class="score-button centered" data-value="-1">-</div>
                        <div class="row-title centered">Mid</div>
                        <div class="score-button centered" data-value="1">+</div>
                        <div class="score-value centered">0</div>
                            <input type="hidden" id="auto-cube-score-mid-hits" name="auto-cube-score-mid-hits" value="0">
                        <div class="score-button centered" data-value="-1">-</div>
                        <div class="score-button centered" data-value="1">+</div>
                        <div  class="score-value centered">0</div>
                            <input type="hidden" id="auto-cube-score-mid-misses" name="auto-cube-score-mid-misses" value="0">
                        <div class="score-button centered" data-value="-1">-</div>
                        <div class="row-title centered">Low</div>
                        <div class="score-button centered" data-value="1">+</div>
                        <div class="score-value centered">0</div>
                            <input type="hidden" id="auto-cube-score-low-hits" name="auto-cube-score-low-hits" value="0">
                        <div class="score-button centered" data-value="-1">-</div>
                        <div class="score-button centered" data-value="1">+</div>
                        <div  class="score-value centered">0</div>
                            <input type="hidden" id="auto-cube-score-low-misses" name="auto-cube-score-low-misses" value="0">
                        <div class="score-button centered" data-value="-1">-</div>
                    </div> -->
                </div>

                <!-- teleop content -->
                <div class="teleop-content tab-content">
                    <header>Teleop</header>
                    <div class="divider"></div>
                    <div class="teleop-score-container">
                        <!-- <div style="color:orange" class="piece-logo centered">▲</div> -->
                        <div class="hits-title">Hits</div>
                        <div class="misses-title">Misses</div>
                        <div class="row-title centered">High</div>
                        <div class="score-button centered" data-value="1">+</div>
                        <div class="score-value centered">0</div>
                            <input type="hidden" id="teleop-score-high-hits" name="teleop-score-high-hits" value="0">
                        <div class="score-button centered" data-value="-1">-</div>
                        <div class="score-button centered" data-value="1">+</div>
                        <div class="score-value centered">0</div>
                            <input type="hidden" id="teleop-score-high-misses" name="teleop-score-high-misses" value="0">
                        <div class="score-button centered" data-value="-1">-</div>
                        <div class="row-title centered">Mid</div>
                        <div class="score-button centered" data-value="1">+</div>
                        <div class="score-value centered">0</div>
                            <input type="hidden" id="teleop-score-mid-hits" name="teleop-score-mid-hits" value="0">
                        <div class="score-button centered" data-value="-1">-</div>
                        <div class="score-button centered" data-value="1">+</div>
                        <div  class="score-value centered">0</div>
                            <input type="hidden" id="teleop-score-mid-misses" name="teleop-score-mid-misses" value="0">
                        <div class="score-button centered" data-value="-1">-</div>
                        <div class="row-title centered">Low</div>
                        <div class="score-button centered" data-value="1">+</div>
                        <div class="score-value centered">0</div>
                            <input type="hidden" id="teleop-score-low-hits" name="teleop-score-low-hits" value="0">
                        <div class="score-button centered" data-value="-1">-</div>
                        <div class="score-button centered" data-value="1">+</div>
                        <div  class="score-value centered">0</div>
                            <input type="hidden" id="teleop-score-low-misses" name="teleop-score-low-misses" value="0">
                        <div class="score-button centered" data-value="-1">-</div>
                    </div>
                    <!-- <div class="teleop-score-container">
                        <div class="piece-logo centered">■</div>
                        <div class="hits-title">Hits</div>
                        <div class="misses-title">Misses</div>
                        <div class="row-title centered">High</div>
                        <div class="score-button centered" data-value="1">+</div>
                        <div class="score-value centered">0</div>
                            <input type="hidden" id="teleop-cube-score-high-hits" name="teleop-cube-score-high-hits" value="0">
                        <div class="score-button centered" data-value="-1">-</div>
                        <div class="score-button centered" data-value="1">+</div>
                        <div class="score-value centered">0</div>
                            <input type="hidden" id="teleop-cube-score-high-misses" name="teleop-cube-score-high-misses" value="0">
                        <div class="score-button centered" data-value="-1">-</div>
                        <div class="row-title centered">Mid</div>
                        <div class="score-button centered" data-value="1">+</div>
                        <div class="score-value centered">0</div>
                            <input type="hidden" id="teleop-cube-score-mid-hits" name="teleop-cube-score-mid-hits" value="0">
                        <div class="score-button centered" data-value="-1">-</div>
                        <div class="score-button centered" data-value="1">+</div>
                        <div  class="score-value centered">0</div>
                            <input type="hidden" id="teleop-cube-score-mid-misses" name="teleop-cube-score-mid-misses" value="0">
                        <div class="score-button centered" data-value="-1">-</div>
                        <div class="row-title centered">Low</div>
                        <div class="score-button centered" data-value="1">+</div>
                        <div class="score-value centered">0</div>
                            <input type="hidden" id="teleop-cube-score-low-hits" name="teleop-cube-score-low-hits" value="0">
                        <div class="score-button centered" data-value="-1">-</div>
                        <div class="score-button centered" data-value="1">+</div>
                        <div  class="score-value centered">0</div>
                            <input type="hidden" id="teleop-cube-score-low-misses" name="teleop-cube-score-low-misses" value="0">
                        <div class="score-button centered" data-value="-1">-</div>
                    </div> -->
                </div>
                <!-- endgame content -->
                <div class="endgame-content tab-content">
                    <header>Endgame</header>
                    <div class="divider"></div>
                    <div class="radio-buttons">
                        <div>
                            <input type="radio" name="endgame-driving" value="Engaged">
                            <label>Engaged</label>
                        </div>
                        <div>
                            <input type="radio" name="endgame-driving" value="Docked">
                            <label>Docked</label>
                        </div>
                        <div>
                            <input type="radio" data-id="none" name="endgame-driving" value="None">
                            <label>None</label>
                        </div>
                        <div>
                            <input type="checkbox" name="endgame-driving-parked" value="Parked">
                            <label>Parked</label>
                        </div>
                    </div>
                    <div class="radio-buttons">
                        <div>
                            <input type="radio" name="teleop-qual" value="Attempted" required>
                            <label>Attempted Double/Triple</label>
                        </div>
                        <div>
                            <input type="radio" name="teleop-qual" value="Double" required>
                            <label>Double Engaged</label>
                        </div>
                        <div>
                            <input type="radio" name="teleop-qual" value="Triple" required>
                            <label>Triple Engaged</label>
                        </div>
            
                    </div>
                    <div class="input-info">
                        <div class="qual-container">
                            <div class="qual">
                                <div class="qual-label">Cycle Speed</div>
                                <div class="divider quad-divider"></div>
                                <div class="qual-stars-container">
                                    <div data-value="1" class="star">★</div>
                                    <div data-value="2" class="star">★</div>
                                    <div data-value="3" class="star">★</div>
                                    <div data-value="4" class="star">★</div>
                                    <div data-value="5" class="star">★</div>
                                    <span class="star-clear-button">CLEAR</span>
                                    <input type="hidden" id="star-cycle-speed-rating" name="star-cycle-speed-rating" value="0">
                                </div>
                            </div>
                            <div class="qual">
                                <div class="qual-label">Maneuverability</div>
                                <div class="divider quad-divider"></div>
                                <div class="qual-stars-container">
                                    <div data-value="1" class="star">★</div>
                                    <div data-value="2" class="star">★</div>
                                    <div data-value="3" class="star">★</div>
                                    <div data-value="4" class="star">★</div>
                                    <div data-value="5" class="star">★</div>
                                    <span class="star-clear-button">CLEAR</span>
                                    <input type="hidden" id="star-maneuverability-rating" name="star-maneuverability-rating" value="0">
                                </div>
                            </div>
                            <div class="qual">
                                <div class="qual-label">Defensive Ability</div>
                                <div class="divider quad-divider"></div>
                                <div class="qual-stars-container">
                                    <div data-value="1" class="star">★</div>
                                    <div data-value="2" class="star">★</div>
                                    <div data-value="3" class="star">★</div>
                                    <div data-value="4" class="star">★</div>
                                    <div data-value="5" class="star">★</div>
                                    <span class="star-clear-button">CLEAR</span>
                                    <input type="hidden" id="star-defensive-ability-rating" name="star-defensive-ability-rating" value="0">
                                </div>
                            </div>
                            <div class="qual">
                                <div class="qual-label">Overall Rating</div>
                                <div class="divider quad-divider"></div>
                                <div class="qual-stars-container">
                                    <div data-value="1" class="star">★</div>
                                    <div data-value="2" class="star">★</div>
                                    <div data-value="3" class="star">★</div>
                                    <div data-value="4" class="star">★</div>
                                    <div data-value="5" class="star">★</div>
                                    <span class="star-clear-button">CLEAR</span>
                                    <input type="hidden" id="star-overall-rating" name="star-overall-rating" value="0">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="input-info">
                        <h2 id="comment-label">Comments</h2>
                        <div class="row">
                            <!--<input id="text-comment" type="text" name="comments">-->
                            <textarea id="text-comment" name="comments" rows="4"></textarea>
                        </div>
                    </div>
                    <input type="submit" id="aaaa" class="submit-button">
                    <input type="submit" id="broke-button" value="Submit" class="submit-button broke-button" formnovalidate>
                </div> 
            </div>
        </div>
</form>
    <div class="spacer"></div>
    <div class="footer">
        <div class="footer-text">
            <a id="help-link" href="help.html">Help</a>
            <img class="logo" src="imgs/demonslogo.png" alt="Demons logo">
            <a id="help-link" href="../scouting-graphs/index.html">Data Dashboard</a>
        </div>
        
    </div>
   
    </body>
</html>
