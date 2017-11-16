<div class = "container">
    <div class="row">
        
        
        <?php
               if(isset($_POST['submit'])){
                $to = "contato@iguana.incertezalab.com"; // this is your Email address
                $from = $_POST['email']; // this is the sender's Email address
                $subject = "Token de acesso";
                $message = "Solicito o Token de acesso a extração de notícias através da IGUANA!";
                $headers = "From:" . $from;
                mail($to,$subject,$message,$headers);
    }
?>
        
        <div class="col-sm-8">
            <div class="card mb-3">
              <img class="card-img-top" src="https://jerryswiatek.com/wp-content/uploads/2016/03/code_banner.png" alt="Card image cap">
              <div class="card-body">
                <h2 class="card-title">Parâmetros </h2>
                
                
                <div class="alert alert-danger" role="alert">
                      <p>Atenção: é importante ter o token de acesso para obter as notícias!</p>
                      <p>Se não for passado o token:</p>
                      <pre>{"error":false,"message":"Token nao encontrado!","data":[]}</pre>
                      <p>Se seu token for inválido:</p>
                      <pre>{"error":false,"message":"Token invalido","data":"0 results"}</pre>
                </div>
                
                
                
                
                <p class="card-text"> 
                <span class="badge badge-dark">Extração padrão</span>
                
                </p>
                
                Para obter 1000 notícias aleatórias com o parametro <code>jornais</code>: <pre> iguana.incertezalab.com/jornais?token=(seu token de acesso)</pre> 
                
                
                <p class="card-text"> 
                    <span class="badge badge-dark">Extração por fonte</span>
                </p>
                
                <p class='card-text'>Atualmente é possível obter notícias dos seguintes jornais:</p>
                
                
                
                <table class="table table-dark">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">Jornal</th>
                          <th scope="col">Código para API </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>Correio Braziliense</td>
                          <td>@correio</td>
                          
                        </tr>
                        <tr>
                          <th scope="row">2</th>
                          <td>Estadão</td>
                          <td>@Estadao</td>
                          
                        </tr>
                        <tr>
                          <th scope="row">3</th>
                          <td>Zero Hora</td>
                          <td>@zerohora</td>
                          
                        </tr>
                        
                        <tr>
                          <th scope="row">4</th>
                          <td>Jornal O Globo</td>
                          <td>@JornalOGlobo</td>
                          
                        </tr>
                        
                        <tr>
                          <th scope="row">5</th>
                          <td>Folha Impresso</td>
                          <td>FOLHA</td>
                          
                        </tr>
                        
                         <tr>
                          <th scope="row">6</th>
                          <td>Globo</td>
                          <td>GLOBO</td>
                          
                        </tr>
                        
                        <tr>
                          <th scope="row">7</th>
                          <td>Estado</td>
                          <td>ESTADO</td>
                          
                        </tr>
                        
                        <tr>
                          <th scope="row">7</th>
                          <td>Estado</td>
                          <td>ESTADO</td>
                          
                        </tr>
                        
                         <tr>
                          <th scope="row">8</th>
                          <td>Folha Online</td>
                          <td>Folha Online</td>
                          
                        </tr>
                        
                      </tbody>
                    </table>
                
                
                
                <p class='card=text'>Use, por exemplo, para extrair notícias do jornal <code>correio braziliense</code>:</p>
                <pre>iguana.incertezalab.com/jornais?token=tokenfonte=@correio</pre>
                
                
                <p class="card-text"> 
                    <span class="badge badge-dark">Extração por descrição</span>
                </p>
                
                
                <p class='card-text'>
                    É possível filtrar termos em manchetes e obter notícias específicas. 
                </p>
                
                <pre>iguana.incertezalab.com/jornais?token=tokendescricao=Dilma</pre>
                
                
                <p class="card-text"> 
                    <span class="badge badge-dark">Extração por data</span>
                </p>
                
                <p class='card-text'>
                Os parâmetros para filtragem das noticias por data são <span class="badge badge-pill badge-success">datainicio</span> e <span class="badge badge-pill badge-success"> datafim</span> 
                respectivamente o inicio e fim da janela que se deseja obter as noticias.
                
                Para obter 1000 notícias aleatórias entre <code>AAAA-MM-DD</code> e <code>AAAA-MM-DD</code>: <pre> iguana.incertezalab.com/jornais?datainicio=2017-01-01&datafim=2017-06-01</pre> 
                <p class='card-text'>É possível usar datafim ou datainicio separadamente para obter noticias. Veja os exemplos: </p>
                <p class='card-text'>Notícias depois de <code>01 de janeiro de 2017</code>:</p>
                <pre>iguana.incertezalab.com/jornais?token=tokendatainicio=2017-01-01</pre>
                
                <p class='card-text'>Notícias até <code>01 de janeiro de 2017</code>:</p>
                <pre>iguana.incertezalab.com/jornais?token=token&datafim=2017-01-01</pre>
                
                
                <p class="card-text"> 
                    <span class="badge badge-dark">Extração por categoria</span>
                </p>
                
                
                <p class='card-text'>É possível filtrar notícias por categorias. São 26 categorias disponíveis: <code>Cotidiano</code>,
                <code>Educação</code>, <code>Esporte</code>, <code>Poder</code>, <code>Mundo</code>, <code>Ilustrada</code>, <code>Mercado</code>,
                <code>Ciência</code>, <code>Equilíbrio</code>, <code>Turismo</code>, <code>BBC Brasil</code>, <code>Tec</code>, <code>Podcasts</code>,
                <code>Veículos</code>, <code>Colunistas</code>, <code>Opinião</code>,<code>Comida</code>, <code>Imóveis</code>,
                <code>Negocios</code>,<code>Especial</code>, <code>Equilíbrio e Saúde</code>,<code>Ambiente</code>, <code>Empregos</code>, 
                <code>Folha Corrida</code>.
                
                </p>
                
                <pre>iguana.incertezalab.com/jornais?token=token&categoria=Esporte</pre>
                <pre>iguana.incertezalab.com/jornais?token=token&categoria=Negocios</pre>
                <pre>iguana.incertezalab.com/jornais?token=token&categoria=Mundo</pre>
                
                 <p class="card-text"> 
                    <span class="badge badge-dark">Extração por classificação</span>
                </p>
                
                <p class="card-text">
                    Nossos algoritmos de leitura e garimparagem de texto, já fizeram uma pré-classificação das notícias que são de incerteza econômica. Com isso, é possível
                    filtrar e obter apenas notícias com essa característica. Repare que a instância da api, para esse caso, é <code>incerteza</code>.
                </p>
                
                <p class="card-text"> Escolha <span class="badge badge-pill badge-success">1</span> para incerteza e <span class="badge badge-pill badge-success">0</span> para 
                    não incerteza, use:</p>
                
                <pre>iguana.incertezalab.com/incerteza?token=token&nmec=1</pre> ou 
                <pre>iguana.incertezalab.com/incerteza?token=token&nmec=0</pre>
                
                
                <p class="card-text">É possível combinar todos os parâmetro de refinamento para notícias de incerteza, ou seja, é possível utilizar o parâmetro 
                <code>incerteza</code> e refinar por manhete, data, fonte e categoria.
                </p>
                
                
                
                
                <p class="card-text"> 
                    <span class="badge badge-dark">Juntando os parâmetros</span>
                </p>
                
                <pre>iguana.incertezalab.com/jornais?token=token&datainicio=2017-05-01&datafim=2017-05-30
                </pre>
                
                
                
                
                
                
                
              </div>
            </div>
        </div>
        <div class="col-sm-4">
            
            <div class="card mb-3">
              
              <div class="card-body">
                
                <p class="card-text"></p>
                 <form id="get-token" action='' method='post'>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Solicite seu Token</label>
                        <input type="email" class="form-control"   name="email"  aria-describedby="emailTOKEN" placeholder="Insira seu endereço de email">
                        <small id="emailTOKEN" class="form-text text-muted">Nós não compartilharemos o seu email.</small>
                      </div>
                       <button type="submit" name='submit'   class="btn btn-outline-dark">Solicitar</button>
                      </form>
                <p class="card-text"><small class="text-muted"></small></p>
              </div>
            </div> 
            
            
            <div class="card mb-3">
              
              <div class="card-body">
                
                <p class="card-text"><strong>BETS</strong> - Brazilian Economic Time Series</p>
                 <p> Uma forma direta de conectar o R a milhares de séries temporais junto com ferramentas de análises.</p>
                <p class="card-text"><small class="text-muted"></small></p>
                
                
                <div class="row">
                     <div class="col-2">
                         <button type="button" class="btn btn-outline-dark"><i class="fa fa-cloud-download" aria-hidden="true"></i>  <a href = 'https://CRAN.R-project.org/package=BEST'  target="blank"> CRAN </a></button>
                     </div>
                     <div class="col-2">
                         <button type="button" class="btn btn-outline-dark"><i class="fa fa-github" aria-hidden="true"></i> <a href = 'https://github.com/nmecsys/BETS'  target="blank"> GitHub</a></button>
                     </div>    
                </div>
                
                
              </div>
            </div> 
            
                <div class="card mb-3">
                  
                  <div class="card-body">
                    
                    <p class="card-text"><strong>Nowcasting</strong></p>
                     
                     <p class="card-text">
                        Previsão do PIB brasileiro no futuro próximo ou passado recente, utilizando modelos de fatores dinâmicos (DFN).
                     </p>
                     
                     <div class="row">
                         <div class="col-2">
                              <button type="button" class="btn btn-outline-dark"><i class="fa fa-cloud-download" aria-hidden="true"></i><a href=" https://CRAN.R-project.org/package=nowcasting" target="blank"> CRAN</a></button>
                         </div>
                         <div class="col-2">
                             <button type="button" class="btn btn-outline-dark"><i class="fa fa-github" aria-hidden="true"></i><a href="https://github.com/guilbran/nowcasting" target="blank"> GitHub</a></button>
                         </div>    
                    </div>
                     
                     
                    <p class="card-text"><small class="text-muted"></small></p>
                  </div>
                </div> 
    
    
    
             <div class="card mb-3">
                  
                  <div class="card-body">
                    
                    <p class="card-text"><strong>IIE-Br - Shiny app</strong></p>
                     
                     
                    <p class="card-text">
                        Indice que mede a incerteza econômica do Brasil.
                    </p>
                    <p class="card-text">
                    Mensura-se a incerteza econômica considerando a frequência de notícias com menção à incerteza, a dispersão nas previsões dos especialistas tanto para a taxa de câmbio quanto para o IPCA e a volatilidade do mercado acionário.
                     </p>
                     <div class="row">
                         <div class="col-2">
                              <button type="button" class="btn btn-outline-dark"><i class="fa fa-cloud-download" aria-hidden="true"></i><a href=" https://CRAN.R-project.org/package=nowcasting" target="blank"> FGV</a></button>
                         </div>
                         <div class="col-2">
                             <button type="button" class="btn btn-outline-dark"><i class="fa fa-github" aria-hidden="true"></i><a href="https://pedroferreira.shinyapps.io/incerteza/" target="blank"> APP</a></button>
                         </div>    
                    </div>
                     
                     
                    <p class="card-text"><small class="text-muted"></small></p>
                  </div>
                </div> 
    
    
    
    
    
    
    
            
            </div>
            
            
            
            
            
            
            
            
            
            
            
        
    </div><!-- .row-->
</div><!-- .container-->