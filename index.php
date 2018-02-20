<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<title>Snap-Bacon</title>
	</head>
	<body>
		<!--snap-bacon
* create a project with a front end
* do an ajax call to bacon ipsum retrieving six paragraphs with no filler
* display the ipsum on the dom-->

		$.ajax({type: 'GET',url: 'user-guide', data: {elementId: '#user-tools'}}).done(function(html){
		var guide = {
		id: 'jQuery.PageGuide',
		title: 'What can I do here?',
		steps: [{target: '#user-tools',content:html}]
		};
		//rest of your code goes here
		});


		<form class="anyipsum-form" action="" method="get">
			<table class="anyipsum-table">
				<tbody>
					<tr class="anyipsum-paragraphs"><td class="anyipsum-left-cell">Paragraphs:</td><td class="anyipsum-right-cell"><input type="text" name="paras" value="5" maxlength="2"></td></tr>
					<tr class="anyipsum-type">
						<td class="anyipsum-left-cell">Type:</td>
						<td class="anyipsum-right-cell">
							<input id="any-ipsum-all-custom" type="radio" name="type" value="all-meat" checked="checked">
							<label for="any-ipsum-all-custom">All Meat</label>
							<input id="any-ipsum-custom-and-filler" type="radio" name="type" value="meat-and-filler">
							<label for="any-ipsum-custom-and-filler">Meat and Filler</label>
						</td>
					</tr>
					<tr class="anyipsum-start-with">
						<td class="anyipsum-left-cell"></td>
						<td class="anyipsum-right-cell">
							<input id="start-with-lorem" type="checkbox" name="start-with-lorem" value="1" checked="checked">
							<label for="start-with-lorem">Start with 'Bacon ipsum dolor amet...'</label>
						</td>
					</tr>
					<tr class="anyipsum-spicy">
						<td class="anyipsum-left-cell"></td>
						<td class="anyipsum-right-cell">
							<input id="spicy-jalapeno" type="checkbox" name="make-it-spicy" value="1">
							<label for="spicy-jalapeno">Make it spicy</label>
						</td>
					</tr>
					<tr class="anyipsum-submit"><td class="anyipsum-left-cell"></td><td class="anyipsum-right-cell"><input type="submit" value="Give Me Bacon"></td></tr>
				</tbody>
			</table>
		</form>






	</body>
</html>