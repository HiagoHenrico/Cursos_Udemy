<p>Testando</p>
<?php

/* Require
- Com o require inserimos um arquivo de PHP, ou até mesmo um HTML em outro;
- Podendo assim ultilizar tudo que está declarado no arquivo incluído;
- O require gera erro fatal se o arquivo não existir, parando o script;
- Exemplo:
require "arquivo.ext" */

require "teste.php";


?>

<p>Arquivo do Include</p>

<?php

require "arquivos/funcao.php";

?>