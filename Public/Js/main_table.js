 $(document).ready( 
        function(){           
            $('th').parent().addClass('table-heading');         
            $('tr:not(:has(th)):odd').addClass('odd'); 
            $('tr:not(:has(th)):even').addClass('even'); 
            $('td:contains("showtime")').siblings().addClass('tdhlight'); 
        } 
    ); 
    
    $(document).ready( 
        function(){ 
        	
        	
          $('#mytable td').hover(              
                function(){ 
                   
                     	 $(this).addClass('info'); 
                     $(this).css("cursor","pointer"); 
                   
                }, 
                function(){ 
                    
                    $(this).removeClass('info'); 
                    
                } 
            ); 
        } 
        
    ); 
    