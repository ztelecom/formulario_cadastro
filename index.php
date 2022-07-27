<?php 


?>

<!DOCTYPE html>
<html>
    <head>
        <title>Formulario de Pesquisa</title>
        <link rel="stylesheet" type="text/css" href="assets/css/estilo.css">
    </head>
<body>
    <header></header>

    <section>
        <div class="container">
            <div class="form_title">Formulário de Cadastro</div>
            <div class="form_fields">
                <form class="form_layout" method="POST" action="">

                <fieldset>
                    <label>Nome e Sobrenome</label>
                    <div class="form_campos">
                        <input type="text" name="name"/>
                        <input type="text" name="lastname"/>
                    </div>
                </fieldset>

                <fieldset>
                    <label>Empresa</label>
                    <div class="form_campos">
                        <input type="text" name="empresa"/>
                    </div>
                </fieldset>

                <fieldset>
                    <label>Telefone com DDD</label>
                    <div class="form_campos">
                        <input type="text" name="ddd"/>
                        <input type="text" name="telefone"/>
                    </div>
                </fieldset>

                <fieldset>
                    <label>Sexo</label>
                    <div class="form_campos">
                        <select>
                            <option name="m">Masculino</option>
                            <option name="f">Feminino</option>
                        </select>
                    </div>
                </fieldset>

                <fieldset>
                    <label>Você é iniciante?</label>
                    <div class="form_campos">
                        <input type="radio" name="iniciante" value="sim"/> 
                        <label>Sim</label>
                        <input type="radio" name="iniciante" value="nao"/> 
                        <label>Não</label>
                    </div>
                </fieldset>

                <fieldset>
                    <div class="form_campos">
                        <input type="submit" value="Cadastrar">
                    </div>
                </fieldset>


                <form>
            <div>
        </div>
    </section>
    
    <footer></footer>

</body>
</html>