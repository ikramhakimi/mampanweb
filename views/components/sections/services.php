<?php
$app = require __DIR__ . '/../../../config/app.php';
$services = $app['services'] ?? [];
?>
<section id="services" class="bg-slate-100 pt-28">
  <div style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"
      class="relative left-[calc(50%-11rem)] aspect-1155/678 w-144.5 -translate-x-1/2 rotate-30 bg-linear-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-288.75"></div>
  <div class="section-container max-w-6xl mx-auto px-4">
    <?php component('sections/_headline', [
      'eyebrow' => 'Our Services',
      'title' => 'Comprehensive Sustainability <br class=\"md:inline\"/> Advisory Services',
      'subtitle' => 'We provide practical, compliant, and measurable green building solutions<br class=\"md:inline\"/> for every stage of your project.',
      'eyebrowColor' => 'text-purple-700',
      'gradientFrom' => 'from-purple-600',
      'gradientTo' => 'to-slate-900',
      'center' => true,
    ]); ?>
    <div class="section-content">
      <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <?php foreach (array_slice($services, 0, 2) as $service): ?>
          <div class="group bg-white rounded-lg transition-all duration-300 overflow-hidden ring-1 ring-slate-200 hover:ring-slate-300 hover:shadow-2xl hover:shadow-slate-600/20 hover:-translate-y-1">
            <div class="aspect-[16/9] bg-gray-200 relative"
              style="background-image: url(<?= htmlspecialchars($service['image'], ENT_QUOTES) ?>);">
              <div class="absolute inset-0 bg-gradient-to-t from-white/100 to-transparent"></div>
            </div>
            <div class="p-6 lg:p-8">
              <h3 class="text-xs font-semibold uppercase tracking-wide <?= htmlspecialchars($service['category_color'], ENT_QUOTES) ?> mb-3">
                <?= htmlspecialchars($service['category'], ENT_QUOTES) ?>
              </h3>
              <h4 class="text-xl font-semibold mb-3">
                <?= htmlspecialchars($service['title'], ENT_QUOTES) ?>
              </h4>
              <p class="leading-relaxed">
                <?= htmlspecialchars($service['description'], ENT_QUOTES) ?>
              </p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mt-4">
        <?php foreach (array_slice($services, 2) as $service): ?>
          <div class="group bg-white rounded-lg transition-all duration-300 overflow-hidden ring-1 ring-slate-200 hover:ring-slate-300 hover:shadow-2xl hover:shadow-slate-600/20 hover:-translate-y-1">
            <div class="aspect-[3/2] bg-gray-200 relative bg-cover"
              style="background-image: url(<?= htmlspecialchars($service['image'], ENT_QUOTES) ?>);">
              <div class="absolute inset-0 bg-gradient-to-t from-white/100 to-transparent"></div>
            </div>
            <div class="p-6 lg:p-8">
              <h3 class="text-xs font-semibold uppercase tracking-wide <?= htmlspecialchars($service['category_color'], ENT_QUOTES) ?> mb-3">
                <?= htmlspecialchars($service['category'], ENT_QUOTES) ?>
              </h3>
              <h4 class="text-lg font-semibold mb-3">
                <?= htmlspecialchars($service['title'], ENT_QUOTES) ?>
              </h4>
              <p class="leading-relaxed">
                <?= htmlspecialchars($service['description'], ENT_QUOTES) ?>
              </p>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>
