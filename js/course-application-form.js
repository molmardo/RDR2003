var courseModal = document.getElementById("course-modal-application");
var openBtn = document.getElementById("open-course-modal-application");
var closeSpan = document.getElementsByClassName("course-close")[0];

openBtn.onclick = function() {
  courseModal.style.display = "block";
}

closeSpan.onclick = function() {
  courseModal.style.display = "none";
}

window.onclick = function(event) {
  if (event.target == courseModal) {
    courseModal.style.display = "none";
  }
}