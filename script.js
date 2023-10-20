const buttons = document.querySelectorAll(".button");

//generalized to all buttons
buttons.forEach( button => {
  button.addEventListener( "click", () => {
    const targetId = button.dataset.target;
    const target = document.getElementById(targetId);
    const increment = button.getAttribute("value");
    const newScore = parseInt(target.innerHTML,10) + parseInt(increment,10);
    target.innerHTML = Math.max(0,newScore);
  
    //targetid and inputid are same except there '-view' at the end, so this removes that
    const inputTargetId = targetId.substring(0, targetId.length - 5);
    document.getElementById(inputTargetId).value = Math.max(0,newScore);
  });
});

const tabs = document.querySelectorAll(".tab");
const tabContents = document.querySelectorAll(".tab-content");


// add click listener to each tab
tabs.forEach( tab => {
  tab.addEventListener( "click", () => {
    // remove 'active' class from all tabs
    tabs.forEach(tab => tab.classList.remove("active"));

    // remove 'tab-active' class from all tab content
    tabContents.forEach(content => content.classList.remove("tab-active"));

    //set tab content to active
    document.querySelector(tab.dataset.target).classList.add("tab-active");
    tab.classList.add("active");
  });
});

const qualStars = document.querySelectorAll(".star");

// add click listener to each star
qualStars.forEach( star => {
    star.addEventListener("click", ()=> {
        recheckStars( star );
    });
});

const starClearButtons = document.querySelectorAll(".star-clear-button");

// listener for 'clear' button
starClearButtons.forEach( button => {
    button.addEventListener("click", ()=>{
        recheckStars( button );
    });
});

//
function recheckStars( buttonPressed ){
    //gets sibling stars based on parentElement of button
    const siblingStars = buttonPressed.parentElement.querySelectorAll(".star");

    //gets input element baed on parentElement of button
    const starInputField = buttonPressed.parentElement.querySelector("input");

    if( buttonPressed.textContent == "clear"){
        valueFilter = 0;
    } else {
        valueFilter = buttonPressed.dataset.value;
    }

    // for some reason.
    // if || 0 is not there value will somehow end up undefined
    starInputField.value = valueFilter || 0;
    
    // select stars and deselect stars based on filter
    siblingStars.forEach( star => {
        if( star.dataset.value <= valueFilter){
            star.classList.add("star-checked");
        } else {
            star.classList.remove("star-checked");
        }
    }); 
}


const robotBrokeBox = document.querySelector("input[value='Broke']");
const brokeSubmitButton = document.querySelector("#broke-button");
const submitButton = document.querySelector("#aaaa");


// one submit button requires some fields to be filled out, when one submit button does not
// this code toggles visibility between them based on if the robot broke or not
robotBrokeBox.addEventListener("change", () => {
    const brokeBool = robotBrokeBox.checked;
    submitButton.style.display = brokeBool ? "none" : "block";
    brokeSubmitButton.style.display = brokeBool ? "block" : "none";
});

const scoreButtons = document.querySelectorAll(".score-button");

// the goal of this code is that it finds the nearest score and changes it
scoreButtons.forEach(button => {
    button.addEventListener("click", () => {

        // fancy way of finding nearest number score
        var previousSibling = button.previousElementSibling.previousElementSibling;
        var score;
        if( [...previousSibling.classList].includes("score-value")){
            score = previousSibling;
        } else {
            score = button.nextElementSibling;
        }

        //change score by converting string -> integer
        const buttonValue = button.dataset.value;
        const currentScore = score.textContent;
        const newScore = Math.max(0, parseInt(currentScore) + parseInt(buttonValue));
        score.textContent = newScore;

        //change input element value
        const scoreInputField = score.nextElementSibling;
        scoreInputField.value = newScore;
    });
});


