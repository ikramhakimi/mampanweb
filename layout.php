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
<header id="site-header" class="fixed inset-x-0 top-0 z-40 transform transition-transform duration-300 bg-white/95 backdrop-blur border-b border-slate-200 shadow-sm">
  <div class="mx-auto flex h-16 max-w-6xl items-center justify-between px-4 sm:px-6 lg:px-8">
    <a href="/" class="inline-flex items-center gap-3 text-slate-900 no-underline focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500" aria-label="Go to home page">
      <span class="inline-flex h-8 w-8 items-center justify-center rounded-full bg-indigo-600 text-xs font-bold text-white">M</span>
      <span class="text-base font-semibold tracking-tight">Mampan</span>
    </a>
    <nav aria-label="Main navigation" class="hidden items-center gap-6 text-sm font-medium text-slate-700 md:flex">
      <a class="rounded-md px-2 py-1 text-slate-700 hover:text-indigo-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500" href="#services">Services</a>
      <a class="rounded-md px-2 py-1 text-slate-700 hover:text-indigo-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500" href="#approach">Approach</a>
      <a class="rounded-md px-2 py-1 text-slate-700 hover:text-indigo-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500" href="#about">About</a>
      <a class="rounded-md px-2 py-1 text-slate-700 hover:text-indigo-600 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500" href="#contact">Contact</a>
    </nav>
    <a href="#contact" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm transition hover:bg-indigo-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">Get in touch</a>
  </div>
</header>
<main id="page-main" class="pt-16">
<?php
// Main page content
echo $content ?? '';
?>
</main>
<script>
  (function () {
    const header = document.getElementById('site-header');
    if (!header) return;
    let lastScroll = window.scrollY;
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

