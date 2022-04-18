// import screenfull from 'screenfull';
$(document).ready(function () {
  $("#ham").on("click", function () {
    $(".ham-menu-item").show(200);
    $("#ham").hide(1);
    $("#close").show(1);
  });
  $("#close").on("click", function () {
    $("#close").hide(1);
    $("#ham").show(1);
    $(".ham-menu-item").hide(200);
  });
  // $(".home").on("click", function () {
  //   $("#student").show(1);
  //   $("#admin").hide(1);
  //   $(".registration").show(1);
  //   $(".mid").show(1);
  // });

  $(".ham-home").on("click", function () {
    if ($(window).width() > 1200) {
      $("#ham").hide(1);
      $(".registration").show(1);
      $(".mid").show(1);
      $("#close").hide(1);
      $(".ham-menu-item").hide(200);
      $("#student").show(1);
      $("#admin").hide(1);
    } else {
      $("#ham").show(1);
      $(".registration").show(1);
      $(".mid").show(1);
      $("#close").hide(1);
      $(".ham-menu-item").hide(200);
      $("#student").show(1);
      $("#admin").hide(1);
    }
  });
  $(".home").on("click", function () {
    if ($(window).width() > 1200) {
      $("#ham").hide(1);
      $(".registration").show(1);
      $(".mid").show(1);
      $("#close").hide(1);
      $(".ham-menu-item").hide(200);
      $("#student").show(1);
      $("#admin").hide(1);
    } else {
      $("#ham").show(1);
      $(".registration").show(1);
      $(".mid").show(1);
      $("#close").hide(1);
      $(".ham-menu-item").hide(200);
      $("#student").show(1);
      $("#admin").hide(1);
    }
  });
  $(".admin").on("click", function () {
    $("#student").hide(1);
    $("#admin").show(1);
    $(".registration").hide(1);
    $(".mid").hide(1);
  });

  $(".ham-admin").on("click", function () {
    $("#ham").show(1);
    $(".registration").hide(1);
    $(".mid").hide(1);
    $("#close").hide(1);
    $(".ham-menu-item").hide(200);
    $("#student").hide(1);
    $("#admin").show(1);
  });
  $(".ham-developer").on("click", function () {
    $("#ham").show(1);
    $("#close").hide(1);
    $(".ham-menu-item").hide(200);
  });
  $(".ham-feedback").on("click", function () {
    $("#ham").show(1);
    $("#close").hide(1);
    $(".ham-menu-item").hide(200);
  });

  $(window).resize(function (e) {
    if ($(window).width() < 1200) {
      $(".ham-menu-item").hide(200);
      $("#close").hide(1);
      $("#ham").show(1);
    }
  });

  $("#stu-submit").click(function (e) {
    if ($("#student-login")[0].checkValidity()) {
      e.preventDefault();
      $("#stu-submit").val("Please Wait...");
      $.ajax({
        url: "./online-examination-systen-in-php-master-1/login.php",
        type: "POST",
        data: $("#student-login").serialize(),
        success: function (response) {
          $("#stu-submit").val("Log In");
          if (response == "login") {
            $("#student-login")[0].reset();
            window.location.href =
              "./online-examination-systen-in-php-master-1/account.php?q=1";
            // var window_open = window.open(
            //   "./online-examination-systen-in-php-master-1/account.php?q=1",
            //   "_blank",
            //   "toolbar=no,scrollbars=yes,resizable=yes,menubar=no,location=no,status=no,titlebar=no",
            //   "width=100%,height=100%"
            // );
            // window_open.addEventListener("contextmenu", (event) =>
            //   event.preventDefault()
            // );
            // console.log(window);
            // window_open.onkeydown = function () {
            //   return false;
            // };

            // document.fullscreenEnabled =
            //   document.fullscreenEnabled ||
            //   document.mozFullScreenEnabled ||
            //   document.documentElement.webkitRequestFullScreen;

            // function requestFullscreen(element) {
            //   if (element.requestFullscreen) {
            //     element.requestFullscreen();
            //   } else if (element.mozRequestFullScreen) {
            //     element.mozRequestFullScreen();
            //   } else if (element.webkitRequestFullScreen) {
            //     element.webkitRequestFullScreen(Element.ALLOW_KEYBOARD_INPUT);
            //   }
            // }

            // if (document.fullscreenEnabled) {
            //   requestFullscreen(document.documentElement);
            // }
          } else {
            $("#err_report")
              .css("display", "block")
              .text("* " + response);
          }
        },
      });
    }
  });

  $("#admin-submit").click(function (e) {
    if ($("#admin-login")[0].checkValidity()) {
      e.preventDefault();
      $("#admin-submit").val("Please Wait...");
      $.ajax({
        type: "post",
        url: "./online-examination-systen-in-php-master-1/faculty_login.php",
        data: $("#admin-login").serialize(),
        success: function (response) {
          $("#admin-submit").val("Log In");
          if (response == "login") {
            window.location.href =
              "./online-examination-systen-in-php-master-1/dash.php?q=0";
            $("#admin-login")[0].reset();
          } else {
            $("#admin_err_report")
              .css("display", "block")
              .text("* " + response);
          }
        },
      });
    }
  });

  $("#user_signup").click(function (e) {
    if ($("#usignup")[0].checkValidity()) {
      e.preventDefault();
      // console.log("chirag123");
      $("#user_signup").val("Please Wait...");
      $.ajax({
        type: "post",
        url: "./online-examination-systen-in-php-master-1/sign.php",
        data: $("#usignup").serialize(),
        success: function (response) {
          $("#user_signup").val("Sign Up");
          if (response == "Registered Successfully") {
            if ($("#user_err_report").css("display") == "block") {
              $("#user_err_report").css("display", "none");
            }
            $("#user_success_report").css("display", "block").text(response);
            $("#usignup")[0].reset();
          } else {
            if ($("#user_success_report").css("display") == "block") {
              $("#user_success_report").css("display", "none");
            }
            $("#user_err_report")
              .css("display", "block")
              .text("* " + response);
          }
        },
      });
    }
  });

  $("#faculty_signup").click(function (e) {
    if ($("#fsignup")[0].checkValidity()) {
      e.preventDefault();
      $("#faculty_signup").val("Please Wait...");
      // console.log("chirag");
      if ($("#fphoneNo").length() != 10) {
        // console.log($("#fphoneNo").val());
        if ($("#faculty_err_report").css("display") == "block") 
        {
          $("#faculty_err_report").css("display", "none");
        }
        $("#faculty_err_report").css("display", "block").text("* Please enter valid Phone Number");
        $("#faculty_signup").val("Sign Up");
      }
      else if($("#fpassword").val() != $("#fcpassword").val())
      {
        console.log("chirag");
        if ($("#faculty_err_report").css("display") == "block") 
        {
          $("#faculty_err_report").css("display", "none");
        }
        $("#faculty_err_report").css("display", "block").text("* Confirm Password does not Password");
        $("#faculty_signup").val("Sign Up");
      }
      else 
      {
        $.ajax({
          url: "./online-examination-systen-in-php-master-1/faculty_registration.php",
          type: "post",
          data: $("#fsignup").serialize(),
          success: function (response) {
            // console.log(response);
            $("#faculty_signup").val("Sign Up");
            if (response == "Registration Successful") {
              if ($("#faculty_err_report").css("display") == "block") {
                $("#faculty_err_report").css("display", "none");
              }
              $("#faculty_success_report")
                .css("display", "block")
                .text(response);
              $("#fsignup")[0].reset();
            } else {
              if ($("#faculty_success_report").css("display") == "block") {
                $("#faculty_success_report").css("display", "none");
              }
              $("#faculty_err_report")
                .css("display", "block")
                .text("* " + response);
            }
          },
        });
      }
    }
  });
});
