function addRow() {
    var rowIdx = 0;
        // Adding a row inside the tbody.
        $('#combatTable').append(`
        <tr id="R${++rowIdx}">
            <td>
                <input class="input-style" type="text" id="combatArma${++rowIdx}" name="combatArma${++rowIdx}" style="text-align-last: center; width: 90px;">
            </td>
            <td>
                <input class="input-style" type="text" id="combatDano${++rowIdx}" name="combatDano${++rowIdx}" style="text-align-last: center; width: 90px;">
            </td>
            <td>
                <input class="input-style" type="text" id="combatAtaque${++rowIdx}" name="combatAtaque${++rowIdx}" style="text-align-last: center; width: 90px;">
            </td>
            <td>
                <input class="input-style" type="text" id="combatMunicao${++rowIdx}" name="combatMunicao${++rowIdx}" style="text-align-last: center; width: 90px;">
            </td>
            <td>
                <input class="input-style" type="text" id="combatDefeito${++rowIdx}" name="combatDefeito${++rowIdx}" style="text-align-last: center; width: 90px;">
            </td>
            <td>
                <i id="editRemove${++rowIdx}" class="fas fa-minus-circle remove" style="border:2px solid white" onclick="removeRow()"></i>
            </td>                                                
        </tr>`);
}

function removeRow() {
    // jQuery button click event to remove a row
    $('#combatTable').on('click', '.remove', function () {
    
        // Getting all the rows next to the 
        // row containing the clicked button
        var child = $(this).closest('tr').nextAll();
    
        // Iterating across all the rows 
        // obtained to change the index
        child.each(function () {
            
            // Getting <tr> id.
            var id = $(this).attr('id');
    
            // Getting the <p> inside the .row-index class.
            var idx = $(this).children('.row-index').children('p');
    
            // Gets the row number from <tr> id.
            var dig = parseInt(id.substring(1));
    
            // Modifying row index.
            idx.html(`Row ${dig - 1}`);
    
            // Modifying row id.
            $(this).attr('id', `R${dig - 1}`);
        });
    
        // Removing the current row.
        $(this).closest('tr').remove();
    
        // Decreasing the total number of rows by 1.
        rowIdx--;
    });
}

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

function rollDice(){
    var modalOpen = $('#diceModal').hasClass('in');
    if(modalOpen == true){
        var textResult = document.getElementById('1d20result');
        var typeResult = document.getElementById('1d20typeresult');
        var result = Math.floor(Math.random() * (20 - 1 + 1) + 1)
        textResult.innerHTML = result.toString();
        if(result > 1 && result <= 19) {
            typeResult.innerHTML = 'Sucesso Normal';
        } else if(result == 20) {
            typeResult.innerHTML = 'Sucesso Extremo';
        } else {
            typeResult.innerHTML = 'Fracasso';
        }
    }
}