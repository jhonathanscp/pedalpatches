<?php
$userAvatar   = $userAvatar ?? null;
$userName     = $userName   ?? 'Usuario';
$userInitials = mb_strtoupper(mb_substr($userName, 0, 1));
?>
<div class="relative" id="user-dropdown-container">
    <button id="user-dropdown-trigger" type="button" class="flex items-center p-1 rounded-full border-2 border-transparent transition-all duration-300 hover:border-primary/50 focus:outline-none focus:border-primary cursor-pointer" aria-expanded="false" aria-haspopup="true">
        <?php if ($userAvatar): ?>
            <img src="<?= htmlspecialchars($userAvatar) ?>" alt="<?= htmlspecialchars($userName) ?>" class="w-9 h-9 rounded-full object-cover" />
        <?php else: ?>
            <div class="w-9 h-9 rounded-full bg-primary flex items-center justify-center">
                <span class="text-white text-sm font-bold"><?= htmlspecialchars($userInitials) ?></span>
            </div>
        <?php endif; ?>
    </button>
    <div id="user-dropdown-menu" class="absolute right-0 top-full mt-2 w-56 bg-surface/95 backdrop-blur-xl border border-white/10 rounded-xl shadow-2xl shadow-black/30 opacity-0 invisible scale-95 origin-top-right transition-all duration-200 ease-out z-50 overflow-hidden" role="menu">
        <div class="px-4 py-3 border-b border-white/10">
            <p class="text-sm font-semibold text-text-main truncate"><?= htmlspecialchars($userName) ?></p>
            <p class="text-xs text-text-muted mt-0.5">Gerenciar sua conta</p>
        </div>
        <div class="py-1.5">
            <a href="/perfil" class="flex items-center gap-3 px-4 py-2.5 text-sm text-text-main transition-colors duration-150 hover:bg-white/5" role="menuitem">
                <svg class="w-4 h-4 text-text-muted" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M10 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6ZM3.465 14.493a1.23 1.23 0 0 0 .41 1.412A9.957 9.957 0 0 0 10 18c2.31 0 4.438-.784 6.131-2.1.43-.333.604-.903.408-1.41a7.002 7.002 0 0 0-13.074.003Z" />
                </svg>
                Meu Perfil
            </a>
            <a href="/logout" class="flex items-center gap-3 px-4 py-2.5 text-sm text-red-400 transition-colors duration-150 hover:bg-white/5" role="menuitem">
                <svg class="w-4 h-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M3 4.25A2.25 2.25 0 0 1 5.25 2h5.5A2.25 2.25 0 0 1 13 4.25v2a.75.75 0 0 1-1.5 0v-2a.75.75 0 0 0-.75-.75h-5.5a.75.75 0 0 0-.75.75v11.5c0 .414.336.75.75.75h5.5a.75.75 0 0 0 .75-.75v-2a.75.75 0 0 1 1.5 0v2A2.25 2.25 0 0 1 10.75 18h-5.5A2.25 2.25 0 0 1 3 15.75V4.25Z" clip-rule="evenodd" />
                    <path fill-rule="evenodd" d="M19 10a.75.75 0 0 0-.75-.75H8.704l1.048-.943a.75.75 0 1 0-1.004-1.114l-2.5 2.25a.75.75 0 0 0 0 1.114l2.5 2.25a.75.75 0 1 0 1.004-1.114l-1.048-.943h9.546A.75.75 0 0 0 19 10Z" clip-rule="evenodd" />
                </svg>
                Sair
            </a>
        </div>
    </div>
</div>
