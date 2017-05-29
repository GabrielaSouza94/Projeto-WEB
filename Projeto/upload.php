<?php
  require("dbh.php");
  $link = mysqli_connect("localhost","root","","login_data");
  $nomeEvento = $_POST['nome_evento'];
  $imagem = $_FILES['imagem']['tmp_name'];
  $tamanho = $_FILES['imagem']['size'];
  $tipo = $_FILES['imagem']['type'];
  $nome = $_FILES['imagem']['name'];

  if ( $imagem != "none" )
  {
      $fp = fopen($imagem, "rb");
      $conteudo = fread($fp, $tamanho);/*lê o arq*/
      $conteudo = addslashes($conteudo);/*trata a string pra inserir no bd*/
      fclose($fp);

  $query_insere = "INSERT INTO imagens (nome_evento, nome_img, tam_img , type_img, imagem)
                    VALUES ('$nomeEvento','$nome','$tamanho', '$tipo','$conteudo')";

   mysqli_query($link, $query_insere) or die("Algo deu errado ao inserir o registro. Tente novamente.");
  echo 'Registro inserido com sucesso!';
  header('Location: index.php');
   if( mysqli_affected_rows($link) > 0)
       print "A imagem foi salva na base de dados.";
   else
       print "Não foi possível salvar a imagem na base de dados.";
   }
  else
      print "Não foi possível carregar a imagem.";
  ?>
