// validateGameForm

function validateGameForm()
{
  var game_formFormObj = document.getElementById("game_form");
  var date = game_formFormObj.date.value;
  var team1 = game_formFormObj.team1.value;
  var team2 = game_formFormObj.team2.value;
  var scoreone = game_formFormObj.scoreone.value; 
  var scoretwo = game_formFormObj.scoretwo.value;
  var everythingOK = true;
  
  if (!validateDate(date))
    {
        alert("Error: Invalid game date field.\n Must be in the form: 00/00/0000");
        everythingOK = false;
    }
    
  if (!validateTeam(team1))
    {
     alert("Error: Please input a name for team 1")
     everythingOK = false;
    }

  if (!validateTeam(team2))
  {
     alert("Error: Please input a name for team 2")
     everythingOK = false;
  }

  if (!validateScore(scoreone))
    {
        alert("Error: Invalid entry for team 1 score.\n Must be a number between 0 and 99");
        everythingOK = false;
    }
    
  if (!validateScore(scoretwo))
    {
        alert("Error: Invalid entry for team 2 score.\n Must be a number between 0 and 99");
        everythingOK = false;
    }
  
  if (everythingOK)
    {
        alert("Your information has been sent.\n Thank you");
        return true;
    }
  else
        return false;
} 

function validateDate(date)
{
    var p = date.search(/^\d{2}\/\d{2}\/\d{4}$/);
    if (p == 0)
        return true;
    else
        return false;
}

function validateTeam(team1)
{
  var p = team1.search(/^[-'\w\s]+$/);
  if (p == 0)
      return true;
  else
      return false;
}

function validateTeam(team2)
{
  var p = team2.search(/^[-'\w\s]+$/);
  if (p == 0)
      return true;
  else
      return false;
}

function validateScore(scoreone) 
{
    var p = scoreone.search(/^\d{1,2}$/);
    if (p == 0)
        return true;
    else
        return false;
}
function validateScore(scoretwo) 
{
    var p = scoretwo.search(/^\d{1,2}$/);
    if (p == 0)
        return true;
    else
        return false;
}


