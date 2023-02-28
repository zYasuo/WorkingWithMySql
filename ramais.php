<?
include_once'conexaoramais.php';
session_start();
?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="ramaiscss.css">
        <link rel="icon"       href="img/favicon1.png" type="image/x-icon" size="16x16">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbT1WI1j8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <title>Sistema de Ramais</title>
    </head>
    <body>
    <div class="topo">
    <div class="busca">
    <input id="filtro" type="text" placeholder="Busca Rápida">
    </div>
    </div>
    


<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://kit.fontawesome.com/01b3655c48.js" crossorigin="anonymous"></script>
<script type="text/javascript">
 
 $(function(){ 

$("#filtro").keyup(function(){
  var texto = $(this).val();
  var textoo = texto.toLowerCase()
  
  $('table').hide();

    $('th:contains('+textoo+')').closest('table').show();

    $('td:contains('+textoo+')').closest('table').show();
    

  });
});

 </script>
  
        <h1>Sistema de Ramais</h1>
        <h3>Listagem de Ramais - Setores</h3>
    
    <?
    
    $resultpresidencia = "SELECT nome,ramal from lis_ramais where ramal !='ex' and ramal like '100_' order by ramal";
    $resultado_presidencia = mysqli_query($conexao, $resultpresidencia);

    $resultcomercial = "SELECT nome,ramal from lis_ramais where ramal !='ex' and ramal like '110_' order by ramal";
    $resultado_comercial = mysqli_query($conexao, $resultcomercial);

    $resultonline = "SELECT nome,ramal from lis_ramais where ramal !='ex' and ramal like '180_' order by ramal";
    $resultado_online  = mysqli_query($conexao, $resultonline);

    $resultcontabilidade = "SELECT nome,ramal from lis_ramais where ramal !='ex' and ramal like '120_'order by ramal";
    $resultado_contabilidade = mysqli_query($conexao, $resultcontabilidade);

    $resultrh = "SELECT nome,ramal from lis_ramais where ramal !='ex' and ramal like '124_'order by ramal";
    $resultado_rh = mysqli_query($conexao, $resultrh);

    $resultmk = "SELECT nome,ramal from lis_ramais where ramal !='ex' and ramal like '132_'order by ramal";
    $resultado_mk = mysqli_query($conexao, $resultmk);

    $resultsst = "SELECT nome,ramal from lis_ramais where ramal !='ex' and ramal like '1341'order by ramal";
    $resultado_sst = mysqli_query($conexao, $resultsst);

    $resultqualidade = "SELECT nome,ramal from lis_ramais where ramal !='ex' and ramal like '1371'order by ramal";
    $resultado_qualidade = mysqli_query($conexao, $resultqualidade);

    $resultpagar = "SELECT nome,ramal from lis_ramais where ramal !='ex' and ramal like '150_' order by ramal";
    $resultado_pagar = mysqli_query($conexao, $resultpagar);

    $resultreceber = "SELECT nome,ramal from lis_ramais where ramal !='ex' and ramal like '151_' order by ramal";
    $resultado_receber = mysqli_query($conexao, $resultreceber);

    $resultcobranca = "SELECT nome,ramal from lis_ramais where ramal !='ex' and ramal like '152_' order by ramal";
    $resultado_cobranca = mysqli_query($conexao, $resultcobranca);

    $resultcaixa = "SELECT nome,ramal from lis_ramais where ramal !='ex' and ramal like '153_' order by ramal";
    $resultado_caixa = mysqli_query($conexao, $resultcaixa);

    $resultnoc = "SELECT nome,ramal from lis_ramais where ramal !='ex' and ramal like '175_' order by ramal";
    $resultado_noc = mysqli_query($conexao, $resultnoc);

    $resulttic = "SELECT nome,ramal from lis_ramais where ramal !='ex' and ramal like '170_' or ramal like '171_' order by ramal";
    $resultado_tic = mysqli_query($conexao, $resulttic);

    $resultn1 = "SELECT nome,ramal from lis_ramais where ramal !='ex' and ramal like '182_' or ramal like '183_' order by ramal";
    $resultado_n1 = mysqli_query($conexao, $resultn1);

    $resultn2 = "SELECT nome,ramal from lis_ramais where ramal !='ex' and ramal like '188_' order by ramal";
    $resultado_n2 = mysqli_query($conexao, $resultn2);

    $resultsac = "SELECT nome,ramal from lis_ramais where ramal !='ex' and ramal like '184_' order by ramal";
    $resultado_sac = mysqli_query($conexao, $resultsac);
    
    $resultjuridico = "SELECT nome,ramal from lis_ramais where ramal !='ex' and ramal like '1901' order by ramal";
    $resultado_juridico = mysqli_query($conexao, $resultjuridico);
    
    $resultretencao = "SELECT nome,ramal from lis_ramais where ramal !='ex' and ramal like '186_' order by ramal";
    $resultado_retencao = mysqli_query($conexao, $resultretencao);

    $resultoperacional = "SELECT nome,ramal from lis_ramais where ramal !='ex' and ramal like '260_' order by ramal";
    $resultado_operacional = mysqli_query($conexao, $resultoperacional);

    $resultreagendamento = "SELECT nome,ramal from lis_ramais where ramal !='ex' and ramal like '262_' order by ramal";
    $resultado_reagendamento = mysqli_query($conexao, $resultreagendamento);

    $resultfrota = "SELECT nome,ramal from lis_ramais where ramal !='ex' and ramal like '265_' order by ramal";
    $resultado_frota = mysqli_query($conexao, $resultfrota);

    $resultalmoxarifado = "SELECT nome,ramal from lis_ramais where ramal !='ex' and ramal like '268_' order by ramal";
    $resultado_almoxarifado = mysqli_query($conexao, $resultalmoxarifado);

    $resultajapi = "SELECT nome,ramal from lis_ramais where ramal !='ex' and ramal like '310_' order by ramal";
    $resultado_ajapi = mysqli_query($conexao, $resultajapi);

    $resultsgd = "SELECT nome,ramal from lis_ramais where ramal !='ex' and ramal like '410_' order by ramal";
    $resultado_sgd = mysqli_query($conexao, $resultsgd);

    $resultleme1 = "SELECT nome,ramal from lis_ramais where ramal !='ex' and ramal like '5001'order by ramal";
    $resultado_leme1 = mysqli_query($conexao, $resultleme1);

    $resultleme2 = "SELECT nome,ramal from lis_ramais where ramal !='ex' and ramal like '510_' order by ramal";
    $resultado_leme2 = mysqli_query($conexao, $resultleme2);

    $resultleme3 = "SELECT nome,ramal from lis_ramais where ramal !='ex' and ramal like '5501' order by ramal";
    $resultado_leme3 = mysqli_query($conexao, $resultleme3);

    $resultmogi = "SELECT nome,ramal from lis_ramais where ramal !='ex' and ramal like '610_' order by ramal";
    $resultado_mogi = mysqli_query($conexao, $resultmogi);
    
    $resultitm = "SELECT nome,ramal from lis_ramais where ramal !='ex' and ramal like '7121' order by ramal";
    $resultado_itm = mysqli_query($conexao, $resultitm);
    
    $resultlmte = "SELECT nome,ramal from lis_ramais where ramal !='ex' and ramal like '7122' order by ramal";
    $resultado_lmte = mysqli_query($conexao, $resultlmte);
    
    $resultcrne = "SELECT nome,ramal from lis_ramais where ramal !='ex' and ramal like '7124' order by ramal";
    $resultado_crne = mysqli_query($conexao, $resultcrne);



    ?>
    <table class="tabela-principal">
        <tr class="tabela-setor">
            <th colspan="2"  class="tabela-setor1">vice presidência</th>
        </tr>    
        <tr class="coluna1">
            <th class="Nome"> <? echo "Nome" ?> </th>
            <th class="Ramal"> <? echo "Ramal" ?> </th>
        </tr>

    <?php while ($row_presidencia = mysqli_fetch_assoc($resultado_presidencia)){ ?>
    <tr>
        <td class="nome-colaboradores"> <?php  echo preg_replace("/_/"," ",$row_presidencia['nome']); ?></td>
        <td class="ramal-colaboradores"> <?php  echo $row_presidencia['ramal']; ?></td>
    <?php   } ?>
    </tr>
    </table>

    <table class="tabela-principal">
        <tr class="tabela-setor">
            <th colspan="2" class="tabela-setor1">comercial</th>
        </tr>    
        <tr class="coluna1">
            <th class="Nome"> <? echo "Nome" ?> </th>
            <th class="Ramal"> <? echo "Ramal" ?> </th>
        </tr>

    <?php while ($row_comercial = mysqli_fetch_assoc($resultado_comercial)){ ?>
    <tr>
        <td class="nome-colaboradores"> <?php  echo preg_replace("/_/"," ",$row_comercial['nome']); ?></td>
        <td class="ramal-colaboradores"> <?php  echo $row_comercial['ramal']; ?></td>
    <?php   } ?>
    </tr>
    </table>

    <table class="tabela-principal">
        <tr class="tabela-setor">
            <th colspan="2"  class="tabela-setor1">setor - online</th>
        </tr>    
        <tr class="coluna1">
            <th class="Nome"> <? echo "Nome" ?> </th>
            <th class="Ramal"> <? echo "Ramal" ?> </th>
        </tr>

    <?php while ($row_online = mysqli_fetch_assoc($resultado_online)){ ?>
    <tr>
        <td class="nome-colaboradores"> <?php  echo preg_replace("/_/"," ",$row_online['nome']); ?></td>
        <td class="ramal-colaboradores"> <?php  echo $row_online['ramal']; ?></td>
    <?php   } ?>
    </tr>
    </table>

    <table class="tabela-principal">
        <tr class="tabela-setor">
            <th colspan="2" class="tabela-setor1">contabilidade</th>
        </tr>
        <tr class="coluna1">
            <th class="Nome"> <? echo "Nome" ?> </th>
            <th class="Ramal"> <? echo "Ramal" ?> </th>
        </tr>


    <?php while ($row_contabilidade = mysqli_fetch_assoc($resultado_contabilidade)){ ?>
    <tr>
    <td class="nome-colaboradores"> <?php  echo preg_replace("/_/"," ",$row_contabilidade['nome']);?></td>
    <td class="ramal-colaboradores"> <?php  echo $row_contabilidade['ramal']; ?></td>
    <?php   } ?>
    </tr>
    </table>

    <table class="tabela-principal">
        <tr class="tabela-setor">
            <th colspan="2"  class="tabela-setor1">rh</th>
        </tr>
        <tr class="coluna1">
            <th class="Nome"> <? echo "Nome" ?> </th>
            <th class="Ramal"> <? echo "Ramal" ?> </th>
        </tr>


    <?php while ($row_rh = mysqli_fetch_assoc($resultado_rh)){ ?>
    <tr>
    <td class="nome-colaboradores"> <?php  echo preg_replace("/_/"," ",$row_rh['nome']); ?></td>
    <td class="ramal-colaboradores"> <?php  echo $row_rh['ramal']; ?></td>
    <?php   } ?>
    </tr>
    </table>

    <table class="tabela-principal">
    <tr class="tabela-setor">
            <th colspan="2" class="tabela-setor1">marketing</th>
        </tr>
        <tr class="coluna1">
            <th class="Nome"> <? echo "Nome" ?> </th>
            <th class="Ramal"> <? echo "Ramal" ?> </th>
        </tr>


    <?php while ($row_mk = mysqli_fetch_assoc($resultado_mk)){ ?>
    <tr>
    <td class="nome-colaboradores"> <?php  echo preg_replace("/_/"," ",$row_mk['nome']); ?></td>
    <td class="ramal-colaboradores"> <?php  echo $row_mk['ramal']; ?></td>
    <?php   } ?>
    </tr>
    </table>

    <table class="tabela-principal">
    <tr class="tabela-setor">
            <th colspan="2" class="tabela-setor1">sst</th>
        </tr>
        <tr class="coluna1">
            <th class="Nome"> <? echo "Nome" ?> </th>
            <th class="Ramal"> <? echo "Ramal" ?> </th>
        </tr>


    <?php while ($row_sst = mysqli_fetch_assoc($resultado_sst)){ ?>
    <tr>
    <td class="nome-colaboradores">  <?php  echo preg_replace("/_/"," ",$row_sst['nome']); ?></td>
    <td class="ramal-colaboradores"> <?php  echo $row_sst['ramal']; ?></td>
    <?php   } ?>
    </tr>
    </table>

    <table class="tabela-principal">
    <tr class="tabela-setor">
            <th colspan="2" class="tabela-setor1">qualidade</th>
        </tr>
        <tr class="coluna1">
            <th class="Nome"> <? echo "Nome" ?> </th>
            <th class="Ramal"> <? echo "Ramal" ?> </th>
        </tr>


    <?php while ($row_qualidade = mysqli_fetch_assoc($resultado_qualidade)){ ?>
    <tr>
    <td class="nome-colaboradores"> <?php  echo preg_replace("/_/"," ",$row_qualidade['nome']); ?></td>
    <td class="ramal-colaboradores"> <?php  echo $row_qualidade['ramal']; ?></td>
    <?php   } ?>
    </tr>
    </table>

    <table class="tabela-principal">
    <tr class="tabela-setor">
            <th colspan="2" class="tabela-setor1">contas à pagar</th>
        </tr>
        <tr class="coluna1">
            <th class="Nome"> <? echo "Nome" ?> </th>
            <th class="Ramal"> <? echo "Ramal" ?> </th>
        </tr>


    <?php while ($row_pagar = mysqli_fetch_assoc($resultado_pagar)){ ?>
    <tr>
    <td class="nome-colaboradores"> <?php  echo preg_replace("/_/"," ",$row_pagar['nome']); ?></td>
    <td class="ramal-colaboradores"> <?php  echo $row_pagar['ramal']; ?></td>
    <?php   } ?>
    </tr>
    </table>

    <table class="tabela-principal">
    <tr class="tabela-setor">
            <th colspan="2" class="tabela-setor1">contas à receber</th>
        </tr>
        <tr class="coluna1">
            <th class="Nome"> <? echo "Nome" ?> </th>
            <th class="Ramal"> <? echo "Ramal" ?> </th>
        </tr>

    <?php while ($row_receber = mysqli_fetch_assoc($resultado_receber)){ ?>
    <tr>
    <td class="nome-colaboradores"> <?php  echo preg_replace("/_/"," ",$row_receber['nome']); ?></td>
    <td class="ramal-colaboradores"> <?php  echo $row_receber['ramal']; ?></td>
    <?php   } ?>
    </tr>
    </table>

    <table class="tabela-principal">
    <tr class="tabela-setor">
            <th colspan="2" class="tabela-setor1">cobrança</th>
        </tr>
        <tr class="coluna1">
            <th class="Nome"> <? echo "Nome" ?> </th>
            <th class="Ramal"> <? echo "Ramal" ?> </th>
        </tr>


    <?php while ($row_cobranca = mysqli_fetch_assoc($resultado_cobranca)){ ?>
    <tr>
    <td class="nome-colaboradores"> <?php  echo preg_replace("/_/"," ",$row_cobranca['nome']); ?></td>
    <td class="ramal-colaboradores"> <?php  echo $row_cobranca['ramal']; ?></td>
    <?php   } ?>
    </tr>
    </table>

    <table class="tabela-principal">
    <tr class="tabela-setor">
            <th colspan="2" class="tabela-setor1">caixa</th>
        </tr>
        <tr class="coluna1">
            <th class="Nome"> <? echo "Nome" ?> </th>
            <th class="Ramal"> <? echo "Ramal" ?> </th>
        </tr>


    <?php while ($row_caixa = mysqli_fetch_assoc($resultado_caixa)){ ?>
    <tr>
    <td class="nome-colaboradores"> <?php  echo preg_replace("/_/"," ",$row_caixa['nome']); ?></td>
    <td class="ramal-colaboradores"> <?php  echo $row_caixa['ramal']; ?></td>
    <?php   } ?>
    </tr>
    </table>

    
    <table class="tabela-principal">
    <tr class="tabela-setor">
            <th colspan="2" class="tabela-setor1">noc</th>
        </tr>
        <tr class="coluna1">
            <th class="Nome"> <? echo "Nome" ?> </th>
            <th class="Ramal"> <? echo "Ramal" ?> </th>
        </tr>


    <?php while ($row_noc = mysqli_fetch_assoc($resultado_noc)){ ?>
    <tr>
    <td class="nome-colaboradores"> <?php  echo preg_replace("/_/"," ",$row_noc['nome']); ?></td>
    <td class="ramal-colaboradores"> <?php  echo $row_noc['ramal']; ?></td>
    <?php   } ?>
    </tr>
    </table>

    <table class="tabela-principal">
    <tr class="tabela-setor">
            <th colspan="2" class="tabela-setor1">tic</th>
        </tr>
        <tr class="coluna1">
            <th class="Nome"> <? echo "Nome" ?> </th>
            <th class="Ramal"> <? echo "Ramal" ?> </th>
        </tr>


    <?php while ($row_tic = mysqli_fetch_assoc($resultado_tic)){ ?>
    <tr>
    <td class="nome-colaboradores"> <?php  echo preg_replace("/_/"," ",$row_tic['nome']); ?></td>
    <td class="ramal-colaboradores"> <?php  echo $row_tic['ramal']; ?></td>
    <?php   } ?>
    </tr>
    </table>

    <table class="tabela-principal">
    <tr class="tabela-setor">
            <th colspan="2" class="tabela-setor1">suporte n1</th>
        </tr>
        <tr class="coluna1">
            <th class="Nome"> <? echo "Nome" ?> </th>
            <th class="Ramal"> <? echo "Ramal" ?> </th>
        </tr>


    <?php while ($row_n1 = mysqli_fetch_assoc($resultado_n1)){ ?>
    <tr>
    <td class="nome-colaboradores"><?php  echo preg_replace("/_/"," ",$row_n1['nome']); ?></td>
    <td class="ramal-colaboradores"> <?php  echo $row_n1['ramal']; ?></td>
    <?php   } ?>
    </tr>
    </table>

    <table class="tabela-principal">
    <tr class="tabela-setor">
            <th colspan="2" class="tabela-setor1">suporte n2</th>
        </tr>
        <tr class="coluna1">
            <th class="Nome"> <? echo "Nome" ?> </th>
            <th class="Ramal"> <? echo "Ramal" ?> </th>
        </tr>


    <?php while ($row_n2 = mysqli_fetch_assoc($resultado_n2)){ ?>
    <tr>
    <td class="nome-colaboradores"> <?php  echo preg_replace("/_/"," ",$row_n2['nome']); ?></td>
    <td class="ramal-colaboradores"> <?php  echo $row_n2['ramal']; ?></td>
    <?php   } ?>
    </tr>
    </table>

    <table class="tabela-principal">
    <tr class="tabela-setor">
            <th colspan="2" class="tabela-setor1">sac / ouvidoria</th>
        </tr>
        <tr class="coluna1">
            <th class="Nome"> <? echo "Nome" ?> </th>
            <th class="Ramal"> <? echo "Ramal" ?> </th>
        </tr>


    <?php while ($row_sac = mysqli_fetch_assoc($resultado_sac)){ ?>
    <tr>
    <td class="nome-colaboradores"><?php  echo preg_replace("/_/"," ",$row_sac['nome']); ?></td>
    <td class="ramal-colaboradores"> <?php  echo $row_sac['ramal']; ?></td>
    <?php   } ?>
    </tr>
    </table>

    <table class="tabela-principal">
    <tr class="tabela-setor">
            <th colspan="2" class="tabela-setor1">retenção</th>
        </tr>
        <tr class="coluna1">
            <th class="Nome"> <? echo "Nome" ?> </th>
            <th class="Ramal"> <? echo "Ramal" ?> </th>
        </tr>


    <?php while ($row_retencao = mysqli_fetch_assoc($resultado_retencao)){ ?>
    <tr>
    <td class="nome-colaboradores"><?php  echo preg_replace("/_/"," ",$row_retencao['nome']); ?></td>
    <td class="ramal-colaboradores"><?php  echo $row_retencao['ramal']; ?></td>
    <?php   } ?>
    </tr>
    </table>
    
     <table class="tabela-principal">
        <tr class="tabela-setor">
            <th colspan="2"  class="tabela-setor1">juridico</th>
        </tr>    
        <tr class="coluna1">
            <th class="Nome"> <? echo "Nome" ?> </th>
            <th class="Ramal"> <? echo "Ramal" ?> </th>
        </tr>
      
      <?php while ($row_juridico = mysqli_fetch_assoc($resultado_juridico)){ ?>
    <tr>
        <td class="nome-colaboradores"> <?php  echo preg_replace("/_/"," ",$row_juridico['nome']); ?></td>
        <td class="ramal-colaboradores"> <?php  echo $row_juridico['ramal']; ?></td>
    <?php   } ?>
    </tr>
    </table>
    

    <table class="tabela-principal">
    <tr class="tabela-setor">
            <th colspan="2" class="tabela-setor1">operacional</th>
        </tr>
        <tr class="coluna1">
            <th class="Nome"> <? echo "Nome" ?> </th>
            <th class="Ramal"> <? echo "Ramal" ?> </th>
        </tr>
        
        <?php while ($row_operacional = mysqli_fetch_assoc($resultado_operacional)){ ?>
    <tr>
        <td class="nome-colaboradores"> <?php  echo preg_replace("/_/"," ",$row_operacional['nome']); ?></td>
        <td class="ramal-colaboradores"> <?php  echo $row_operacional['ramal']; ?></td>
    <?php   } ?>
    </tr>
    </table>
        
        

    <?php while ($row_operacional = mysqli_fetch_assoc($resultado_operacional)){ ?>
    <tr>
    <td class="nome-colaboradores"><?php  echo preg_replace("/_/"," ",$row_operacional['nome']); ?></td>
    <td class="ramal-colaboradores"><?php  echo $row_operacional['ramal']; ?></td>
    <?php   } ?>
    </tr>
    </table>

    <table class="tabela-principal">
    <tr class="tabela-setor">
            <th colspan="2" class="tabela-setor1">reagendamento</th>
        </tr>
        <tr class="coluna1">
            <th class="Nome"> <? echo "Nome" ?> </th>
            <th class="Ramal"> <? echo "Ramal" ?> </th>
        </tr>


    <?php while ($row_reagendamento = mysqli_fetch_assoc($resultado_reagendamento)){ ?>
    <tr>
    <td class="nome-colaboradores"><?php  echo preg_replace("/_/"," ",$row_reagendamento['nome']); ?></td>
    <td class="ramal-colaboradores"><?php  echo $row_reagendamento['ramal']; ?></td>
    <?php   } ?>
    </tr>
    </table>

    <table class="tabela-principal">
    <tr class="tabela-setor">
            <th colspan="2" class="tabela-setor1">frota</th>
        </tr>
        <tr class="coluna1">
            <th class="Nome"> <? echo "Nome" ?> </th>
            <th class="Ramal"> <? echo "Ramal" ?> </th>
        </tr>

    <?php while ($row_frota = mysqli_fetch_assoc($resultado_frota)){ ?>
    <tr>
    <td class="nome-colaboradores"><?php  echo preg_replace("/_/"," ",$row_frota['nome']); ?></td>
    <td class="ramal-colaboradores"><?php  echo $row_frota['ramal']; ?></td>
    <?php   } ?>
    </tr>
    </table>

    <table class="tabela-principal">
    <tr class="tabela-setor">
            <th colspan="2" class="tabela-setor1">almoxarifado</th>
        </tr>
        <tr class="coluna1">
            <th class="Nome"> <? echo "Nome" ?> </th>
            <th class="Ramal"> <? echo "Ramal" ?> </th>
        </tr>


    <?php while ($row_almoxarifado = mysqli_fetch_assoc($resultado_almoxarifado)){ ?>
    <tr>
    <td class="nome-colaboradores"><?php  echo preg_replace("/_/"," ",$row_almoxarifado['nome']); ?></td>
    <td class="ramal-colaboradores"><?php  echo $row_almoxarifado['ramal']; ?></td>
    <?php   } ?>
    </tr>
    </table>

    <table class="tabela-principal">
    <tr class="tabela-setor">
            <th colspan="2" class="tabela-setor1">comercial - ajapi</th>
        </tr>
        <tr class="coluna1">
            <th class="Nome"> <? echo "Nome" ?> </th>
            <th class="Ramal"> <? echo "Ramal" ?> </th>
        </tr>


    <?php while ($row_ajapi = mysqli_fetch_assoc($resultado_ajapi)){ ?>
    <tr>
    <td class="nome-colaboradores"><?php  echo preg_replace("/_/"," ",$row_ajapi['nome']); ?></td>
    <td class="ramal-colaboradores"><?php  echo $row_ajapi['ramal']; ?></td>
    <?php   } ?>
    </tr>
    </table>

    <table class="tabela-principal">
    <tr class="tabela-setor">
            <th colspan="2" class="tabela-setor1">comercial - santa gertrudes</th>
        </tr>
        <tr class="coluna1">
            <th class="Nome"> <? echo "Nome" ?> </th>
            <th class="Ramal"> <? echo "Ramal" ?> </th>
        </tr>


    <?php while ($row_sgd = mysqli_fetch_assoc($resultado_sgd)){ ?>
    <tr>
    <td class="nome-colaboradores"><?php  echo preg_replace("/_/"," ",$row_sgd['nome']); ?></td>
    <td class="ramal-colaboradores"><?php  echo $row_sgd['ramal']; ?></td>
    <?php   } ?>
    </tr>
    </table>

    <table class="tabela-principal">
    <tr class="tabela-setor">
            <th colspan="2" class="tabela-setor1">administração - leme</th>
        </tr>
        <tr class="coluna1">
            <th class="Nome"> <? echo "Nome" ?> </th>
            <th class="Ramal"> <? echo "Ramal" ?> </th>
        </tr>


    <?php while ($row_leme1 = mysqli_fetch_assoc($resultado_leme1)){ ?>
    <tr>
    <td class="nome-colaboradores"><?php  echo preg_replace("/_/"," ",$row_leme1['nome']); ?></td>
    <td class="ramal-colaboradores"><?php  echo $row_leme1['ramal']; ?></td>
    <?php   } ?>
    </tr>
    </table>

    <table class="tabela-principal">
    <tr class="tabela-setor">
            <th colspan="2" class="tabela-setor1">comercial - leme</th>
        </tr>
        <tr class="coluna1">
            <th class="Nome"> <? echo "Nome" ?> </th>
            <th class="Ramal"> <? echo "Ramal" ?> </th>
        </tr>


    <?php while ($row_leme2 = mysqli_fetch_assoc($resultado_leme2)){ ?>
    <tr>
    <td class="nome-colaboradores"><?php  echo preg_replace("/_/"," ",$row_leme2['nome']); ?></td>
    <td class="ramal-colaboradores"><?php  echo $row_leme2['ramal']; ?></td>
    <?php   } ?>
    </tr>
    </table>

    <table class="tabela-principal">
    <tr class="tabela-setor">
            <th colspan="2" class="tabela-setor1">financeiro - leme</th>
        </tr>
        <tr class="coluna1">
            <th class="Nome"><? echo "Nome" ?> </th>
            <th class="Ramal1"><? echo "Ramal" ?> </th>
        </tr>


    <?php while ($row_leme3 = mysqli_fetch_assoc($resultado_leme3)){ ?>
    <tr>
    <td class="nome-colaboradores"><?php  echo preg_replace("/_/"," ",$row_leme3['nome']); ?></td>
    <td class="ramal-colaboradores"><?php  echo $row_leme3['ramal']; ?></td>
    <?php   } ?>
    </tr>

    </table>
    <table class="tabela-principal">
        <tr class="tabela-setor">
            <th colspan="2" class="tabela-setor1">comercial - mogi guaçu</th>
        </tr>    
        <tr class="coluna1">
            <th class="Nome"> <? echo "Nome" ?> </th>
            <th class="Ramal"> <? echo "Ramal" ?> </th>
        </tr>

    <?php while ($row_mogi = mysqli_fetch_assoc($resultado_mogi)){ ?>
    <tr>
        <td class="nome-colaboradores"> <?php  echo preg_replace("/_/"," ",$row_mogi['nome']); ?></td>
        <td class="ramal-colaboradores"> <?php  echo $row_mogi['ramal']; ?></td>
    <?php   } ?>
    </tr>
    </table>
    
    <table class="tabela-principal">
        <tr class="tabela-setor">
            <th colspan="2"  class="tabela-setor1">filial - iturama</th>
        </tr>    
        <tr class="coluna1">
            <th class="Nome"> <? echo "Nome" ?> </th>
            <th class="Ramal"> <? echo "Ramal" ?> </th>
        </tr>

    <?php while ($row_itm = mysqli_fetch_assoc($resultado_itm)){ ?>
    <tr>
        <td class="nome-colaboradores"> <?php  echo preg_replace("/_/"," ",$row_itm['nome']); ?></td>
        <td class="ramal-colaboradores"> <?php  echo $row_itm['ramal']; ?></td>
    <?php   } ?>
    </tr>
    </table>
    
   
    <table class="tabela-principal">
        <tr class="tabela-setor">
            <th colspan="2" class="tabela-setor1">filial - limeira do oeste</th>
        </tr>    
        <tr class="coluna1">
            <th class="Nome"> <? echo "Nome" ?> </th>
            <th class="Ramal"> <? echo "Ramal" ?> </th>
        </tr>

    <?php while ($row_lmte = mysqli_fetch_assoc($resultado_lmte)){ ?>
    <tr>
        <td class="nome-colaboradores"> <?php  echo preg_replace("/_/"," ",$row_lmte['nome']); ?></td>
        <td class="ramal-colaboradores"> <?php  echo $row_lmte['ramal']; ?></td>
    <?php   } ?>
    </tr>
    </table>
        
       <table class="tabela-principal">
        <tr class="tabela-setor">
            <th colspan="2" class="tabela-setor1">filial - carneirinho</th>
        </tr>    
        <tr class="coluna1">
            <th class="Nome"> <? echo "Nome" ?> </th>
            <th class="Ramal"> <? echo "Ramal" ?> </th>
        </tr>

    <?php while ($row_crne = mysqli_fetch_assoc($resultado_crne)){ ?>
    <tr>
        <td class="nome-colaboradores"> <?php  echo preg_replace("/_/"," ",$row_crne['nome']); ?></td>
        <td class="ramal-colaboradores"> <?php  echo $row_crne['ramal']; ?></td>
    <?php   } ?>
    </tr>
    </table>
    </body>
    </html>

