  function toggle1()   {
    var x = document.getElementById("ans1");

      if(x.style.display === "none") {
          x.style.display = "block";
      }

      else {
          x.style.display ="none";
      }
  }
    function toggle2()   {
    var x = document.getElementById("ans2");

      if(x.style.display === "none") {
          x.style.display = "block";
      }

      else {
          x.style.display ="none";
      }
  }
      function toggle3()   {
    var x = document.getElementById("ans3");

      if(x.style.display === "none") {
          x.style.display = "block";
      }

      else {
          x.style.display ="none";
      }
  }
      function toggle4()   {
    var x = document.getElementById("ans4");

      if(x.style.display === "none") {
          x.style.display = "block";
      }

      else {
          x.style.display ="none";
      }
  }
        function toggle5()   {
    var x = document.getElementById("ans5");

      if(x.style.display === "none") {
          x.style.display = "block";
      }

      else {
          x.style.display ="none";
      }
  }
        function toggle6()   {
    var x = document.getElementById("ans6");

      if(x.style.display === "none") {
          x.style.display = "block";
          value="sss";
      }

      else {
          x.style.display ="none";
      }
  }

  var mysong = document.getElementById("mysong");
  var icon = document.getElementById("oop");

  oop.onclick = function () {
    if (mysong.paused) {
      mysong.play();
      icon.src="img/pause.png";
    }else{
      mysong.pause();
      icon.src="img/play.png";

    }
  }