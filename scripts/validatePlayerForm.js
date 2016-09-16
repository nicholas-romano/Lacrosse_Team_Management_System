//validatePlayerForm.js

function validatePlayerForm()
{
  var player_formFormObj = document.getElementById("player_form");
  var fname = player_formFormObj.fname.value;
  var lname = player_formFormObj.lname.value;
  var age = player_formFormObj.age.value;
  var address = player_formFormObj.address.value;
  var zip = player_formFormObj.zip.value;
  var phone = player_formFormObj.phone.value;
  var everythingOK = true;

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

  if (!validateAge(age))
    {
      alert("Please enter your age\n Must be a number.")
      everythingOK = false;
    }

  if (!validateAddress(address))
    {
      alert("Please enter your address.\n Must be alphanumeric and exclude punctuation marks")
      everythingOK = false;
    }

  if (!validateZip(zip))
    {
      alert("Please enter your U.S. or Canadian zip code\n in the format: 00000 for U.S., A0A 0A0 for Canada.")
      everythingOK = false;
    }

  if (!validatePhone(phone))
    {
      alert("Please enter your phone number with area code.\n Must be in the format: 000-000-0000 or 000 000 0000.")
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

  function validateAge(age)
  {
    var p = age.search(/^\d{1,2}$/);
  if (p == 0)
      return true;
  else
      return false;
  }

  function validateAddress(address)
  {
    var p = address.search(/^[\w\s]{1,}$/);
  if (p == 0)
      return true;
  else
      return false;
  }

  function validateZip(zip)
  {
    var p1 = zip.search(/^\d{5}$/);
    var p2 = zip.search(/^\D{1}\d{1}\D{1}\s{1}\d{1}\D{1}\d{1}$/);
    if (p1 == 0 || p2 == 0)
      return true;
    else
      return false;
  }

  function validatePhone(phone)
  {
    var p = phone.search(/^\d{3}[-\s]{1}\d{3}[-\s]{1}\d{4}$/);
    if (p == 0)
      return true;
    else
      return false;
  }

