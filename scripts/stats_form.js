function displayStatsForm(value) {
		    switch (value) {
			case 'Attacker':
			    $('.stats_form').html('<table>' +
							'<tr>' +
							    '<th colspan="2">Position: Attacker</th>' +
							'</tr>' +
							'<tr>' +
							    '<td>Goals Scored:</td>' +
							    '<td><input type="text" id="s1" name="attacker_goals" size="2" maxlength="2" /></td>' +
							'</tr>' +
							'<tr>' +
							    '<td>Assists made:</td>' +
							    '<td><input type="text" id="s2" name="attacker_assists" size="2" maxlength="2" /></td>' +
							'</tr>' +
							'<tr>' +
							    '<td colspan="2"><input type="submit" value="submit" /></td>' +
							'</tr>' +
						  '</table>');
			break;
			case 'Middie':
			    $('.stats_form').html('<table>' +
							'<tr>' +
							    '<th colspan="2">Position: Middie</th>' +
							'</tr>' +
							'<tr>' +
							    '<td>Goals Scored:</td>' +
							    '<td><input type="text" id="s1" name="middie_goals" size="2" maxlength="2" /></td>' +
							'</tr>' +
							'<tr>' +
							    '<td>Assists made:</td>' +
							    '<td><input type="text" id="s2" name="middie_assists" size="2" maxlength="2" /></td>' +
							'</tr>' +
							'<tr>' +
							    '<td colspan="2"><input type="submit" value="submit" /></td>' +
							'</tr>' +
						  '</table>');
			break;
			case 'Defender':
			    $('.stats_form').html('<table>' +
							'<tr>' +
							    '<th colspan="2">Position: Defender</th>' +
							'</tr>' +
							'<tr>' +
							    '<td>Blocks made:</td>' +
							    '<td><input type="text" id="s1" name="defender_blocks" size="2" maxlength="2" /></td>' +
							'</tr>' +
							'<tr>' +
							    '<td>Assists made:</td>' +
							    '<td><input type="text" id="s2" name="defender_assists" size="2" maxlength="2" /></td>' +
							'</tr>' +
							'<tr>' +
							    '<td colspan="2"><input type="submit" value="submit" /></td>' +
							'</tr>' +
						  '</table>'); 
			break;
			case 'Goalie':
			    $('.stats_form').html('<table>' +
							'<tr>' +
							    '<th colspan="2">Position: Goalie</th>' +
							'</tr>' +
							'<tr>' +
							    '<td>Blocks Made:</td>' +
							    '<td><input type="text" id="s1" name="goalie_blocks" size="2" maxlength="2" /></td>' +
							'</tr>' +
							'<tr>' +
							    '<td>Assists made</td>' +
							    '<td><input type="text" id="s2" name="goalie_assists" size="2" maxlength="2" /></td>' +
							'</tr>' +
							'<tr>' +
							    '<td colspan="2"><input type="submit" value="submit" /></td>' +
							'</tr>' +
						  '</table>'); 
			break;
		    }
		}