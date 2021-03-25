<?php

    // restante do código onde você pega o status no banco e guarda na variável $status_banco, por exemplo

    $status_botao = $status_banco == true ? "" : "disabled";

    // seta a propriedade 'disabled' do botão de acordo com o status
    print "<button ".$status_botao."> Botão </button>";
?>