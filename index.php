<!DOCTYPE html>
<html>
    <head>
        <title>Scouting Prototype</title>
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
    <form action="action.php" method="post">
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
                            <input type="checkbox" name="auto-driving" value="Broke" required>
                            <label>Robot Broke</label>
                        </div>
                    </div>
                    <input type="submit" id="broke" value="Submit" class="submit-button broke-button" formnovalidate>
               </div>

                <!-- auto content  -->
                <div class="auto-content tab-content">
                    <header>Auto</header>
                    <div class="divider"></div>
                    <div class="radio-buttons">
                        <div>
                            <input type="checkbox" name="auto-driving" value="Engaged" required>
                            <label>Engaged</label>
                        </div>
                        <div>
                            <input type="checkbox" name="auto-driving" value="Docked" required>
                            <label>Docked</label>
                        </div>
                        <div>
                            <input type="checkbox" name="auto-driving" value="Mobility" required>
                            <label>Mobility</label>
                        </div>
                        <div>
                            <input type="checkbox" data-id="none" name="auto-driving" value="None" required >
                            <label>None</label>
                        </div>
                    </div>
                    <!-- <div class="buttons">
                        <div class="button-info">
                            <span> Score:</span>
                            <span data-target="auto-score-view" value="1" class="button">+</span>
                            <div id="auto-score-view">0</div>
                            <input type="hidden" id="auto-score" name="auto-score" value="0">
                            <span data-target="auto-score-view" value="-1" class="button">-</span>
                        </div>
                        <div class="button-info">
                            <span>Misses:</span> 
                            <span data-target="auto-misses-view" value="1" class="button">+</span>
                            <div id="auto-misses-view">0</div>
                            <input type="hidden" id="auto-misses" name="auto-misses" value="0">
                            <span data-target="auto-misses-view" value="-1" class="button">-</span>
                        </div>
                    </div> -->
                    <div class="teleop-score-container">
                        <div style="color:orange" class="piece-logo centered">⧍</div>
                        <div class="hits-title">Hits</div>
                        <div class="misses-title">Misses</div>
                        <div class="row-title centered">High</div>
                        <div class="score-button centered" data-value="1">+</div>
                        <div class="score-value centered">0</div>
                        <div class="score-button centered" data-value="-1">-</div>
                        <div class="score-button centered" data-value="1">+</div>
                        <div class="score-value centered">0</div>
                        <div class="score-button centered" data-value="-1">-</div>
                        <div class="row-title centered">Mid</div>
                        <div class="score-button centered" data-value="1">+</div>
                        <div class="score-value centered">0</div>
                        <div class="score-button centered" data-value="-1">-</div>
                        <div class="score-button centered" data-value="1">+</div>
                        <div  class="score-value centered">0</div>
                        <div class="score-button centered" data-value="-1">-</div>
                        <div class="row-title centered">Low</div>
                        <div class="score-button centered" data-value="1">+</div>
                        <div class="score-value centered">0</div>
                        <div class="score-button centered" data-value="-1">-</div>
                        <div class="score-button centered" data-value="1">+</div>
                        <div  class="score-value centered">0</div>
                        <div class="score-button centered" data-value="-1">-</div>
                    </div>
                    <div class="teleop-score-container">
                        <div class="piece-logo centered">🟪</div>
                        <div class="hits-title">Hits</div>
                        <div class="misses-title">Misses</div>
                        <div class="row-title centered">High</div>
                        <div class="score-button centered" data-value="1">+</div>
                        <div class="score-value centered">0</div>
                        <div class="score-button centered" data-value="-1">-</div>
                        <div class="score-button centered" data-value="1">+</div>
                        <div class="score-value centered">0</div>
                        <div class="score-button centered" data-value="-1">-</div>
                        <div class="row-title centered">Mid</div>
                        <div class="score-button centered" data-value="1">+</div>
                        <div class="score-value centered">0</div>
                        <div class="score-button centered" data-value="-1">-</div>
                        <div class="score-button centered" data-value="1">+</div>
                        <div  class="score-value centered">0</div>
                        <div class="score-button centered" data-value="-1">-</div>
                        <div class="row-title centered">Low</div>
                        <div class="score-button centered" data-value="1">+</div>
                        <div class="score-value centered">0</div>
                        <div class="score-button centered" data-value="-1">-</div>
                        <div class="score-button centered" data-value="1">+</div>
                        <div  class="score-value centered">0</div>
                        <div class="score-button centered" data-value="-1">-</div>
                    </div>
                </div>

                <!-- teleop content -->
                <div class="teleop-content tab-content">
                    <header>Teleop</header>
                    <div class="divider"></div>
                    <!-- <div class="buttons">
                        <div class="button-info">
                            <span> Score:</span>
                            <span data-target="teleop-score-view" value="1" class="button">+</span>
                            <div id="teleop-score-view">0</div>
                            <input type="hidden" id="teleop-score" name="teleop-score" value="0">
                            <span data-target="teleop-score-view" value="-1" class="button">-</span> 
                        </div>
                        <div class="button-info">
                            <span>Misses:</span>
                            <span data-target="teleop-misses-view" value="1" class="button">+</span>
                            <div id="teleop-misses-view">0</div>
                            <input type="hidden" id="teleop-misses" name="teleop-misses" value="0">
                            <span data-target="teleop-misses-view" value="-1" class="button">-</span>
                        </div>
                    </div> -->
                    <div class="teleop-score-container">
                        <div style="color:orange" class="piece-logo centered">⧍</div>
                        <div class="hits-title">Hits</div>
                        <div class="misses-title">Misses</div>
                        <div class="row-title centered">High</div>
                        <div class="score-button centered" data-value="1">+</div>
                        <div class="score-value centered">0</div>
                        <div class="score-button centered" data-value="-1">-</div>
                        <div class="score-button centered" data-value="1">+</div>
                        <div class="score-value centered">0</div>
                        <div class="score-button centered" data-value="-1">-</div>
                        <div class="row-title centered">Mid</div>
                        <div class="score-button centered" data-value="1">+</div>
                        <div class="score-value centered">0</div>
                        <div class="score-button centered" data-value="-1">-</div>
                        <div class="score-button centered" data-value="1">+</div>
                        <div  class="score-value centered">0</div>
                        <div class="score-button centered" data-value="-1">-</div>
                        <div class="row-title centered">Low</div>
                        <div class="score-button centered" data-value="1">+</div>
                        <div class="score-value centered">0</div>
                        <div class="score-button centered" data-value="-1">-</div>
                        <div class="score-button centered" data-value="1">+</div>
                        <div  class="score-value centered">0</div>
                        <div class="score-button centered" data-value="-1">-</div>
                    </div>
                </div>


                <!-- endgame content -->
                <div class="endgame-content tab-content">
                    <header>Endgame</header>
                    <div class="divider"></div>
                    <div class="radio-buttons">
                        <div>
                            <input type="checkbox" name="teleop-driving" value="Engaged" required>
                            <label>Engaged</label>
                        </div>
                        <div>
                            <input type="checkbox" name="teleop-driving" value="Docked" required>
                            <label>Docked</label>
                        </div>
                        <div>
                            <input type="checkbox" name="teleop-driving" value="Parked" required>
                            <label>Parked</label>
                        </div>
                        <div>
                            <input type="checkbox" data-id="none" name="teleop-driving" value="None" required>
                            <label>None</label>
                        </div>
                    </div>
                    <div class="radio-buttons">
                        <div>
                            <input type="radio" name="teleop-qual" value="Attempted" required>
                            <label>Attempted Double/Triple</label>
                        </div>
                        <div>
                            <input type="radio" name="teleop-qual" value="Double" required>
                            <label>Double Climb</label>
                        </div>
                        <div>
                            <input type="radio" name="teleop-qual" value="Triple" required>
                            <label>Triple Climb</label>
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
                    <input type="submit" class="submit-button">
                </div> 
            </div>
        </div>
</form>
    <div class="spacer"></div>
    <div class="footer">
        <div class="footer-text">
            <img class="logo" src="imgs/demonslogo.png" alt="Demons logo">
        </div>
        
    </div>
   
    </body>
</html>
