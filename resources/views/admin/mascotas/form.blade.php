<div id="pay-invoice">
    <div class="card-body">
        {!! Form::open(['url' => $url, 'method' => $method, 'enctype' => 'multipart/form-data', 'autocomplete'=>'off','files'=>'true']) !!}
        {{Form::token()}}
            <div class="form-group">
                <label for="cc-payment" class="control-label mb-1">Nombre</label>
                <input name="mas_nombre" placeholder="nombre de la mascota" id="cc-pament" name="cc-payment" type="text" class="form-control" aria-required="true" aria-invalid="false">
            </div>
            <div class="form-group has-success">
                <label for="cc-name" class="control-label mb-1">Edad</label>
                <input name="mas_edad" placeholder="edad de la mascota" id="cc-name" name="cc-name" type="number" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card" autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
                <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
            </div>
            <div class="form-group">
                <label for="cc-number" class="control-label mb-1">Foto</label>
                <input name="mas_imagen" placeholder="foto de la mascota" id="cc-number" name="cc-number" type="file" class="form-control cc-number identified visa" value="" data-val="true" data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number" autocomplete="cc-number">
                <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Es apto para</label>
                <select name="mas_apto" class="form-control" id="exampleFormControlSelect1">
                  <option>para jugar con criaturas</option>
                  <option>para cuidar la casa</option>
                  <option>otros</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Esta castrado?</label>
                <select name="mas_castrado" class="form-control" id="exampleFormControlSelect1">
                  <option>si</option>
                  <option>no</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Sexo</label>
                <select name="mas_sexo" class="form-control" id="exampleFormControlSelect1">
                  <option>macho</option>
                  <option>hembra</option>
                </select>
            </div>
            <div class="form-group">
                <label for="cc-number" class="control-label mb-1">Descripcion</label>
                <textarea name="mas_descripcion" placeholder="descripcion de la mascota" id="cc-number" name="cc-number" type="text" class="form-control cc-number identified visa" value="" data-val="true" data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number" autocomplete="cc-number"></textarea>
                <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
            </div>
            <div>
                <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                    <i class="fa fa-floppy-o" aria-hidden="true"></i>&nbsp;
                    <span id="payment-button-amount">Agregar</span>
                    <span id="payment-button-sending" style="display:none;">Sending…</span>
                </button>
            </div>
        {!!Form::close()!!}
    </div>
</div>