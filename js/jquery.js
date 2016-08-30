// hide btn when you show login
$(document).ready(function(){
    // when log is clicked
    $("#log").click(function(){
        
        //fade in login form
        $("#disNone").fadeIn(500); 
        
        // hide login button
        $("#log").hide();
        
        // display create account
        $("#tog").show();
      
     });
     
      // when mouse leaves login form
        $("#disNone").mouseleave(function(){
       
        // Display error message
        $("#suprise").show(); 
    });
    
     // when mouse enters login form
        $("#disNone").mouseenter(function(){
       
        // hide error message
        $("#suprise").hide(); 
    });
    
        //When jumbotron is clicked
        $(".jumbotron").click(function(){
            //login form hides
            $("#disNone").hide(); 
            // login button shows 
            $("#log").show();
            //create account hides
            $("#tog").hide();
         });
 });
  

// jq ui accordion widget
$("#contact").accordion();

// jq ui date picker
$("#datepicker").datepicker();

//jq ui button widget
$("#button").button();

// radio buttons widget -- this one is extra
 
$(".radios").checkboxradio();
 


