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
    
    $Ex = "SELECT nome,ramal from lis_ramais where ramal !='ex' and ramal like '100_' order by ramal";
    $Ex = mysqli_query($conexao, $Ex);

    $Ex = "SELECT nome,ramal from lis_ramais where ramal !='ex' and ramal like '110_' order by ramal";
    $Ex = mysqli_query($conexao, $Ex);

    $Ex = "SELECT nome,ramal from lis_ramais where ramal !='ex' and ramal like '180_' order by ramal";
    $Ex  = mysqli_query($conexao, $Ex);

    $Ex = "SELECT nome,ramal from lis_ramais where ramal !='ex' and ramal like '120_'order by ramal";
    $Ex = mysqli_query($conexao, $Ex);

    $Ex = "SELECT nome,ramal from lis_ramais where ramal !='ex' and ramal like '124_'order by ramal";
    $Ex = mysqli_query($conexao, $Ex);

    $Ex = "SELECT nome,ramal from lis_ramais where ramal !='ex' and ramal like '132_'order by ramal";
    $Ex = mysqli_query($conexao, $Ex);


    ?>
    <table class="tabela-principal">
        <tr class="tabela-setor">
            <th colspan="2"  class="tabela-setor1">Setor Exemplo</th>
        </tr>    
        <tr class="coluna1">
            <th class="Nome"> <? echo "Nome" ?> </th>
            <th class="Ramal"> <? echo "Ramal" ?> </th>
        </tr>

    <?php while ($row_ex = mysqli_fetch_assoc($resultado_ex)){ ?>
    <tr>
        <td class="nome-colaboradores"> <?php  echo preg_replace("/_/"," ",$row_ex['nome']); ?></td>
        <td class="ramal-colaboradores"> <?php  echo $row_ex['ramal']; ?></td>
    <?php   } ?>
    </tr>
    </table>

    <table class="tabela-principal">
        <tr class="tabela-setor">
            <th colspan="2" class="tabela-setor1">Setor Exemplo - 2</th>
        </tr>    
        <tr class="coluna1">
            <th class="Nome"> <? echo "Nome" ?> </th>
            <th class="Ramal"> <? echo "Ramal" ?> </th>
        </tr>

    <?php while ($row_ex = mysqli_fetch_assoc($resultado_ex)){ ?>
    <tr>
        <td class="nome-colaboradores"> <?php  echo preg_replace("/_/"," ",$row_ex['nome']); ?></td>
        <td class="ramal-colaboradores"> <?php  echo $row_ex['ramal']; ?></td>
    <?php   } ?>
    </tr>
    </table>

    <table class="tabela-principal">
        <tr class="tabela-setor">
            <th colspan="2"  class="tabela-setor1">Setor Exemplo 3</th>
        </tr>    
        <tr class="coluna1">
            <th class="Nome"> <? echo "Nome" ?> </th>
            <th class="Ramal"> <? echo "Ramal" ?> </th>
        </tr>

    <?php while ($row_ex = mysqli_fetch_assoc($resultado_ex)){ ?>
    <tr>
        <td class="nome-colaboradores"> <?php  echo preg_replace("/_/"," ",$row_ex['nome']); ?></td>
        <td class="ramal-colaboradores"> <?php  echo $row_ex['ramal']; ?></td>
    <?php   } ?>
    </tr>
    </table>

    <table class="tabela-principal">
        <tr class="tabela-setor">
            <th colspan="2" class="tabela-setor1">Setor Exemplo 4</th>
        </tr>
        <tr class="coluna1">
            <th class="Nome"> <? echo "Nome" ?> </th>
            <th class="Ramal"> <? echo "Ramal" ?> </th>
        </tr>


    <?php while ($row_ex = mysqli_fetch_assoc($resultado_ex)){ ?>
    <tr>
    <td class="nome-colaboradores"> <?php  echo preg_replace("/_/"," ",$row_ex['nome']);?></td>
    <td class="ramal-colaboradores"> <?php  echo $row_ex['ramal']; ?></td>
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


    <?php while ($row_ex = mysqli_fetch_assoc($resultado_ex)){ ?>
    <tr>
    <td class="nome-colaboradores">  <?php  echo preg_replace("/_/"," ",$row_ex['nome']); ?></td>
    <td class="ramal-colaboradores"> <?php  echo $row_ex['ramal']; ?></td>
    <?php   } ?>
    </tr>
    </table>

    <table class="tabela-principal">
    <tr class="tabela-setor">
            <th colspan="2" class="tabela-setor1">Setor Exemplo 5</th>
        </tr>
        <tr class="coluna1">
            <th class="Nome"> <? echo "Nome" ?> </th>
            <th class="Ramal"> <? echo "Ramal" ?> </th>
        </tr>


    <?php while ($row_ex = mysqli_fetch_assoc($resultado_qualidade)){ ?>
    <tr>
    <td class="nome-colaboradores"> <?php  echo preg_replace("/_/"," ",$row_qualidade['nome']); ?></td>
    <td class="ramal-colaboradores"> <?php  echo $row_qualidade['ramal']; ?></td>
    <?php   } ?>
    </tr>
    </table>

    <table class="tabela-principal">
    <tr class="tabela-setor">
            <th colspan="2" class="tabela-setor1">Setor Exemplo 6</th>
        </tr>
        <tr class="coluna1">
            <th class="Nome"> <? echo "Nome" ?> </th>
            <th class="Ramal"> <? echo "Ramal" ?> </th>
        </tr>


    <?php while ($row_ex = mysqli_fetch_assoc($resultado_ex)){ ?>
    <tr>
    <td class="nome-colaboradores"> <?php  echo preg_replace("/_/"," ",$row_ex['nome']); ?></td>
    <td class="ramal-colaboradores"> <?php  echo $row_ex['ramal']; ?></td>
    <?php   } ?>
    </tr>
    </table>

    <table class="tabela-principal">
    <tr class="tabela-setor">
            <th colspan="2" class="tabela-setor1">Setor Exemplo 7</th>
        </tr>
        <tr class="coluna1">
            <th class="Nome"> <? echo "Nome" ?> </th>
            <th class="Ramal"> <? echo "Ramal" ?> </th>
        </tr>

    <?php while ($row_ex = mysqli_fetch_assoc($resultado_ex)){ ?>
    <tr>
    <td class="nome-colaboradores"> <?php  echo preg_replace("/_/"," ",$row_ex['nome']); ?></td>
    <td class="ramal-colaboradores"> <?php  echo $row_ex['ramal']; ?></td>
    <?php   } ?>
    </tr>
    </table>


    </body>
    </html>

