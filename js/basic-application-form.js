const modal = document.getElementById("myModal");
const btn = document.getElementById("myBtn");
const span = document.getElementsByClassName("close")[0];

btn.onclick = function () {
  modal.style.display = "block";
};
span.onclick = function () {
  modal.style.display = "none";
};
window.onclick = function (event) {
  if (event.target === modal) {
    modal.style.display = "none";
  }
};

document.addEventListener("DOMContentLoaded", function () {
  const form = modal.querySelector("form");
  let feedback = document.getElementById("application-feedback");
  if (!feedback) {
    feedback = document.createElement("div");
    feedback.id = "application-feedback";
    feedback.className = "alert mt-3 text-center";
    feedback.style.display = "none";
    form.appendChild(feedback);
  }

  form.addEventListener("submit", async function (e) {
    e.preventDefault();
    feedback.style.display = "none";

    const formData = new FormData(form);
    const entries = Array.from(formData.entries());

    const missing = entries.find(([key, value]) => !value.trim());
    if (missing) {
      feedback.textContent = "Kérlek, tölts ki minden mezőt!";
      feedback.className = "alert alert-danger mt-3 text-center";
      feedback.style.display = "block";
      return;
    }

    try {
      const response = await fetch("/form_functions/basic-application-form_mail", {
        method: "POST",
        body: formData
      });
      const result = await response.text();

      feedback.textContent = result;
      feedback.className = response.ok
        ? "alert alert-success mt-3 text-center"
        : "alert alert-danger mt-3 text-center";
      feedback.style.display = "block";

      if (response.ok) {
        form.reset();
        setTimeout(() => {
          feedback.style.display = "none";
          modal.style.display = "none";
        }, 2500);
      }

    } catch (error) {
      feedback.textContent = "Hiba történt a küldés során.";
      feedback.className = "alert alert-danger mt-3 text-center";
      feedback.style.display = "block";
    }
  });
});
