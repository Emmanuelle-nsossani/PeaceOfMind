document.addEventListener("DOMContentLoaded", function () {
    const liUn = document.getElementById("li-un");
    const liDeux = document.getElementById("li-deux");
  
    const article = document.getElementById("articles");
    const temoignage = document.getElementById("temoignage");

    function toggleActive() {
      if (!this.classList.contains("active")) {
        liUn.classList.toggle("active");
        liDeux.classList.toggle("active");
        article.classList.toggle("active-page");
        temoignage.classList.toggle("active-page");
      }
    }
  
    liUn.addEventListener("click", toggleActive);
    liDeux.addEventListener("click", toggleActive);


    
  });
  