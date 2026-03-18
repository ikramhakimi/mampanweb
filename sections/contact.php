<?php
$app = require __DIR__ . '/../config/app.php';
?>
<style>
    .success-animation {
        animation: pop 0.4s ease forwards;
    }

    @keyframes pop {
        0% {
            transform: scale(1);
        }
        50% {
            transform: scale(1.05);
        }
        100% {
            transform: scale(1);
        }
    }
</style>
<form id="waForm"
      class="max-w-xl w-full bg-white p-8 rounded-lg shadow-xl space-y-5 mt-16"
      data-whatsapp="<?= htmlspecialchars($app['whatsapp_number'], ENT_QUOTES) ?>">
    <h2 class="text-2xl font-bold mt-4 md:text-4xl bg-gradient-to-br from-slate-400 to-slate-900 bg-clip-text text-transparent text-shadow-2xs text-shadow-white">
        Get in Touch
    </h2>
    <p class="text-slate-600 md:text-lg md:leading-relaxed mt-4">
        Reach out to discuss how we can support your project with structured and reliable advisory services.
    </p>
    <input type="text" id="name" placeholder="Name"
           class="form-input w-full border rounded-lg p-3 text-slate-400 focus:text-slate-900 focus:ring-2 focus:ring-green-500"
           required>
    <input type="email" id="email" placeholder="Email"
           class="form-input w-full border rounded-lg p-3 text-slate-400 focus:text-slate-900 focus:ring-2 focus:ring-green-500"
           required>
    <input type="tel" id="phone" placeholder="Phone (e.g. 0123456789)"
           class="form-input w-full border rounded-lg p-3 text-slate-400 focus:text-slate-900 focus:ring-2 focus:ring-green-500"
           required>
    <p id="phoneError" class="text-red-500 text-sm hidden">
        Please enter a valid Malaysian phone number.
    </p>
    <select id="service"
            class="form-input w-full border rounded-lg p-3 text-slate-400 focus:text-slate-900 focus:ring-2 focus:ring-green-500"
            required>
        <option value="">Select Service</option>
        <option value="Consultation">Consultation</option>
        <option value="Quotation">Quotation</option>
    </select>
    <input type="text" id="title" placeholder="Project Title"
           class="form-input w-full border rounded-lg p-3 text-slate-400 focus:text-slate-900 focus:ring-2 focus:ring-green-500"
           required>
    <textarea id="message" placeholder="Project Message"
              rows="5"
              class="form-input w-full border rounded-lg p-3 text-slate-400 focus:text-slate-900 focus:ring-2 focus:ring-green-500"
              required></textarea>
    <button type="submit" id="submitBtn"
            class="w-full bg-green-600 text-white py-3 rounded-lg hover:bg-green-700 transition duration-300">
        Send to WhatsApp
    </button>
</form>

