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

tabs.forEach( tab => {
  
  tab.addEventListener( "click", () => {
    tabs.forEach(tab => tab.classList.remove("active"));
    tabContents.forEach(content => content.classList.remove("tab-active"));

    document.querySelector(tab.dataset.target).classList.add("tab-active");
    tab.classList.add("active");
  });
});

qualStars = document.querySelectorAll(".star");

qualStars.forEach( star => {
    star.addEventListener("click", ()=> {
        recheckStars( star );
    });
});

starClearButtons = document.querySelectorAll(".star-clear-button");

starClearButtons.forEach( button => {
    button.addEventListener("click", ()=>{
        recheckStars( button );
    });
});

function recheckStars( buttonPressed ){
    siblingStars = buttonPressed.parentElement.querySelectorAll(".star");

    if( buttonPressed.textContent == "clear"){
        valueFilter = 0;
    } else {
        valueFilter = buttonPressed.dataset.value;
    }
    
    siblingStars.forEach( star => {
        if( star.dataset.value <= valueFilter){
            star.classList.add("star-checked");
        } else {
            star.classList.remove("star-checked");
        }
    }); 
}

noneBoxes = document.querySelectorAll("input[data-id='none']");

noneBoxes.forEach(noneBox => {
    noneBox.addEventListener("change", () => {
        siblingBoxes = noneBox.parentElement.parentElement.querySelectorAll("input:not([data-id='none'])");
        siblingBoxes.forEach(box => {
            box.checked = false;
        })
    });
});

robotBrokeBox = document.querySelector("input[value='Broke']");
brokeSubmitButton = document.querySelector("#broke");

robotBrokeBox.addEventListener("change", () => {
    vis = robotBrokeBox.checked ? "block" : "none";
    brokeSubmitButton.style.display = vis;
});

scoreButtons = document.querySelectorAll(".score-button");

scoreButtons.forEach(button => {
    button.addEventListener("click", () => {
        var previousSibling = button.previousElementSibling;
        var score;
        if( [...previousSibling.classList].includes("score-value")){
            score = previousSibling;
        } else {
            score = button.nextElementSibling;
        }
        const buttonValue = button.dataset.value;
        const currentScore = score.textContent;
        const newScore = parseInt(currentScore) + parseInt(buttonValue);
        score.textContent = Math.max(0,newScore);
    });
});


