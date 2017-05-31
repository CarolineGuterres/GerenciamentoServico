jQuery(document).ready(
  function()
  {
    /*
     * Chamamos aqui a função que vai controlar os campos.
     * Desta forma, caso você precise repetir o combo dinâmico
     * basta trocar os ID's dos SELECT's
     */
    comboDinamico("categoria");
    // suposição de segundo bloco de selects
    // comboDinamico("pais_cliente", "estado_cliente", "cidade_cliente", "bairro_cliente");
  }
);

  /*
   * função para carregar uma lista dinâmica
   */
  comboDinamico = function(categoria) {
    /*
     * Variáveis que precisamos pegar
     * Usamos getElementById() pois é assim que conseguiremos
     * passar o elemento por variável para jQuery
     */
    var categoria   = document.getElementById(categoria);
    
    /*
     * Carregamos a lista automaticamente quando a página carrega
     */
    $(categoria).load('../view/localizacao.php?tipo=categoria');

    /*
     * Populamos o combo dos estados quando trocamos um valor no pais
     * Os próximos blocos serão similares quanto à validação pelo valor igual à zero
     */

    $(categoria).change(
    function() {
      if($(this).val() == 0) {
        alert('Você precisa informar uma categoria!');
        $(this).focus();
      } else {
        $(estado).load('/view/localizacao.php?tipo=categoria=' + $(this).val());
      }
    }
  );

   

  }
