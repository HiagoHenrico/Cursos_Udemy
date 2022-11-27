<?php


/* Exibição de Conteúdo

- Com uma técnica semelhante ao short tags, podemos exibir conteúdo sem o echo;
- Ótima estratégia para resumir as chamadas PHP apenas para exibição de valores;
- Exemplo:

<?="teste";?>

*/

$nome = "Hiago";
$sobrenome = "Henrico";

?>

<form action="">
    <div>
        <input type="text" value="<?= $nome; ?>">
        <input type="text" value="<?= $sobrenome; ?>">

    </div>
    <div>
        <input type="submit" value="Enviar">
    </div>
</form>