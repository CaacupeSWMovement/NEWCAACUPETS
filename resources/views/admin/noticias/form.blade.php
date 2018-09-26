<div id="pay-invoice">
    <div class="card-body">
        {!! Form::open(['url' => $url, 'method' => $method, 'enctype' => 'multipart/form-data', 'autocomplete'=>'off','files'=>'true']) !!}
        {{Form::token()}}
            <div class="form-group">
                <label for="cc-payment" class="control-label mb-1">Titulo de la Noticia</label>
                <input name="not_titulo" placeholder="Titulo de la noticia" id="cc-pament" name="cc-payment" type="text" class="form-control" aria-required="true" aria-invalid="false">
            </div>
            <div class="form-group has-success">
                <label for="cc-name" class="control-label mb-1">Sub Titulo de la noticia</label>
                <input name="not_sub_titulo" placeholder="Sub Titulo de la noticia" id="cc-name" name="cc-name" type="text" class="form-control cc-name valid" data-val="true" data-val-required="Please enter the name on card" autocomplete="cc-name" aria-required="true" aria-invalid="false" aria-describedby="cc-name-error">
                <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
            </div>
            <div class="form-group">
                <label for="cc-number" class="control-label mb-1">Imagen de la noticia</label>
                <input name="not_imagen" placeholder="imagen" id="cc-number" name="cc-number" type="file" class="form-control cc-number identified visa" value="" data-val="true" data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number" autocomplete="cc-number">
                <span class="help-block" data-valmsg-for="cc-number" data-valmsg-replace="true"></span>
            </div>
            <div class="form-group">
                <label for="cc-number" class="control-label mb-1">Contenido de la noticia</label>
                <textarea id="redactor" name="not_contenido" placeholder="contenido de la noticia" id="cc-number" name="cc-number" type="text" class="form-control cc-number identified visa" value="" data-val="true" data-val-required="Please enter the card number" data-val-cc-number="Please enter a valid card number" autocomplete="cc-number"></textarea>
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