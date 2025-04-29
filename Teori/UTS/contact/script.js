document.addEventListener('DOMContentLoaded', function() {
  const form = document.getElementById('contactForm');

  form.addEventListener('submit', function(e) {
    e.preventDefault();

    const name = document.getElementById('name').value.trim();
    const email = document.getElementById('email').value.trim();
    const message = document.getElementById('message').value.trim();
    const title = document.getElementById('title').value.trim();

    if (!name || !email || !message) {
      alert("Tidak boleh ada yang kosong.");
      return;
    }

    fetch(CONFIG.BE_DOMAIN, {
      method: "POST",
      headers: { "Content-Type": "application/json" },
      body: JSON.stringify({ 
        userId: email,
        postedBy: name, 
        title: title,
        desc: message 
      })
    })
      .then(response => response.json())
      .then(data => {
        if (data.error) {
          console.error("Error: " + data.error);
        } else {
          alert("Terima kasih sudah menghubungi");
          form.reset();
        }
      })
      .catch(error => {
        console.error("Error:", error);
        alert("Ooops! Sepertinya ada error");
      });
  });
});
