<?php
    if (isset($_POST['idade'])) {
        var_dump("escolheu " . $_POST['idade']);
    } else {
        var_dump("O usuario não escolheu nenhuma opção");
    }
?>