<!DOCTYPE html>
<html>
    <body>
        <?php
        $idade = 17;

        if($idade < 18) {
            echo "Você não pode entrar aqui!";
        } else {
            echo "Sela bem vindo";
        }
        ?>

        <?php
        $idade = 21;
        $identidade = true;

        if($idade > 18 && $identidade == true) {
            echo "Seja bem vindo!";
        }
        ?>
    </body>
</html>