$(document).ready(function()
{

$.ajax(
{
	url :"http://localhost/DBMS-project/unti1.php",
	type:"GET",


   // dataType: 'json',
    success: function (data) {
       // var am1=html(data.am1);
        //var am2=$('am2').html(data.am2);
       // var am3=data[0].am1;


		console.log(5+6);
		console.log(data);

		var month=["may","june","july","august","september","october"];
		//var charge=["am3",300,478,305,778,654.5,348.7];
		//var charge=[data[0].am1];
		//<?php echo data.charge[0];?>
		//var month=[];
		var charge=[];
		//alert(data[0]);
		//console.log(data[10]);
		var obj=JSON.parse(data);
		console.log(obj[0]);
	for(var i in obj)
		{
			//month.push("fuck"+ obj[i].month);
			charge.push(obj[i]);
			//console.log(data[i].month);
			}
	
		var chardata={
			labels:month,
			datasets:[
			{
				label:'month',
				fill: false,
				lineTension:0.1,

                data:charge,
				backgroundcolor: "rgba(59,89,252,0.75)",
				borderColor:"rgba(59,89,252,1)",
				pointHoverBackgroundColor:"rgba(59,89,252,1)",
				pointHiverBorderColor:"rgba(59,89,252,1)"
				

			}
			]
		}
		var ctx=document.getElementById("mycanvas");

		var Linegraph= new Chart(ctx,{
        type: 'line',
    data: chardata
    
		})


	}
})


});