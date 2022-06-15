function showMenu() {
    var x = document.getElementById("menuMenu");
    var music = document.getElementById("#music");
    if (x.style.display === "block") {
      x.style.display = "none";

    } else {
      x.style.display = "block";
    }
  }


  function hamburgerFunction() {
    var x = document.getElementById("navLists");
    if (x.style.display === "block") {
      x.style.display = "none";
    } else {
      x.style.display = "block";
    }
  }