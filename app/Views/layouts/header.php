<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PedalPatches | <?= $Model ?></title>

        <link href="/public/css/style.css?v=<?= filemtime("./public/css/style.css") ?>" rel="stylesheet">
    </head>
<body>    

    <header class="bg-surface flex justify-between items-center h-18 ">
        <div class="h-full m-auto">
            <a class="h-full flex items-center" href="/home">
                <img class="drop-shadow-primary drop-shadow-[0_0_4px_rgba(59,130,246,0.6)] mr-1 h-full p-1.5" src="/public/assets/img/icons/logo.png" alt="logo" class="">
                <span class="text-text-main text-2xl font-sans font-semibold">PedalPatches</span>
            </a>    
        </div>

        <div class="relative w-full max-w-sm m-auto">
            <img class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none w-7 h-full dark:brightness-0 dark:invert" src="/public/assets/img/icons/search.svg" alt="search icon">
            <input class="
            block
            pl-10
            w-full 
            placeholder-text-muted 
            border border-text-main 
            rounded-lg text-text-main 
            h-11
            p-1
            focus:outline-none
            focus:border-blue-500
            focus:ring-2
            focus:ring-blue-200
            " type="text" placeholder="O que está procurando?" name="" id="">
        </div>

        <div class="m-auto h-full flex items-center">
            <button class="
    bg-blue-600            /* Cor de fundo */
    text-white             /* Cor do texto */
    font-semibold          /* Peso da fonte (importante para legibilidade) */
    py-2 px-6              /* Padding: mais largo nas laterais */
    rounded-md             /* Arredondamento médio */
    shadow-md              /* Sombra sutil para dar profundidade */
    
    /* Interatividade */
    hover:bg-blue-700      /* Escurece ao passar o mouse */
    focus:outline-none     /* Remove contorno padrão */
    focus:ring-2 focus:ring-blue-400 focus:ring-offset-2 /* Anel de foco acessível */
    
    /* Efeito de Clique (Opcional mas legal) */
    active:scale-95        /* Diminui levemente ao clicar */
    transition-all         /* Anima todas as mudanças */
    mr-2
  " type="submit">Upload Patch</button>
            <img class="p-4 h-full dark:brightness-0 dark:invert" src="/public/assets/img/icons/user-icon..svg" alt="avatar icon">
        </div>
    </header>
