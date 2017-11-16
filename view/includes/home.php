<div class="container">
  
  
  
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
  
  
<div class="jumbotron text-center">
  <h1>Sistema Localizador de Notícias</h1> 
  <p>Tornando simples o acesso a notícias para análises</p> 
   <form id="get-token" action='' method='post'>
  <div class="form-group">
    <label for="exampleInputEmail1">Solicite seu Token</label>
    <input type="email" class="form-control"   name="email"  aria-describedby="emailTOKEN" placeholder="Insira seu endereço de email">
    <small id="emailTOKEN" class="form-text text-muted">Nós não compartilharemos o seu email.</small>
  </div>
   <button type="submit" name='submit'   class="btn btn-outline-light">Solicitar</button>
  </form>
</div>




<br>
<!-- Container (About Section) -->

      
      
      
  
  
 <div class="row">
    <div class="col-sm-4">
      <div class="card">
        <img class="card-img" src="images/valor_logo.jpg" alt="Paris" >
        
      </div>
    </div>
    <div class="col-sm-4">
      <div class="card">
        <img class="card-img" src="images/Folha.png" alt="New York" >
        
      </div>
    </div>
    <div class="col-sm-4">
      <div class="card">
        <img class="card-img" src="images/correio.png" alt="San Francisco" >
        
      </div>
    </div>
    
    </div>
    
    <div class="row ">
    
    <div class="col-sm-4">
      <div class="card">
        <img class="card-img" src="images/zerohora.png" alt="San Francisco" >
       
      </div>
    </div>
    
    
    <div class="col-sm-4">
      <div class="card">
        <img class="card-img" src="images/estadao.png" alt="San Francisco" >
      </div>
    </div>
    
    <div class="col-sm-4">
      
      <div class="card">
        <img class="card-img" src="images/oglobo.jpg" alt="Card image">
      </div>
    </div>
    
  </div>
</div>


<br>




<!-- Container (Pricing Section) -->
<div  class="container">
  <div class="text-center">
    <h2>Como se Conectar com a API em R e Python</h2>
    
  </div>
  <br>
  <div class="row ">
    <div class="col-sm-6 col-xs-12">
      
     

          <div class="card bg-dark text-white">
            <img class="card-img" src="images/cards_iguana_r.png" alt="Card image">
            <div class="card-img-overlay">
             <center><h3 class="card-title">iguanaR</h3></center>
            </div>
          </div>
          
          <div class="alert alert-success" role="alert">
            <center>
                <button type="button" class="btn btn-outline-success">Download</button>
                <button type="button" class="btn btn-outline-success">Documentação</button>
                <span class="sr-only">R</span>
            </center>
        </div><!--/alert alert-d -->
          
          
            
    </div>     
           
    <div class="col-sm-6 col-xs-12">
      
       
             <div class="card bg-dark text-white">
              <img class="card-img" src="images/cards_iguana_python.png" alt="Card image">
              <div class="card-img-overlay">
                <center><h3 class="card-title">iguanAPI</h3></center>
              </div>
            </div>
            
            
            <div class="alert alert-success" role="alert">
              <center>
                    <button type="button" class="btn btn-outline-success">Download</button>
                    <button type="button" class="btn btn-outline-success">Documentação</button>
                    <span class="sr-only">Python</span>
                    </center>
            </div><!--/alert alert-danger-->
            
    </div>    
  </div>
</div>
