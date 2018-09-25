
$("#submit").click(function()
{ 
  var firstname=$("#firstname").val();
  var lastname=$("#lastname").val();
  if(firstname!=''||lastname!='')
  {
  	return true;
  }
  else
  {
    alert("Please fill all the form fields!!!!");
  }
});
