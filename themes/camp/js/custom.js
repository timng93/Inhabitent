(function($) {

    $(document).ready(function() {

        $(".search-submit").click(function(event){
            //event.preventDefault();
            $("input.search-field").toggle("slow");
            $("input.search-field").focus();

        });


       
            $(window).scroll(function() { 
              if ($(document).scrollTop() > 600) { 
                $("ul.nav-menu li a").css("color", "#ff0000"); 
              }
               else{ $("ul.nav-menu li a").css("color", "#248A83"); 
              }
            });
        

       
        

    
    //your code here
   // $('body').append('Maggie Cheung');//just testing 

    //focus and learn will be used for toggling search metho
    });
})(jQuery);

//IIFE

//immediately invoked function expression

