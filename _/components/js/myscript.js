document.getElementById("footer").innerHTML =
"<p>&copy;  " + new Date().getFullYear() + " @Toan. All rights reserved.</p>";

(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.3";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
$(function() {
	//data-spy
	$("body").scrollspy({target:'.example'})
	//auto active
	$("#home a:contains('Home')").parent().addClass('active');
	
	$("#exercise a:contains('Exercise')").parent().addClass('active');
	$("#life-style-diet a:contains('Health')").parent().addClass('active');
	$("#life-style-habit a:contains('Health')").parent().addClass('active');
	$("#life-style-yoga a:contains('Health')").parent().addClass('active');
	$("#science a:contains('Science&Art')").parent().addClass('active');
	// make menu auto load
	$('ul.nav li.dropdown').hover(function(){
$('.dropdown-menu', this).fadeIn();
},function(){
$('.dropdown-menu', this).fadeOut('fast');
	} );
	$("[data-toggle='tooltip']").tooltip({animation:true});
}) ;

