//	Internet application ID1354 Homework 
//	JS for First time user Register 
function checkShippingForm(form)
  {
    if(form.first_name.value == "") {	// Checks if the First name is empty or not
      alert("Error: Name cannot be blank!");	// If the First name is empty shows Error! 
      form.first_name.focus();
      return false;	
    }

    if(form.last_name.value == "") {	// Checks if the Last name is empty or not
      alert("Error: Last name cannot be blank!");	// If the Last name is empty shows Error! 
      form.first_name.focus();
      return false;	
    }

    if(form.first_name.value == form.last_name.value) {	// Checks if the Last name and First name are the same?
        alert("Error: First name must be different from Last name!");	// If they are the same it shows Error! 
        form.first_name.focus();
        return false;
      }

    if(form.street.value == "") {	// Checks if the Street is empty or not
      alert("Error: Street cannot be blank!");	// If the Street is empty shows Error! 
      form.street.focus();
      return false;	
    }

    if(form.postal_code.value == "") {	// Checks if the Zip/Postal code is empty or not
      alert("Error: Zip/Postal code cannot be blank!");	// If the Zip/Postal code is empty shows Error! 
      form.postal_code.focus();
      return false;	
    }

    if(form.city.value == "") {	// Checks if the City is empty or not
      alert("Error: City cannot be blank!");	// If the City is empty shows Error! 
      form.city.focus();
      return false;	
    }


    if(form.country.value == "") {	// Checks if the Country is empty or not
      alert("Error: City cannot be blank!");	// If the Country is empty shows Error! 
      form.country.focus();
      return false;	
    }

    if(form.city.value == form.country.value) {	// Checks if the City and Country are the same?
        alert("Error: City must be different from Country!");	// If they are the same it shows Error! 
        form.city.focus();
        return false;
      }

    re = /^\w+$/;	// First name and Last name letters, numbers and underscores
    if(!re.test(form.first_name.value)) {
      alert("Error: First name must contain only letters!");
      form.first_name.focus();
      return false;
    }

    re = /^\w+$/;	// Last name and Last name letters, numbers and underscores
    if(!re.test(form.last_name.value)) {
      alert("Error: Last name must contain only letters!");
      form.lastt_name.focus();
      return false;
    }

	re = /^\w+\ \d{1,}$/;	// Letter & the last number 
    if(!re.test(form.street.value)) {	// Checks if the username is empty or not
      alert("Error: Street cannot be blank! Example Street 12"");	// If the username is empty shows Error! 
      form.street.focus();
      return false;	
    }

	re = /^\d{5,}$/;	// Zip/Postal code should be 5 numbers
    if(!re.test(form.postal_code.value)) {	// Checks if the Postal code is empty or not
      alert("Error: Zip/Postal code cannot be blank!");	// If the Postal code is empty shows Error! 
      form.postal_code.focus();
      return false;	
    }

    re = /^\w+$/;	// First name and Last name letters, numbers and underscores
    if(!re.test(form.city.value)) {
      alert("Error: City must contain only letters!");
      form.city.focus();
      return false;
    }

    re = /^\w+$/;	// First name and Last name letters, numbers and underscores
    if(!re.test(form.country.value)) {
      alert("Error: Country must contain only letters!");
      form.country.focus();
      return false;
    }

	

    return true;
  }