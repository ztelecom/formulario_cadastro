<?php 


?>

<!DOCTYPE html>
<html>
    <head>
        <title>Formulario de Pesquisa</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                        <label>Nome e <br>Sobrenome</label>
                        <div class="form_campos">
                            <div class="campos">
                                <input type="text" name="name" placeholder="Digite o Nome" required />
                                <input type="text" name="lastname" placeholder="Digite o Sobrenome" required/>
                            </div>
                            <div class="text_desc">
                                <b>Nome</b>
                                <b>Sobrenome</b>
                            </div>
                        </div>
                    </fieldset>

                    <fieldset>
                        <label  style="display: flex; align-items: center;">Empresa</label>
                        <div class="form_campos">
                            <input id="empresa" type="text" name="empresa" placeholder="Nome da Empresa" required />
                        </div>
                    </fieldset>

                    <fieldset>
                        <label>Telefone com <br>DDD</label>
                        <div class="form_campos">
                            <div class="campos">
                                <input type="text" name="ddd" placeholder="Digite o DDD" required/>
                                <input type="text" name="telefone" placeholder="Digite o Telefone" max-legth="9" required />
                            </div>
                            <div class="text_desc">
                                <b>DDD</b>
                                <b>Telefone</b>
                            </div>
                        </div>
                    </fieldset>

                    <fieldset>
                        <label>Sexo</label>
                        <div class="form_campos">
                            <select>
                                <option name="m">--Selecione a Opção</option>
                                <option name="m">Masculino</option>
                                <option name="f">Feminino</option>
                            </select>
                        </div>
                    </fieldset>

                    <fieldset id="collumn">
                        <label>Você é iniciante?</label>
                        <div class="form_campos flex">
                            <input id="radio_ajuste" type="radio" name="iniciante" value="sim"/> 
                            <label id="radio_txt">Sim</label>
                            <input id="radio_ajuste"type="radio" name="iniciante" value="nao"/> 
                            <label id="radio_txt">Não</label>
                        </div>
                        <input id="buttom" type="submit" value="Cadastrar">
                    </fieldset>

                </form>
            <div>
        </div>
    </section>
    
    <footer>
        @copyright - Criado por Zander J.L
    </footer>

</body>
</html>