<?php

define('BASE_PATH', dirname(__FILE__, 2));

if (! function_exists('icon')) {
    function icon(string $name, string $class = '', array $attributes = []): string
    {
        $filePath = BASE_PATH."/node_modules/lucide-static/icons/$name.svg";

        if (! file_exists($filePath)) {
            return '';
        }

        $attributes = implode(' ', array_map(fn ($key, $value) => "$key=\"$value\"", array_keys($attributes), $attributes));

        return str_replace('class="', "$attributes class=\"$class ", file_get_contents($filePath));
    }
}
