<form class="form-layout" wire:submit.prevent="store">
    <div class="row mg-b-25">
        <div class="col-lg-4 mg-t-20 mg-lg-t-0">
            <div class="form-group">
                <label class="form-control-label">Nombre Entidad<span class="tx-danger">*</span></label>
                <input class="form-control @error('ent_nombre') is-invalid @enderror"
                       type="text"
                       wire:model="ent_nombre"
                       required
                       autocomplete="ent_secuencia" autofocus
                       placeholder="Aquí nombre entidad">
                @error('ent_nombre')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div><!-- col-4 -->
        <div class="col-lg-4 mg-t-20 mg-lg-t-0">
            <div class="form-group">
                <label class="form-control-label">Criterio: <span class="tx-danger">*</span></label>
                <input class="form-control @error('ent_criterio') is-invalid @enderror "
                       type="text"
                       wire:model="ent_criterio"
                       required
                       autocomplete="ent_criterio"
                       placeholder="Aquí el criterio">
                @error('ent_criterio')
                <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div><!-- col-4 -->
        <div class="col-lg-4 mg-t-20 mg-lg-t-0">
            <label class="ckbox">
                <input type="checkbox" wire:model="ent_estado"><span>Activo</span>
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

