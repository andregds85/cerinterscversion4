<?php 
use App\Models\Checklist;
use App\Http\Controllers\ChecklistController;

$tabela = Checklist::all(); 


$itensP = Checklist::where('id',$id)->get(); 

?>

<form>
   <input type="button" value="Imprimir" onClick="window.print()" />
</form>


    @foreach ($itensP  as $t)

    <!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  </head>
<body>
<table class="table table-bordered">
  <tbody>
    <tr>
    <td>
    <img src="http://www.cerintersc.com.br/content/img/logo.png" width="100" height="100"> 
</td>
      <td align="center"><b>
      <br>Estado de Santa Catarina
      <br>Secretaria de Estado da Saúde 
      <br>Central Estadual de Serviços Especializado e Regulação
      <br>Central Estadual de Transferência Inter Hospitalares
      <br>Checklist Transporte Seguro<br>
      Dados do Paciente </b>
     </td>
     </tr>
  </tbody>
</table>


<table class="table table-bordered">
  <tbody>
    <tr>
      <td colspan="5"><b>ID</b> :{{$t->id }} <br>
    <b>Data da Solicitacao:</b>{{$t->preenchimento }} <br>
    <b> Hora da Solicitação:</b> {{$t->horaPreenchimento }} <br>
    <b> Nome: </b>{{$t->nome }}<br>
    </td>
    </tr>
  </tbody>
  </table>

  <table class="table table-bordered">
  <tbody>
    <tr>
      <td><b>CNS:</b>{{$t->cns }} <br>
          <b>Dn:</b>{{$t->dn }}<br>
           <b>Sexo: </b> {{$t->sexo }}<br>
           <b>CPF:</b>{{$t->cpf }}<br>
           <b>RG:</b>{{$t->rg }}<br>
      </td>
     <td>
    <b>Orgão Emissor: </b> {{$t->orgaoEmissor }}<br>
    <b>Vacina Covid 19: </b> {{$t->vacina }}<br>
    <b> Estado: </b> {{$t->estado}}<br>
    <b> Gestante:</b> {{$t->gestante}} <br>
    <b> Quem recebe a gestante no local de destino:</b> {{$t->nasceDestino}} <br>

      </td>
   </tr>

  </tbody>
</table>

<table class="table table-bordered">
  <tbody>
  <tr>
      <td><b>Diagnóstico:</b>{{$t->diagnostico}} <br>
      </td>
    </tr>
  </tbody>
</table> 


<table class="table table-bordered">
  <tbody>
    <tr>
      <td> <br>
          <b>Hospital de Origem:</b>{{$t->hospitalOrigem }}<br>
           <b>Leito de Origem:</b> {{$t->LeitoOrigem }}<br>
           <b>Setor de Origem:</b> {{$t->setorOrigem }}<br>
           <b>Médico Responsável:</b> {{$t->medicoResponsavel }}<br>


      </td>
          <td><br>
          <b>Hospital de Destino:</b>{{$t->hospitalDestino }}<br>
           <b>Leito de Destino:</b> {{$t->LeitoDestino }}<br>
           <b>Quem Recebe:</b> {{$t->quemRecebe }}<br>

        </td>
    
    </tr>

  </tbody>
</table>



<table class="table table-bordered">
  <tbody>
    <tr>
       <td align="center"><b> Tipo de Precaução</b></td>
    </tr>
  </tbody>
</table>
<table class="table table-bordered">
  <tbody>
  <tr>
      <td><b>Padrão:</b>{{$t->padrao }} <br>
          <b>Contato:</b>{{$t->contato }}<br>
          <b>Motivo do Contato:</b>{{$t->motivoContato }}<br>
          <b>Respiratória: </b> {{$t->respiratoria }}<br>
      </td>
     <td>
    
    <b> Motivo Respiratória: </b> {{$t->motivoRespiratoria}}<br>
    <b> Suspeito de Covid: </b> {{$t->covid}}<br>
    <b> Método:</b> {{$t->metodo}}<br>
    <b> Data:</b> {{$t->data}}</td>
    </tr>

  </tbody>
</table>

<table class="table table-bordered">
  <tbody>
    <tr>
       <td align="center"><b>Dispositivos Invasivos</b></td>
    </tr>
  </tbody>
</table>
<table class="table table-bordered">
  <tbody>
  <tr>
      <td><b>Sng:</b>{{$t->sng }} <br>
          <b>Svd:</b>{{$t->svd }}<br>
           <b>Dreno: </b> {{$t->dreno }}<br>
           <b>Tottqd: </b> {{$t->tottqd }}<br>
           <b>DVE: </b> {{$t->dve }}<br>


      </td>
      <td>
           <b>Acesso Venoso Central: </b> {{$t->acessoVenosoCentral }}<br>
           <b>Onde ? Acesso Venoso Central: </b> {{$t->avcOnde }}<br>

           <b>Acesso Venoso Periférico: </b> {{$t->acessoVenosoPeriferico }}<br>
           <b>Outros: </b> {{$t->outros }}<br>

      </td>
    </tr>
  </tbody>
</table>    


<table class="table table-bordered">
  <tbody>
    <tr>
       <td align="center"><b>Suporte Hemodinâmico</b></td>
    </tr>
  </tbody>
</table>
<table class="table table-bordered">
  <tbody>
  <tr>
      <td><b>Drogas em Bic : </b>Vazão<br>
         <b>NORADRENALINA:</b> ml/ h<br>
         <b>Vasopressina:</b> ml/h<br>
          </td>
         
      <td><b>DOBUTAMINA:  ml/h  <br> Outros (Espceficar Drogas e Vazão ):</b>{{$t->drogas }} <br>
     <b>Sedação :</b>{{$t->sedacao }} <br>
     </td>
    </tr>
  </tbody>
</table>    

<table class="table table-bordered">
  <tbody>
    <tr>
       <td align="center"><b>Suporte Ventilatório</b></td>
    </tr>
  </tbody>
</table>
<table class="table table-bordered">
  <tbody>
  <tr>
      <td><b>Suporte O2:</b>{{$t->suporteo2 }} <br>
          <b>Cateter:</b>{{$t->cateter }}<br>
           <b>Mascara: </b> {{$t->mascara }}<br>
           <b>outroSu: </b> {{$t->outroSu }}<br>
           <b>vm: </b> {{$t->vm }}<br>
           <b>Fio: </b> {{$t->fiO2 }}<br>
      </td>
      <td>
          <b>Peep:</b>{{$t->peep }} <br>
          <b>Spo2:</b>{{$t->spO2 }}<br>
           <b>Prona:</b> {{$t->prona }}<br>
           <b>Volume:</b> {{$t->volume }}<br>

           


           <b>Classificação de Risco do Transporte: </b> {{$t->risco }}<br>
        </td>
    </tr>
  </tbody>
</table>   


<table class="table table-bordered">
  <tbody>
    <tr>
       <td align="center"><b>Informações Complementares</b></td>
    </tr>
  </tbody>
</table>
<table class="table table-bordered">
  <tbody>
  <tr>
      <td><b>Disfusão Renal Aguda :</b>{{$t->aguda}} <br>
          <b>Funcionalidade Prévia:</b>{{$t->funcionalidade }}<br>
           <b>PA: </b> {{$t->pa}}<br>
           <b>FC: </b> {{$t->fc}}<br>
           <b>SPO2: </b> {{$t->spo2c }}<br>
           <b>Glasgow: </b> {{$t->glasgow }}<br>

    

      </td>
      <td>
          <b>Temp: </b> {{$t->temp }}<br>
          <b>Peso :</b>{{$t->peso }} <br>
          <b>Altura:</b>{{$t->altura }}<br>
          <b>Outros:</b> {{$t->outrosIC }}<br>
          <b>FR:</b> {{$t->fr }}<br>
          <b>HGT:</b> {{$t->hgt }}<br>


        </td>
    </tr>
  </tbody>
</table> 


<table class="table table-bordered">
  <tbody>
  <tr>
      <td><b>Comorbidades:</b>{{$t->comorbidades}} <br>
      </td>
    </tr>
  </tbody>
</table> 




<table class="table table-bordered">
  <tbody>
  <tr>
     <td>   <b>Histórico Clinico Atual: </b>{{$t->historicoClinico }}<br>
      </td>
    </tr>
  </tbody>
</table> 




<table class="table table-bordered">
  <tbody>
  <tr>
     <td>   <b>Exames Físicos: </b>{{$t->efisico }}<br>
      </td>
    </tr>
  </tbody>
</table> 



<table class="table table-bordered">
  <tbody>
  <tr>
     <td>   <b>Exames Complementares: </b>{{$t->eComplementar }}<br>
      </td>
    </tr>
  </tbody>
</table> 









    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>

    @endforeach
 

    </html>









 