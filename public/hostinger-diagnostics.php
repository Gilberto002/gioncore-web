<?php

declare(strict_types=1);

header('Content-Type: text/plain; charset=utf-8');

$root = dirname(__DIR__);

$checks = [
    'PHP version >= 8.2' => version_compare(PHP_VERSION, '8.2.0', '>='),
    'vendor/autoload.php exists' => file_exists($root.'/vendor/autoload.php'),
    '.env exists' => file_exists($root.'/.env'),
    'bootstrap/app.php exists' => file_exists($root.'/bootstrap/app.php'),
    'public/build/manifest.json exists' => file_exists(__DIR__.'/build/manifest.json'),
    'storage is writable' => is_writable($root.'/storage'),
    'storage/framework is writable' => is_writable($root.'/storage/framework'),
    'storage/logs is writable' => is_writable($root.'/storage/logs'),
    'bootstrap/cache is writable' => is_writable($root.'/bootstrap/cache'),
];

$env = file_exists($root.'/.env') ? file($root.'/.env', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) : [];
$appKeyIsSet = false;

foreach ($env as $line) {
    if (str_starts_with(trim($line), 'APP_KEY=')) {
        $value = trim(substr(trim($line), strlen('APP_KEY=')));
        $appKeyIsSet = $value !== '';
        break;
    }
}

$checks['APP_KEY is set'] = $appKeyIsSet;

echo "GionCore Hostinger diagnostics\n";
echo "Generated: ".gmdate('Y-m-d H:i:s')." UTC\n\n";
echo "Document root: ".__DIR__."\n";
echo "Laravel root: ".$root."\n";
echo "PHP version: ".PHP_VERSION."\n\n";

foreach ($checks as $label => $ok) {
    echo ($ok ? '[OK]   ' : '[FAIL] ').$label."\n";
}

echo "\nIf any item says [FAIL], fix that first. Delete this file after debugging.\n";
