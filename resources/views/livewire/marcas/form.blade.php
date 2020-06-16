<form wire:submit.prevent="store">
    @csrf
    <div class="form-row">
        <div class="col-md-6 mb-3">
            <label for="brand_name">Razón Social</label>
            <input type="text"
                   class="form-control @error('brand_name') is-invalid @enderror"
                   id="brand_name"
                   wire:model="brand_name"

                    autocomplete="brand_name" autofocus>
            @error('brand_name')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="col-md-3 mb-3">
            <label for="brand_code">RUC/DOI</label>
            <input type="text"
                   class="form-control @error('brand_code') is-invalid @enderror"
                   id="brand_code"
                   wire:model="brand_code"

                   autocomplete="brand_code">
            @error('brand_code')
            <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="col-md-3 mb-3">
            <label for="brand_telefono">Teléfono</label>
            <input type="text"
                   class="form-control @error('brand_telefono') is-invalid @enderror"
                   id="brand_telefono"
                   wire:model="brand_telefono"

                   autocomplete="brand_telefono">
            @error('brand_telefono')
            <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="col-md-6 mb-3">
            <label for="brand_address">Dirección</label>
            <input type="text"
                   class="form-control @error('brand_address') is-invalid @enderror"
                   id="brand_address"
                   wire:model="brand_address"

                   autocomplete="brand_address" autofocus>
            @error('brand_address')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="col-md-2 mb-3">
            <label for="brand_code_postal">Código postal</label>
            <input type="text"
                   class="form-control @error('brand_code_postal') is-invalid @enderror"
                   id="brand_code_postal"
                   wire:model="brand_code_postal"

                   autocomplete="brand_code_postal" autofocus>
            @error('brand_code_postal')
            <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="col-md-4 mb-3">
            <label for="brand_web">Sitio Web</label>
            <input type="text"
                   class="form-control @error('brand_web') is-invalid @enderror"
                   id="brand_web"
                   wire:model="brand_web"

                   autocomplete="brand_web" autofocus>
            @error('brand_web')
            <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="form-row">
        <div class="col-md-6 mb-3">
            <label for="validationTooltip03">City</label>
            <input type="text" class="form-control" id="validationTooltip03">
            <div class="invalid-tooltip">
                Please provide a valid city.
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <label for="validationTooltip04">State</label>
            <select class="custom-select" id="validationTooltip04" >
                <option selected disabled value="">Choose...</option>
                <option>...</option>
            </select>
            <div class="invalid-tooltip">
                Please select a valid state.
            </div>
        </div>
        <div class="col-md-3 mb-3">
            <label for="validationTooltip05">Zip</label>
            <input type="text" class="form-control" id="validationTooltip05" >
            <div class="invalid-tooltip">
                Please provide a valid zip.
            </div>
        </div>
    </div>

    <button class="btn btn-primary" type="submit">Submit form</button>
</form>
