<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="data" class="form-label">{{ __('Data') }}</label>
            <input type="date" name="data" class="form-control @error('data') is-invalid @enderror" value="{{ old('data', $diario?->data) }}" id="data" placeholder="Data">
            {!! $errors->first('data', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="abertura" class="form-label">{{ __('Abertura') }}</label>
            <input type="number" name="abertura" class="form-control @error('abertura') is-invalid @enderror" value="{{ old('abertura', $diario?->abertura) }}" id="abertura" placeholder="Abertura">
            {!! $errors->first('abertura', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="max" class="form-label">{{ __('Max') }}</label>
            <input type="number" name="max" class="form-control @error('max') is-invalid @enderror" value="{{ old('max', $diario?->max) }}" id="max" placeholder="Max">
            {!! $errors->first('max', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="min" class="form-label">{{ __('Min') }}</label>
            <input type="number" name="min" class="form-control @error('min') is-invalid @enderror" value="{{ old('min', $diario?->min) }}" id="min" placeholder="Min">
            {!! $errors->first('min', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fechamento" class="form-label">{{ __('Fechamento') }}</label>
            <input type="number" name="fechamento" class="form-control @error('fechamento') is-invalid @enderror" value="{{ old('fechamento', $diario?->fechamento) }}" id="fechamento" placeholder="Fechamento">
            {!! $errors->first('fechamento', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">{{ __('Enviar dados') }}</button>
    </div>
</div>