<?php require dirname(__DIR__) . "/layouts/header.php" ?>

<form class="flex max-w-2xs flex-col" id="registerForm" action="/authenticate" method="post">
    <?php /* Nome */ renderComponent("input-text") ?>
    <?php /* Username */ renderComponent("input-text", ['name' => 'username', 'id' => 'id']) ?>
    <input type="email" name="email" id="email">
    <input type="password" name="password" id="password">
    <input type="submit" value="Cadastrar">
</form>


<?php require dirname(__DIR__) . "/layouts/footer.php" ?>