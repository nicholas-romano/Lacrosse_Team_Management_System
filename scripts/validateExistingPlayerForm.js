//validatePlayerForm.js

function validateExistingPlayerForm()
{
  var player_formFormObj = document.getElementById("existing_player_form");
  var date = player_formFormObj.date.value;
  var fname = player_formFormObj.fname.value;
  var lname = player_formFormObj.lname.value;
  var s1 = player_formFormObj.s1.value;
  var s2 = player_formFormObj.s2.value;
  var everythingOK = true;
  
  if (!validateDate(date))
    {
        alert("Error: Invalid game date field.\n Must be in the form: 00/00/0000");
        everythingOK = false;
    }

  if (!validateName(fname))
    {
      alert("Please enter your first name")
      everythingOK = false;
    }

  if (!validateName(lname))
    {
      alert("Please enter your last name")
      everythingOK = false;
    }

  if (!validateScore(s1))
    {
      alert("Please enter a number for box 1.")
      everythingOK = false;
    }

  if (!validateScore(s2))
     {
       alert("Please enter a number for box 2.")
       everythingOK = false;
      }
      
   if (everythingOK)
    {
      alert("Your information has been sent.\n Thank you")
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

  function validateName(fname)
  {
    var p = fname.search(/^[-'\w\s]+$/);
  if (p == 0)
      return true;
  else
      return false;
  }

   function validateName(lname)
  {
    var p = lname.search(/^[-'\w\s]+$/);
  if (p == 0)
      return true;
  else
      return false;
  }

  function validateScore(s1)
  {
    var p = s1.search(/^\d{1,2}$/);
  if (p == 0)
      return true;
  else
      return false;
  }

  function validateScore(s2)
  {
    var p = s2.search(/^\d{1,2}$/);
  if (p == 0)
      return true;
  else
      return false;
  }

