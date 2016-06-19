<!-- Capital Field -->
<div class="form-group col-sm-6">
    {!! Form::label('capital', 'Capital:') !!}
    {!! Form::text('capital', null, ['class' => 'form-control']) !!}
</div>

<!-- Citizenship Field -->
<div class="form-group col-sm-6">
    {!! Form::label('citizenship', 'Citizenship:') !!}
    {!! Form::text('citizenship', null, ['class' => 'form-control']) !!}
</div>

<!-- Country Code Field -->
<div class="form-group col-sm-6">
    {!! Form::label('country_code', 'Country Code:') !!}
    {!! Form::text('country_code', null, ['class' => 'form-control']) !!}
</div>

<!-- Currency Field -->
<div class="form-group col-sm-6">
    {!! Form::label('currency', 'Currency:') !!}
    {!! Form::text('currency', null, ['class' => 'form-control']) !!}
</div>

<!-- Currency Code Field -->
<div class="form-group col-sm-6">
    {!! Form::label('currency_code', 'Currency Code:') !!}
    {!! Form::text('currency_code', null, ['class' => 'form-control']) !!}
</div>

<!-- Currency Sub Unit Field -->
<div class="form-group col-sm-6">
    {!! Form::label('currency_sub_unit', 'Currency Sub Unit:') !!}
    {!! Form::text('currency_sub_unit', null, ['class' => 'form-control']) !!}
</div>

<!-- Currency Symbol Field -->
<div class="form-group col-sm-6">
    {!! Form::label('currency_symbol', 'Currency Symbol:') !!}
    {!! Form::text('currency_symbol', null, ['class' => 'form-control']) !!}
</div>

<!-- Full Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('full_name', 'Full Name:') !!}
    {!! Form::text('full_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Iso 3166 2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('iso_3166_2', 'Iso 3166 2:') !!}
    {!! Form::text('iso_3166_2', null, ['class' => 'form-control']) !!}
</div>

<!-- Iso 3166 3 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('iso_3166_3', 'Iso 3166 3:') !!}
    {!! Form::text('iso_3166_3', null, ['class' => 'form-control']) !!}
</div>

<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Region Code Field -->
<div class="form-group col-sm-6">
    {!! Form::label('region_code', 'Region Code:') !!}
    {!! Form::text('region_code', null, ['class' => 'form-control']) !!}
</div>

<!-- Sub Region Code Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sub_region_code', 'Sub Region Code:') !!}
    {!! Form::text('sub_region_code', null, ['class' => 'form-control']) !!}
</div>

<!-- 'Boolean FIELD_NAME_TITLE$ Field' checked by default -->
<div class="form-group col-sm-6">
    {!! Form::label('eea', 'Eea:') !!}
    <label class="checkbox-inline">
        @if(isset($country->eea))
            {!! Form::checkbox('eea', 1, $country->eea) !!}
        @else
            {!! Form::checkbox('eea', 1, false) !!}
        @endif
    <!-- remove {, true} to make it unchecked by default -->
    </label>
</div>


<!-- Calling Code Field -->
<div class="form-group col-sm-6">
    {!! Form::label('calling_code', 'Calling Code:') !!}
    {!! Form::text('calling_code', null, ['class' => 'form-control']) !!}
</div>

<!-- Flag Field -->
<div class="form-group col-sm-6">
    {!! Form::label('flag', 'Flag:') !!}
    {!! Form::text('flag', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('countries.index') !!}" class="btn btn-default">Cancel</a>
</div>
