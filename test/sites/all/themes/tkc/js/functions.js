jQuery(document).ready(function(){
	virtual_tours();
	
	
});

function virtual_tours(){    
    
    var width = jQuery(window).width();
        var tour_w = 640;
        var tour_h = 480;
        
        if(width < 704){
            tour_w = width/1.1;
            tour_h = width/1.3333333333;
        }
        
	jQuery('.tour').each(function(){
            
            var myurl = "/tour.php?url=" + jQuery(this).attr("src") + "&w=" + tour_w + "&h=" + tour_h;
            jQuery(this).attr("src",  myurl);
            
        });
        
        
        
        
	
        //myscript.src = "test.js";
		
	
		
                jQuery(".tour").attr("width",  tour_w + 20);
                jQuery(".tour").attr("height",  tour_h + 20);
		//alert(width);
    
}

