/**
 * 
 */

$(document).ready(function(){
	
	
	$.post("../controller/controllerMenuChart.php",{},function(data){
        	
        	setData(data);
        	
        	
        }
        		
        );
	
    /*$("#btnClick").click(function(){
        $.post("../controller/controllerMenuChart.php",{},function(data){
        	
        	setData(data);
        	
        }
        		
        );
    });*/
    
    
    function setData(data){
    	
    	$('#mygrid').load("../controller/controllerMenuChart.php"),{}
    	chart1(data);
    }
    
    function chart1(data){
    	
    	$('#mygrid2').load("../controller/controllerChart1.php"),{}
    }
    
});