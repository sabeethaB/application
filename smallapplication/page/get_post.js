$(document).ready(function() {
$("input[type=radio]").change(function() {
var method = $(this).val();
$("#form").attr("method", method); 
});

$("#submit").click(function() {
var fname = $("#fname").val();
var lname = $("#lname").val();
if (fname != '' || lname != '') {
return true;
} else {
alert("Please fill all fields...!!!!!!");
return false;
}
});
});