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

  $("#stu-submit").click(function (e) 
  {
    if ($("#student-login")[0].checkValidity()) 
    {
      e.preventDefault();
      $("#stu-submit").val("Please Wait...");
      $.ajax({
        url: "./online-examination-systen-in-php-master-1/login.php?q=index.php",
        type: "POST",
        data: $("#student-login").serialize(),
        success: function (response) 
        {
            $("#stu-submit").val("Log In");
            if (response === "login") 
            {
                var window_open = window.open(
                "./online-examination-systen-in-php-master-1/account.php?q=1",
                "_blank",
                "toolbar=no,scrollbars=yes,resizable=yes,menubar=no,location=no,status=no,titlebar=no",
                "width=100%,height=100%"
                );
                window_open.addEventListener("contextmenu", (event) =>
                  event.preventDefault()
                );
                console.log(window);
                window_open.onkeydown = function () {
                  return false;
                };
            }
            else
            {
                $('#err_report').css('display','block').text('* '+response);
            }
        }
      });
    }
  });
});