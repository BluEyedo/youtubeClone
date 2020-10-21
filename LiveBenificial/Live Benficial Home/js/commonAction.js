

$(document).ready(function(){

    $(".navshowhide").on("click",function(){

     
     var main=$("#main-section");   


    var nav=$("#side-bar") 

    if(main.hasClass("leftPadding")){

        nav.hide()
    }

    else{
        nav.show();
    }  
    
    
    main.toggleClass("leftPadding");

    })

})