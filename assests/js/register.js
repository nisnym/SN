$(document).ready(function(){
	//on click hide
	$("#signup").click(function(){
		$("#first").slideUp("slow",function(){
			$("#second").slideDown("slow");
		});
	});
	//on click show login
	$("#signin").click(function(){
		$("#second").slideUp("slow",function(){
			$("#first").slideDown("slow");
		});
	});
});