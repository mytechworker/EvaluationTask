document.addEventListener("DOMContentLoaded", function(event) { 

    const totalButton = document.getElementById('cta-btn');
  
    totalButton.addEventListener('click', () => {

        if(typeof(Storage) !== "undefined") {
            if (localStorage.clickcount) {
                localStorage.clickcount = Number(localStorage.clickcount)+1;
            } else {
            localStorage.clickcount = 1;
         }
            
        } 
     
    });
});





