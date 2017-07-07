function check_empty() {
if (document.getElementById('vehicle_model').value == "" || document.getElementById('vehicle_description').value == "" || document.getElementById('vehicle_name').value == "") {
alert("Fill All Fields !");
} else {
//document.getElementById('form').submit();
window.location.assign("addvehicle.php?pt="+(document.getElementById('vehicle_model').value)+"&pb=" + (document.getElementById('vehicle_description').value) + "&pn="+(document.getElementById('vehicle_name').value) + "&us="+(document.getElementById('user').value));
}
}
//Function To Display Popup
function div_show() {
document.getElementById('abc').style.display = "block";
document.getElementById('abc').style.visibility = "visible";
}
//Function to Hide Popup
function div_hide(){
document.getElementById('abc').style.display = "none";
}