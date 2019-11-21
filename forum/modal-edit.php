<!--Vinculando CSS para correta exibição do modal-->
<link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
<meta charset="utf-8"/>

<?php

    $idr = $_GET['idr'];
    $edittext = $_GET['texto'];
    $idp = $_GET['idp'];
?>
<div id="modal1" class="modal">      
    <div class="modal-content">
        <div class="row center-align">
            <div class="row">
                <img class="responsive-img col s2 offset-s5" src="img/AuroraLogo.png"/>
            </div>
            <h4>Edição de resposta </h4>
            <p> Insira sua edição para resposta: </p>
        </div>
        <div class="row">
            <form method="post" action="../DAL/Forum/Class_editar_DAL.php?idr=<?php echo $idr;?>&idp=<?php echo $idp;?>">
                <div class="col s12 m12">
                    <div class="input-field col s12 m8 offset-m2">
                        <input id="edit" type="text" class="validate" name="edit" value="<?php echo $edittext;?>" rows=20 >
                    </div>
                </div>
                <div class="col s12 m12 center-align">
                    <button class="btn waves-effect waves-light btn orange darken-2" type="submit" name="editar">Editar</button>
                    <a href="exibir-discussao.php?disc=<?php echo $idp;?>" class="modal-action modal-close waves-effect waves-green btn-flat">Cancelar</a>
                </div>
            </form>            
        </div> 
    </div>
</div>


<!--Vinculando Scripts para correta exibição do modal-->
<script type="text/javascript" src="../js/jquery-1.12.1.min.js"></script>
<script type="text/javascript" src="../js/materialize.min.js"></script>
<script>
    $(document).ready(function(){
    $('#modal1').modal();
    $('#modal1').modal('open'); 
  });
</script>   