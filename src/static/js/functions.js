function animatedDice(){
    var diceRoll = document.getElementById('firstdice');
    diceRoll.className += ' fa-spin';
}

function pauseDice(){
    var diceRoll = document.getElementById('firstdice');
    diceRoll.classList.remove('fa-spin');
}

function animatedDiceSanity(){
    var diceRoll = document.getElementById('sanityDice');
    diceRoll.className += ' fa-spin';
}

function pauseDiceSanity(){
    var diceRoll = document.getElementById('sanityDice');
    diceRoll.classList.remove('fa-spin');
}

function animatedDiceApparence(){
    var diceRoll = document.getElementById('apparenceDice');
    diceRoll.className += ' fa-spin';
}

function pauseDiceApparence(){
    var diceRoll = document.getElementById('apparenceDice');
    diceRoll.classList.remove('fa-spin');
}

function animatedDiceConstitution(){
    var diceRoll = document.getElementById('constitutionDice');
    diceRoll.className += ' fa-spin';
}

function pauseDiceConstitution(){
    var diceRoll = document.getElementById('constitutionDice');
    diceRoll.classList.remove('fa-spin');
}

function animatedDiceDexterity(){
    var diceRoll = document.getElementById('dexterityDice');
    diceRoll.className += ' fa-spin';
}

function pauseDiceDexterity(){
    var diceRoll = document.getElementById('dexterityDice');
    diceRoll.classList.remove('fa-spin');
}

function animatedDiceEducation(){
    var diceRoll = document.getElementById('educationDice');
    diceRoll.className += ' fa-spin';
}

function pauseDiceEducation(){
    var diceRoll = document.getElementById('educationDice');
    diceRoll.classList.remove('fa-spin');
}

function animatedDiceForce(){
    var diceRoll = document.getElementById('forceDice');
    diceRoll.className += ' fa-spin';
}

function pauseDiceForce(){
    var diceRoll = document.getElementById('forceDice');
    diceRoll.classList.remove('fa-spin');
}

function animatedDiceIntelligence(){
    var diceRoll = document.getElementById('intelligenceDice');
    diceRoll.className += ' fa-spin';
}

function pauseDiceIntelligence(){
    var diceRoll = document.getElementById('intelligenceDice');
    diceRoll.classList.remove('fa-spin');
}

function animatedDicePower(){
    var diceRoll = document.getElementById('powerDice');
    diceRoll.className += ' fa-spin';
}

function pauseDicePower(){
    var diceRoll = document.getElementById('powerDice');
    diceRoll.classList.remove('fa-spin');
}

function animatedDiceLuck(){
    var diceRoll = document.getElementById('luckDice');
    diceRoll.className += ' fa-spin';
}

function pauseDiceLuck(){
    var diceRoll = document.getElementById('luckDice');
    diceRoll.classList.remove('fa-spin');
}

function setActualHealth(){
    var health = document.getElementById("healthbar").dataset.value;
    var newHealth = document.getElementById("actuallife");
    newHealth.value = health;
}

function setMaxHealth(){
    var health = document.getElementById("healthbar").dataset.value;
    var newHealth = document.getElementById("maxlife");
    newHealth.value = health;
}

function getActualHealth(){
    var health = document.getElementById("actuallife").value;
    var newHealth = document.getElementById("healthbar");
    var input = document.getElementById("actuallife");
    input.addEventListener('keyup', function(e){
        var key = e.code;
        if (key == "Enter") { 
            newHealth.dataset.value = health;
        }
      });
}

function getMaxHealth(){
    var health = document.getElementById("maxlife").value;
    var newHealth = document.getElementById("healthbar");
    var input = document.getElementById("maxlife");
    input.addEventListener('keyup', function(e){
        var key = e.code;
        if (key == "Enter") { 
            newHealth.dataset.total = health;
        }
      });
}

function setActualHealth(){
    var health = document.getElementById("healthbar").dataset.value;
    var newHealth = document.getElementById("actuallife");
    newHealth.value = health;
}

function setMaxHealth(){
    var health = document.getElementById("healthbar").dataset.value;
    var newHealth = document.getElementById("maxlife");
    newHealth.value = health;
}

function getActualHealth(){
    var health = document.getElementById("actuallife").value;
    var newHealth = document.getElementById("healthbar");
    var input = document.getElementById("actuallife");
    input.addEventListener('keyup', function(e){
        var key = e.code;
        if (key == "Enter") { 
            newHealth.dataset.value = health;
        }
      });
}

function getMaxHealth(){
    var health = document.getElementById("maxlife").value;
    var newHealth = document.getElementById("healthbar");
    var input = document.getElementById("maxlife");
    input.addEventListener('keyup', function(e){
        var key = e.code;
        if (key == "Enter") { 
            newHealth.dataset.total = health;
        }
      });
}

function setActualSanity(){
    var sanity = document.getElementById("sanitybar").dataset.value;
    var newSanity = document.getElementById("actualsanity");
    newSanity.value = sanity;
}

function setMaxSanity(){
    var sanity = document.getElementById("sanitybar").dataset.value;
    var newSanity = document.getElementById("maxsanity");
    newSanity.value = sanity;
}

function getActualSanity(){
    var sanity = document.getElementById("actualsanity").value;
    var newSanity = document.getElementById("sanitybar");
    var input = document.getElementById("actualsanity");
    input.addEventListener('keyup', function(e){
        var key = e.code;
        if (key == "Enter") { 
            newSanity.dataset.value = sanity;
        }
      });
}

function getMaxSanity(){
    var sanity = document.getElementById("maxsanity").value;
    var newSanity = document.getElementById("sanitybar");
    var input = document.getElementById("maxsanity");
    input.addEventListener('keyup', function(e){
        var key = e.code;
        if (key == "Enter") { 
            newSanity.dataset.total = sanity;
        }
      });
}

function setActualOcultism(){
    var ocultism = document.getElementById("ocultismbar").dataset.value;
    var newOcultism = document.getElementById("actualocultism");
    newOcultism.value = ocultism;
}

function setMaxOcultism(){
    var ocultism = document.getElementById("ocultismbar").dataset.value;
    var newOcultism = document.getElementById("maxocultism");
    newOcultism.value = ocultism;
}

function getActualOcultism(){
    var ocultism = document.getElementById("actualocultism").value;
    var newOcultism = document.getElementById("ocultismbar");
    var input = document.getElementById("actualocultism");
    input.addEventListener('keyup', function(e){
        var key = e.code;
        if (key == "Enter") { 
            newOcultism.dataset.value = ocultism;
        }
      });
}

function getMaxOcultism(){
    var ocultism = document.getElementById("maxocultism").value;
    var newOcultism = document.getElementById("ocultismbar");
    var input = document.getElementById("maxocultism");
    input.addEventListener('keyup', function(e){
        var key = e.code;
        if (key == "Enter") { 
            newOcultism.dataset.total = ocultism;
        }
      });
}

$(document).ready(function(){
    var hitBtn = $('.actuallife'),
        hBar = $('.health-bar'),
        bar = hBar.find('.bar1'),
        hit = hBar.find('.hit');
    
    hitBtn.on("change", function(){
      var total = hBar.data('total'),
          value = hBar.data('value');
      
      // max damage is essentially quarter of max life
      var damage = total;
      // damage = 100;
      var newValue = value - damage;
      // calculate the percentage of the total width
      var barWidth = (newValue / total) * 100;
      var hitWidth = (damage / value) * 100 + "%";
      
      // show hit bar and set the width
      hit.css('width', hitWidth);
      hBar.data('value', newValue);
      
      setTimeout(function(){
        hit.css({'width': '0'});
        bar.css('width', barWidth + "%");
      }, 500);
      //bar.css('width', total - value);
      
    });
});

function rollD20() {
    var modalOpen = $('#d20DiceModal').hasClass('in');
    if(modalOpen == true){
        var textResult = document.getElementById('1d2020result');

        var result = Math.floor(Math.random() * (20 - 1 + 1) + 1);
        
        textResult.innerHTML = result.toString();
    }
}

function rollDice(id){
    var modalOpen = $('#diceModal').hasClass('in');
    if(modalOpen == true){
        var textResult = document.getElementById('1d20result');
        var typeResult = document.getElementById('1d20typeresult');

        var result = 1; 
        textResult.innerHTML = result.toString();
        typeResult.innerHTML = 'Sucesso Normal';

        var typeValue = parseInt(document.getElementById(id).value);
        switch(typeValue){
            case 1:
                result = Math.floor(Math.random() * (20 - 1 + 1) + 1);
                if(result == 20){
                    textResult.innerHTML = result.toString();
                    typeResult.innerHTML = 'Sucesso Normal';
                    break;
                } else if(result >= 2 && result <= 19){
                    textResult.innerHTML = result.toString();
                    typeResult.innerHTML = 'Fracasso';
                    break;
                } else if(result == 1){
                    textResult.innerHTML = result.toString();
                    typeResult.innerHTML = 'Falha Crítica';
                    break; 
                }
            case 2:
                result = Math.floor(Math.random() * (20 - 1 + 1) + 1);
                if(result == 20){
                    textResult.innerHTML = result.toString();
                    typeResult.innerHTML = 'Sucesso Bom';
                    break;
                } else if(result == 19){
                    textResult.innerHTML = result.toString();
                    typeResult.innerHTML = 'Sucesso Normal';
                    break;
                } else if(result >= 2 && result <= 18){
                    textResult.innerHTML = result.toString();
                    typeResult.innerHTML = 'Fracasso';
                    break;
                } else if(result == 1){
                    textResult.innerHTML = result.toString();
                    typeResult.innerHTML = 'Falha Crítica';
                    break; 
                }
            case 3:
                result = Math.floor(Math.random() * (20 - 1 + 1) + 1);
                if(result == 20){
                    textResult.innerHTML = result.toString();
                    typeResult.innerHTML = 'Sucesso Bom';
                    break;
                } else if(result >= 18 && result <= 19){
                    textResult.innerHTML = result.toString();
                    typeResult.innerHTML = 'Sucesso Normal';
                    break;
                } else if(result >= 2 && result < 17){
                    textResult.innerHTML = result.toString();
                    typeResult.innerHTML = 'Fracasso';
                    break;
                } else if(result == 1){
                    textResult.innerHTML = result.toString();
                    typeResult.innerHTML = 'Falha Crítica';
                    break; 
                }
            case 4:
                result = Math.floor(Math.random() * (20 - 1 + 1) + 1);
                if(result == 20){
                    textResult.innerHTML = result.toString();
                    typeResult.innerHTML = 'Sucesso Extremo';
                    break;
                } else if(result == 19){
                    textResult.innerHTML = result.toString();
                    typeResult.innerHTML = 'Sucesso Bom';
                    break;
                } else if(result >= 17 && result <= 18){
                    textResult.innerHTML = result.toString();
                    typeResult.innerHTML = 'Sucesso Normal';
                    break;
                } else if(result >= 2 && result < 17){
                    textResult.innerHTML = result.toString();
                    typeResult.innerHTML = 'Fracasso';
                    break;
                } else if(result == 1){
                    textResult.innerHTML = result.toString();
                    typeResult.innerHTML = 'Falha Crítica';
                    break; 
                }
            case 5:
                result = Math.floor(Math.random() * (20 - 1 + 1) + 1);
                if(result == 20){
                    textResult.innerHTML = result.toString();
                    typeResult.innerHTML = 'Sucesso Extremo';
                    break;
                } else if(result == 19){
                    textResult.innerHTML = result.toString();
                    typeResult.innerHTML = 'Sucesso Bom';
                    break;
                } else if(result >= 16 && result <= 18){
                    textResult.innerHTML = result.toString();
                    typeResult.innerHTML = 'Sucesso Normal';
                    break;
                } else if(result >= 2 && result < 16){
                    textResult.innerHTML = result.toString();
                    typeResult.innerHTML = 'Fracasso';
                    break;
                } else if(result == 1){
                    textResult.innerHTML = result.toString();
                    typeResult.innerHTML = 'Falha Crítica';
                    break; 
                }
            case 6:
                result = Math.floor(Math.random() * (20 - 1 + 1) + 1);
                if(result == 20){
                    textResult.innerHTML = result.toString();
                    typeResult.innerHTML = 'Sucesso Extremo';
                    break;
                } else if(result == 19){
                    textResult.innerHTML = result.toString();
                    typeResult.innerHTML = 'Sucesso Bom';
                    break;
                } else if(result >= 15 && result <= 18){
                    textResult.innerHTML = result.toString();
                    typeResult.innerHTML = 'Sucesso Normal';
                    break;
                } else if(result >= 2 && result < 15){
                    textResult.innerHTML = result.toString();
                    typeResult.innerHTML = 'Fracasso';
                    break;
                } else if(result == 1){
                    textResult.innerHTML = result.toString();
                    typeResult.innerHTML = 'Falha Crítica';
                    break; 
                }
            case 7:
                result = Math.floor(Math.random() * (20 - 1 + 1) + 1);
                if(result == 20){
                    textResult.innerHTML = result.toString();
                    typeResult.innerHTML = 'Sucesso Extremo';
                    break;
                } else if(result == 19){
                    textResult.innerHTML = result.toString();
                    typeResult.innerHTML = 'Sucesso Bom';
                    break;
                } else if(result >= 14 && result <= 18){
                    textResult.innerHTML = result.toString();
                    typeResult.innerHTML = 'Sucesso Normal';
                    break;
                } else if(result >= 2 && result < 14){
                    textResult.innerHTML = result.toString();
                    typeResult.innerHTML = 'Fracasso';
                    break;
                } else if(result == 1){
                    textResult.innerHTML = result.toString();
                    typeResult.innerHTML = 'Falha Crítica';
                    break; 
                }
            case 8:
                result = Math.floor(Math.random() * (20 - 1 + 1) + 1);
                if(result == 20){
                    textResult.innerHTML = result.toString();
                    typeResult.innerHTML = 'Sucesso Extremo';
                    break;
                } else if(result == 19){
                    textResult.innerHTML = result.toString();
                    typeResult.innerHTML = 'Sucesso Bom';
                    break;
                } else if(result >= 13 && result <= 18){
                    textResult.innerHTML = result.toString();
                    typeResult.innerHTML = 'Sucesso Normal';
                    break;
                } else if(result >= 2 && result < 13){
                    textResult.innerHTML = result.toString();
                    typeResult.innerHTML = 'Fracasso';
                    break;
                } else if(result == 1){
                    textResult.innerHTML = result.toString();
                    typeResult.innerHTML = 'Falha Crítica';
                    break; 
                }
            case 9:
                result = Math.floor(Math.random() * (20 - 1 + 1) + 1);
                if(result == 20){
                    textResult.innerHTML = result.toString();
                    typeResult.innerHTML = 'Sucesso Extremo';
                    break;
                } else if(result >= 17 && result <= 19){
                    textResult.innerHTML = result.toString();
                    typeResult.innerHTML = 'Sucesso Bom';
                    break;
                } else if(result >= 12 && result < 17){
                    textResult.innerHTML = result.toString();
                    typeResult.innerHTML = 'Sucesso Normal';
                    break;
                } else if(result >= 2 && result < 12){
                    textResult.innerHTML = result.toString();
                    typeResult.innerHTML = 'Fracasso';
                    break;
                } else if(result == 1){
                    textResult.innerHTML = result.toString();
                    typeResult.innerHTML = 'Falha Crítica';
                    break; 
                }
            case 10:
                result = Math.floor(Math.random() * (20 - 1 + 1) + 1);
                if(result >= 19 && result <= 20){
                    textResult.innerHTML = result.toString();
                    typeResult.innerHTML = 'Sucesso Extremo';
                    break;
                } else if(result >= 16 && result <= 18){
                    textResult.innerHTML = result.toString();
                    typeResult.innerHTML = 'Sucesso Bom';
                    break;
                } else if(result >= 11 && result < 16){
                    textResult.innerHTML = result.toString();
                    typeResult.innerHTML = 'Sucesso Normal';
                    break;
                } else if(result >= 2 && result < 11){
                    textResult.innerHTML = result.toString();
                    typeResult.innerHTML = 'Fracasso';
                    break;
                } else if(result == 1){
                    textResult.innerHTML = result.toString();
                    typeResult.innerHTML = 'Falha Crítica';
                    break; 
                }
            case 11:
                result = Math.floor(Math.random() * (20 - 1 + 1) + 1);
                if(result >= 19 && result <= 20){
                    textResult.innerHTML = result.toString();
                    typeResult.innerHTML = 'Sucesso Extremo';
                    break;
                } else if(result >= 16 && result <= 18){
                    textResult.innerHTML = result.toString();
                    typeResult.innerHTML = 'Sucesso Bom';
                    break;
                } else if(result >= 10 && result < 16){
                    textResult.innerHTML = result.toString();
                    typeResult.innerHTML = 'Sucesso Normal';
                    break;
                } else if(result >= 2 && result < 10){
                    textResult.innerHTML = result.toString();
                    typeResult.innerHTML = 'Fracasso';
                    break;
                } else if(result == 1){
                    textResult.innerHTML = result.toString();
                    typeResult.innerHTML = 'Falha Crítica';
                    break; 
                }
            case 12:
                result = Math.floor(Math.random() * (20 - 1 + 1) + 1);
                if(result >= 19 && result <= 20){
                    textResult.innerHTML = result.toString();
                    typeResult.innerHTML = 'Sucesso Extremo';
                    break;
                } else if(result >= 15 && result <= 18){
                    textResult.innerHTML = result.toString();
                    typeResult.innerHTML = 'Sucesso Bom';
                    break;
                } else if(result >= 9 && result < 15){
                    textResult.innerHTML = result.toString();
                    typeResult.innerHTML = 'Sucesso Normal';
                    break;
                } else if(result >= 2 && result < 9){
                    textResult.innerHTML = result.toString();
                    typeResult.innerHTML = 'Fracasso';
                    break;
                } else if(result == 1){
                    textResult.innerHTML = result.toString();
                    typeResult.innerHTML = 'Falha Crítica';
                    break; 
                }
            case 13:
                result = Math.floor(Math.random() * (20 - 1 + 1) + 1);
                if(result >= 19 && result <= 20){
                    textResult.innerHTML = result.toString();
                    typeResult.innerHTML = 'Sucesso Extremo';
                    break;
                } else if(result >= 15 && result <= 18){
                    textResult.innerHTML = result.toString();
                    typeResult.innerHTML = 'Sucesso Bom';
                    break;
                } else if(result >= 8 && result < 15){
                    textResult.innerHTML = result.toString();
                    typeResult.innerHTML = 'Sucesso Normal';
                    break;
                } else if(result >= 2 && result < 8){
                    textResult.innerHTML = result.toString();
                    typeResult.innerHTML = 'Fracasso';
                    break;
                } else if(result == 1){
                    textResult.innerHTML = result.toString();
                    typeResult.innerHTML = 'Falha Crítica';
                    break; 
                }
            case 14:
                result = Math.floor(Math.random() * (20 - 1 + 1) + 1);
                if(result >= 19 && result <= 20){
                    textResult.innerHTML = result.toString();
                    typeResult.innerHTML = 'Sucesso Extremo';
                    break;
                } else if(result >= 14 && result <= 18){
                    textResult.innerHTML = result.toString();
                    typeResult.innerHTML = 'Sucesso Bom';
                    break;
                } else if(result >= 7 && result < 14){
                    textResult.innerHTML = result.toString();
                    typeResult.innerHTML = 'Sucesso Normal';
                    break;
                } else if(result >= 2 && result < 7){
                    textResult.innerHTML = result.toString();
                    typeResult.innerHTML = 'Fracasso';
                    break;
                } else if(result == 1){
                    textResult.innerHTML = result.toString();
                    typeResult.innerHTML = 'Falha Crítica';
                    break; 
                }
            case 15:
                result = Math.floor(Math.random() * (20 - 1 + 1) + 1);
                if(result >= 18 && result <= 20){
                    textResult.innerHTML = result.toString();
                    typeResult.innerHTML = 'Sucesso Extremo';
                    break;
                } else if(result >= 14 && result <= 17){
                    textResult.innerHTML = result.toString();
                    typeResult.innerHTML = 'Sucesso Bom';
                    break;
                } else if(result >= 6 && result < 14){
                    textResult.innerHTML = result.toString();
                    typeResult.innerHTML = 'Sucesso Normal';
                    break;
                } else if(result >= 2 && result < 6){
                    textResult.innerHTML = result.toString();
                    typeResult.innerHTML = 'Fracasso';
                    break;
                } else if(result == 1){
                    textResult.innerHTML = result.toString();
                    typeResult.innerHTML = 'Falha Crítica';
                    break; 
                }
            case 16:
                result = Math.floor(Math.random() * (20 - 1 + 1) + 1);
                if(result >= 18 && result <= 20){
                    textResult.innerHTML = result.toString();
                    typeResult.innerHTML = 'Sucesso Extremo';
                    break;
                } else if(result >= 13 && result <= 17){
                    textResult.innerHTML = result.toString();
                    typeResult.innerHTML = 'Sucesso Bom';
                    break;
                } else if(result >= 5 && result < 13){
                    textResult.innerHTML = result.toString();
                    typeResult.innerHTML = 'Sucesso Normal';
                    break;
                } else if(result >= 2 && result < 5){
                    textResult.innerHTML = result.toString();
                    typeResult.innerHTML = 'Fracasso';
                    break;
                } else if(result == 1){
                    textResult.innerHTML = result.toString();
                    typeResult.innerHTML = 'Falha Crítica';
                    break; 
                }
            case 17:
                result = Math.floor(Math.random() * (20 - 1 + 1) + 1);
                if(result >= 18 && result <= 20){
                    textResult.innerHTML = result.toString();
                    typeResult.innerHTML = 'Sucesso Extremo';
                    break;
                } else if(result >= 13 && result <= 17){
                    textResult.innerHTML = result.toString();
                    typeResult.innerHTML = 'Sucesso Bom';
                    break;
                } else if(result >= 4 && result < 13){
                    textResult.innerHTML = result.toString();
                    typeResult.innerHTML = 'Sucesso Normal';
                    break;
                } else if(result >= 2 && result < 4){
                    textResult.innerHTML = result.toString();
                    typeResult.innerHTML = 'Fracasso';
                    break;
                } else if(result == 1){
                    textResult.innerHTML = result.toString();
                    typeResult.innerHTML = 'Falha Crítica';
                    break; 
                }
            case 18:
                result = Math.floor(Math.random() * (20 - 1 + 1) + 1);
                if(result >= 18 && result <= 20){
                    textResult.innerHTML = result.toString();
                    typeResult.innerHTML = 'Sucesso Extremo';
                    break;
                } else if(result >= 12 && result <= 17){
                    textResult.innerHTML = result.toString();
                    typeResult.innerHTML = 'Sucesso Bom';
                    break;
                } else if(result >= 3 && result < 12){
                    textResult.innerHTML = result.toString();
                    typeResult.innerHTML = 'Sucesso Normal';
                    break;
                } else if(result >= 2 && result < 3){
                    textResult.innerHTML = result.toString();
                    typeResult.innerHTML = 'Fracasso';
                    break;
                } else if(result == 1){
                    textResult.innerHTML = result.toString();
                    typeResult.innerHTML = 'Falha Crítica';
                    break; 
                }
            case 19:
                result = Math.floor(Math.random() * (20 - 1 + 1) + 1);
                if(result >= 18 && result <= 20){
                    textResult.innerHTML = result.toString();
                    typeResult.innerHTML = 'Sucesso Extremo';
                    break;
                } else if(result >= 12 && result <= 17){
                    textResult.innerHTML = result.toString();
                    typeResult.innerHTML = 'Sucesso Bom';
                    break;
                } else if(result >= 2 && result < 12){
                    textResult.innerHTML = result.toString();
                    typeResult.innerHTML = 'Sucesso Normal';
                    break;
                } else if(result == 1){
                    textResult.innerHTML = result.toString();
                    typeResult.innerHTML = 'Fracasso';
                    break; 
                }
            case 20:
                result = Math.floor(Math.random() * (20 - 1 + 1) + 1);
                if(result >= 18 && result <= 20){
                    textResult.innerHTML = result.toString();
                    typeResult.innerHTML = 'Sucesso Extremo';
                    break;
                } else if(result >= 11 && result <= 17){
                    textResult.innerHTML = result.toString();
                    typeResult.innerHTML = 'Sucesso Bom';
                    break;
                } else if(result >= 1 && result < 11){
                    textResult.innerHTML = result.toString();
                    typeResult.innerHTML = 'Sucesso Normal';
                    break;
                }
            default:
                alert("Atributo com valor 0");

        }
    }
}

function rollSanityDice(){
    var modalOpen = $('#sanityDiceModal').hasClass('in');
    if(modalOpen == true){
        var textResult = document.getElementById('1d20sanresult');
        var typeResult = document.getElementById('1d20santyperesult');

        var result = Math.floor(Math.random() * (100 - 1 + 1) + 1);
        
        var typeValue = parseInt(document.getElementById('sanitybar').dataset.value);
        if(result > typeValue){
            textResult.innerHTML = result.toString();
            typeResult.innerHTML = 'Sucesso';
        } else if(result <= typeValue){
            textResult.innerHTML = result.toString();
            typeResult.innerHTML = 'Fracasso';
        }
    } 
}

//atributo section

function handleEditAtributo() {
    document.getElementById('saveAtributoOption').style.visibility = "visible";
    document.getElementById('editAtributoOption').style.visibility = "hidden";

    document.getElementById('apparence').disabled = false;
    document.getElementById('constitution').disabled = false;
    document.getElementById('dexterity').disabled = false;
    document.getElementById('education').disabled = false;

    document.getElementById('force').disabled = false;
    document.getElementById('intelligence').disabled = false;
    document.getElementById('power').disabled = false;
    document.getElementById('luck').disabled = false;

    document.getElementById('moviment').disabled = false;
    document.getElementById('size').disabled = false;

    return false;
}

function handleSaveAtributo() {
    document.getElementById('saveAtributoOption').style.visibility = "hidden";
    document.getElementById('editAtributoOption').style.visibility = "visible";

    document.getElementById('apparence').disabled = true;
    document.getElementById('constitution').disabled = true;
    document.getElementById('dexterity').disabled = true;
    document.getElementById('education').disabled = true;

    document.getElementById('force').disabled = true;
    document.getElementById('intelligence').disabled = true;
    document.getElementById('power').disabled = true;
    document.getElementById('luck').disabled = true;

    document.getElementById('moviment').disabled = true;
    document.getElementById('size').disabled = true;

    return true;
}

//pericia section
function handleEditPericias() {
    document.getElementById('savePericiasOption').style.visibility = "visible";
    document.getElementById('editPericiasOption').style.visibility = "hidden";

    document.getElementById('antropologia').disabled = false;
    document.getElementById('arco').disabled = false;
    document.getElementById('pistola').disabled = false;
    document.getElementById('rifle').disabled = false;

    document.getElementById('arqueologia').disabled = false;
    document.getElementById('arremessar').disabled = false;
    document.getElementById('arte').disabled = false;
    document.getElementById('avaliacao').disabled = false;

    document.getElementById('charme').disabled = false;
    document.getElementById('chaveiro').disabled = false;

    document.getElementById('ciencia').disabled = false;
    document.getElementById('eletrica').disabled = false;
    document.getElementById('mecanico').disabled = false;
    document.getElementById('contabilidade').disabled = false;

    document.getElementById('direito').disabled = false;
    document.getElementById('auto').disabled = false;
    document.getElementById('disfarce').disabled = false;
    document.getElementById('eletronica').disabled = false;

    document.getElementById('encontrar').disabled = false;
    document.getElementById('escalar').disabled = false;

    document.getElementById('escutar').disabled = false;
    document.getElementById('esquivar').disabled = false;
    document.getElementById('furtividade').disabled = false;
    document.getElementById('historia').disabled = false;

    document.getElementById('intimidacao').disabled = false;
    document.getElementById('labia').disabled = false;
    document.getElementById('natural').disabled = false;
    document.getElementById('outra').disabled = false;

    document.getElementById('lutar').disabled = false;
    document.getElementById('medicina').disabled = false;

    document.getElementById('mundonatural').disabled = false;
    document.getElementById('natacao').disabled = false;
    document.getElementById('navegacao').disabled = false;
    document.getElementById('credito').disabled = false;

    document.getElementById('ocultismo').disabled = false;
    document.getElementById('maquinario').disabled = false;
    document.getElementById('persuasao').disabled = false;
    document.getElementById('pilotar').disabled = false;

    document.getElementById('prestidigitacao').disabled = false;
    document.getElementById('socorros').disabled = false;

    document.getElementById('psicanalise').disabled = false;
    document.getElementById('psicologia').disabled = false;
    document.getElementById('rastrear').disabled = false;
    document.getElementById('saltar').disabled = false;

    document.getElementById('seduzir').disabled = false;
    document.getElementById('sobrevivencia').disabled = false;
    document.getElementById('biblioteca').disabled = false;
    document.getElementById('computador').disabled = false;

    return false;
}

function handleSavePericias() {
    document.getElementById('savePericiasOption').style.visibility = "hidden";
    document.getElementById('editPericiasOption').style.visibility = "visible";

    document.getElementById('antropologia').disabled = true;
    document.getElementById('arco').disabled = true;
    document.getElementById('pistola').disabled = true;
    document.getElementById('rifle').disabled = true;

    document.getElementById('arqueologia').disabled = true;
    document.getElementById('arremessar').disabled = true;
    document.getElementById('arte').disabled = true;
    document.getElementById('avaliacao').disabled = true;

    document.getElementById('charme').disabled = true;
    document.getElementById('chaveiro').disabled = true;

    document.getElementById('ciencia').disabled = true;
    document.getElementById('eletrica').disabled = true;
    document.getElementById('mecanico').disabled = true;
    document.getElementById('contabilidade').disabled = true;

    document.getElementById('direito').disabled = true;
    document.getElementById('auto').disabled = true;
    document.getElementById('disfarce').disabled = true;
    document.getElementById('eletronica').disabled = true;

    document.getElementById('encontrar').disabled = true;
    document.getElementById('escalar').disabled = true;

    document.getElementById('escutar').disabled = true;
    document.getElementById('esquivar').disabled = true;
    document.getElementById('furtividade').disabled = true;
    document.getElementById('historia').disabled = true;

    document.getElementById('intimidacao').disabled = true;
    document.getElementById('labia').disabled = true;
    document.getElementById('natural').disabled = true;
    document.getElementById('outra').disabled = true;

    document.getElementById('lutar').disabled = true;
    document.getElementById('medicina').disabled = true;

    document.getElementById('mundonatural').disabled = true;
    document.getElementById('natacao').disabled = true;
    document.getElementById('navegacao').disabled = true;
    document.getElementById('credito').disabled = true;

    document.getElementById('ocultismo').disabled = true;
    document.getElementById('maquinario').disabled = true;
    document.getElementById('persuasao').disabled = true;
    document.getElementById('pilotar').disabled = true;

    document.getElementById('prestidigitacao').disabled = true;
    document.getElementById('socorros').disabled = true;

    document.getElementById('psicanalise').disabled = true;
    document.getElementById('psicologia').disabled = true;
    document.getElementById('rastrear').disabled = true;
    document.getElementById('saltar').disabled = true;

    document.getElementById('seduzir').disabled = true;
    document.getElementById('sobrevivencia').disabled = true;
    document.getElementById('biblioteca').disabled = true;
    document.getElementById('computador').disabled = true;

    return true;
}

//Combat section

var arrHead = new Array();
arrHead = ['', 'Nome', 'Tipo', 'Dano', 'MunAtual', 'MunMáxima', 'Ataque', 'Alcance', 'Defeito', 'Área'];

function removeRow(btn) {
    var row = btn.parentNode.parentNode;
    row.parentNode.removeChild(row);
}

var combatCount = 0;
function addRow() {
    var empTab = document.getElementById('combatTable');

    var rowCnt = empTab.rows.length;    // get the number of rows.
    var tr = empTab.insertRow(rowCnt); // table row.
    tr = empTab.insertRow(rowCnt);

    for (var c = 0; c < arrHead.length; c++) {
        var td = document.createElement('td');          // TABLE DEFINITION.
        td = tr.insertCell(c);

        if (c == 0) {   // if its the first column of the table.
            // add a button control.
            var button = document.createElement('i');

            // set the attributes.
            button.setAttribute('id', 'removeOption');
            button.setAttribute('class', 'fas fa-trash');

            // add button's "onclick" event.
            button.setAttribute('onclick', 'removeRow(this)');

            td.appendChild(button);
        }
        else if (c == 2) {
            // the 2nd, 3rd and 4th column, will have textbox.
            var array = ["","Arco","Lutar"];
            
            var ele = document.createElement('select');
            ele.setAttribute('type', 'text');
            ele.setAttribute('id', 'combat'+arrHead[c]+combatCount);
            ele.setAttribute('name', 'combat'+arrHead[c]+combatCount);
            ele.setAttribute('style', 'text-align-last: center; width: 90px;');

            td.appendChild(ele);

            //Create and append the options
            for (var i = 0; i < array.length; i++) {
                var option = document.createElement("option");
                option.value = array[i];
                option.text = array[i];
                ele.appendChild(option);
            }

        }
        else {
            // the 2nd, 3rd and 4th column, will have textbox.
            var ele = document.createElement('input');
            ele.setAttribute('class', 'input-style');
            ele.setAttribute('type', 'text');
            ele.setAttribute('id', 'combat'+arrHead[c]+combatCount);
            ele.setAttribute('name', 'combat'+arrHead[c]+combatCount);
            ele.setAttribute('style', 'text-align-last: center; width: 90px;');

            td.appendChild(ele);
        }
    }
}

//Item section
var arrItemHead = new Array();
arrItemHead = ['', 'Nome', 'Tipo', 'Peso'];

function pesoItens(peso) {
    for (var i = 0; i < arrItemHead.length; i++) {
        var pesoItem = document.getElementById('pesoItem'+i).value;
        peso.value = pesoItem + 0;
        pesoItem.innerHTML = peso.value; 
    }
}

function removeItem(btn) {
    var row = btn.parentNode.parentNode;
    row.parentNode.removeChild(row);
}

var itemCount = 0;
function addItem() {   
    var empTab = document.getElementById('itemTable');

    var rowCnt = empTab.rows.length;    // get the number of rows.
    var tr = empTab.insertRow(rowCnt); // table row.
    tr = empTab.insertRow(rowCnt);

    for (var c = 0; c < arrItemHead.length; c++) {
        var td = document.createElement('td');          // TABLE DEFINITION.
        td = tr.insertCell(c);

        if (c == 0) {   // if its the first column of the table.
            // add a button control.
            var button = document.createElement('i');

            // set the attributes.
            button.setAttribute('id', 'removeOption');
            button.setAttribute('class', 'fas fa-trash');

            // add button's "onclick" event.
            button.setAttribute('onclick', 'removeItem(this)');

            td.appendChild(button);
        }
        else {
            var ele = document.createElement('input');
            ele.setAttribute('class', 'input-style');
            ele.setAttribute('type', 'text');
            ele.setAttribute('id', 'item'+arrItemHead[c]+itemCount);
            ele.setAttribute('name', 'item'+arrItemHead[c]+itemCount);
            ele.setAttribute('style', 'text-align-last: center; width: 100%;');

            td.appendChild(ele);
        }
    }
    itemCount++;
}

var arrRitualHead = new Array();
arrRitualHead = ['', 'Nome', 'Elemento', 'Conjuração', 'Efeito', 'Custo'];

function removeRitual(btn) {
    var row = btn.parentNode.parentNode;
    row.parentNode.removeChild(row);
}

var ritualCount = 0;
function addRitual() {
    var empTab = document.getElementById('ritualTable');

    var rowCnt = empTab.rows.length;    // get the number of rows.
    var tr = empTab.insertRow(rowCnt); // table row.
    tr = empTab.insertRow(rowCnt);

    for (var c = 0; c < arrRitualHead.length; c++) {
        var td = document.createElement('td');          // TABLE DEFINITION.
        td = tr.insertCell(c);

        if (c == 0) {   // if its the first column of the table.
            // add a button control.
            var button = document.createElement('i');

            // set the attributes.
            button.setAttribute('id', 'removeOption');
            button.setAttribute('class', 'fas fa-trash');

            // add button's "onclick" event.
            button.setAttribute('onclick', 'removeRitual(this)');

            td.appendChild(button);
        }
        else {
            // the 2nd, 3rd and 4th column, will have textbox.
            var ele = document.createElement('input');
            ele.setAttribute('class', 'input-style');
            ele.setAttribute('type', 'text');
            ele.setAttribute('id', 'ritual'+arrRitualHead[c]+ritualCount);
            ele.setAttribute('name', 'ritual'+arrRitualHead[c]+ritualCount);
            ele.setAttribute('style', 'text-align-last: center; width: 100%;');

            td.appendChild(ele);
        }
    }
    ritualCount++;
}

