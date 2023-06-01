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



