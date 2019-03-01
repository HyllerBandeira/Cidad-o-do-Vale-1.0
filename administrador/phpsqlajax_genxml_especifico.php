<?php 
header("Content-Type: text/html; charset=ISO-8859-1",true);
require("../phpsqlinfo_dbinfo.php");

$idColaboracao = '';
if(isset($_GET['idColaboracao'])) $idColaboracao = $_GET['idColaboracao'];


function parseToXML($htmlStr)  
	{  
	$xmlStr=str_replace('<','&lt;',$htmlStr);  
	$xmlStr=str_replace('>','&gt;',$xmlStr);  
	$xmlStr=str_replace('"','&quot;',$xmlStr);  
	$xmlStr=str_replace("'",'&#39;',$xmlStr);  
	$xmlStr=str_replace("&",'&amp;',$xmlStr);  
	return $xmlStr;  
	}

if ($idColaboracao){
	 
	// Select all the rows in the colaboracao table 
	$query = "SELECT * FROM colaboracao WHERE codColaboracao = $idColaboracao"; 
	$result = $connection->query($query);
	if (!$result) { 
	  die('Invalid query: ' . $connection->error);
	}
	
	
	// Start XML file, echo parent node 

	echo '<colaboracao>'; 
	 
	// Iterate through the rows, printing XML nodes for each 
	while ($row = $result->fetch_assoc()){
	  // ADD TO XML DOCUMENT NODE 
	  echo '<marker '; 
	  echo 'codColaboracao="' . parseToXML($row['codColaboracao']) . '" '; 
	  echo 'desTituloAssunto="' . parseToXML($row['desTituloAssunto']) . '" '; 
	  echo 'numLatitude="' . $row['numLatitude'] . '" '; 
	  echo 'numLongitude="' . $row['numLongitude'] . '" ';
	  
	  // --------------------------------------------------------------------------------//
	  
	  $temp2 = parseToXML($row['codCategoriaEvento']);
	  //echo $temp2;
	  $query5 = "SELECT * FROM categoriaevento WHERE codCategoriaEvento = '$temp2' " ; 
	  $result5 = $connection->query($query5);
		  
	  $row5 = $result5->fetch_assoc();
	  //$temp = $row5['DesCategoria'];  
	  echo 'codCategoriaEvento="' . parseToXML($row5['desCategoriaEvento']) . '" '; 

	  // --------------------------------------------------------------------------------//
	 
	  // --------------------------------------------------------------------------------//
		
	  $temp2 = parseToXML($row['codTipoEvento']);
	  //echo $temp2;
	  $query5 = "SELECT * FROM tipoevento WHERE codTipoEvento = '$temp2' " ; 
	  $result5 = $connection->query($query5);
		  
	  $row5 = $result5->fetch_assoc();
	  //$temp = $row5['DesCategoria'];
	  echo 'codTipoEvento_ID="' . $temp2 . '" ';
	  echo 'codTipoEvento="' . parseToXML($row5['desTipoEvento']) . '" ';
	  

	  // --------------------------------------------------------------------------------//
	  
	  if ($row['dataOcorrencia'])
		$dataInvertida=substr($row['dataOcorrencia'],8,2).'/'.substr($row['dataOcorrencia'],5,2).'/'.substr($row['dataOcorrencia'],0,4); 
	  else
		$dataInvertida='';
	  
	  // Escreve todas as colaborações separadas pelo caracter '¥' //
	  $texto = 'desColaboracao="' ;
	  
	  $consulta = $connection->query("SELECT desColaboracao FROM  historicocolaboracoes WHERE codColaboracao = '$idColaboracao' ORDER BY id ASC");
	  while ($row2 = $consulta->fetch_assoc())
	  {
		$texto .= parseToXML($row2['desColaboracao']) . '¥';
	  }
	  $size = strlen($texto);

	  $texto = substr($texto,0, $size-1);
	  
	  echo $texto;
	  
	  echo '" ';
	  //-------------------------------------------------------//
	  
	  $datahoraCriacaoFormatoCerto = date('d/m/Y - H:i:s', strtotime($row['datahoraCriacao']));
	  echo 'datahoraCriacao="' . parseToXML($datahoraCriacaoFormatoCerto) . '" '; 
	  //echo 'dataOcorrencia="' . parseToXML($row['dataOcorrencia']) . '" ';
	  echo 'dataOcorrencia="' . parseToXML($dataInvertida) . '" ';   
	  echo 'horaOcorrencia="' . parseToXML($row['horaOcorrencia']) . '" ';
	  echo 'desJustificativa="' . parseToXML($row['desJustificativa']) . '" '; 
	  echo 'tipoStatus="' . parseToXML($row['tipoStatus']) . '" '; 
	  echo 'codUsuario="' . $row['codUsuario'] . '" ';
	  
	  //-------multimidia--------//
	  
	  $codColaboracao = $row['codColaboracao'];
	  $consulta = $connection->query("SELECT * FROM multimidia WHERE codColaboracao = '$codColaboracao'");
	  $row2 = $consulta->fetch_assoc();
	  echo 'endImagem="' . parseToXML($row2['endImagem']) . '" ';
	  echo 'desTituloImagem="' . parseToXML($row2['desTituloImagem']) . '" ';
	  echo 'comentarioImagem="' . parseToXML($row2['comentarioImagem']) . '" ';
	  
	  //-------------------------//
	  
	  $codColaboracao = $row['codColaboracao'];
	  $consulta = $connection->query("SELECT * FROM videos WHERE codColaboracao = '$codColaboracao'");
	  $row2 = $consulta->fetch_assoc();
	  echo 'desTituloVideo="' . parseToXML($row2['desTituloVideo']) . '" ';
	  echo 'desUrlVideo="' . parseToXML($row2['desUrlVideo']) . '" ';
	  echo 'comentarioVideo="' . parseToXML($row2['comentarioVideo']) . '" ';
	  
	  //-------------------------//
	  
	  $codColaboracao = $row['codColaboracao'];
	  $consulta3 = $connection->query("SELECT * FROM estatistica WHERE codColaboracao = '$codColaboracao' " );
	  $row3 = $consulta3->fetch_assoc();
	  echo 'notaMedia="' . $row3['notaMedia'] . '" ';
	  echo 'qtdVisualizacao="' . $row3['qtdVisualizacao'] . '" ';
	  echo 'qtdAvaliacao="' . $row3['qtdAvaliacao'] . '" ';
	  
	  //---------------
	  
	  $codColaboracao = $row['codColaboracao'];
	  $consulta4 = $connection->query("SELECT * FROM arquivos WHERE codColaboracao = '$codColaboracao' " );
	  $row4 = $consulta4->fetch_assoc();
	  echo 'endArquivo="' . parseToXML($row4['endArquivo']) . '" ';
	  echo 'tituloArquivo="' . parseToXML($row4['desArquivo']) . '" ';
	  echo 'comentarioArquivo="' . parseToXML($row4['comentarioArquivo']) . '" ';
	  
	  //-----------
	  
	  $rr = 'forum="' ;
	  
	  $consulta = $connection->query("SELECT * FROM comentario WHERE codColaboracao = '$codColaboracao' ORDER BY codComentario DESC");
	  
	  $rr .= '&lt;div align=&#39;center&#39; &gt;';
		
	  while( $row = $consulta->fetch_assoc() ){
			$codigoDoUsuario = $row["codUsuario"];
			$consultaNomeUsuario = $connection->query("SELECT nomPessoa FROM usuario WHERE codUsuario = '$codigoDoUsuario' ");
			$rowNomeUsuario = $consultaNomeUsuario->fetch_assoc();
			$rr .= "&lt;fieldset width=&#39;400px&#39; style= &#39;text-align:center; &#39;  &gt;";
			$rr .= "&lt;legend&gt;" . $rowNomeUsuario['nomPessoa'] ;
			$rr .= " - ";
			$rr .= date('d/m/Y', strtotime($row["datahoraCriacao"]));
			$rr .= " às ";
			$rr .= date('H:i:s', strtotime($row["datahoraCriacao"]));
			$rr .= "&lt;/legend&gt;";			
			$rr .= "&lt;p style = &#39; width:360px; word-wrap:break-word; &#39; &gt;";
			$rr .= $row["desComentario"];
			$rr .= "&lt;/p&gt;";
			$rr .= "&lt;/fieldset&gt;";
			$rr .= 	"&lt;br&gt;";
		}
	  $rr .= '&lt;/div&gt;';
	  
		$rr .= '"'; 

	  echo $rr;
	  //----------
	  
	  
	  //echo 'CodUsuario="' . parseToXML($row['CodUsuario']) . '" '; 
	  //echo 'type="' . $row['type'] . '" '; 
	  
	  echo '/>'; 
	} 
	 
	// End XML file 
	echo '</colaboracao>'; 
}
?>