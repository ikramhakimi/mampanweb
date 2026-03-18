document.addEventListener('DOMContentLoaded', () => {
  const form = document.getElementById('waForm');
  if (!form) return;

  const phoneInput = document.getElementById('phone');
  const phoneError = document.getElementById('phoneError');
  const submitBtn = document.getElementById('submitBtn');
  const inputs = form.querySelectorAll('.form-input');

  inputs.forEach(input => {
    input.addEventListener('input', function () {
      if (this.value.trim() !== '') {
        this.classList.remove('text-zinc-400');
        this.classList.add('text-green-700');
      } else {
        this.classList.remove('text-green-700');
        this.classList.add('text-zinc-400');
      }
    });

    input.addEventListener('focus', function () {
      if (this.value.trim() === '') {
        this.classList.remove('text-zinc-400');
        this.classList.add('text-zinc-900');
      }
    });

    input.addEventListener('blur', function () {
      if (this.value.trim() === '') {
        this.classList.remove('text-zinc-900');
        this.classList.add('text-zinc-400');
      }
    });
  });

  function isValidMYPhone(phone) {
    const cleaned = phone.replace(/\s+/g, '');
    const regex = /^(01[0-9]{8,9}|601[0-9]{8,9})$/;
    return regex.test(cleaned);
  }

  form.addEventListener('submit', function (e) {
    e.preventDefault();

    const name = document.getElementById('name').value.trim();
    const email = document.getElementById('email').value.trim();
    const phone = phoneInput.value.trim();
    const service = document.getElementById('service').value;
    const title = document.getElementById('title').value.trim();
    const message = document.getElementById('message').value.trim();

    if (!isValidMYPhone(phone)) {
      phoneError.classList.remove('hidden');
      phoneInput.classList.add('border-red-500');
      return;
    }

    phoneError.classList.add('hidden');
    phoneInput.classList.remove('border-red-500');

    submitBtn.disabled = true;
    submitBtn.innerText = 'Opening WhatsApp...';
    submitBtn.classList.add('opacity-70', 'cursor-not-allowed');

    const text =
      `New Project Enquiry\n\n` +
      `*Contact Person*\n` +
      `${name}\n` +
      `E : ${email}\n` +
      `P : ${phone}\n\n` +
      `*Project Title*\n` +
      `(${service}) ${title}\n\n` +
      `*Project Message*\n` +
      `${message}`;

    const encodedText = encodeURIComponent(text);
    const whatsappNumber = form.getAttribute('data-whatsapp') || '60193993355';
    const whatsappURL = `https://wa.me/${whatsappNumber}?text=${encodedText}`;

    submitBtn.classList.add('success-animation');

    setTimeout(() => {
      window.open(whatsappURL, '_blank');
      submitBtn.innerText = 'Sent ✓';
      submitBtn.classList.remove('bg-green-600');
      submitBtn.classList.add('bg-emerald-600');
    }, 700);
  });
});

