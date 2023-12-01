$(document).ready(function () {
	

	$("#image_list a").each(function () {
		var swappedImage = new Image();
		swappedImage.src = $(this).attr("href");

	});

	$("#image_list a").click(function (evt) {
		var imageURL = $(this).attr("href");
		$('#image').fadeOut(1000,function(){
			$("#image").attr("src", imageURL).fadeIn(1000);
		
		});
		var caption = $(this).attr("title");
		$('#caption').fadeOut(1000,function(){
			$("#caption").text(caption).fadeIn(1000);

		})
		evt.preventDefault();
	}); 

	$("li:first-child a").focus();
}); 