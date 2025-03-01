<?php

define('BASE_PATH', dirname(__FILE__, 2));

if (! function_exists('icon')) {
    function icon(string $name, string $class = ''): string
    {
        $filePath = BASE_PATH."/resources/svg/$name.svg";

        if (! file_exists($filePath)) {
            return '';
        }

        return str_replace('class="', "class=\"$class ", file_get_contents($filePath));
    }
}

if (! function_exists('projects')) {
    function projects(): array
    {
        return  [
            [
                'url' => 'learnmarkdown.com',
                'title' => 'Learn Markdown',
                'description' => 'Learn the basic syntax of markdown and practice it using the online editor.',
                'icon' => 'letter-text',
                'bgColor' => 'bg-brand-200',
                'textColor' => 'text-slate-700',
            ],
            [
                'url' => 'descartes-square.levon.dev',
                'title' => 'Descartes\' Square',
                'description' => 'Systematically think through a decision by examining its consequences.',
                'icon' => 'grid-2x2-check',
                'bgColor' => 'bg-indigo-400',
                'textColor' => 'text-slate-200',
            ],
            [
                'url' => 'encrypt.levon.dev',
                'title' => 'Encrypt',
                'description' => 'End-to-end Encrypt and Decrypt Text Content & Files.',
                'icon' => 'file-lock-2',
                'bgColor' => 'bg-indigo-400',
                'textColor' => 'text-slate-200',
            ],
            [
                'url' => 'anelik.levon.dev',
                'title' => 'Anelik',
                'description' => 'A simple web app for project management.',
                'icon' => 'square-check-big',
                'bgColor' => 'bg-brand-200',
                'textColor' => 'text-slate-700',
            ],
        ];
    }
}

if (! function_exists('reasons')) {
    function reasons(): array
    {
        return [
            '1' => 'Fast turnarounds',
            '2' => 'No-hassle collaboration',
            '3' => '100% satisfaction guaranteed',
            '4' => 'No long-term contracts for subscriptions',
        ];
    }
}

if (! function_exists('faqs')) {
    function faqs(): array
    {
        return [
            '1' => 'What is the difference between subscription and one-time payment projects?',
            '2' => 'Can you attend our team meetings?',
            '3' => 'What about one-on-one video calls?',
            '4' => 'How can I explain you something complicated?',
            '5' => 'When should I not consider hiring you?',
            '6' => 'I still have a question.'
        ];
    }
}
