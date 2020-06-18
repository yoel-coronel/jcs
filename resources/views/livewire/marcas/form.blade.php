<form class="form-layout" wire:submit.prevent="store">
    <div class="row mg-b-25">
        <div class="col-lg-4">
            <div class="form-group">
                <label class="form-control-label">Razón Social: <span class="tx-danger">*</span></label>
                <input class="form-control @error('brand_name') is-invalid @enderror"
                       type="text"
                       wire:model="brand_name"
                        required
                       autocomplete="brand_name" autofocus
                       placeholder="Aquí razón social">
                @error('brand_name')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div><!-- col-4 -->
        <div class="col-lg-4">
            <div class="form-group">
                <label class="form-control-label">RUC/DOI: <span class="tx-danger">*</span></label>
                <input class="form-control @error('brand_code') is-invalid @enderror "
                       type="text"
                       name="lastname"
                       wire:model="brand_code"
                        required
                       autocomplete="brand_code"
                       placeholder="Aquí RUC/DOI">
                @error('brand_code')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div><!-- col-4 -->
        <div class="col-lg-4">
            <div class="form-group">
                <label class="form-control-label">Teléfono: <span class="tx-danger">*</span></label>
                <input class="form-control @error('brand_telefono') is-invalid @enderror"
                       type="text"
                       name="text"
                       wire:model="brand_telefono"
                       autocomplete="brand_telefono"
                       placeholder="Aquí el número de teléfono">
                @error('brand_telefono')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div><!-- col-4 -->
        <div class="col-lg-6">
            <div class="form-group mg-b-10-force">
                <label class="form-control-label">Dirección: <span class="tx-danger">*</span></label>
                <input class="form-control @error('brand_code_postal') is-invalid @enderror"
                       type="text"
                       name="address"
                       wire:model="brand_address"
                        required
                       autocomplete="brand_address"
                       placeholder="Aquí la dirección">
            </div>
        </div><!-- col-6 -->
        <div class="col-lg-2">
            <div class="form-group mg-b-10-force">
                <label class="form-control-label">Código postal: <span class="tx-danger">*</span></label>
                <input class="form-control" type="text" name="code" value="151946" placeholder="Aquí código">
            </div>
        </div><!-- col-2 -->
        <div class="col-lg-4">
            <div class="form-group mg-b-10-force">
                <label class="form-control-label">Sitio Web: <span class="tx-danger">*</span></label>
                <input class="form-control" type="text" name="code" value="151946" placeholder="Aquí sitio web">
            </div>
        </div><!-- col-4 -->
        <div class="col-lg-3">
            <div class="form-group mg-b-10-force">
                <label class="form-control-label">Email: <span class="tx-danger">*</span></label>
                <input class="form-control" type="email" name="email" value="yoe.coar@gmail.com" placeholder="Aquí email">
            </div>
        </div><!-- col-4 -->
        <div class="col-lg-9">
             <livewire:selects-ubigeos/>
             @error('brand_ubigeo')
                <span class="invalid-feedback" role="alert" style="display:block;">
                        <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="col-lg-3 mg-t-20 mg-lg-t-0">
            <label class="ckbox">
                <input type="checkbox" checked><span>Activo</span>
            </label>
        </div><!-- col-3 -->
    </div><!-- row -->

    <div class="form-layout-footer">
        <button class="btn btn-info mg-r-5" wire:target="store" wire:loading.attr="disabled" type="submit">Guardar Información</button>
        <button class="btn btn-secondary" type="reset" wire:click="Cancelar" wire:loading.attr="disabled">Cancel</button>

        <div wire:loading wire:target="store">
            Procesando informatión...
        </div>

    </div><!-- form-layout-footer -->
</form><!-- form-layout -->

