<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
 <input type="text" class="form-control border-top-0 border-left-0 border-right-0 rounded-0 pl-4" placeholder="Location" id="tags" name="location"/>
</body>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script><script>
$( function() {
<?php	
$search_info = array('Abha','Abqaiq','Al-Ba?ah','Al-Dammam','Al-Hufuf','Al-Jawf','Al-Kharj (oasis)','Al-Khubar','Al-Qa?if','Al-?a?if','?Ar?ar','Buraydah','Dhahran','?a?il','Jiddah','Jizan','Khamis Mushayt','King Khalid Military City','Mecca','Medina','Najran','Ras Tanura','Riyadh','Sakaka','Tabuk','Yanbu?');

echo 'var availableTags = '.json_encode($search_info).';'; 
?>
$( "#tags" ).autocomplete({

 source: function(request, response) {
 var results = $.ui.autocomplete.filter(availableTags, request.term);
 response(results.slice(0, 10));

},
select: function(event, ui) {
}
});

});
</script>
</html>
