<?php

define('BASE_PATH', dirname(__FILE__, 2));

if (! function_exists('icon')) {
    function icon(string $name, string $class = '', array $attributes = []): string
    {
        $filePath = BASE_PATH."/resources/svg/$name.svg";

        if (! file_exists($filePath)) {
            return '';
        }

        $atts = implode(' ', array_map(fn ($key, $value) => "$key=\"$value\"", array_keys($attributes), $attributes));

        return str_replace('class="', "$atts class=\"$class ", file_get_contents($filePath));
    }
}

if (! function_exists('testimonial')) {
    function testimonial(array $testimonial, string $classes = ''): void
    {
        ?>
        <div class="<?php echo $classes; ?>">
            <div class="flex space-x-1 mb-6">
                <?php echo implode('', array_map(fn ($i) => icon('star', 'size-6 text-orange-600 fill-current', ['aria-hidden' => 'true']), [1,2,3,4,5])); ?>
            </div>

            <p class="text-xl/8 italic mb-6">
                <?php include BASE_PATH.'/resources/views/data/testimonials/'.$testimonial['id'].'.php'; ?>
            </p>

            <p>
                <span
                    class="text-slate-700 font-bold"><?php echo $testimonial['reviewer']; ?>,</span>
                <span
                    class="text-slate-600"><?php echo $testimonial['position']; ?></span>
            </p>
        </div>
        <?php
    }
}
