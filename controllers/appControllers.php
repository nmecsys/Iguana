<?php

//Criando rotina 

//$container  = new Slim\Container;
//$container['cache'] = function () {
  
  //return new \Slim\HttpCache\CacheProvider();
  
//};

//$app = new \Slim\App($container);
//$app->add(new \Slim\HttpCache\Cache('public', 86400));


$app->get('/jornais', function() use ($app) {

  $results = [];
  $fonte = $app->request->get('fonte');
  $descricao = $app->request->get('descricao');
  $datainicio = $app->request->get('datainicio');
  $datafim = $app->request->get('datafim');
  $token = $app->request->get('token');
  $message = "Token nao encontrado!";
  $categoria = $app->request->get('categoria');
  
  if($token){
    
                $ok = Token::with('Autenticacao')
                            ->where('token','LIKE',"{$token}")
                            ->get();
                            
                $val = $ok->count();
                
                if($val > 0){
            
                      if ( $fonte & $descricao & $datainicio & $datafim ) {
                        $results =  Noticias::with('Jornais')
                                            ->where('manchete','LIKE',"{$descricao}")
                                            ->where('jornal','LIKE',"{$fonte}")
                                            ->whereBetween('date',[$datainicio,$datafim])
                                            ->limit(10)
                                            ->get();
                      } else if ( $fonte  ) {
                          $results =  Noticias::with('Jornais')
                                            ->where('jornal','LIKE',"{$fonte}")
                                            ->limit(10)
                                            ->get();
                        
                      } else if ( $datainicio & $datafim ) {
                        $results =  Noticias::with('Jornais')
                                            ->whereBetween('date',[$datainicio,$datafim])
                                            ->limit(10)
                                            ->get();
                        
                      } else if ( $datainicio ) {  
                        $results = Noticias::with('Jornais')
                                            ->where('date','>',"{$datainicio}")
                                            ->limit(10)
                                            ->get();
                          
                      } else if ( $datafim ) {
                          $results = Noticias::with('Jornais')
                                            ->where('date','<',"{$datafim}")
                                            ->limit(10)
                                            ->get();
                      } else {
                      
                        $results = Noticias::with('Jornais')
                                            ->limit(10)
                                            ->get();
                      }
                      $contador = $results->count();
                      
                      if ( $contador == 0  ) {
                        $message = 'No results were found, try another combination!';
                      }else{
                        
                         $message = $results->count() . ' results';
                        
                      }
                      
                    }else{
                  return helpers::jsonResponse(false, 'Token invalido', '0 results' );
                }
  }      
  
  return helpers::jsonResponse(false, $message,$results);
  
});




$app->get('/iguana/v1/incerteza', function() use ($app) {
  $results = [];
  $nmec = $app->request->get('nmec');
  $token = $app->request->get('token');
  $message = "Token nao encontrado!";
  $fonte = $app->request->get('fonte');
  $descricao = $app->request->get('descricao');
  $datainicio = $app->request->get('datainicio');
  $datafim = $app->request->get('datafim');
  $token = $app->request->get('token');
  $message = "Token nao encontrado!";
  $categoria = $app->request->get('categoria');
  $limite = $app->request->get('limite');
  
  if($token){
    
                $ok = Token::with('Autenticacao')
                            ->where('token','LIKE',"{$token}")
                            ->get();
                            
                $val = $ok->count();
                
                if($val > 0){
                  
                    if($nmec){
                      
                      if ( $fonte & $descricao & $datainicio & $datafim & $limite ) {
                        $results =  Noticias2::with('NoticiaIncert')
                                            ->where('incerteza','LIKE',"{$nmec}")
                                            ->where('manchete','LIKE',"{$descricao}")
                                            ->where('jornal','LIKE',"{$fonte}")
                                            ->whereBetween('date',[$datainicio,$datafim])
                                            ->limit($limite)
                                            ->get();
                      } else if ( $fonte  ) {
                        
                        
                                  if($limite){
                                    $results =  Noticias2::with('NoticiaIncert')
                                                      ->where('incerteza','LIKE',"{$nmec}")
                                                      ->where('jornal','LIKE',"{$fonte}")
                                                      ->limit($limite)
                                                      ->get();
                                  
                                  }else{
                                    $results =  Noticias2::with('NoticiaIncert')
                                                      ->where('incerteza','LIKE',"{$nmec}")
                                                      ->where('jornal','LIKE',"{$fonte}")
                                                      ->limit(10)
                                                      ->get();
                                    
                                  }
                                  
                        
                        
                        
                      } else if ( $datainicio & $datafim ) {
                        
                        
                        if($limite){
                        
                                $results =  Noticias2::with('NoticiaIncert')
                                                    ->where('incerteza','LIKE',"{$nmec}")
                                                    ->whereBetween('date',[$datainicio,$datafim])
                                                    ->limit($limite)
                                                    ->get();
                        }else{
                          
                                 $results =  Noticias2::with('NoticiaIncert')
                                                    ->where('incerteza','LIKE',"{$nmec}")
                                                    ->whereBetween('date',[$datainicio,$datafim])
                                                    ->limit(10)
                                                    ->get();
                          
                        }
                                
                                
                                
                      } else if ( $datainicio ) {  
                        
                            if($limite){
                            
                                      $results = Noticias2::with('NoticiaIncert')
                                                  ->where('incerteza','LIKE',"{$nmec}")
                                                  ->where('date','>',"{$datainicio}")
                                                  ->limit($limite)
                                                  ->get();
                                
                            }else{
                              $results = Noticias2::with('NoticiaIncert')
                                                  ->where('incerteza','LIKE',"{$nmec}")
                                                  ->where('date','>',"{$datainicio}")
                                                  ->limit(10)
                                                  ->get();
                                
                              
                            }
                                
                                
                      } else if ( $datafim ) {
                        
                        
                        if($limite){
                          $results = Noticias2::with('NoticiaIncert')
                                            ->where('incerteza','LIKE',"{$nmec}")
                                            ->where('date','<',"{$datafim}")
                                            ->limit($limite)
                                            ->get();
                                            
                        }else{
                          $results = Noticias2::with('NoticiaIncert')
                                            ->where('incerteza','LIKE',"{$nmec}")
                                            ->where('date','<',"{$datafim}")
                                            ->limit(10)
                                            ->get();
                        }                
                                            
                      } else {
                        
                        
                        if($limite){
                                  $results = Noticias2::with('NoticiaIncert')
                                            ->where('incerteza','LIKE',"{$nmec}")
                                            ->limit($limite)
                                            ->get();  
                        }else{
                          $results = Noticias2::with('NoticiaIncert')
                                            ->where('incerteza','LIKE',"{$nmec}")
                                            ->limit(1000)
                                            ->get();
                        }
                        
                      
                        
                      }
                      $contador = $results->count();
                      
                       if ( $contador == 0  ) {
                        $message = 'No results were found, try another combination!';
                      }else{
                        
                         $message = $results->count() . ' results';
                        
                      }
                      
                      //teriasdouhfiahsodfouifohaosih
                      
                      
                    $results = Noticias2::with('NoticiaIncert')
                                              ->where('incerteza','like',"{$nmec}")
                                              ->limit(1000)
                                              ->get();
                    }else{
                      $results = 0;
                      $message = 'No results were found, try another combination!';
                    }
                  
                  
                  
                }else{
                  return helpers::jsonResponse(false, 'Token invalido', '0 results' );
                }
  }
  
  
    
    return helpers::jsonResponse(false, $message,$results);
    
  
});


$app->get('/iguana/v1/classificacao', function() use ($app) {
  $results = [];
  $incerteza = $app->request->get('tipo');
  $fonte = $app->request->get('fonte');
  // classificacao  = all (noticias com todos os niveis de incerteza economica)
  // classificacao = 1 (noticias com pouca incerteza)
  // classificacao = 2 (noticias com media incerteza)
  // classificacao = 3 (noticias com alta incerteza)
  if($incerteza) { 
    
    
    
    
  } else {
    $message =$results->count() . ' results';
  }
  $message =$results->count() . ' results';
   return helpers::jsonResponse(false, $message, $results );
  
});

