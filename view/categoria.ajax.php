<?php

    include_once"../model/ConexaoBD.class.php"

    $categoria = mysql_real_escape_string( $_GET['cateoria'] );

      $cidades = array();

      $sql = "SELECT categoria, nomeCategoria
          FROM servico
          WHERE categoria=$nomeCategoria
          ORDER BY nomeCategoria";
      $res = mysql_query( $sql );
      while ( $row = mysql_fetch_assoc( $res ) ) {

        $categoria[] = array(

        'categoria' => (utf8_encode($row['nomeCategoria'])),

        'nomeCategoria' => (utf8_encode($row['nomeCategoria'])),

        );

        }

      echo( json_encode( $cidades ) );


?>
