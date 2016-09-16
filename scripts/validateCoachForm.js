// validateCoachForm.js

function validateCoachForm()
{
  var coach_formFormObj = document.getElementById("coach_form");
  var fname = coach_formFormObj.fname.value;
  var lname = coach_formFormObj.lname.value;
  var address = coach_formFormObj.address.value;
  var zip = coach_formFormObj.zip.value;
  var phone = coach_formFormObj.phone.value;
  var email = coach_formFormObj.email.value;
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
  
  if (!validateEmail(email))
    {
      alert("Please enter a valid email address.")
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
  
  function validateEmail(email)
  {
    var p = email.search(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})$/);
    if (p == 0)
      return true;
    else
      return false;
  }
  

