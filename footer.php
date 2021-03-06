<img src="images/lennyslogo.png" alt="logo">
(519) 681-0666
<button onclick="topFunction()" id="topBtn">Top</button>

<script>// When user scolls down 20px from top of doc, show button
var topbutton = document.getElementById("topBtn");
window.onscroll = function(){scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20)
  {
    topbutton.style.display = "block";
  } else {
    topbutton.style.display = "none";
  }
}
// When user clicks on button, scroll to top of doc
function topFunction() {
  document.body.scrollTop = 0; // For Safari
  document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
}
</script>
