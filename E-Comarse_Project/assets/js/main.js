// <!-- <JS for Account(Signup & Login) Form> -->
let RegForm = document.getElementById("RegForm");
let LoginForm = document.getElementById("LoginForm");
let Indicator = document.getElementById("Indicator");

function login() {
  LoginForm.style.transform = "translateX(0px)";
  RegForm.style.transform = "translateX(0px)";
  Indicator.style.transform = "translateX(100px)";
}


function register() {
  LoginForm.style.transform = "translateX(300px)";
  RegForm.style.transform = "translateX(300px)";
  Indicator.style.transform = "translateX(0px)";
}



// <!-- <JS Navbar> -->

document.addEventListener("DOMContentLoaded", function () {
  window.addEventListener('scroll', function () {
    if (window.scrollY > 50) {
      document.getElementById('navbar_top').classList.add('fixed-top');
      navbar_height = document.querySelector('.navbar').offsetHeight;
      document.body.style.paddingTop = navbar_height + 'px';
    } else {
      document.getElementById('navbar_top').classList.remove('fixed-top');
      document.body.style.paddingTop = '0';
    }
  });
});




// <!-- <register page & Login Page> -->

function checkname1(e) {
  let na = $(e).val();
  var nam = na.replace(/[^A-Za-z ]/g, '');
  $(e).val(nam);
}

function validphone(p) {
  let mob = $(p).val();
  var phone = mob.replace(/[^0-9]/g, '');
  $(p).val(phone);
}
function checknumber() {
  let mob =$('#ph').val();
  var number=$('#ph').val();
  var email_reg=$('#email_reg').val();
  var firstname=$('#fname').val();
  var lastname=$('#lname').val();
  var password_reg=$('#password_reg').val();
  let phone = /^[6-9]{1}[0-9]{9}$/;
  
   if (number == null || number == "" ) {
    alert("Plz Enter Your Number..");
    $("#ph").focus();
    return false;
  }
  else if (!phone.test(mob)) {
    alert("Enter Valid Phone Number!");
    return false;
  }
  else if (email_reg == null || email_reg == "" ) {
    alert("Plz Enter Your Email..");
    $("#email_reg").focus();
    return false;
  }
  else if (firstname == null || firstname == "" ) {
    alert("Plz Enter Your First Name..");
    $("#fname").focus();
    return false;
  }
  else if (lastname == null || lastname == "" ) {
    alert("Plz Enter Your Last Name..");
    $("#lname").focus();
    return false;
  }
  else if (password_reg == null || password_reg == "" ) {
    alert("Plz Enter Your Password..");
    $("#password_reg").focus();
    return false;
  }
}
  function validateform() {
    var email =$('#email').val();
    var password=$('#pass').val();
   

    if (email == null || email == "") {
      alert("Plz Enter email...");
      $("#email").focus();
      return false;
    } 
    else if (password == null || password == "") {
      alert("Plz Enter Password..");
      $("#pass").focus();
      return false;
    }
    
  }


 

// <--<Product View>-->

let bigImg = document.querySelector('.big-img img');
function showImg(pic) {
  bigImg.src = pic;
}

    /* <Image_Show_Validation> */
    
function readURL(input)
  {
    if(input.files && input.files[0])
    {
      var reader=new FileReader();
      reader.onload=function(e)
      {
        $('#image-show')
        .attr('src',e.target.result)
        
      };
      reader.readAsDataURL(input.files[0]);
      }
}


      