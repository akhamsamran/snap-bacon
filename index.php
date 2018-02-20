<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<title>Snap-Bacon</title>
<!--		<script> type="text/javascript" src="script.js"</script>-->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	</head>
	<body>
		<script>
			$(document).ready(function()
			{
				$("#baconButton").click(function()
				{
					$.getJSON('https://baconipsum.com/api/?callback=?',
						{ 'type':'all-meat', 'paras':'6' },
						function(baconGoodness)
						{
							if (baconGoodness && baconGoodness.length > 0)
							{
								$("#baconIpsumOutput").html('');
								for (var i = 0; i < baconGoodness.length; i++)
									$("#baconIpsumOutput").append('<p>' + baconGoodness[i] + '</p>');
								$("#baconIpsumOutput").show();
							}
						});
				});
			});
		</script>

		<div id="baconIpsumOutput">
			<p></p>
		</div>
		<input id="baconButton" type="button" value="Give me bacon">





	</body>
</html>