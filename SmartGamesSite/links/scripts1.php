<script>

  $('.vote label i.fa').on('click mouseover',function(){
  // remove classe ativa de todas as estrelas
  $('.vote label i.fa').removeClass('active');
  // pegar o valor do input da estrela clicada
  var val = $(this).prev('input').val();
  //percorrer todas as estrelas
  $('.vote label i.fa').each(function(){
    /* checar de o valor clicado é menor ou igual do input atual
    *  se sim, adicionar classe active
    */
    var $input = $(this).prev('input');
    if($input.val() <= val){
      $(this).addClass('active');
    }
  });
  $("#voto").html(val); // somente para teste
});
//Ao sair da div vote
$('.vote').mouseleave(function(){
  //pegar o valor clicado
  var val = $(this).find('input:checked').val();
  //se nenhum foi clicado remover classe de todos
  if(val == undefined ){
    $('.vote label i.fa').removeClass('active');
  } else {
    //percorrer todas as estrelas
    $('.vote label i.fa').each(function(){
      /* Testar o input atual do laço com o valor clicado
      *  se maior, remover classe, senão adicionar classe
      */
      var $input = $(this).prev('input');
      if($input.val() > val){
        $(this).removeClass('active');
      } else {
        $(this).addClass('active');
      }
    });
  }
});


</script>

<script>
  function mascaraCelular(o,f){
  v_obj=o
  v_fun=f
  setTimeout("execmascara()",1)
}
function execmascara(){
  v_obj.value=v_fun(v_obj.value)
}
function mtel(v){
  v=v.replace(/\D/g,"");
  v=v.replace(/^(\d{2})(\d)/g,"($1) $2");
  v=v.replace(/(\d)(\d{4})$/,"$1-$2");
  return v;
}

</script>

<script>
  function somenteNumeros(num) {
     var er = /[^0-9.]/;
     er.lastIndex = 0;
     var campo = num;
     if (er.test(campo.value)) {
       campo.value = "";
     }
 }
</script>
