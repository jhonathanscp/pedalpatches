<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PedalPatches | <?= $Model ?></title>
        <link rel="shortcut icon" href="/public/assets/img/icons/logo.png" type="image/x-icon">
        <link href="/public/css/style.css?v=<?= filemtime('./public/css/style.css') ?>" rel="stylesheet">
    </head>
<body>

    <header class="fixed top-0 left-0 w-full z-50 bg-background/96 backdrop-blur-xl border-b border-white/5 shadow-lg shadow-black/10" id="main-header">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <!-- Logo -->
                <a class="flex items-center gap-2.5 shrink-0 group" href="/home" id="header-logo">
                    <img class="h-12 w-12 drop-shadow-[0_0_8px_rgba(96,165,250,0.4)] transition-transform duration-300 group-hover:scale-105" src="/public/assets/img/icons/logo.png" alt="PedalPatches Logo">
                    <span class="text-xl font-bold bg-primary bg-clip-text text-transparent hidden sm:block drop-shadow-[0_0_8px_rgba(96,165,250,0.4)] group-hover:drop-shadow-[0_0_16px_rgba(96,165,250,0.6)] transition-all duration-300">PedalPatches</span>
                </a>
                <!-- Search Bar (desktop) -->
                <div class="hidden md:flex flex-1 justify-center px-8">
                    <?php require dirname(__DIR__) . '/components/search-bar.php'; ?>
                </div>
                <!-- Acoes -->
                <div class="flex items-center gap-3">
                    <button id="mobile-search-toggle" type="button" class="md:hidden p-2 rounded-lg text-text-muted transition-colors duration-200 hover:text-text-main hover:bg-white/5 cursor-pointer" aria-label="Buscar">
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M9 3.5a5.5 5.5 0 1 0 0 11 5.5 5.5 0 0 0 0-11ZM2 9a7 7 0 1 1 12.452 4.391l3.328 3.329a.75.75 0 1 1-1.06 1.06l-3.329-3.328A7 7 0 0 1 2 9Z" clip-rule="evenodd" />
                        </svg>
                    </button>
                    <div class="hidden sm:block">
                        <?php require dirname(__DIR__) . '/components/upload-button.php'; ?>
                    </div>
                    <div class="hidden sm:block w-px h-8 bg-white/10"></div>
                    <?php require dirname(__DIR__) . '/components/user-dropdown.php'; ?>
                </div>
            </div>
        </div>
        <!-- Mobile Search Panel -->
        <div id="mobile-search-panel" class="md:hidden overflow-hidden transition-all duration-300 max-h-0 opacity-0">
            <div class="px-4 pb-3">
                <?php $placeholder = 'Buscar patches, pedais...'; require dirname(__DIR__) . '/components/search-bar.php'; ?>
                <div class="mt-3"><?php require dirname(__DIR__) . '/components/upload-button.php'; ?></div>
            </div>
        </div>
    </header>

    <div class="h-16"></div>
