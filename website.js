function myFunction(idNum){
    var x = document.getElementById('adminLoginDiv');
    var y = document.getElementById('contactFormDiv');
    
    if(idNum == 1){
        x.style.display = "none";
        y.style.display = "block";
    } else if(idNum == 2){
        x.style.display = "block";
        y.style.display = "none";
    } else {
        x.style.display = "none";
        y.style.display = "none";
        
    }
}
    
function myAdminFunction(idNum){
    
    var x = document.getElementById('adminContactFormDiv');
    var y = document.getElementById('jobsDiv');
    
    if(idNum == 1){
        x.style.display = "block";
        y.style.display = "none";
    } else if(idNum == 2) {
        x.style.display = "none";
        y.style.display = "block";
    } else {
        x.style.display = "none";
        y.style.display = "none";
    }
}
    
        

        

