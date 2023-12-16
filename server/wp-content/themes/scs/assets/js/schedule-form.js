const form = document.querySelector("form");
const alert = document.querySelector(".alert");

form.addEventListener("submit", async (e) => {
  e.preventDefault();

  const formData = new FormData(form);

  const res = await fetch(wpAjax.ajaxurl, {
    method: "POST",
    body: formData,
  });

  const statusMessage = await res.text();

  alert.innerHTML = statusMessage;
});
