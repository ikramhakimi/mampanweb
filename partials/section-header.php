<?php

/**
 * @var string $eyebrow
 * @var string $title
 * @var string|null $subtitle
 * @var string $eyebrowColor
 * @var string $gradientFrom
 * @var string $gradientTo
 * @var bool $center
 */
?>
<div class="section-header mx-auto max-w-3xl mb-16 <?= $center ? 'md:text-center' : '' ?>">
    <span class="text-xs font-bold uppercase tracking-wide <?= htmlspecialchars($eyebrowColor, ENT_QUOTES) ?>">
        <?= htmlspecialchars($eyebrow, ENT_QUOTES) ?>
    </span>
    <h2 class="text-2xl font-bold mt-4 md:text-4xl bg-gradient-to-br <?= htmlspecialchars($gradientFrom, ENT_QUOTES) ?> <?= htmlspecialchars($gradientTo, ENT_QUOTES) ?> bg-clip-text text-transparent text-shadow-2xs text-shadow-white">
        <?= $title ?>
    </h2>
    <?php if (!empty($subtitle)): ?>
        <p class="md:text-lg md:leading-relaxed mt-4">
            <?= $subtitle ?>
        </p>
    <?php endif; ?>
</div>

