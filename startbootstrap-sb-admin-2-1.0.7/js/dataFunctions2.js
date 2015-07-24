/**
 * 
 */

$(document).ready(function() {

	$.post("../controller/controllerGetDate.php", {}, function(data) {
		
		getDates(data);

	}

	);
	
function getDates(data){
    	
    	$('#datesList').load("../controller/controllerGetDate.php"),{}

    }

});


function setdates(){

	var date=$('#chooDate').val();
	 //alert (date);

	 $.post("../controller/controllerJobByDate.php",{date:date}, function(data) {
		 
		 var dates= data;
		 //alert(dates);
		 sendIdReport(data);
	 });
	 
}

function sendIdReport(data){
	 var repId= data;
	 //alert(repId);
	 
	$.post("../controller/controllerChartByDate.php",{repId:repId}, function(data) {
		
		$('#chartDates').html(data);
	 });
};

function createChart(data){

	$('#chartDates').load("../controller/viewChartByDate.php"),{}
}

