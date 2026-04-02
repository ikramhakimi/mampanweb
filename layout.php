<?php
$app = require __DIR__ . '/config/app.php';
?>
<!DOCTYPE html>
<html lang="<?= htmlspecialchars($app['locale'], ENT_QUOTES) ?>">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= htmlspecialchars($app['name'], ENT_QUOTES) ?></title>
  <script src="https://cdn.tailwindcss.com"></script>
  <style type="text/tailwindcss">
    @layer base {
      html {
        scroll-behavior: smooth;
      }
      body {
        @apply text-slate-600 bg-white;
      }
      h1, h2, h3, h4, h5, h6 {
        @apply text-slate-900;
      }
    }
  </style>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: {
            sans: ['Outfit', 'ui-sans-serif', 'system-ui'],
          },
        },
      },
    }
  </script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
</head>
<body class="bg-slate-50">
<?php include __DIR__ . '/views/partials/site-header.php'; ?>
<main id="page-main" class="pt-16">
<?php
// Main page content
echo $content ?? '';
?>
</main>
<script>
  (function () {
    const header     = document.getElementById('site-header');
    if (!header) return;
    let lastScroll   = window.scrollY;
    const threshold = 10;

    window.addEventListener('scroll', function () {
      const current = window.scrollY;
      if (Math.abs(current - lastScroll) < threshold) return;
      if (current > lastScroll && current > 80) {
        header.classList.add('-translate-y-full');
      } else {
        header.classList.remove('-translate-y-full');
      }
      lastScroll = current;
    }, { passive: true });
  })();
</script>
<script src="/assets/js/contact-form.js"></script>
</body>
</html>
