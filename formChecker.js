function formCheck() {
  let burgerCount = document.getElementById('Burgers').value;
  let fryCount = document.getElementById('Fries').value;
  let drinkCount = document.getElementById('Drinks').value;
  let userName = document.getElementById('Username').value;
  let password = document.getElementById('Password').value;
  let shippingType = document.querySelector('input[name="shipping"]:checked');
  let flag = true;
  if(burgerCount=="" || burgerCount < 0) {
    flag = false;
	alert("Please enter a valid quantity for burgers");
  }
  if(fryCount=="" || fryCount < 0) {
    flag = false;
	alert("Please enter a valid quantity for fries");
  }
  if(drinkCount=="" || fryCount < 0) {
    flag = false;
	alert("Please enter a valid quantity for drinks");
  }
  if(userName=="") {
    flag = false;
  }
  if(password =="") {
    flag = false;
	alert("Password field cannot be empty");
  }
  if(shippingType==null) {
    flag = false;
	alert("Please select a shipping option");
  }
  return flag;
}
