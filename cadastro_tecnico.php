<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/styles_cadastro_tecnico.css">
        <title>Service - T.I</title>
    </head>
    <body>
        <div class="container">
            <h1>Cadastro - Formulário de Técnico</h1>
            <form>
                <div>
                    <input type="text" placeholder="Digite seu nome" class="inputs">
                    <span class="span-required">Nome der ter no minimo 5 caracteres.</span>
                </div>

                <div>
                    <input type="text" placeholder="E-mail" class="inputs">
                    <span class="span-required">Digite um e-mail válido.</span>
                </div>

                <div>
                    <input type="text" placeholder="telefone" class="inputs">
                    <span class="span-required"></span>
                </div>

                <div>
                    <input type="password" placeholder="Senha" class="inputs">
                    <span class="span-required">Digite uma senha com no mínimo 8 caracteres.</span>
                </div>

                <div>
                    <input type="password" placeholder="Repita sua Senha" class="inputs">
                    <span class="span-required">Senhas deve ser compatíveis.</span>
                </div>

                <div>
                    <label>Serviço a ser Prestado</label><br>
                </div>

                <div>
                    <select>
                        <option>Consultória em Redes de Computadores</option>
                        <option>Limpeza Preventiva</option>
                        <option>Atendimento Remoto</option>
                    </select>
                </div>

                <div>
                    <label>Área de Atendimento</label>
                </div>

                <div>
                    <select>
                        <option>Zona Sul</option>
                        <option>Zona Norte</option>
                        <option>Zona Leste</option>
                    </select>
                </div>

                <div>
                    <label>Descrição do Serviço a ser Prestado</label><br>
                    <input type="text" name="descricao" placeholder="Digite aqui.">
                </div>

                <div>
                    <label>Horário de Atendimento</label><br>
                    <input type="time" name="horario"><br><br>
                </div>

                <button type="submit">Enviar</button>

            </form>
        </div>
    </body>
</html>