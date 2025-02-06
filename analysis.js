document.querySelectorAll(".link").forEach(link => {
  link.onclick = function(e) {
      e.preventDefault();
      document.querySelectorAll(".popupdarkbg").forEach(bg => bg.style.display = "block");
      document.querySelectorAll(".popup").forEach(popup => popup.style.display = "block");
      document.querySelectorAll('.popupiframe').forEach(iframe => iframe.src = "./graph.php");
      
      document.querySelectorAll(".popupdarkbg").forEach(bg => {
          bg.onclick = function() {
              document.querySelectorAll(".popup").forEach(popup => popup.style.display = "none");
              document.querySelectorAll(".popupdarkbg").forEach(bg => bg.style.display = "none");
          };
      });
      return false;
  };
});

window.onkeydown = function(e) {
  if (e.keyCode == 27) {
      document.querySelectorAll(".popup").forEach(popup => popup.style.display = "none");
      document.querySelectorAll(".popupdarkbg").forEach(bg => bg.style.display = "none");
      e.preventDefault();
      return;
  }
};
