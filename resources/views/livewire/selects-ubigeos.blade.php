<div>
    <div class="row">
        <div class="col-lg-4">
            <div class="form-group mg-b-10-force">
                <label class="form-control-label">Departamento: <span class="tx-danger">*</span></label>
                <select class="form-control" wire:model="dpt_id" data-placeholder="Seleccione Departamento" wive:click="LlenaPrincias()">
                    <option value="0" selected  label="Seleccione Departamento"></option>
                    @foreach($departamentos as $dpt)
                        <option value="{{$dpt->code}}" wive:click="LlenaPrincias()">{{$dpt->nombres}}</option>
                    @endforeach
                </select>
            </div>
        </div><!-- col-3 -->
        <div class="col-lg-4">
            <div class="form-group mg-b-10-force">
                <label class="form-control-label">Provincia: <span class="tx-danger">*</span></label>
                <select class="form-control" wire:model="prov_id" data-placeholder="Seleccione provincia">
                    <option value="0" selected label="Seleccione provincia"></option>
                    @foreach($provincias as $prod)
                        <option value="{{$prod->code}}">{{$prod->nombres}}</option>
                    @endforeach
                </select>
            </div>
        </div><!-- col-3 -->
        <div class="col-lg-4">
            <div class="form-group mg-b-10-force">
                <label class="form-control-label">Distrito: <span class="tx-danger">*</span></label>
                <select class="form-control" wire:model="dist_id" data-placeholder="Seleccione distrito">
                    <option value="0" selected  label="Seleccione distrito"></option>
                    @foreach($distritos as $dist)
                        <option value="{{$dist->code}}">{{$dist->nombres}}</option>
                    @endforeach
                </select>
            </div>
        </div><!-- col-3 -->
        </div>
</div>
