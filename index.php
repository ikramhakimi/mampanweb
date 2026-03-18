<?php
ob_start();
?>
<?php include __DIR__ . '/sections/services.php'; ?>
<div class="py-16 bg-gradient-to-t from-slate-50 to-slate-100"></div>
<?php include __DIR__ . '/sections/approach.php'; ?>
<div class="py-16 bg-gradient-to-t from-slate-100 to-slate-50"></div>
<?php include __DIR__ . '/sections/about.php'; ?>
<?php
$content = ob_get_clean();
include __DIR__ . '/layout.php';

