<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1,minimum-scale=1, maximum-scale=1" />
        <title>Minha primeira página</title>
        <link rel="shortcut icon" href="icon/camera.png"> 
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <h1>Meu primeiro título</h1>
        <div>
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
        <div>
            <p>
                <img src="img/noteGamer.jpg" title="Notebook Acer Gamer" alt="notebook gamer">
            </p>
        </div>
        <div>
            <p class="segundoparagrafo">
                Why do we use it?
                It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
            </p>
        </div>
        <h1>Lista de Compras</h1>
        <div class="lista">
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
        <div class="audio">
            <audio controls>
                <source src="" type="audio/mp3">
            </audio>      
        </div>

        <h1>Formulários</h1>
        <div class="container">
            <form action="" method="post">
                <fieldset>
                    <legend>Formulário de cadastro</legend>
                    <div class="row">
                        <div class="col-25">
                            <label>Nome:</label>
                        </div>
                        <div class="col-75">
                            <input type="text" placeholder="digite seu nome">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label>Sobrenome:</label>
                        </div>
                        <div class="col-75">
                            <input type="text" placeholder="digite seu sobrenome">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label>Idade:</label>
                        </div>
                        <div class="col-75">
                            <input type="number" min="0" max="110">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label>Telefone</label>
                        </div>
                        <div class="col-75">
                            <input type="tel" placeholder="(xx)9 ####-####">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label>Data de Nascimento</label>
                        </div>
                        <div class="col-75">
                            <input type="date">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label>Genero:</label> 
                        </div>
                        <div class="col-75">
                            <label class="containe">
                                <input type="radio" name="genero" value="masculino">
                                <span class="checkmark"></span>
                                Masculino
                            </label>

                            <label class="containe">
                                <input type="radio" name="genero" value="feminino">
                                <span class="checkmark"></span>
                                Feminino
                            </label>

                            <label class="containe">
                                <input type="radio" name="genero" value="outros">
                                <span class="checkmark"></span>
                                Outros
                            </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label>Transportes:</label>
                        </div>
                        <div class="col-75">                            
                            <label class="containe trans">
                                <input type="checkbox" value="bike">
                                <span class="checkmark2"></span>
                                Bicicleta
                            </label>
                            <label class="containe trans">
                                <input type="checkbox" value="moto">
                                <span class="checkmark2"></span>
                                Moto
                            </label>
                            <label class="containe trans">
                                <input type="checkbox" value="carro">
                                <span class="checkmark2"></span>
                                Carro
                            </label>
                            <label class="containe trans">
                                <input type="checkbox" value="publico">
                                <span class="checkmark2"></span>
                                Público
                            </label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label>Cidade Satélite</label>
                        </div>
                        <div class="col-75">
                            <select class="custom-select" style="width:200px;">
                                <option>Selecione...</option>
                                <option value="aguasclaras">Águas Claras</option>
                                <option value="brazlandia">Brazlândia</option>
                                <option value="ceilandia">CeiLândia</option>
                                <option value="cruzeiro">Cruzeiro</option>
                                <option value="estrutural">Estrutural</option>
                                <option value="gama">Gama</option>
                                <option value="guara">Guará</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label>Mensagem:</label>
                        </div>
                        <div class="col-75">
                            <textarea></textarea>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-25"></div>
                        <div class="col-75">
                            <input class="add" type="submit" value="Cadastrar">
                            <input class="clean" type="submit" value="Limpar">
                            <input class="del" type="submit" value="Cancelar">
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </body>
</html>
