function set_error(id, message) {
  element = document.getElementById(id);
  element.innerHTML = message;
}

function Validateform() {
  var ret = false;

  var name = document.forms["form"]["name"].value.trim();
  console.log(name.length);
  var email = document.forms["form"]["mail"].value;
  console.log(email.length);
  var tel = document.forms["form"]["tel"].value;
  console.log(tel.length);

  if (name.length == 0) {
    set_error("name-r", "Please fill the user name");
  } else {
    set_error("name-r", "");
  }
  if (email.length == 0) {
    set_error("mail-r", "Please fill the your email");
  } else {
    set_error("mail-r", "");
  }

  if (tel.length == 0) {
    set_error("tel-r", "Please fill the your Mobile no.");
  } else {
    set_error("tel-r", "");
  }
  if (name.length == 0 || email.length == 0 || tel.length == 0) {
    ret = false;
  } else {
    var filter = /([+91]?)([6789][0-9]{10,13})/g;

    if (filter.match(tel)) {
      if (tel.length == 10 || tel.length == 13) {
        set_error("tel-r", "");

        ret = true;
        Swal.fire({
          position: "center",
          icon: "success",
          title: "Your Form has been submitted",
          showConfirmButton: false,
          timer: 3500,
        });
      } else {
        ret = false;
        set_error("tel-r", "Please put the valid mobile number");
      }
    } else {
      ret = false;
      set_error("tel-r", "Please put the valid mobile number");
    }
  }
  console.log(ret);
  return ret;
}
