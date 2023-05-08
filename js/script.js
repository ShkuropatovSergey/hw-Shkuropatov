var header_nav = $("#navbar");
$(".burger").click(function(){
    // if( header_nav.hasClass('animated') ) return;
    if( !header_nav.hasClass('animated') ){
        var screen_width = $(window).width();
console.log(screen_width);
        header_nav.addClass('animated');
        if( header_nav.hasClass('open') ){
            // header_nav.css('left', screen_width + 'px').css('display', 'flex');
            header_nav.animate({
                'left': screen_width + 'px'
            }, 1000, function(){
                header_nav.removeClass('animated');
            });
    
            header_nav.removeClass('open');
        }else{
            header_nav.css('left', screen_width + 'px').css('display', 'flex');
            header_nav.animate({
                'left': 0
            }, 1000, function(){
                header_nav.removeClass('animated');
            });
    
            header_nav.addClass('open');
        }

    }
});

// рамка вокруг фото
var i=0;
function myLoop () {          
    setTimeout(function () {           
       i++;          
       
    if(i == 1) {              
        document.querySelector(".photo").style.borderLeft="5px solid blue"; 
        document.querySelector(".photo").style.borderTop="5px solid red"; 
        document.querySelector(".photo").style.borderRight="5px solid yellow"; 
        document.querySelector(".photo").style.borderBottom="5px solid green";         
    };

    if(i == 2) {              
        document.querySelector(".photo").style.borderLeft="5px solid green"; 
        document.querySelector(".photo").style.borderTop="5px solid blue"; 
        document.querySelector(".photo").style.borderRight="5px solid red"; 
        document.querySelector(".photo").style.borderBottom="5px solid yellow";         
    };

    if(i == 3) {             
        document.querySelector(".photo").style.borderLeft="5px solid yellow"; 
        document.querySelector(".photo").style.borderTop="5px solid green"; 
        document.querySelector(".photo").style.borderRight="5px solid blue"; 
        document.querySelector(".photo").style.borderBottom="5px solid red";
    }; 

    if(i == 4) { 
        document.querySelector(".photo").style.borderLeft="5px solid red"; 
        document.querySelector(".photo").style.borderTop="5px solid yellow"; 
        document.querySelector(".photo").style.borderRight="5px solid green"; 
        document.querySelector(".photo").style.borderBottom="5px solid blue";        
    };

       if (i < 5) {            
          myLoop();            
       }    
       if (i == 4) {            
        i = 0;            
     }                   
    }, 1000)
 }
    myLoop();
