<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Minha primeira página</title>
        <link rel="shortcut icon" href="icon/camera.png"> 
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <h1>Meu primeiro título</h1>
        <div id="esquerda">
            <p id="primeiroparagrafo"><strong> <b>Lorem Ipsum</b> is simply dummy text of the 
                    <a href="https://www.google.com" target="blanck"> 
                        printing </a> and typesetting industry.</strong> 
                <mark>Lorem Ipsum has been the industry's standard dummy text ever </mark>
                since the 1500s, when an unknown printer took a galley of type 
                and scrambled it to make a type specimen book.<del> It has survived 
                    not only five <ins>centuries, but also the leap into electronic</ins> 
                    typesetting, remaining essentially unchanged.</del> It was <i>popularised 
                    in the 1960s</i> with the release of Letraset sheets containing Lorem 
                Ipsum passages, and more recently with desktop publishing software 
                like Aldus PageMaker including versions of Lorem Ipsum.
            </p>
        </div>
        <div id="centro">
            <p>
                <img src="img/noteGamer.jpg" title="Notebook Acer Gamer" alt="notebook gamer">
            </p>
        </div>
        <div id="direita">
            <p class="segundoparagrafo">
                Why do we use it?
                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
            </p>
        </div>
        <h1>Lista de Compras</h1>
        <div>
            <ul>
                <li class="uva">Uva</li>
                <li>Banana</li>
                <li>Abacate</li>
                <li>Abacaxi</li>
                <li>Maçã</li>
                <li>Morango</li>
                <li>Batata</li>
                <li>Tomate</li>
            </ul>
        </div>
        <h1>Tabela de notas</h1>
        <div class="tabela">
            <table>
                <tr>
                    <th class="aluno">Aluno</th>
                    <th>Nota1</th>
                    <th>Nota2</th>
                    <th>Nota3</th>
                    <th>Nota4</th>
                    <th>Média</th>
                </tr>
                <tr>
                    <td class="aluno">Ralph</td>
                    <td>7.0</td>
                    <td>5.5</td>
                    <td>6.0</td>
                    <td>4.5</td>
                    <td>8.0</td>
                </tr>
                <tr>
                    <td class="aluno">João</td>
                    <td>7.0</td>
                    <td>5.5</td>
                    <td>6.0</td>
                    <td>4.5</td>
                    <td>8.0</td>
                </tr>
                <tr>
                    <td class="aluno">Bruna</td>
                    <td>7.0</td>
                    <td>5.5</td>
                    <td>6.0</td>
                    <td>4.5</td>
                    <td>8.0</td>
                </tr>
                <tr>
                    <td class="aluno">Lucas</td>
                    <td>7.0</td>
                    <td>5.5</td>
                    <td>6.0</td>
                    <td>4.5</td>
                    <td>8.0</td>
                </tr>
            </table>
        </div>

        <h1>Vídeos</h1>
        <iframe id="video" width="360" height="215" src="https://www.youtube.com/embed/oZ7VgXM63gc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <h1>Mapas - geolocalização</h1>
        <iframe id="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3839.1455185741065!2d-47.892343585145035!3d-15.796279189049995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935a3ae665464fb7%3A0x29d89d9adf83e13f!2sSenac%20Jess%C3%A9%20Freire%20(DF)!5e0!3m2!1spt-BR!2sbr!4v1613996258008!5m2!1spt-BR!2sbr" width="300" height="250" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        <h1>Áudio</h1>
        <audio controls>
            <source src="" type="audio/mp3">
        </audio>
        <h1>Formulários</h1>
        <form action="" method="post">
            <fieldset>
                <legend>Formulário de cadastro</legend>
                <label>Nome:</label>
                <input type="text" placeholder="digite seu nome"><br>
                <label>Sobrenome:</label>
                <input type="text" placeholder="digite seu sobrenome"><br>
                <label>Idade:</label>
                <input type="number"><br>
                <label>Telefone</label>
                <input type="tel"><br>
                <label>Data de Nascimento</label>
                <input type="date"><br>
                <label>Genero:</label><br>
                <input type="radio" name="genero" value="masculino">
                <label>Masculino</label>
                <input type="radio" name="genero" value="feminino">
                <label>Feminino</label>
                <input type="radio" name="genero" value="outros">
                <label>Outros</label><br>
                <label>Transportes:</label><br>
                <input type="checkbox" value="bike">
                <label>Bicicleta</label>
                <input type="checkbox" value="moto">
                <label>Moto</label>
                <input type="checkbox" value="carro">
                <label>Carro</label>
                <input type="checkbox" value="publico">
                <label>Público</label><br>
                <label>Cidade Satélite</label><br>
                <select size="5">
                    <option>Selecione...</option>
                    <option value="aguasclaras">Águas Claras</option>
                    <option value="brazlandia">Brazlândia</option>
                    <option value="ceilandia">CeiLândia</option>
                    <option value="cruzeiro">Cruzeiro</option>
                    <option value="estrutural">Estrutural</option>
                    <option value="gama">Gama</option>
                    <option value="guara">Guará</option>
                </select><br>
                <label>Mensagem:</label><br>
                <textarea style="width:400px; height:200px;"></textarea><br>
                <input type="submit" value="Cadastrar">
                <input type="button" value="Limpar">
                <button type="button">Cancelar</button>
            </fieldset>
        </form>
    </body>
</html>
