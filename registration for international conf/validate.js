function validateForm()
{
  var name=document.addressform.yourname.value;
  var phno=document.addressform.phone1.value;
  var email=document.addressform.email.value;
  if(name==null || name=="")
  {
    alert("Enter Name");
    document.addressform.yourname.focus();
    return false;
  }
  var atpos,dotpos;
  atpos=email.indexOf('@');
  dotpos=email.lastIndexOf('.');
  if(atpos<1||dotpos<atpos+2||dotpos+2>=email.length)
  {
    alert("Please enter valid email")
    document.addressform.email.focus();
    return false;
  }
  if(phno==null)
  {
  	alert("Please enter mobile number");
  	document.addressform.phone1.focus();
    return false;
  }
  if(isNaN(phno))
  {
  	alert("Enter a valid mobile number");
  	document.addressform.phone1.focus();
    return false;
  }
  if(phno.length!=10)
  {
  	alert("Enter a 10 digit mobile number");
  	document.addressform.phone1.focus();
    return false;
  }
  if(zip==null)
  {
  	alert("Please enter Zipcode number");
  	document.addressform.zip.focus();
    return false;
  }
  if(isNaN(zip))
  {
  	alert("Enter a valid zip number");
  	document.addressform.zip.focus();
    return false;
  }
  
  alert("Submitted Successfully")
}
