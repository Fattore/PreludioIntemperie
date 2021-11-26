<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Ficha Ordem Paranormal</title>
    <link rel="icon" href="src/static/images/Logo_Ordo_Realitas.ico">
    <link rel="stylesheet" href="src/static/styles/styles.css">
    <link rel="stylesheet" href="src/static/styles/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="src/static/js/functions.js"></script>
</head>

<body>
    <form id="formInterface" action="putaria.php" autocomplete="off" method="POST" style="padding: inherit;">
        <div style="background: black; text-align: center;">
            <h2 style="color: #fff;">Perfil de Investigador</h2>
        </div>
        <div class="container" style="position: absolute; justify-content: center; width: auto; height: -webkit-fill-available; margin-left: 15%;">
            <div class="row" style="position: absolute; display: inline-table;">
                <div class="col-sm-4">

                    <div style="text-align-last: center;">
                        <strong>DETALHES PESSOAIS</strong>
                    </div>
                    <div class="form-group">
                        <label for="cvname">Nome</label>
                        <input type="text" class="form-control input-style" id="dtname" name="dtname" value="">
                    </div>
                    <div class="form-group">
                        <label for="pvname">Jogador</label>
                        <input type="text" class="form-control input-style" id="dtplayer" name="dtplayer" value="">
                    </div>
                    <div class="form-group">
                        <label for="ovcuppation">Ocupação</label>
                        <input type="text" class="form-control input-style" id="dtocuppation" name="dtocuppation" value="">
                    </div>
                    <div class="form-group">
                        <label for="cvyears">Idade</label>
                        <input type="text" class="form-control input-style" id="dtyears" name="dtyears" value="">
                    </div>
                    <div class="form-group">
                        <label for="cvgenre">Gênero</label>
                        <select type="text" class="form-control input-style" id="dtgenre" name="dtgenre" style="background-color : #000000 !important; border-bottom-style: solid !important; border-bottom-width: thin !important; border-bottom-color: gray !important; color: white !important;">
                            <option></option>
                            <option>Masculino</option>
                            <option>Feminino</option>
                            <option>Outro</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="cvbirthplace">Local de Nascimento</label>
                        <input type="text" class="form-control input-style" id="dtbirthplace" name="dtbirthplace" value="">
                    </div>
                    <div class="form-group">
                        <label for="cvhome">Local de Residência</label>
                        <input type="text" class="form-control input-style" id="dthome" name="dthome" value="">
                    </div>
                    
                </div>
                <div class="col-sm-8" style="margin-bottom: 5%;">
                    <div style="display: inline-block;width: 110%;">
                        <img src="https://blogtimenow.com/wp-content/uploads/2014/06/hide-facebook-profile-picture-notification.jpg" alt="Avatar" style="width:41%;border-radius: 50%">
                        <div style="width: 50%; display: inline-flex; vertical-align: middle;">
                            <a id="btn_d20" style="vertical-align: top; margin-left: 3%;" data-toggle="modal" data-target="#d20DiceModal">
                                <i id="firstdice" class="fas fa-dice-d20 fa-10x" onmouseover="animatedDice()" onmouseout="pauseDice()"></i>
                            </a>
                        </div>
                        <div id="diceModal" class="modal fade" role="dialog" style="z-index: 9999;">
                            <div class="modal-dialog">
                                <div class="modal-content" style="background-color: black; border: 1px solid white; margin-top: 40%;">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" style="color: white;">&times;</button>
                                        <h5 class="modal-title" style="color: white;">Rolagem de dado</h5>
                                    </div>
                                    <div id="modalDiceBody" class="modal-body" style="text-align: center; color: white;" onclick="rollDice()">
                                        <h4 id="1d20result">Loading...</h4>
                                        <h5 id="1d20typeresult">Loading...</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="d20DiceModal" class="modal fade" role="dialog" style="z-index: 9999;">
                            <div class="modal-dialog">
                                <div class="modal-content" style="background-color: black; border: 1px solid white; margin-top: 40%;">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" style="color: white;">&times;</button>
                                        <h5 class="modal-title" style="color: white;">Rolagem de dado</h5>
                                    </div>
                                    <div id="modald20DiceBody" class="modal-body" style="text-align: center; color: white;" onclick="rollD20()">
                                        <h4 id="1d2020result">Loading...</h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="sanityDiceModal" class="modal fade" role="dialog" style="z-index: 9999;">
                            <div class="modal-dialog">
                                <div class="modal-content" style="background-color: black; border: 1px solid white; margin-top: 40%;">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" style="color: white;">&times;</button>
                                        <h5 class="modal-title" style="color: white;">Rolagem de dado</h5>
                                    </div>
                                    <div id="modalSanityDiceBody" class="modal-body" style="text-align: center; color: white;" onclick="rollSanityDice()">
                                        <h4 id="1d20sanresult">Loading...</h4>
                                        <h5 id="1d20santyperesult">Loading...</h5>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div style="display: inline-block">
                        <div>
                            <strong>Vida</strong>
                            <div id="healthbar" class="health-bar" data-total="0" data-value="0" style="width: 100%; height: 30px">
                                <div class="bar1" style="height: 20px;">
                                    <div style="text-align-last: center;">
                                        <input class="input-style-bar" type="text" id="actuallife" name="actuallife" style="text-align-last: center; width: 50px;" value="0" ondblclick="setActualHealth()" oninput="getActualHealth()">
                                        <strong>/</strong>
                                        <input class="input-style-bar" type="text" id="maxlife" name="maxlife" style="text-align-last: center; width: 50px;" value="0" ondblclick="setMaxHealth()" oninput="getMaxHealth()">
                                    </div>
                                    <div class="hit"></div>
                                </div>
                            </div>

                            <label class="checkbox-inline" for="sinjury"><input type="checkbox">Lesão Grave</label>
                            <label class="checkbox-inline" for="unconscious"><input type="checkbox">Inconsciente</label>
                            <label class="checkbox-inline" for="dying"><input type="checkbox">Morrendo</label>
                        </div>
                        <br />
                        <div>
                            <strong>Sanidade</strong>
                            <div id="sanitybar" class="sanity-bar" data-total="0" data-value="0" style="width: 80%;height: 30px">
                                <div class="bar2" style="height: 20px;">
                                    <div style="text-align-last: center;">
                                        <input class="input-style-bar" type="text" id="actualsanity" name="actualsanity" style="text-align-last: center; width: 50px;" value="0" ondblclick="setActualSanity()" oninput="getActualSanity()">
                                        <strong>/</strong>
                                        <input class="input-style-bar" type="text" id="maxsanity" name="maxsanity" style="text-align-last: center; width: 50px;" value="0" ondblclick="setMaxSanity()" oninput="getMaxSanity()">
                                    </div>
                                    <div class="hit"></div>
                                </div>
                            </div>
                            <div style="margin-right: auto;"></div>
                            <a style="float: right; margin-left: 10%; transform: translateY(-28px);" data-toggle="modal" data-target="#sanityDiceModal">
                                <i id="sanityDice" class="fas fa-dice-d20 fa-2x" onmouseover="animatedDiceSanity()" onmouseout="pauseDiceSanity()"></i>
                            </a>

                            <label class="checkbox-inline" for="traumatized"><input type="checkbox">Traumatizado</label>
                            <label class="checkbox-inline" for="maddened"><input type="checkbox">Enlouquecido</label>
                        </div>
                        <br />
                        <div>
                            <strong>Ocultismo</strong>
                            <div id="ocultismbar" class="ocultism-bar" data-total="0" data-value="0" style="width: 80%;height: 30px">
                                <div class="bar3" style="height: 20px;">
                                    <div style="text-align-last: center;">
                                        <input class="input-style-bar" type="text" id="actualocultism" name="actualocultism" style="text-align-last: center; width: 50px;" value="0" ondblclick="setActualOcultism()" oninput="getActualOcultism()">
                                        <strong>/</strong>
                                        <input class="input-style-bar" type="text" id="maxocultism" name="maxocultism" style="text-align-last: center; width: 50px;" value="0" ondblclick="setMaxOcultism()" oninput="getMaxOcultism()">
                                    </div>
                                    <div class="hit"></div>
                                </div>
                            </div>
                            <div style="display: flex;">

                                <div style="display: table;">
                                    <div class="col-sm-3" style="padding: 22px;text-align-last: center; margin-top: 21px">
                                        <label for="extradamage">Dano Extra</label>
                                        <input class="input-style" type="text" id="extradamage" name="extradamage" style="text-align-last: center; width: 70px;" value="0">
                                    </div>
                                    <div class="col-sm-3" style="padding: 22px;text-align-last: center; margin-top: 21px">
                                        <label for="body">Corpo</label>
                                        <input class="input-style" type="text" id="body" name="body" style="text-align-last: center; width: 70px;" value="0">
                                    </div>
                                    <div class="col-sm-3" style="padding: 22px;text-align-last: center">
                                        <label for="paranormal">Exposição Paranormal</label>
                                        <input class="input-style" type="text" id="paranormal" name="paranormal" style="text-align-last: center; width: 70px;" value="0">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-sm-6" style="margin-bottom: 5%;">
                    <div>
                        <div style="text-align-last: center;">
                            <strong>ATRIBUTOS</strong>
                        </div>
                        <a style="float: right; margin-left: 10%;" onclick="return handleEditAtributo()">
                            <i id="editAtributoOption" class="fas fa-pen" style="border:2px solid white; visibility: visible;"></i>
                        </a>
                        <a style="float: right; margin-left: 10%;" onclick="return handleSaveAtributo()">
                            <i id="saveAtributoOption" class="fas fa-plus" style="border:2px solid white; visibility: hidden;"></i>
                        </a>
                    </div>
                    <hr />
                    <div style="display: inline-table; text-align: center;">
                        <div class="col-sm-3" style="padding: 22px;text-align-last: center">
                            <a style="margin-left: 10%;" data-toggle="modal" data-target="#diceModal">
                                <i id="apparenceDice" class="fas fa-dice-d20 fa-2x" onclick="rollDice('apparence')" onmouseover="animatedDiceApparence()" onmouseout="pauseDiceApparence()"></i>
                            </a><br />
                            <label for="apparence">Aparência</label>
                            <input class="input-style" type="text" id="apparence" name="apparence" style="text-align-last: center; width: 70px;" value="0" disabled>
                        </div>
                        <div class="col-sm-3" style="padding: 22px;text-align-last: center">
                            <a style="margin-left: 10%;" data-toggle="modal" data-target="#diceModal">
                                <i id="constitutionDice" class="fas fa-dice-d20 fa-2x" onmouseover="animatedDiceConstitution()" onmouseout="pauseDiceConstitution()"></i>
                            </a><br />
                            <label for="constitution">Constituição</label>
                            <input class="input-style" type="text" id="constitution" name="constitution" style="text-align-last: center; width: 70px;" value="0" disabled>
                        </div>
                        <div class="col-sm-3" style="padding: 22px;text-align-last: center">
                            <a style="margin-left: 10%;" data-toggle="modal" data-target="#diceModal">
                                <i id="dexterityDice" class="fas fa-dice-d20 fa-2x" onmouseover="animatedDiceDexterity()" onmouseout="pauseDiceDexterity()"></i>
                            </a><br />
                            <label for="dexterity">Destreza</label>
                            <input class="input-style" type="text" id="dexterity" name="dexterity" style="text-align-last: center; width: 70px;" value="0" disabled>
                        </div>
                        <div class="col-sm-3" style="padding: 22px;text-align-last: center">
                            <a style="margin-left: 10%;" data-toggle="modal" data-target="#diceModal">
                                <i id="educationDice" class="fas fa-dice-d20 fa-2x" onmouseover="animatedDiceEducation()" onmouseout="pauseDiceEducation()"></i>
                            </a><br />
                            <label for="education">Educação</label>
                            <input class="input-style" type="text" id="education" name="education" style="text-align-last: center; width: 70px;" value="0" disabled>
                        </div>
                        <div class="col-sm-3" style="padding: 22px;text-align-last: center">
                            <a style="margin-left: 10%;" data-toggle="modal" data-target="#diceModal">
                                <i id="forceDice" class="fas fa-dice-d20 fa-2x" onmouseover="animatedDiceForce()" onmouseout="pauseDiceForce()"></i>
                            </a><br />
                            <label for="force">Força</label>
                            <input class="input-style" type="text" id="force" name="force" style="text-align-last: center; width: 70px;" value="0" disabled>
                        </div>
                        <div class="col-sm-3" style="padding: 22px;text-align-last: center">
                            <a style="margin-left: 10%;" data-toggle="modal" data-target="#diceModal">
                                <i id="intelligenceDice" class="fas fa-dice-d20 fa-2x" onmouseover="animatedDiceIntelligence()" onmouseout="pauseDiceIntelligence()"></i>
                            </a><br />
                            <label for="intelligence">Inteligência</label>
                            <input class="input-style" type="text" id="intelligence" name="intelligence" style="text-align-last: center; width: 70px;" value="0" disabled>
                        </div>
                        <div class="col-sm-3" style="padding: 22px;text-align-last: center">
                            <a style="margin-left: 10%;" data-toggle="modal" data-target="#diceModal">
                                <i id="powerDice" class="fas fa-dice-d20 fa-2x" onmouseover="animatedDicePower()" onmouseout="pauseDicePower()"></i>
                            </a><br />
                            <label for="power">Poder</label>
                            <input class="input-style" type="text" id="power" name="power" style="text-align-last: center; width: 70px;" value="0" disabled>
                        </div style="padding: 22px;text-align-last: center">
                        <div class="col-sm-3" style="padding: 22px;text-align-last: center">
                            <a style="margin-left: 10%;" data-toggle="modal" data-target="#diceModal">
                                <i id="luckDice" class="fas fa-dice-d20 fa-2x" onmouseover="animatedDiceLuck()" onmouseout="pauseDiceLuck()"></i>
                            </a><br />
                            <label for="luck">Sorte</label>
                            <input class="input-style" type="text" id="luck" name="luck" style="text-align-last: center; width: 70px;" value="0" disabled>
                        </div>
                        <div class="col-sm-3"></div>
                        <div class="col-sm-3" style="padding: 22px;text-align-last: center">
                            <label for="moviment">Movimento</label>
                            <input class="input-style" type="text" id="moviment" name="moviment" style="text-align-last: center; width: 70px;" value="0" disabled>
                        </div>
                        <div class="col-sm-3" style="padding: 22px;text-align-last: center">
                            <label for="size">Tamanho</label>
                            <input class="input-style" type="text" id="size" name="size" style="text-align-last: center; width: 70px;" value="0" disabled>
                        </div>
                        <div class="col-sm-3"></div>
                    </div>
                </div>

                <div id="viewExpertiseModal" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content" style="background-color: black; border: 1px solid white;">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" style="color: white;">&times;</button>
                                <h5 class="modal-title" style="color: white;">Visualização de perícia</h5>
                            </div>

                        </div>
                    </div>
                </div>

                <div id="expertiseModal" class="modal fade" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content" style="background-color: black; border: 1px solid white;">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" style="color: white;">&times;</button>
                                <h5 class="modal-title" style="color: white;">Edição das perícias</h5>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="col-sm-6" style="text-align-last: center; margin-bottom: 5%;">

                    <div class="col-sm-8">
                        <div style="text-align-last: center;">
                            <strong>PERÍCIAS</strong>
                            <p>(Acesso rápido)</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <a style="float: right; margin-left: 10%;" data-toggle="modal" data-target="#viewExpertiseModal">
                            <i id="editView" class="fas fa-eye" style="border:2px solid white"></i>
                        </a>
                        <a style="float: right; margin-left: 10%;" data-toggle="modal" data-target="#expertiseModal">
                            <i id="editOption" class="fas fa-pen" style="border:2px solid white"></i>
                        </a>
                    </div>
                    <div style="display: inline-table; text-align: center; width: 100%;">
                        <hr />
                        <p>Não há perícias no acesso rápido</p>
                        <!--<div class="col-sm-6" style="width: 100%">
                            <div class="col-sm-4" style="padding: 22px;text-align-last: center" data-toggle="modal" data-target="#diceModal">
                                <input class="input-style" type="text" id="arperception" name="arperception" style="text-align-last: center; width: 90px;" value="25" disabled>
                                <label for="arperception">Percepção</label>
                            </div>
                            <div class="col-sm-4" style="padding: 22px;text-align-last: center" data-toggle="modal" data-target="#diceModal">
                                <input class="input-style" type="text" id="arpistol" name="arpistol" style="text-align-last: center; width: 90px;" value="20" disabled>
                                <label for="arpistol">Armas de fogo (Pistolas)</label>
                            </div>
                            <div class="col-sm-4" style="padding: 22px;text-align-last: center" data-toggle="modal" data-target="#diceModal">
                                <input class="input-style" type="text" id="arlisten" name="arlisten" style="text-align-last: center; width: 90px;" value="25" disabled>
                                <label for="arlisten">Escutar</label>
                            </div>
                        </div>
                        <div class="col-sm-6" style="width: 100%">
                            <div class="col-sm-4" style="padding: 22px;text-align-last: center" data-toggle="modal" data-target="#diceModal">
                                <input class="input-style" type="text" id="ardodge" name="ardodge" style="text-align-last: center; width: 90px;" value="0" disabled>
                                <label for="ardodge">Esquivar</label>
                            </div>
                            <div class="col-sm-4" style="padding: 22px;text-align-last: center" data-toggle="modal" data-target="#diceModal">
                                <input class="input-style" type="text" id="arstealth" name="arstealth" style="text-align-last: center; width: 90px;" value="10" disabled>
                                <label for="arstealth">Furtividade</label>
                            </div>
                            <div class="col-sm-4" style="padding: 22px;text-align-last: center" data-toggle="modal" data-target="#diceModal">
                                <input class="input-style" type="text" id="arfight" name="arfight" style="text-align-last: center; width: 90px;" value="25" disabled>
                                <label for="arfight">Lutar (Briga)</label>
                            </div>
                        </div>-->
                    </div>
                </div>

                <div id="combatNav" class="col-sm-12" style="margin-bottom: 5%;">

                    <div class="col-sm-10">
                        <div style="text-align-last: center;">
                            <strong>COMBATE</strong>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <a style="float: right; margin-left: 10%;" onclick="addRow()">
                            <i id="addOption" class="fas fa-plus" style="border:2px solid white"></i>
                        </a>
                    </div>
                    <div>
                        <hr />
                        <div class="col-12 scrollClass">
                            <table id="combatTable" class="table table-dark">
                                <thead>
                                    <tr>
                                        <th scope="col"></th>
                                        <th scope="col">Nome</th>
                                        <th scope="col">Tipo</th>
                                        <th scope="col">Dano</th>
                                        <th scope="col">MunAtual</th>
                                        <th scope="col">MunMáxima</th>
                                        <th scope="col">Ataque</th>
                                        <th scope="col">Alcance</th>
                                        <th scope="col">Defeito</th>
                                        <th scope="col">Área</th>
                                    </tr>
                                </thead>
                                <tbody id="combatBodyTable">
                                    <tr>
                                        <td>
                                            <i id="removeOption" class="fas fa-trash" onclick="removeRow(this)"></i>
                                        </td>
                                        <td>
                                            <input class="input-style" type="text" id="combatNome" name="combatNome" style="text-align-last: center; width: 90px;">
                                        </td>
                                        <td>
                                            <select class="input-style" type="text" id="combatTipo" name="combatTipo" style="text-align-last: center; width: 90px;">
                                                <option></option>
                                                <option>Arco</option>
                                                <option>Lutar</option>
                                            </select>
                                        </td>
                                        <td>
                                            <input class="input-style" type="text" id="combatDano" name="combatDano" style="text-align-last: center; width: 90px;">
                                        </td>
                                        <td>
                                            <input class="input-style" type="text" id="combatMunAtual" name="combatMunAtual" style="text-align-last: center; width: 90px;">
                                        </td>
                                        <td>
                                            <input class="input-style" type="text" id="combatMunMax" name="combatMunMax" style="text-align-last: center; width: 90px;">
                                        </td>
                                        <td>
                                            <input class="input-style" type="text" id="combatAtaque" name="combatAtaque" style="text-align-last: center; width: 90px;">
                                        </td>
                                        <td>
                                            <input class="input-style" type="text" id="combatAlcance" name="combatAlcance" style="text-align-last: center; width: 90px;">
                                        </td>
                                        <td>
                                            <input class="input-style" type="text" id="combatDefeito" name="combatDefeito" style="text-align-last: center; width: 90px;">
                                        </td>
                                        <td>
                                            <input class="input-style" type="text" id="combatArea" name="combatArea" style="text-align-last: center; width: 90px;">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-sm-12" style="margin-bottom: 5%;">

                    <div class="col-sm-10">
                        <div style="text-align-last: center;">
                            <strong>PERÍCIAS</strong>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <a style="float: right; margin-left: 10%;" onclick="return handleEditPericias()">
                            <i id="editPericiasOption" class="fas fa-pen" style="border:2px solid white; visibility: visible;"></i>
                        </a>
                        <a style="float: right; margin-left: 10%;" onclick="return handleSavePericias()">
                            <i id="savePericiasOption" class="fas fa-plus" style="border:2px solid white; visibility: hidden;"></i>
                        </a>
                    </div>
                    <hr />
                    <div class="scrollClassPer">
                        <div id="periciaTable" style="display: inline-table; text-align: center;">
                            <div id="pericias" class="col-sm-3 periciaBox" data-toggle="modal" data-target="#diceModal">
                                <label id="expertisecheckbox" class="checkbox-inline" for="antropologia"><input type="checkbox"></label>
                                <input class="input-style periciaFont" type="text" id="antropologia" name="antropologia" value="1" disabled>
                                <label for="antropologia">Antropologia (1%)</label>
                            </div>
                            <div id="pericias" class="col-sm-3 periciaBox" data-toggle="modal" data-target="#diceModal">
                                <label id="expertisecheckbox" class="checkbox-inline" for="arco"><input type="checkbox"></label>
                                <input class="input-style periciaFont" type="text" id="arco" name="arco" value="1" disabled>
                                <label for="arco">Armas de Fogo (Arco)</label>
                            </div>
                            <div id="pericias" class="col-sm-3 periciaBox" data-toggle="modal" data-target="#diceModal">
                                <label id="expertisecheckbox" class="checkbox-inline" for="pistola"><input type="checkbox"></label>
                                <input class="input-style periciaFont" type="text" id="pistola" name="pistola" value="1" disabled>
                                <label for="pistola">Armas de Fogo (Pistola 20%)</label>
                            </div>
                            <div id="pericias" class="col-sm-3 periciaBox" data-toggle="modal" data-target="#diceModal">
                                <label id="expertisecheckbox" class="checkbox-inline" for="rifle"><input type="checkbox"></label>
                                <input class="input-style periciaFont" type="text" id="rifle" name="rifle" value="1" disabled>
                                <label for="rifle">Armas de Fogo (Rifle 20%)</label>
                            </div>

                            <div id="pericias" class="col-sm-3 periciaBox" data-toggle="modal" data-target="#diceModal">
                                <label id="expertisecheckbox" class="checkbox-inline" for="arqueologia"><input type="checkbox"></label>
                                <input class="input-style periciaFont" type="text" id="arqueologia" name="arqueologia" value="1" disabled>
                                <label for="arqueologia">Arqueologia (1%)</label>
                            </div>
                            <div id="pericias" class="col-sm-3 periciaBox" data-toggle="modal" data-target="#diceModal">
                                <label id="expertisecheckbox" class="checkbox-inline" for="arremessar"><input type="checkbox"></label>
                                <input class="input-style periciaFont" type="text" id="arremessar" name="arremessar" value="1" disabled>
                                <label for="arremessar">Arremessar (20%)</label>
                            </div>
                            <div id="pericias" class="col-sm-3 periciaBox" data-toggle="modal" data-target="#diceModal">
                                <label id="expertisecheckbox" class="checkbox-inline" for="arte"><input type="checkbox"></label>
                                <input class="input-style periciaFont" type="text" id="arte" name="arte" value="1" disabled>
                                <label for="arte">Arte & Oficio (??)</label>
                            </div>
                            <div id="pericias" class="col-sm-3 periciaBox" data-toggle="modal" data-target="#diceModal">
                                <label id="expertisecheckbox" class="checkbox-inline" for="avaliacao"><input type="checkbox"></label>
                                <input class="input-style periciaFont" type="text" id="avaliacao" name="avaliacao" value="1" disabled>
                                <label for="avaliacao">Avaliação (5%)</label>
                            </div>

                            <div id="pericias" class="col-sm-3 periciaBox" data-toggle="modal" data-target="#diceModal">
                                <label id="expertisecheckbox" class="checkbox-inline" for="charme"><input type="checkbox"></label>
                                <input class="input-style periciaFont" type="text" id="charme" name="charme" value="1" disabled>
                                <label for="charme">Charme (15%)</label>
                            </div>
                            <div id="pericias" class="col-sm-3 periciaBox" data-toggle="modal" data-target="#diceModal">
                                <label id="expertisecheckbox" class="checkbox-inline" for="chaveiro"><input type="checkbox"></label>
                                <input class="input-style periciaFont" type="text" id="chaveiro" name="chaveiro" value="1" disabled>
                                <label for="chaveiro">Chaveiro (1%)</label>
                            </div>
                            <div id="pericias" class="col-sm-3 periciaBox" data-toggle="modal" data-target="#diceModal">
                                <label id="expertisecheckbox" class="checkbox-inline" for="ciencia"><input type="checkbox"></label>
                                <input class="input-style periciaFont" type="text" id="ciencia" name="ciencia" value="1" disabled>
                                <label for="ciencia">Ciência (1%)</label>
                            </div>
                            <div id="pericias" class="col-sm-3 periciaBox" data-toggle="modal" data-target="#diceModal">
                                <label id="expertisecheckbox" class="checkbox-inline" for="eletrica"><input type="checkbox"></label>
                                <input class="input-style periciaFont" type="text" id="eletrica" name="eletrica" value="1" disabled>
                                <label for="eletrica">Consertos Ele. (10%)</label>
                            </div>

                            <div id="pericias" class="col-sm-3 periciaBox" data-toggle="modal" data-target="#diceModal">
                                <label id="expertisecheckbox" class="checkbox-inline" for="mecanico"><input type="checkbox"></label>
                                <input class="input-style periciaFont" type="text" id="mecanico" name="mecanico" value="1" disabled>
                                <label for="mecanico">Consertos Mec. (10%)</label>
                            </div>
                            <div id="pericias" class="col-sm-3 periciaBox" data-toggle="modal" data-target="#diceModal">
                                <label id="expertisecheckbox" class="checkbox-inline" for="contabilidade"><input type="checkbox"></label>
                                <input class="input-style periciaFont" type="text" id="contabilidade" name="contabilidade" value="1" disabled>
                                <label for="contabilidade">Contabilidade (5%)</label>
                            </div>
                            <div id="pericias" class="col-sm-3 periciaBox" data-toggle="modal" data-target="#diceModal">
                                <label id="expertisecheckbox" class="checkbox-inline" for="direito"><input type="checkbox"></label>
                                <input class="input-style periciaFont" type="text" id="direito" name="direito" value="1" disabled>
                                <label for="direito">Direito (5%)</label>
                            </div>
                            <div id="pericias" class="col-sm-3 periciaBox" data-toggle="modal" data-target="#diceModal">
                                <label id="expertisecheckbox" class="checkbox-inline" for="auto"><input type="checkbox"></label>
                                <input class="input-style periciaFont" type="text" id="auto" name="auto" value="1" disabled>
                                <label for="auto">Dirigir Auto (20%)</label>
                            </div>

                            <div id="pericias" class="col-sm-3 periciaBox" data-toggle="modal" data-target="#diceModal">
                                <label id="expertisecheckbox" class="checkbox-inline" for="disfarce"><input type="checkbox"></label>
                                <input class="input-style periciaFont" type="text" id="disfarce" name="disfarce" value="1" disabled>
                                <label for="disfarce">Disfarce (5%)</label>
                            </div>
                            <div id="pericias" class="col-sm-3 periciaBox" data-toggle="modal" data-target="#diceModal">
                                <label id="expertisecheckbox" class="checkbox-inline" for="eletronica"><input type="checkbox"></label>
                                <input class="input-style periciaFont" type="text" id="eletronica" name="eletronica" value="1" disabled>
                                <label for="eletronica">Eletrônica (1%)</label>
                            </div>
                            <div id="pericias" class="col-sm-3 periciaBox" data-toggle="modal" data-target="#diceModal">
                                <label id="expertisecheckbox" class="checkbox-inline" for="encontrar"><input type="checkbox"></label>
                                <input class="input-style periciaFont" type="text" id="encontrar" name="encontrar" value="1" disabled>
                                <label for="encontrar">Encontrar (25%)</label>
                            </div>
                            <div id="pericias" class="col-sm-3 periciaBox" data-toggle="modal" data-target="#diceModal">
                                <label id="expertisecheckbox" class="checkbox-inline" for="escalar"><input type="checkbox"></label>
                                <input class="input-style periciaFont" type="text" id="escalar" name="escalar" value="1" disabled>
                                <label for="escalar">Escalar (20%)</label>
                            </div>

                            <div id="pericias" class="col-sm-3 periciaBox" data-toggle="modal" data-target="#diceModal">
                                <label id="expertisecheckbox" class="checkbox-inline" for="escutar"><input type="checkbox"></label>
                                <input class="input-style periciaFont" type="text" id="escutar" name="escutar" value="1" disabled>
                                <label for="escutar">Escutar (20%)</label>
                            </div>
                            <div id="pericias" class="col-sm-3 periciaBox" data-toggle="modal" data-target="#diceModal">
                                <label id="expertisecheckbox" class="checkbox-inline" for="esquivar"><input type="checkbox"></label>
                                <input class="input-style periciaFont" type="text" id="esquivar" name="esquivar" value="0" disabled>
                                <label for="esquivar">Esquivar</label>
                            </div>
                            <div id="pericias" class="col-sm-3 periciaBox" data-toggle="modal" data-target="#diceModal">
                                <label id="expertisecheckbox" class="checkbox-inline" for="furtividade"><input type="checkbox"></label>
                                <input class="input-style periciaFont" type="text" id="furtividade" name="furtividade" value="1" disabled>
                                <label for="furtividade">Furtividade (20%)</label>
                            </div>
                            <div id="pericias" class="col-sm-3 periciaBox" data-toggle="modal" data-target="#diceModal">
                                <label id="expertisecheckbox" class="checkbox-inline" for="historia"><input type="checkbox"></label>
                                <input class="input-style periciaFont" type="text" id="historia" name="historia" value="1" disabled>
                                <label for="historia">História (20%)</label>
                            </div>

                            <div id="pericias" class="col-sm-3 periciaBox" data-toggle="modal" data-target="#diceModal">
                                <label id="expertisecheckbox" class="checkbox-inline" for="intimidacao"><input type="checkbox"></label>
                                <input class="input-style periciaFont" type="text" id="intimidacao" name="intimidacao" value="1" disabled>
                                <label for="intimidacao">Intimidação (15%)</label>
                            </div>
                            <div id="pericias" class="col-sm-3 periciaBox" data-toggle="modal" data-target="#diceModal">
                                <label id="expertisecheckbox" class="checkbox-inline" for="labia"><input type="checkbox"></label>
                                <input class="input-style periciaFont" type="text" id="labia" name="labia" value="1" disabled>
                                <label for="labia">Lábia (5%)</label>
                            </div>
                            <div id="pericias" class="col-sm-3 periciaBox" data-toggle="modal" data-target="#diceModal">
                                <label id="expertisecheckbox" class="checkbox-inline" for="natural"><input type="checkbox"></label>
                                <input class="input-style periciaFont" type="text" id="natural" name="natural" value="0" disabled>
                                <label for="natural">Lingua Nat. (EDU)</label>
                            </div>
                            <div id="pericias" class="col-sm-3 periciaBox" data-toggle="modal" data-target="#diceModal">
                                <label id="expertisecheckbox" class="checkbox-inline" for="outra"><input type="checkbox"></label>
                                <input class="input-style periciaFont" type="text" id="outra" name="outra" value="1" disabled>
                                <label for="outra">Lingua Out. (1%)</label>
                            </div>

                            <div id="pericias" class="col-sm-3 periciaBox" data-toggle="modal" data-target="#diceModal">
                                <label id="expertisecheckbox" class="checkbox-inline" for="lutar"><input type="checkbox"></label>
                                <input class="input-style periciaFont" type="text" id="lutar" name="lutar" value="1" disabled>
                                <label for="lutar">Lutar Briga (15%)</label>
                            </div>
                            <div id="pericias" class="col-sm-3 periciaBox" data-toggle="modal" data-target="#diceModal">
                                <label id="expertisecheckbox" class="checkbox-inline" for="medicina"><input type="checkbox"></label>
                                <input class="input-style periciaFont" type="text" id="medicina" name="medicina" value="1" disabled>
                                <label for="medicina">Medicina (1%)</label>
                            </div>
                            <div id="pericias" class="col-sm-3 periciaBox" data-toggle="modal" data-target="#diceModal">
                                <label id="expertisecheckbox" class="checkbox-inline" for="mundonatural"><input type="checkbox"></label>
                                <input class="input-style periciaFont" type="text" id="mundonatural" name="mundonatural" value="1" disabled>
                                <label for="mundonatural">Mundo Natural (10%)</label>
                            </div>
                            <div id="pericias" class="col-sm-3 periciaBox" data-toggle="modal" data-target="#diceModal">
                                <label id="expertisecheckbox" class="checkbox-inline" for="natacao"><input type="checkbox"></label>
                                <input class="input-style periciaFont" type="text" id="natacao" name="natacao" value="1" disabled>
                                <label for="natacao">Natação (10%)</label>
                            </div>

                            <div id="pericias" class="col-sm-3 periciaBox" data-toggle="modal" data-target="#diceModal">
                                <label id="expertisecheckbox" class="checkbox-inline" for="navegacao"><input type="checkbox"></label>
                                <input class="input-style periciaFont" type="text" id="navegacao" name="navegacao" value="1" disabled>
                                <label for="navegacao">Navegação (10%)</label>
                            </div>
                            <div id="pericias" class="col-sm-3 periciaBox" data-toggle="modal" data-target="#diceModal">
                                <label id="expertisecheckbox" class="checkbox-inline" for="credito"><input type="checkbox"></label>
                                <input class="input-style periciaFont" type="text" id="credito" name="credito" value="0" disabled>
                                <label for="credito">Nivel de Crédito (0%)</label>
                            </div>
                            <div id="pericias" class="col-sm-3 periciaBox" data-toggle="modal" data-target="#diceModal">
                                <label id="expertisecheckbox" class="checkbox-inline" for="ocultismo"><input type="checkbox"></label>
                                <input class="input-style periciaFont" type="text" id="ocultismo" name="ocultismo" value="1" disabled>
                                <label for="ocultismo">Ocultismo (5%)</label>
                            </div>
                            <div id="pericias" class="col-sm-3 periciaBox" data-toggle="modal" data-target="#diceModal">
                                <label id="expertisecheckbox" class="checkbox-inline" for="maquinario"><input type="checkbox"></label>
                                <input class="input-style periciaFont" type="text" id="maquinario" name="maquinario" value="1" disabled>
                                <label for="maquinario">Op. Maquinário (1%)</label>
                            </div>

                            <div id="pericias" class="col-sm-3 periciaBox" data-toggle="modal" data-target="#diceModal">
                                <label id="expertisecheckbox" class="checkbox-inline" for="persuasao"><input type="checkbox"></label>
                                <input class="input-style periciaFont" type="text" id="persuasao" name="persuasao" value="1" disabled>
                                <label for="persuasao">Persuasão (10%)</label>
                            </div>
                            <div id="pericias" class="col-sm-3 periciaBox" data-toggle="modal" data-target="#diceModal">
                                <label id="expertisecheckbox" class="checkbox-inline" for="pilotar"><input type="checkbox"></label>
                                <input class="input-style periciaFont" type="text" id="pilotar" name="pilotar" value="1" disabled>
                                <label for="pilotar">Pilotar (1%)</label>
                            </div>
                            <div id="pericias" class="col-sm-3 periciaBox" data-toggle="modal" data-target="#diceModal">
                                <label id="expertisecheckbox" class="checkbox-inline" for="prestidigitacao"><input type="checkbox"></label>
                                <input class="input-style periciaFont" type="text" id="prestidigitacao" name="prestidigitacao" value="1" disabled>
                                <label for="prestidigitacao">Prestidigitação (10%)</label>
                            </div>
                            <div id="pericias" class="col-sm-3 periciaBox" data-toggle="modal" data-target="#diceModal">
                                <label id="expertisecheckbox" class="checkbox-inline" for="socorros"><input type="checkbox"></label>
                                <input class="input-style periciaFont" type="text" id="socorros" name="socorros" value="1" disabled>
                                <label for="socorros">Primeiros Socorros (30%)</label>
                            </div>

                            <div id="pericias" class="col-sm-3 periciaBox" data-toggle="modal" data-target="#diceModal">
                                <label id="expertisecheckbox" class="checkbox-inline" for="psicanalise"><input type="checkbox"></label>
                                <input class="input-style periciaFont" type="text" id="psicanalise" name="psicanalise" value="1" disabled>
                                <label for="psicanalise">Psicanálise (1%)</label>
                            </div>
                            <div id="pericias" class="col-sm-3 periciaBox" data-toggle="modal" data-target="#diceModal">
                                <label id="expertisecheckbox" class="checkbox-inline" for="psicologia"><input type="checkbox"></label>
                                <input class="input-style periciaFont" type="text" id="psicologia" name="psicologia" value="1" disabled>
                                <label for="psicologia">Psicologia (10%)</label>
                            </div>
                            <div id="pericias" class="col-sm-3 periciaBox" data-toggle="modal" data-target="#diceModal">
                                <label id="expertisecheckbox" class="checkbox-inline" for="rastrear"><input type="checkbox"></label>
                                <input class="input-style periciaFont" type="text" id="rastrear" name="rastrear" value="1" disabled>
                                <label for="rastrear">Rastrear (10%)</label>
                            </div>
                            <div id="pericias" class="col-sm-3 periciaBox" data-toggle="modal" data-target="#diceModal">
                                <label id="expertisecheckbox" class="checkbox-inline" for="saltar"><input type="checkbox"></label>
                                <input class="input-style periciaFont" type="text" id="saltar" name="saltar" value="1" disabled>
                                <label for="saltar">Saltar (20%)</label>
                            </div>

                            <div id="pericias" class="col-sm-3 periciaBox" data-toggle="modal" data-target="#diceModal">
                                <label id="expertisecheckbox" class="checkbox-inline" for="seduzir"><input type="checkbox"></label>
                                <input class="input-style periciaFont" type="text" id="seduzir" name="seduzir" value="1" disabled>
                                <label for="seduzir">Seduzir (15%)</label>
                            </div>
                            <div id="pericias" class="col-sm-3 periciaBox" data-toggle="modal" data-target="#diceModal">
                                <label id="expertisecheckbox" class="checkbox-inline" for="sobrevivencia"><input type="checkbox"></label>
                                <input class="input-style periciaFont" type="text" id="sobrevivencia" name="sobrevivencia" value="1" disabled>
                                <label for="sobrevivencia">Sobrevivência (10%)</label>
                            </div>
                            <div id="pericias" class="col-sm-3 periciaBox" data-toggle="modal" data-target="#diceModal">
                                <label id="expertisecheckbox" class="checkbox-inline" for="biblioteca"><input type="checkbox"></label>
                                <input class="input-style periciaFont" type="text" id="biblioteca" name="biblioteca" value="1" disabled>
                                <label for="biblioteca">Usar Biblioteca (20%)</label>
                            </div>
                            <div id="pericias" class="col-sm-3 periciaBox" data-toggle="modal" data-target="#diceModal">
                                <label id="expertisecheckbox" class="checkbox-inline" for="computador"><input type="checkbox"></label>
                                <input class="input-style periciaFont" type="text" id="computador" name="computador" value="1" disabled>
                                <label for="computador">Usar Computador (1%)</label>
                            </div>
                        </div>
                    </div>

                </div>

                <div id="inventarioNav" class="col-sm-12" style="margin-bottom: 5%;">

                    <div class="col-sm-10">
                        <div style="text-align-last: center;">
                            <strong>INVENTÁRIO</strong>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <a style="float: right; margin-left: 10%;" onclick="addItem()">
                            <i id="addOption" class="fas fa-plus" style="border:2px solid white"></i>
                        </a>
                    </div>
                    <div>
                        <hr />
                        <div class="col-12 scrollClass">
                            <div style="display: -webkit-box; -webkit-box-pack: center;">
                                <p style="color: white;">Peso Total</p>
                                <input class="input-style" type="text" id="pesototal" name="pesototal" value="0" style="text-align: center; width: 50px;" onclick="pesoItens(this)">
                            </div>
                            <table id="itemTable" class="table table-dark">
                                <thead>
                                    <tr>
                                        <th scope="col"></th>
                                        <th scope="col">Nome</th>
                                        <th scope="col">Tipo</th>
                                        <th scope="col">Peso</th>
                                    </tr>
                                </thead>
                                <tbody id="itemBodyTable">
                                    <tr>
                                        <td>
                                            <i id="removeOption" class="fas fa-trash" onclick="removeItem(this)"></i>
                                        </td>
                                        <td>
                                            <input class="input-style" type="text" id="itemNome" name="itemNome" style="text-align-last: center; width: 100%">
                                        </td>
                                        <td>
                                            <input class="input-style" type="text" id="itemTipo" name="itemTipo" style="text-align-last: center; width: 100%">
                                        </td>
                                        <td>
                                            <input class="input-style" type="text" id="itemPeso" name="itemPeso" style="text-align-last: center; width: 100%">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>

                <div id="ritualNav" class="col-sm-12" style="margin-bottom: 5%;">

                    <div class="col-sm-10">
                        <div style="text-align-last: center;">
                            <strong>RITUAIS</strong>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <a style="float: right; margin-left: 10%;" onclick="addRitual()">
                            <i id="addOption" class="fas fa-plus" style="border:2px solid white"></i>
                        </a>
                    </div>
                    <div>
                        <hr />
                        <div class="col-12 scrollClass">
                            <table id="ritualTable" class="table table-dark">
                                <thead>
                                    <tr>
                                        <th scope="col"></th>
                                        <th scope="col">Nome</th>
                                        <th scope="col">Elemento</th>
                                        <th scope="col">Conjuração</th>
                                        <th scope="col">Efeito</th>
                                        <th scope="col">Custo</th>
                                    </tr>
                                </thead>
                                <tbody id="ritualBodyTable">
                                    <tr>
                                        <td>
                                            <i id="removeOption" class="fas fa-trash" onclick="removeRitual(this)"></i>
                                        </td>
                                        <td>
                                            <input class="input-style" type="text" id="ritualNome" name="ritualNome" style="text-align-last: center; width: 100%">
                                        </td>
                                        <td>
                                            <input class="input-style" type="text" id="ritualElemento" name="ritualElemento" style="text-align-last: center; width: 100%">
                                        </td>
                                        <td>
                                            <input class="input-style" type="text" id="ritualConjuracao" name="ritualConjuracao" style="text-align-last: center; width: 100%">
                                        </td>
                                        <td>
                                            <input class="input-style" type="text" id="ritualEfeito" name="ritualEfeito" style="text-align-last: center; width: 100%">
                                        </td>
                                        <td>
                                            <input class="input-style" type="text" id="ritualCusto" name="ritualCusto" style="text-align-last: center; width: 100%">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!--<input type="submit" style="border-radius: 10%; color: white; border: 1px solid white; height: 100px !important;width: 165px !important;vertical-align: top;margin-top: 5%; margin-left: 2%" />-->
                    <input type="submit" value="Salvar">
                </div>
            </div>
    </form>
    <script>
        $(document).ready(function() {
            $(".button").click(function() {
                var datastring = $("#formDetalhe").serialize();
                datastring += "&" + $("#formInterface").serialize();
                datastring += "&" + $("#formAtributo").serialize();
                datastring += "&" + $("#formCombate").serialize();
                datastring += "&" + $("#formPericias").serialize();
                datastring += "&" + $("#formInventario").serialize();
                datastring += "&" + $("#formRitual").serialize();
                $.ajax({
                    type: "POST",
                    url: "../src/static/php/save.php",
                    data: datastring,
                    success: function(data) {
                        console.log(data);
                        alert(data);
                    },
                    error: function() {
                        alert('error handing here');
                    }
                });
            });
        });
    </script>


    </form>
</body>

</html>