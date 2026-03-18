<?php
$approachSteps = require __DIR__ . '/../config/approach.php';
?>
<section id="approach" class="bg-slate-50">
    <div class="section-container max-w-6xl mx-auto px-4">
        <?php
        $eyebrow = 'Our Approach';
        $title = 'Structured, Evidence-Based Advisory';
        $subtitle = 'Combining technical expertise and strategic insight to deliver actionable, compliant, and efficient green building solutions.';
        $eyebrowColor = 'text-green-700';
        $gradientFrom = 'from-green-600';
        $gradientTo = 'to-gray-900';
        $center = true;
        include __DIR__ . '/../partials/section-header.php';
        ?>
        <div class="section-content">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4">
                <?php foreach ($approachSteps as $index => $step): ?>
                    <div class="p-8 pl-0 md:pl-8 relative border-b md:border-b-0 border-gray-200 flex md:block gap-4 md:rounded-lg md:transition-all md:duration-100 md:hover:ring-1 md:hover:ring-slate-300 md:hover:shadow-xl md:hover:shadow-slate-600/20 md:hover:bg-white md:hover:scale-105 md:hover:z-10 group">
                        <div class="w-12 h-12 flex-shrink-0 bg-gradient-to-br from-green-300 to-emerald-500 rounded flex items-center justify-center mb-0 md:mb-4">
                            <span class="text-2xl font-bold text-white">
                                <?= htmlspecialchars((string) $step['step'], ENT_QUOTES) ?>
                            </span>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-lg font-semibold mb-2 capitalize">
                                <?= htmlspecialchars($step['title'], ENT_QUOTES) ?>
                            </h3>
                            <p class="leading-relaxed">
                                <?= htmlspecialchars($step['description'], ENT_QUOTES) ?>
                            </p>
                        </div>
                        <?php if ($index < count($approachSteps) - 1): ?>
                            <div class="hidden md:block absolute right-0 top-0 bottom-0 w-px bg-gradient-to-b from-gray-50 via-gray-300 to-gray-50 group-hover:opacity-0 transition-opacity"></div>
                        <?php endif; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>

