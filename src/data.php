<?php

if (! function_exists('projects')) {
    function projects(): array
    {
        return [
            [
                'url' => 'dinomatic.com',
                'title' => 'DinoMatic',
                'description' => 'WordPress Themes and Plugins.',
                'icon' => 'chevrons-left-right-ellipsis',
                'boxColors' => 'bg-cyan-700 border-cyan-600',
                'textColor' => 'text-slate-100',
                'tech' => ['Laravel', 'PHP'],
            ],
            [
                'url' => 'tablrr.app',
                'title' => 'tablrr.app',
                'description' => 'Centralized listing management.',
                'icon' => 'chevrons-left-right-ellipsis',
                'boxColors' => 'bg-cyan-700 border-cyan-600',
                'textColor' => 'text-slate-100',
                'tech' => ['Laravel', 'PHP', 'Vue.js'],
            ],
            [
                'url' => 'learnmarkdown.com',
                'title' => 'Learn Markdown',
                'description' => 'Learn and practice the basic syntax of markdown.',
                'icon' => 'letter-text',
                'boxColors' => 'bg-brand-200 border-brand-400',
                'textColor' => 'text-slate-700',
                'tech' => ['Vue.js'],
            ],
            [
                'url' => 'descartes-square.levon.dev',
                'title' => 'Descartes\' Square',
                'description' => 'Systematically think through a decision.',
                'icon' => 'grid-2x2-check',
                'boxColors' => 'bg-indigo-500 border-indigo-300',
                'textColor' => 'text-white',
                'tech' => ['TypeScript'],
            ],
            [
                'url' => 'encrypt.levon.dev',
                'title' => 'Encrypt',
                'description' => 'End-to-end Encrypt and Decrypt Text Content & Files.',
                'icon' => 'file-lock-2',
                'boxColors' => 'bg-indigo-500 border-indigo-300',
                'textColor' => 'text-white',
                'tech' => ['JavaScript'],
            ],
            [
                'url' => 'anelik.levon.dev',
                'title' => 'Anelik',
                'description' => 'A simple web app for project management.',
                'icon' => 'square-check-big',
                'boxColors' => 'bg-brand-200 border-brand-400',
                'textColor' => 'text-slate-700',
                'tech' => ['Laravel', 'PHP'],
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
            '1' => 'What is the difference between Monthly Development and Project-based work?',
            '2' => 'How do you handle project changes or new requirements?"',
            '3' => 'Do you participate in meetings or video calls?',
            '4' => 'What technologies do you work with?',
            '5' => 'How do we get started?',
            '6' => 'When should I not consider hiring you?',
            '7' => 'I still have a question.',
        ];
    }
}
