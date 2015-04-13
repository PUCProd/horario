<?php require_once 'controllers/Professor.php';?>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>
function teste(){
    window.alert("OK");
}
$(document).ready(function(){
    $("btnsubmit").submit(function(){
            $.ajax({				
		// Captura a URL de envio do form
		url: $(this).attr('action'),
		// Captura o método de envio do form
		type: $(this).attr('method'),
		// Os dados do form
		data: new FormData($(this)),
		// Não processa os dados
		processData: false,
		// Não faz cache
		cache: false,
		// Não checa o tipo de conteúdo
		contentType: false  	
                }); 
            return false;
        });
    $(".botao-verde").ready(function(){ //teste
        $(this).attr("style", "background-color: #00FF00");    
    });
    $(".botao-amarelo").ready(function(){
        $(this).attr("style", "background-color: #FFFF00");
        });
    $(".botao-vermelho").ready(function(){
        $(this).attr("style", "background-color: #FF0000");
    });
});
</script>
    
<!-- Main component for a primary marketing message or call to action -->
<div class="jumbotron">
    <div><!--Inicializa a tabela dos horários -->      
        <form method="post" action="<?php echo HOME;?>professor/organizaHorario/<?php echo $prof['id_professor']?>"> <!--trocar o update professor.php-->
            <table>
                <tr>
                    <td>    
                        <h5>
                            Nome &nbsp;
                        </h5>
                    </td>                              
                    <td>
                        <h5>    
                            <input type="text" name="nome" 
                                   value="<?php echo $prof['nome']; ?>" id="bSite" 
                                   onfocus="EmptyField(this.id)">
                        </h5>                    
                        </td>
                </tr>
                <tr>
                    <td>    
                        <h5>
                            Apelido &nbsp;
                        </h5>
                    </td>                              
                    <td>
                        <h5>    
                            <input type="text" name="apelido" 
                                   value="<?php echo $prof['apelido'];?>" id="aSite" 
                                   onfocus="EmptyField(this.id)">
                            </h5>                    
                    </td>
                </tr>
                <tr>
                    <td>    
                        <h5>
                            Carga-Horária&nbsp;
                        </h5>
                    </td>                
                    <td>
                        <h5>    
                            <input type="number" name="carga_horaria" 
                                   value="<?php echo $prof['carga_horaria'];?>" id="cSite" 
                                   onfocus="EmptyField(this.id)">                                    
                        </h5>                    
                    </td>                            
                </tr>    
                    <tr>
                        <td>
                            <input type="submit" class="btn botao-confirmar-config botao-confirmar" 
                                   value="Alterar">
                            <input type="hidden" name="campo" 
                                   value = "<?php $prof['id_professor'];?>">
                        </td>
                    </tr>  
            </table>
        </form>
              
        <br>
            <table 
                class="table table-bordered table-condensed table-hover table-responsive table-striped">
                <tr>
                    <th>
                        <p>Segunda-Feira</p>
                    </th>
                    <th>
                        <p>Terça-Feira</p>
                    </th>
                    <th>
                        <p>Quarta-Feira</p>
                    </th>
                    <th>
                        <p>Quinta-Feira</p>
                    </th>
                    <th>
                        <p>Sexta-Feira</p>
                    </th>
                </tr>
                <tr>
                    <td>
                        <form class="btnsubmit" 
                              action="<?php echo HOME;?>professor/organizaHorario/<?php echo $prof['id_professor']?>" method="post">
                        <p> 
                          <input type="submit" name="segunda01" class="btn botao-verde-config    botao-verde"  
                                 role="button"  value="1" onload="teste()">
                              </input>                              
                          <input type="submit" name="segunda01" class="btn botao-amarelo-config  botao-amarelo" 
                                 role="button" value="2">
                              </input>
                              <input type="submit" name="segunda01" class="btn botao-vermelho-config botao-vermelho"
                                     role="button" value="3">
                              </input>
                        </p>    
                          </form>
                        <br>                                               
                      </td>
                      <!-- Final do TD -->                    
                      
                      <td>
            
                          <form class="btnsubmit" action="<?php echo HOME;?>professor/organizaHorario/<?php echo $prof['id_professor']?>" method="post">
                        <p> 
                          <input type="submit" name="terca01" class="btn botao-verde-config    botao-verde"  
                                 role="button" value="1">
                              </input>                              
                          <input type="submit" name="terca01" class="btn botao-amarelo-config  botao-amarelo" 
                                 role="button" value="2">
                              </input>
                              <input type="submit" name="terca01" class="btn botao-vermelho-config botao-vermelho"
                                     role="button" value="3">
                              </input> 
                        </p>
                          </form>
                        <br>                                               
                      </td>
                      <!-- Final do TD -->        
                      
                      <td>                                    
                          <form class="btnsubmit" action="<?php echo HOME;?>professor/organizaHorario/<?php echo $prof['id_professor']?>" method="post">
                        <p> 
                          <input type="submit" name="quarta01" class="btn botao-verde-config    botao-verde"  
                                 role="button" value="1">
                              </input>                              
                          <input type="submit" name="quarta01" class="btn botao-amarelo-config  botao-amarelo" 
                                 role="button" value="2">
                              </input>
                              <input type="submit" name="quarta01" class="btn botao-vermelho-config botao-vermelho "
                                     role="button" value="3">
                              </input> 
                        </p>                                   
                            </form>                                        
                        <br>                                               
                      </td>
                      <!-- Final do TD -->                    
                      
                      <td>                                      
                          <form class="btnsubmit" action="<?php echo HOME;?>professor/organizaHorario/<?php echo $prof['id_professor']?>" method="post">
                        <p> 
                          <input type="submit" name="quinta01" class="btn botao-verde-config    botao-verde"  
                                 role="button" value="1">
                              </input>                              
                          <input type="submit" name="quinta01" class="btn botao-amarelo-config  botao-amarelo" 
                                 role="button" value="2">
                              </input>
                              <input type="submit" name="quinta01" class="btn botao-vermelho-config botao-vermelho"
                                     role="button" value="3">
                              </input>
                        </p>    
                          </form>
                        <br>                                               
                      </td>
                      <!-- Final do TD -->                                          
                      
                      <td>                                    
                          <form class="btnsubmit" action="<?php echo HOME;?>professor/organizaHorario/<?php echo $prof['id_professor']?>" method="post">
                        <p> 
                          <input type="submit" name="sexta01" class="btn botao-verde-config    botao-verde"  
                                 role="button" value="1">
                              </input>                              
                          <input type="submit" name="sexta01" class="btn botao-amarelo-config  botao-amarelo" 
                                 role="button" value="2">
                              </input>
                              <input type="submit" name="sexta01" class="btn botao-vermelho-config botao-vermelho"
                                     role="button" value="3">
                              </input>
                        </p>    
                          </form>
                        <br>                                               
                      </td>
                      <!-- Final do TD -->                    
                    </tr>                                      
                    <!-- Final do TR -->                    
                    
                    <td>
                          <form class="btnsubmit" action="<?php echo HOME;?>professor/organizaHorario/<?php echo $prof['id_professor']?>" method="post">
                        <p> 
                          <input type="submit" name="segunda02" class="btn botao-verde-config    botao-verde"  
                                 role="button" value="1">
                              </input>                              
                          <input type="submit" name="segunda02" class="btn botao-amarelo-config  botao-amarelo" 
                                 role="button" value="2">
                              </input>
                              <input type="submit" name="segunda02" class="btn botao-vermelho-config botao-vermelho"
                                     role="button" value="3">
                              </input>
                        </p>    
                          </form>
                        <br>                                               
                      </td>
                      <!-- Final do TD -->                    
                      
                      <td>
            
                          <form class="btnsubmit" action="<?php echo HOME;?>professor/organizaHorario/<?php echo $prof['id_professor']?>" method="post">
                        <p> 
                          <input type="submit" name="terca02" class="btn botao-verde-config    botao-verde"  
                                 role="button" value="1">
                              </input>                              
                          <input type="submit" name="terca02" class="btn botao-amarelo-config  botao-amarelo" 
                                 role="button" value="2">
                              </input>
                              <input type="submit" name="terca02" class="btn botao-vermelho-config botao-vermelho"
                                     role="button" value="3">
                              </input> 
                        </p>
                          </form>
                        <br>                                               
                      </td>
                      <!-- Final do TD -->        
                      
                      <td>                                    
                          <form class="btnsubmit" action="<?php echo HOME;?>professor/organizaHorario/<?php echo $prof['id_professor']?>" method="post">
                        <p> 
                          <input type="submit" name="quarta02" class="btn botao-verde-config    botao-verde"  
                                 role="button" value="1">
                              </input>                              
                          <input type="submit" name="quarta02" class="btn botao-amarelo-config  botao-amarelo" 
                                 role="button" value="2">
                              </input>
                              <input type="submit" name="quarta02" class="btn botao-vermelho-config botao-vermelho "
                                     role="button" value="3">
                              </input> 
                        </p>                                   
                            </form>                                        
                        <br>                                               
                      </td>
                      <!-- Final do TD -->                    
                      
                      <td>                                      
                          <form class="btnsubmit" action="<?php echo HOME;?>professor/organizaHorario/<?php echo $prof['id_professor']?>" method="post">
                        <p> 
                          <input type="submit" name="quinta02" class="btn botao-verde-config    botao-verde"  
                                 role="button" value="1">
                              </input>                              
                          <input type="submit" name="quinta02" class="btn botao-amarelo-config  botao-amarelo" 
                                 role="button" value="2">
                              </input>
                              <input type="submit" name="quinta02" class="btn botao-vermelho-config botao-vermelho"
                                     role="button" value="3">
                              </input>
                        </p>    
                          </form>
                        <br>                                               
                      </td>
                      <!-- Final do TD -->                                          
                      
                      <td>                                    
                          <form class="btnsubmit" action="<?php echo HOME;?>professor/organizaHorario/<?php echo $prof['id_professor']?>" method="post">
                        <p> 
                          <input type="submit" name="sexta02" class="btn botao-verde-config    botao-verde"  
                                 role="button" value="1">
                              </input>                              
                          <input type="submit" name="sexta02" class="btn botao-amarelo-config  botao-amarelo" 
                                 role="button" value="2">
                              </input>
                              <input type="submit" name="sexta02" class="btn botao-vermelho-config botao-vermelho"
                                     role="button" value="3">
                              </input>
                        </p>    
                          </form>
                        <br>                                               
                      </td>
                      <!-- Final do TD -->                    
                    </tr>                                      
                    <!-- Final do TR -->                                              
                    
                   <td>
                          <form class="btnsubmit" action="<?php echo HOME;?>professor/organizaHorario/<?php echo $prof['id_professor']?>" method="post">
                        <p> 
                          <input type="submit" name="segunda03" class="btn botao-verde-config    botao-verde"  
                                 role="button" value="1">
                              </input>                              
                          <input type="submit" name="segunda03" class="btn botao-amarelo-config  botao-amarelo" 
                                 role="button" value="2">
                              </input>
                              <input type="submit" name="segunda03" class="btn botao-vermelho-config botao-vermelho"
                                     role="button" value="3">
                              </input>
                        </p>    
                          </form>
                        <br>                                               
                      </td>
                      <!-- Final do TD -->                    
                      
                      <td>
            
                          <form class="btnsubmit" action="<?php echo HOME;?>professor/organizaHorario/<?php echo $prof['id_professor']?>" method="post">
                        <p> 
                          <input type="submit" name="terca03" class="btn botao-verde-config    botao-verde"  
                                 role="button" value="1">
                              </input>                              
                          <input type="submit" name="terca03" class="btn botao-amarelo-config  botao-amarelo" 
                                 role="button" value="2">
                              </input>
                              <input type="submit" name="terca03" class="btn botao-vermelho-config botao-vermelho"
                                     role="button" value="3">
                              </input> 
                        </p>
                          </form>
                        <br>                                               
                      </td>
                      <!-- Final do TD -->        
                      
                      <td>                                    
                          <form class="btnsubmit" action="<?php echo HOME;?>professor/organizaHorario/<?php echo $prof['id_professor']?>" method="post">
                        <p> 
                          <input type="submit" name="quarta03" class="btn botao-verde-config    botao-verde"  
                                 role="button" value="1">
                              </input>                              
                          <input type="submit" name="quarta03" class="btn botao-amarelo-config  botao-amarelo" 
                                 role="button" value="2">
                              </input>
                              <input type="submit" name="quarta03" class="btn botao-vermelho-config botao-vermelho "
                                     role="button" value="3">
                              </input> 
                        </p>                                   
                            </form>                                        
                        <br>                                               
                      </td>
                      <!-- Final do TD -->                    
                      
                      <td>                                      
                          <form class="btnsubmit" action="<?php echo HOME;?>professor/organizaHorario/<?php echo $prof['id_professor']?>" method="post">
                        <p> 
                          <input type="submit" name="quinta03" class="btn botao-verde-config    botao-verde"  
                                 role="button" value="1">
                              </input>                              
                          <input type="submit" name="quinta03" class="btn botao-amarelo-config  botao-amarelo" 
                                 role="button" value="2">
                              </input>
                              <input type="submit" name="quinta03" class="btn botao-vermelho-config botao-vermelho"
                                     role="button" value="3">
                              </input>
                        </p>    
                          </form>
                        <br>                                               
                      </td>
                      <!-- Final do TD -->                                          
                      
                      <td>                                    
                          <form class="btnsubmit" action="<?php echo HOME;?>professor/organizaHorario/<?php echo $prof['id_professor']?>" method="post">
                        <p> 
                          <input type="submit" name="sexta03" class="btn botao-verde-config    botao-verde"  
                                 role="button" value="1">
                              </input>                              
                          <input type="submit" name="sexta03" class="btn botao-amarelo-config  botao-amarelo" 
                                 role="button" value="2">
                              </input>
                              <input type="submit" name="sexta03" class="btn botao-vermelho-config botao-vermelho"
                                     role="button" value="3">
                              </input>
                        </p>    
                          </form>
                        <br>                                               
                      </td>
                      <!-- Final do TD -->                    
                    </tr>                                      
                    <!-- Final do TR -->                                                                    
                    
                    <td>
                          <form class="btnsubmit" action="<?php echo HOME;?>professor/organizaHorario/<?php echo $prof['id_professor']?>" method="post">
                        <p> 
                          <input type="submit" name="segunda04" class="btn botao-verde-config    botao-verde"  
                                 role="button" value="1">
                              </input>                              
                          <input type="submit" name="segunda04" class="btn botao-amarelo-config  botao-amarelo" 
                                 role="button" value="2">
                              </input>
                              <input type="submit" name="segunda04" class="btn botao-vermelho-config botao-vermelho"
                                     role="button" value="3">
                              </input>
                        </p>    
                          </form>
                        <br>                                               
                      </td>
                      <!-- Final do TD -->                    
                      
                      <td>
            
                          <form class="btnsubmit" action="<?php echo HOME;?>professor/organizaHorario/<?php echo $prof['id_professor']?>" method="post">
                        <p> 
                          <input type="submit" name="terca04" class="btn botao-verde-config    botao-verde"  
                                 role="button" value="1">
                              </input>                              
                          <input type="submit" name="terca04" class="btn botao-amarelo-config  botao-amarelo" 
                                 role="button" value="2">
                              </input>
                              <input type="submit" name="terca04" class="btn botao-vermelho-config botao-vermelho"
                                     role="button" value="3">
                              </input> 
                        </p>
                          </form>
                        <br>                                               
                      </td>
                      <!-- Final do TD -->        
                      
                      <td>                                    
                          <form class="btnsubmit" action="<?php echo HOME;?>professor/organizaHorario/<?php echo $prof['id_professor']?>" method="post">
                        <p> 
                          <input type="submit" name="quarta04" class="btn botao-verde-config    botao-verde"  
                                 role="button" value="1">
                              </input>                              
                          <input type="submit" name="quarta04" class="btn botao-amarelo-config  botao-amarelo" 
                                 role="button" value="2">
                              </input>
                              <input type="submit" name="quarta04" class="btn botao-vermelho-config botao-vermelho "
                                     role="button" value="3">
                              </input> 
                        </p>                                   
                            </form>                                        
                        <br>                                               
                      </td>
                      <!-- Final do TD -->                    
                      
                      <td>                                      
                          <form class="btnsubmit" action="<?php echo HOME;?>professor/organizaHorario/<?php echo $prof['id_professor']?>" method="post">
                        <p> 
                          <input type="submit" name="quinta04" class="btn botao-verde-config    botao-verde"  
                                 role="button" value="1">
                              </input>                              
                          <input type="submit" name="quinta04" class="btn botao-amarelo-config  botao-amarelo" 
                                 role="button" value="2">
                              </input>
                              <input type="submit" name="quinta04" class="btn botao-vermelho-config botao-vermelho"
                                     role="button" value="3">
                              </input>
                        </p>    
                          </form>
                        <br>                                               
                      </td>
                      <!-- Final do TD -->                                          
                      
                      <td>                                    
                          <form class="btnsubmit" action="<?php echo HOME;?>professor/organizaHorario/<?php echo $prof['id_professor']?>" method="post">
                        <p> 
                          <input type="submit" name="sexta04" class="btn botao-verde-config    botao-verde"  
                                 role="button" value="1">
                              </input>                              
                          <input type="submit" name="sexta04" class="btn botao-amarelo-config  botao-amarelo" 
                                 role="button" value="2">
                              </input>
                              <input type="submit" name="sexta04" class="btn botao-vermelho-config botao-vermelho"
                                     role="button" value="3">
                              </input>
                        </p>    
                          </form>
                        <br>                                               
                      </td>
                      <!-- Final do TD -->                    
                    </tr>                                      
                    <!-- Final do TR -->                        
  
                    <td>
                          <form class="btnsubmit" action="<?php echo HOME;?>professor/organizaHorario/<?php echo $prof['id_professor']?>" method="post">
                        <p> 
                          <input type="submit" name="segunda05" class="btn botao-verde-config    botao-verde"  
                                 role="button" value="1">
                              </input>                              
                          <input type="submit" name="segunda05" class="btn botao-amarelo-config  botao-amarelo" 
                                 role="button" value="2">
                              </input>
                              <input type="submit" name="segunda05" class="btn botao-vermelho-config botao-vermelho"
                                     role="button" value="3">
                              </input>
                        </p>    
                          </form>
                        <br>                                               
                      </td>
                      <!-- Final do TD -->                    
                      
                      <td>
            
                          <form class="btnsubmit" action="<?php echo HOME;?>professor/organizaHorario/<?php echo $prof['id_professor']?>" method="post">
                        <p> 
                          <input type="submit" name="terca05" class="btn botao-verde-config    botao-verde"  
                                 role="button" value="1">
                              </input>                              
                          <input type="submit" name="terca05" class="btn botao-amarelo-config  botao-amarelo" 
                                 role="button" value="2">
                              </input>
                              <input type="submit" name="terca05" class="btn botao-vermelho-config botao-vermelho"
                                     role="button" value="3">
                              </input> 
                        </p>
                          </form>
                        <br>                                               
                      </td>
                      <!-- Final do TD -->        
                      
                      <td>                                    
                          <form class="btnsubmit" action="<?php echo HOME;?>professor/organizaHorario/<?php echo $prof['id_professor']?>" method="post">
                        <p> 
                          <input type="submit" name="quarta05" class="btn botao-verde-config    botao-verde"  
                                 role="button" value="1">
                              </input>                              
                          <input type="submit" name="quarta05" class="btn botao-amarelo-config  botao-amarelo" 
                                 role="button" value="2">
                              </input>
                              <input type="submit" name="quarta05" class="btn botao-vermelho-config botao-vermelho "
                                     role="button" value="3">
                              </input> 
                        </p>                                   
                            </form>                                        
                        <br>                                               
                      </td>
                      <!-- Final do TD -->                    
                      
                      <td>                                      
                          <form class="btnsubmit" action="<?php echo HOME;?>professor/organizaHorario/<?php echo $prof['id_professor']?>" method="post">
                        <p> 
                          <input type="submit" name="quinta05" class="btn botao-verde-config    botao-verde"  
                                 role="button" value="1">
                              </input>                              
                          <input type="submit" name="quinta05" class="btn botao-amarelo-config  botao-amarelo" 
                                 role="button" value="2">
                              </input>
                              <input type="submit" name="quinta05" class="btn botao-vermelho-config botao-vermelho"
                                     role="button" value="3">
                              </input>
                        </p>    
                          </form>
                        <br>                                               
                      </td>
                      <!-- Final do TD -->                                          
                      
                      <td>                                    
                          <form class="btnsubmit" action="<?php echo HOME;?>professor/organizaHorario/<?php echo $prof['id_professor']?>" method="post">
                        <p> 
                          <input type="submit" name="sexta05" class="btn botao-verde-config    botao-verde"  
                                 role="button" value="1">
                              </input>                              
                          <input type="submit" name="sexta05" class="btn botao-amarelo-config  botao-amarelo" 
                                 role="button" value="2">
                              </input>
                              <input type="submit" name="sexta05" class="btn botao-vermelho-config botao-vermelho"
                                     role="button" value="3">
                              </input>
                        </p>    
                          </form>
                        <br>                                               
                      </td>
                      <!-- Final do TD -->                    
                    </tr>                                      
                    <!-- Final do TR -->                                            
                    
                    <td>
                          <form class="btnsubmit" action="<?php echo HOME;?>professor/organizaHorario/<?php echo $prof['id_professor']?>" method="post">
                        <p> 
                          <input type="submit" name="segunda06" class="btn botao-verde-config    botao-verde"  
                                 role="button" value="1">
                              </input>                              
                          <input type="submit" name="segunda06" class="btn botao-amarelo-config  botao-amarelo" 
                                 role="button" value="2">
                              </input>
                              <input type="submit" name="segunda06" class="btn botao-vermelho-config botao-vermelho"
                                     role="button" value="3">
                              </input>
                        </p>    
                          </form>
                        <br>                                               
                      </td>
                      <!-- Final do TD -->                    
                      
                      <td>
            
                          <form class="btnsubmit" action="<?php echo HOME;?>professor/organizaHorario/<?php echo $prof['id_professor']?>" method="post">
                        <p> 
                          <input type="submit" name="terca06" class="btn botao-verde-config    botao-verde"  
                                 role="button" value="1">
                              </input>                              
                          <input type="submit" name="terca06" class="btn botao-amarelo-config  botao-amarelo" 
                                 role="button" value="2">
                              </input>
                              <input type="submit" name="terca06" class="btn botao-vermelho-config botao-vermelho"
                                     role="button" value="3">
                              </input> 
                        </p>
                          </form>
                        <br>                                               
                      </td>
                      <!-- Final do TD -->        
                      
                      <td>                                    
                          <form class="btnsubmit" action="<?php echo HOME;?>professor/organizaHorario/<?php echo $prof['id_professor']?>" method="post">
                        <p> 
                          <input type="submit" name="quarta06" class="btn botao-verde-config    botao-verde"  
                                 role="button" value="1">
                              </input>                              
                          <input type="submit" name="quarta06" class="btn botao-amarelo-config  botao-amarelo" 
                                 role="button" value="2">
                              </input>
                              <input type="submit" name="quarta06" class="btn botao-vermelho-config botao-vermelho "
                                     role="button" value="3">
                              </input> 
                        </p>                                   
                            </form>                                        
                        <br>                                               
                      </td>
                      <!-- Final do TD -->                    
                      
                      <td>                                      
                          <form class="btnsubmit" action="<?php echo HOME;?>professor/organizaHorario/<?php echo $prof['id_professor']?>" method="post">
                        <p> 
                          <input type="submit" name="quinta06" class="btn botao-verde-config    botao-verde"  
                                 role="button" value="1">
                              </input>                              
                          <input type="submit" name="quinta06" class="btn botao-amarelo-config  botao-amarelo" 
                                 role="button" value="2">
                              </input>
                              <input type="submit" name="quinta06" class="btn botao-vermelho-config botao-vermelho"
                                     role="button" value="3">
                              </input>
                        </p>    
                          </form>
                        <br>                                               
                      </td>
                      <!-- Final do TD -->                                          
                      
                      <td>                                    
                          <form class="btnsubmit" action="<?php echo HOME;?>professor/organizaHorario/<?php echo $prof['id_professor']?>" method="post">
                        <p> 
                          <input type="submit" name="sexta06" class="btn botao-verde-config    botao-verde"  
                                 role="button" value="1">
                              </input>                              
                          <input type="submit" name="sexta06" class="btn botao-amarelo-config  botao-amarelo" 
                                 role="button" value="2">
                              </input>
                              <input type="submit" name="sexta06" class="btn botao-vermelho-config botao-vermelho"
                                     role="button" value="3">
                              </input>
                        </p>    
                          </form>
                        <br>                                               
                      </td>
                      <!-- Final do TD -->                    
                    </tr>                                      
                    <!-- Final do TR -->                                                      
                    
              </table> <!--Finaliza a tabela -->
          </div>
          <br>        
</div>
