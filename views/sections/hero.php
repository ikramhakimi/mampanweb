<?php
$app = require __DIR__ . '/../../config/app.php';
?>
<section id="hero" class="relative overflow-hidden bg-slate-950 pt-28 text-slate-100 md:pt-36">
  <div class="absolute -left-24 top-20 h-56 w-56 rounded-full bg-emerald-400/20 blur-3xl"></div>
  <div class="absolute -right-20 top-8 h-72 w-72 rounded-full bg-indigo-500/25 blur-3xl"></div>
  <div class="absolute bottom-0 left-1/3 h-52 w-52 rounded-full bg-cyan-400/10 blur-3xl"></div>

  <div class="relative mx-auto grid max-w-6xl grid-cols-1 gap-10 px-4 pb-20 md:px-6 lg:grid-cols-2 lg:gap-14 lg:px-8 lg:pb-24">
    <div>
      <p class="inline-flex items-center rounded-full border border-emerald-300/30 bg-emerald-300/10 px-3 py-1 text-xs font-semibold uppercase tracking-[0.16em] text-emerald-200">
        Sustainable Advisory
      </p>
      <h1 class="mt-6 text-4xl font-semibold leading-tight text-white sm:text-5xl lg:text-6xl">
        <?= htmlspecialchars($app['name'], ENT_QUOTES) ?>
        <span class="mt-2 block bg-gradient-to-r from-emerald-300 via-cyan-300 to-indigo-300 bg-clip-text text-transparent">
          Built for real project outcomes
        </span>
      </h1>
      <p class="mt-6 max-w-xl text-base leading-relaxed text-slate-300 sm:text-lg">
        From design intent to certification delivery, we guide your team with practical sustainability strategy, technical evidence, and measurable implementation support.
      </p>
      <div class="mt-8 flex flex-wrap gap-3">
        <a href="#services" class="rounded-md bg-emerald-500 px-5 py-3 text-sm font-semibold text-slate-950 transition hover:bg-emerald-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-emerald-300">
          Explore Services
        </a>
        <a href="#contact" class="rounded-md border border-slate-300/40 px-5 py-3 text-sm font-semibold text-slate-100 transition hover:border-slate-100 hover:bg-slate-800/60 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-slate-100">
          Start Consultation
        </a>
      </div>
      <div class="mt-10 grid max-w-lg grid-cols-3 gap-3">
        <div class="rounded-xl border border-slate-800 bg-slate-900/70 p-4">
          <p class="text-2xl font-bold text-emerald-300">5+</p>
          <p class="mt-1 text-xs uppercase tracking-wide text-slate-400">Core Services</p>
        </div>
        <div class="rounded-xl border border-slate-800 bg-slate-900/70 p-4">
          <p class="text-2xl font-bold text-cyan-300">100%</p>
          <p class="mt-1 text-xs uppercase tracking-wide text-slate-400">Compliance Focus</p>
        </div>
        <div class="rounded-xl border border-slate-800 bg-slate-900/70 p-4">
          <p class="text-2xl font-bold text-indigo-300">End-to-End</p>
          <p class="mt-1 text-xs uppercase tracking-wide text-slate-400">Project Support</p>
        </div>
      </div>
    </div>

    <div class="relative flex items-end">
      <div class="w-full rounded-2xl border border-white/10 bg-gradient-to-br from-slate-900/80 via-slate-900/60 to-indigo-950/50 p-6 shadow-2xl shadow-indigo-950/40 backdrop-blur">
        <p class="text-xs font-semibold uppercase tracking-[0.12em] text-slate-400">Delivery Framework</p>
        <ul class="mt-5 space-y-4">
          <li class="rounded-lg border border-emerald-300/25 bg-emerald-400/10 p-4">
            <p class="text-sm font-semibold text-emerald-200">Assess</p>
            <p class="mt-1 text-sm text-slate-300">Evaluate goals, regulatory constraints, and sustainability opportunities.</p>
          </li>
          <li class="rounded-lg border border-cyan-300/25 bg-cyan-400/10 p-4">
            <p class="text-sm font-semibold text-cyan-200">Design</p>
            <p class="mt-1 text-sm text-slate-300">Translate strategy into practical requirements for teams and contractors.</p>
          </li>
          <li class="rounded-lg border border-indigo-300/25 bg-indigo-400/10 p-4">
            <p class="text-sm font-semibold text-indigo-200">Verify</p>
            <p class="mt-1 text-sm text-slate-300">Track implementation and evidence for reporting and certification.</p>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>
