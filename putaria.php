<?php
require_once 'connection.php'; 

// ritual
$ritualNome =  $_POST['ritualNome'];
$ritualElemento = $_POST['ritualElemento'];
$ritualConjuracao =  $_POST['ritualConjuracao'];
$ritualEfeito = $_POST['ritualEfeito'];
$ritualCusto = $_POST['ritualCusto'];
// pericia
$antropologia = $_POST['antropologia'];
$arco = $_POST['arco'];
$pistola = $_POST['pistola'];
$rifle = $_POST['rifle'];
$arqueologia = $_POST['arqueologia'];
$arremessar = $_POST['arremessar'];
$arte = $_POST['arte'];
$avaliacao = $_POST['avaliacao'];
$charme = $_POST['charme'];
$chaveiro = $_POST['chaveiro'];
$ciencia = $_POST['ciencia'];
$eletrica = $_POST['eletrica'];
$mecanico = $_POST['mecanico'];
$contabilidade = $_POST['contabilidade'];
$direito = $_POST['direito'];
$auto = $_POST['auto'];
$disfarce = $_POST['disfarce'];
$eletronica = $_POST['eletronica'];
$encontrar = $_POST['encontrar'];
$escalar = $_POST['escalar'];
$escutar = $_POST['escutar'];
$esquivar = $_POST['esquivar'];
$furtividade = $_POST['furtividade'];
$historia = $_POST['historia'];
$intimidacao = $_POST['intimidacao'];
$labia = $_POST['labia'];
$natural = $_POST['natural'];
$outra = $_POST['outra'];
$lutar = $_POST['lutar'];
$medicina = $_POST['medicina'];
$mundonatural = $_POST['mundonatural'];
$natacao = $_POST['natacao'];
$navegacao = $_POST['navegacao'];
$credito = $_POST['credito'];
$ocultismo = $_POST['ocultismo'];
$maquinario = $_POST['maquinario'];
$persuasao = $_POST['persuasao'];
$pilotar = $_POST['pilotar'];
$prestidigitacao = $_POST['prestidigitacao'];
$socorros = $_POST['socorros'];
$psicanalise = $_POST['psicanalise'];
$psicologia = $_POST['psicologia'];
$rastrear = $_POST['rastrear'];
$saltar = $_POST['saltar'];
$seduzir = $_POST['seduzir'];
$sobrevivencia = $_POST['sobrevivencia'];
$biblioteca = $_POST['biblioteca'];
$computador = $_POST['computador'];
// inventario
$pesoAtual = $_POST['pesototal'];
$itemNome =  $_POST['itemNome'];
$itemTipo = $_POST['itemTipo'];
$itemPeso =  $_POST['itemPeso'];
// interface
$actuallife =  $_POST['actuallife'];
$maxlife = $_POST['maxlife'];
$actualsanity =  $_POST['actualsanity'];
$maxsanity = $_POST['maxsanity']/
$actualocultism = $_POST['actualocultism'];
$maxocultism = $_POST['maxocultism'];
$extradamage = $_POST['extradamage'];
$body = $_POST['body'];
$paranormal = $_POST['paranormal'];
// detalhespessoais
$dtname =  $_POST['dtname'];
$dtplayer = $_POST['dtplayer'];
$dtocuppation =  $_POST['dtocuppation'];
$dtyears = $_POST['dtyears'];
$dtgenre = $_POST['dtgenre'];
$dtbirthplace = $_POST['dtbirthplace'];
$dthome = $_POST['dthome'];
// combate
$combatNome =  $_POST['combatNome'];
$combatTipo = $_POST['combatTipo'];
$combatDano =  $_POST['combatDano'];
$combatMunAtual = $_POST['combatMunAtual'];
$combatMunMax = $_POST['combatMunMax'];
$combatAtaque = $_POST['combatAtaque'];
$combatAlcance = $_POST['combatAlcance'];
$combatDefeito = $_POST['combatDefeito'];
$combatArea = $_POST['combatArea'];
// atributo
$apparence =  $_POST['apparence'];
$constitution =  $_POST['constitution'];
$dexterity =  $_POST['dexterity'];
$education =  $_POST['education'];
$force =  $_POST['force'];
$intelligence =  $_POST['intelligence'];
$power =  $_POST['power'];
$luck =  $_POST['luck'];
$moviment =  $_POST['moviment'];
$size =  $_POST['size'];

$sql_atributos = "INSERT INTO Atributo(Aparencia_Atributo,Constituicao_Atributo,Destreza_Atributo,Educacao_Atributo,Forca_Atributoe,Inteligencia_Atributo,Poder_Atributo,Sorte_Atributo,Movimento_Atributo,Tamanho_Atributo) VALUES ('$apparence','$constitution','$dexterity','$education','$force','$intelligence','$power','$luck','$moviment',$size')";
    
$sql_combate = "INSERT INTO Combate(Nome_Combate,Tipo_Combate,Dano_Combate,MunicaoAT_Combate,MunicaoMX_Combate,Ataque_Combate,Alcance_Combate,Defeito_Combate,Area_Combate) VALUES ('$combatNome','$combatTipo','$combatDano','$combatMunAtual','$combatMunMax','$combatAtaque','$combatAlcance','$combatDefeito','$combatArea')";

        
$sql_detalhepessoal = "INSERT INTO DetalhePessoal(Nome_DPessoal, Jogador_DPessoal, Ocupaco_DPessoal, Idade_DPessoal, Genero_DPessoal, Nascimento_DPessoal, Residencia_DPessoal) VALUES ('$dtname','$dtplayer','$dtocuppation','$dtyears','$dtgenre','$dtbirthplace','$dthome')";
    
$sql_interface = "INSERT INTO Interface(Imagem_Interface,Uploaded_Interface,VidaMax_Interface,VidaAt_Interface,SanidadeMax_Interface,SanidadeAt_Interface,OcultismoMax_Interface,OcultismoAt_Interface,DanoEx_Interface,Corpo_Interface,ExposicaoP_Interface) VALUES ('$actuallife','$maxlife','$actualsanity','$maxsanity','$actualocultism','$maxocultism','$extradamage','$body','$paranormal')";

$sql_inventario = "INSERT INTO Inventario(PesoAT_Inventario,Nome_Inventario,Tipo_Inventario,Peso_Inventario) VALUES ('$pesoAtual','$itemNome','$itemTipo','$itemPeso')";


$sql_perica = "INSERT INTO Pericias(Antropologia_Pericia,Arco_Pericia,Pistola_Pericia,Rifle_Pericia,Arqueologia_Pericia,Arremessar_Pericia,Arte_Pericia,Avaliacao_Pericia,Charme_Pericia,Chaveiro_Pericia,Ciencia_Pericia,ConEle_Pericia,ConMec_Pericia,Contabilidade_Pericia,Direito_Pericia,Dirigir_Pericia,Disfarce_Pericia,Eletronica_Pericia,Encontrar_Pericia,Escalar_Pericia,Escutar_Pericia,Esquivar_Pericia,Furtividade_Pericia,Historia_Pericia,Intimidacao_Pericia,Labia_Pericia,LinguaNat_Pericia,LinguaOut_Pericia,Lutar_Pericia,Medicina_Pericia,MundoNat_Pericia,Natacao_Pericia,Credito_Pericia,Ocultismo_Pericia,Maquinario_Pericia,Persuasao_Pericia,Pilotar_Pericia,Prestidigitacao_Pericia,Socorros_Pericia,Psicanalise_Pericia,Psicologia_Pericia,Rastrear_Pericia,Saltar_Pericia,Seduzir_Pericia,Sobrevivencia_Pericia,Biblioteca_Pericia,Computador_Pericia VALUES ('$antropologia','$arco','$pistola','$rifle',
'$arqueologia','$arremessar','$arte','$avaliacao',
'$charme','$chaveiro','$ciencia','$eletrica',
'$mecanico','$contabilidade','$direito','$auto',
'$disfarce','$eletronica','$encontrar','$escalar',
'$escutar','$esquivar','$furtividade','$historia',
'$intimidacao','$labia','$natural','$outra',
'$lutar','$medicina','$mundonatural','$natacao',
'$navegacao','$credito','$ocultismo','$maquinario',
'$persuasao','$pilotar','$prestidigitacao','$socorros',
'$psicanalise','$psicologia','$rastrear','$saltar',
'$seduzir','$sobrevivencia','$biblioteca','$computador')";
$sql_ritual = "INSERT INTO Ritual(Nome_Ritual,Elemento_Ritual,Conjuracao_Ritual,Efeito_Ritual,Custo_Ritual) VALUES ('$ritualNome','$ritualElemento','$ritualConjuracao','$ritualEfeito','$ritualCusto')";

mysqli_query($conn, $sql_atributos);
mysqli_query($conn, $sql_combate);
mysqli_query($conn, $sql_detalhepessoal);
mysqli_query($conn, $sql_interface);
mysqli_query($conn, $sql_inventario);
mysqli_query($conn, $sql_perica);
mysqli_query($conn, $sql_ritual);
mysqli_close($conn);
