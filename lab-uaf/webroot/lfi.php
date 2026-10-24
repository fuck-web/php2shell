<?php
// Intentionally vulnerable LFI endpoint for CVE-2026-109618/109619 lab.
// Simulates a real-world include() sink (log viewer, template loader, etc.)
$file = $_GET['file'] ?? '';
if ($file) {
    include $file;
}
