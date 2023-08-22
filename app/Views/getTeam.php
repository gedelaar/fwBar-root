<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <div 
	data-article="team-indeling"
	data-param-teamcode="1315"
	data-param-lokaleteamcode="0"
	data-param-teampersoonrol="SPELER"
	data-param-toonlidfoto="NEE"
	data-fields="relatiecode,naam,geslacht,rol,functie,einddatum,email,email2,telefoon,telefoon2,mobiel,foto" 
></div> 

<!-- This should be pasted once in the <head> for the best performance. If you already have jQuery included skip that script --> 
<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script> 
<script src="https://dexels.github.io/navajofeeds-json-parser/js/dist/feed-0.0.1.js"></script> 
<script> 
feed.init({ 
	clientId: "L4dEA1bOHO" 
}); 
$(document).ready(function(){
  $("button").click(function(){
    $.getJSON("demo_ajax_json.js", function(result){
      $.each(result, function(i, field){
        $("div").append(field + " ");
      });
    });
  });
});
</script>
  <title>Codeigniter AJAX Tutorial - Fetch Data from Database Example</title>
</head>
<body>
<button>Get JSON data</button>
</body>
</html>

