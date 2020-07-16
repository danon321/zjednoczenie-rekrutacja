$(document).ready(function () {
  $('input[type=submit]').click(function(){
    imie_wzor = /^[a-zA-ZąęćżźńłóśĄĆĘŁŃÓŚŹŻ]{3,}\s[a-zA-ZąęćżźńłóśĄĆĘŁŃÓŚŹŻ]{3,}$/
          if($("#form_imie").val()=='') {
            $('#error1').css({display:"block",opacity:1});
              return false;
          }
          else
          {
            if ($("#form_imie").val().search(imie_wzor)!=0){
              $('#error1').css({display:"block",opacity:1}).text("Błędnie wprowadzone imie i nazwisko");
            return false;
            }
            else
            return true;
          }   
  });
});

$(document).ready(function () {
  $('input[type=submit]').click(function(){
    email_wzor = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
          if($("#form_email").val()=='') {
            $('#error2').css({display:"block",opacity:1});
              return false;
          }
          else
          {
            if ($("#form_email").val().search(email_wzor)!=0){
              $('#error2').css({display:"block",opacity:1}).text("Błędny email");
            return false;
            }
            else
            return true;
          }       
  });
});


$(document).ready(function () {
  $('.error').mouseover(function(){
    $(this).animate({opacity:0,display:"none"},500);
  });
});

var x = document.getElementById("myTopnav");

$(document).ready(function (){
  $( ".icon" ).on( "click", function () {
    if (x.className === "menu-right")
    {
     x.className += " responsive";
    } else {
      x.className = "menu-right";
   }
  });
});

// function myFunction() {
//   var x = document.getElementById("myTopnav");
//   if (x.className === "menu-right")
//   {
//     x.className += " responsive";
//   } else {
//     x.className = "menu-right";
//   }
// }

$(document).ready(function(){
  $(".menu-content").on("click",function(){

     x.className = "menu-right";
   
  });
});

// function schowajMenu()
// {
//   if (myFunction()=== true)
//   var x = document.getElementById(".menu-right.responsive.a").style.display = "none";
   
// }


// Get the height of the header
var headerHeight = $("div.menu").height();
// Attach the click event
$('a[href*="#"]').bind("click", function(e) {
    e.preventDefault();

    var target = $(this).attr("href"); //Get the target
    var scrollToPosition = $(target).offset().top - headerHeight;
    
    $('html').animate({ 'scrollTop': scrollToPosition }, 600, function(){
      
        window.location.hash = "" + target;
        // This hash change will jump the page to the top of the div with the same id
        // so we need to force the page to back to the end of the animation
        
        $('html').animate({ 'scrollTop': scrollToPosition }, 0);
    });

});