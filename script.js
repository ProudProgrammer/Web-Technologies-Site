$(document).ready(function() {
			$("#top").hide();
			$("#top").show("slow");
			$("#leftside").hide();
			$("#leftside").show("slow");
			$("#menu>ul>li").each(function(i) {
				$(this).bind("click",function() {
					$.ajax({
						type: "GET",
						url:  "content.php",
						data: "link="+(i+1),
						success: function(msg) {
							$("#rightside").html(msg);
							$("#rightside").hide();
							$("#rightside").show("slow");
						}
					});
				});
			});
			$("#menu>ul>li:eq(0)").click();
		});