var id;
var num;
$(".showModal").click(function() {

   	if (history.pushState) {
	  
	  var newurl = window.location.protocol + "//" + window.location.host + window.location.pathname + '?id='+id;
	  window.history.pushState({path:newurl},'',newurl);
     }
	num = 0;
	id = $(this).attr("id");
  $("#Modal-"+id+"-"+num).addClass("is-active");  

});


	$(".next").click(function(){
		if($("#Modal-"+id+"-"+(num+1)).length){
		$("#Modal-"+id+"-"+num).removeClass("is-active");  
		num = num + 1;
		$("#Modal-"+id+"-"+num).addClass("is-active"); 
		console.log(num);
		}
	})



	$(".previous").click(function(){
		if (num > 0){
		$("#Modal-"+id+"-"+num).removeClass("is-active");  
		num = num - 1;
		$("#Modal-"+id+"-"+num).addClass("is-active");  
		console.log(num);
		}
	})



$(".modal-close").click(function() {
   $(".modal").removeClass("is-active");
});

