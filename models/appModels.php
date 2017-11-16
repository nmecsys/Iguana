<?php



#mudar futuramente para a tabela so de noticias e nao de classificacao
#=================================
class Noticias extends Illuminate\Database\Eloquent\Model
{
  protected $table = 'Noticias';
  
  
   public function Jornais() {
     //ini_set('memory_limit','160M');
     // Temporarily increase memory limit to 256MB
    return $this->hasOne('noticias','date','manchete','noticia','categoria');
  }

}



class Noticias2 extends Illuminate\Database\Eloquent\Model
{
  protected $table = 'Noticias';
  
  
   public function NoticiaIncert(){
        
        return $this->hasOne('noticias','date','manchete','noticia','categoria','incerteza');
        
    }
}




class Factiva extends Illuminate\Database\Eloquent\Model
{
    protected $table = 'factiva';
    
    public function Factiva1(){
     
        return $this->hasOne('date','manhete','noticia','jornal','word_count','incerteza');
        
        
    }
    
    
}


class Classificador extends Illuminate\Database\Eloquent\Model
{
    
    protected $table = 'Classificacao';
    
   
    public function NoticiaIncert(){
        
        return $this->hasOne('noticias','date','manchete','noticia','categoria','incerteza');
        
    }
    
    public function Classific(){
        
        return $this->hasOne('classificacao','id_login','classificacao','valor');
        
    }
    
}

class Token extends Illuminate\Database\Eloquent\Model
{
    
    protected $table = 'tokenapi';
    
    public function Autenticacao(){
        return $this->hasOne('token','id_token','token');
    }
    
}