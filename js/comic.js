(function($){
	$(document).ready(function(){
		if($("#xkcd").length>0){
			const cominNumber = $("#xkcd").data("number");
			console.log(cominNumber);

			$.get("https://xkcd.vercel.app/?comic=" + cominNumber, function(data){

				const html= `<img src="${data.img}" />`;

				$("#xkcd").html(html);
			})
		}
	})
})(jQuery)
