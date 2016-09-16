# Lacrosse_Team_Management application - PHP, MySQL, JavaScript, JQuery
Lacrosse Team Management Application made using PHP, MySQL, JavaScript, JQuery, XHTML, and CSS

Database Structure:

	Table Name: Coach_Information
			
			Fields:		coach_id 	PRIMARY (auto_increment)
					coach_first_name
					coach_last_name
					coach_address
					coach_state
					coach_zip_code
					coach_phone
					coach_email
					team_name

	Table Name: Game_Information

			Fields:		game_id PRIMARY (auto_increment)
					game_date
					team1_name
					team2_name
					team1_score
					team2_score
					winning_team
					losing_team
					tie_game

	Table Name: Game_Statistics

			Fields:		player_id PRIMARY (auto_increment)
					game_date
					player_first_name
					player_last_name
					team_name
					position
					goals
					blocks
					assists

	Table Name: Player_Statistics

			Fields:		player_id PRIMARY (auto_increment)
					player_first_name
					player_last_name
					team_name
					position
					total_goals
					total_blocks
					total_assists
	
	Table Name: Team_Information

			Fields:		team_id UNIQUE (auto_increment)
					team_name PRIMARY
					team_color1
					team_color2
					coach_first_name
					coach_last_name
					wins
					loses
					ties

	Table Name: Team_Roster

			Fields:		player_id PRIMARY
					player_first_name
					player_last_name
					player_age
					player_address
					city
					state
					player_zip_code
					player_phone
					team_name

	Table Name: userauth

			Fields:		ID PRIMARY (auto_increment
					Auth_Type
					Username
					Password

