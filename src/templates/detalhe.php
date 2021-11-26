<div class="col-sm-4">
    <form id="formDetalhe" action="../static/php/"  method="POST" style="border:1px solid dimgray; padding: inherit;">
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
        <input type="submit" value="Salvar">
    </form>
</div>