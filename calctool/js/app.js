const calculateButton = document.querySelector(".btn"); 
// Function for calculating Meter
calculateButton.addEventListener("click", calculateMeter);
  
function calculateMeter() {
  
    /* Getting input from user into height variable.
    Input is string so typecasting is necessary. */
    const cm = document.querySelector(".height").value;
  
    /* Getting input from user into weight variable. 
    Input is string so typecasting is necessary.*/
  
    const result = document.querySelector(".result");
  
    // Checking the user providing a proper
    // value or not
    if (cm === "" || isNaN(cm)) 
        result.innerHTML = "Voer een geldige getal in!";
  
    // If both input is valid, calculate the Meter
    else {
  
        // Calculating to meter
        const m = cm/100;
  
        //Shows results
        result.innerHTML = '<p>' + m + ' Meter' + '</p>'
    }
}