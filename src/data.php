<?php

if (! function_exists('projects')) {
    function projects(): array
    {
        return  [
            [
                'url' => 'learnmarkdown.com',
                'title' => 'Learn Markdown',
                'description' => 'Learn the basic syntax of markdown and practice it using the online editor.',
                'icon' => 'letter-text',
                'boxColors' => 'bg-brand-200 border-brand-400',
                'textColor' => 'text-slate-700',
            ],
            [
                'url' => 'descartes-square.levon.dev',
                'title' => 'Descartes\' Square',
                'description' => 'Systematically think through a decision by examining its consequences.',
                'icon' => 'grid-2x2-check',
                'boxColors' => 'bg-indigo-500 border-indigo-300',
                'textColor' => 'text-slate-100',
            ],
            [
                'url' => 'encrypt.levon.dev',
                'title' => 'Encrypt',
                'description' => 'End-to-end Encrypt and Decrypt Text Content & Files.',
                'icon' => 'file-lock-2',
                'boxColors' => 'bg-indigo-500 border-indigo-300',
                'textColor' => 'text-slate-100',
            ],
            [
                'url' => 'anelik.levon.dev',
                'title' => 'Anelik',
                'description' => 'A simple web app for project management.',
                'icon' => 'square-check-big',
                'boxColors' => 'bg-brand-200 border-brand-400',
                'textColor' => 'text-slate-700',
            ],
            [
                'url' => 'dinomatic.com',
                'title' => 'DinoMatic',
                'description' => 'WordPress Themes and Plugins.',
                'icon' => 'chevrons-left-right-ellipsis',
                'boxColors' => 'bg-cyan-700 border-cyan-400',
                'textColor' => 'text-slate-200',
            ],
            [
                'url' => 'royalproduction.am',
                'title' => 'Royal Production',
                'description' => 'Royal Wedding Photo and Video Production.',
                'icon' => 'chevrons-left-right-ellipsis',
                'boxColors' => 'bg-pink-200 border-pink-300',
                'textColor' => 'text-slate-700',
            ],
            [
                'url' => 'manera.am',
                'title' => 'MANERA',
                'description' => 'MANERA Creative Agency.',
                'icon' => 'chevrons-left-right-ellipsis',
                'boxColors' => 'bg-blue-500 border-blue-400',
                'textColor' => 'text-slate-200',
            ],
            [
                'url' => 'lavetis.es',
                'title' => 'L\'AVETIS',
                'description' => 'L\'AVETIS Novias - bridal dresses.',
                'icon' => 'chevrons-left-right-ellipsis',
                'boxColors' => 'bg-orange-200 border-orange-300',
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

if (! function_exists('testimonials')) {
    function testimonials(): array
    {
        return [
            [
                'id' => '1',
                'reviewer' => 'David',
                'position' => 'CEO at MANERA Creative Agency'
            ],
            [
                'id' => '2',
                'reviewer' => 'Laura',
                'position' => 'CEO at Royal Production'
            ],
        ];
    }
}
