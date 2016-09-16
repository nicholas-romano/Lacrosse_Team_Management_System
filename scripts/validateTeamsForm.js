// validateTeamsForm.js

function validateTeamsForm()
{
    var teams_formFormObj = document.getElementById("teams_form");
    var teamName = teams_formFormObj.teamName.value;
    var everythingOK = true;
    
    if (!validateTeam(teamName))
    {
      alert("Please enter a team name excluding spaces.")
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

  function validateTeam(teamName)
  {
    var p = teamName.search(/^[-'\w]+$/);
  if (p == 0)
      return true;
  else
      return false;
  }
  
