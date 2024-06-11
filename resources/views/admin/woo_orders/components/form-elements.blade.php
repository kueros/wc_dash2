<!--div class="form-group row align-items-center" :class="{'has-danger': errors.has('token'), 'has-success': fields.token && fields.token.valid }">
    <label for="token" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.store.columns.token') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.token" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('token'), 'form-control-success': fields.token && fields.token.valid}" id="token" name="token" placeholder="{{ trans('admin.store.columns.token') }}">
        <div v-if="errors.has('token')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('token') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('code'), 'has-success': fields.code && fields.code.valid }">
    <label for="code" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.store.columns.code') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.code" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('code'), 'form-control-success': fields.code && fields.code.valid}" id="code" name="code" placeholder="{{ trans('admin.store.columns.code') }}">
        <div v-if="errors.has('code')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('code') }}</div>
    </div>
</div-->

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('cuit'), 'has-success': fields.cuit && fields.cuit.valid }">
    <label for="cuit" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.store.columns.cuit') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.cuit" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('cuit'), 'form-control-success': fields.cuit && fields.cuit.valid}" id="cuit" name="cuit" placeholder="{{ trans('admin.store.columns.cuit') }}">
        <div v-if="errors.has('cuit')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('cuit') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('shop'), 'has-success': fields.shop && fields.shop.valid }">
    <label for="shop" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.store.columns.shop') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.shop" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('shop'), 'form-control-success': fields.shop && fields.shop.valid}" id="shop" name="shop" placeholder="{{ trans('admin.store.columns.shop') }}">
        <div v-if="errors.has('shop')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('shop') }}</div>
    </div>
</div>

<!--div class="form-group row align-items-center" :class="{'has-danger': errors.has('fapiusr'), 'has-success': fields.fapiusr && fields.fapiusr.valid }">
    <label for="fapiusr" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.store.columns.fapiusr') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.fapiusr" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('fapiusr'), 'form-control-success': fields.fapiusr && fields.fapiusr.valid}" id="fapiusr" name="fapiusr" placeholder="{{ trans('admin.store.columns.fapiusr') }}">
        <div v-if="errors.has('fapiusr')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('fapiusr') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('fapiclave'), 'has-success': fields.fapiclave && fields.fapiclave.valid }">
    <label for="fapiclave" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.store.columns.fapiclave') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.fapiclave" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('fapiclave'), 'form-control-success': fields.fapiclave && fields.fapiclave.valid}" id="fapiclave" name="fapiclave" placeholder="{{ trans('admin.store.columns.fapiclave') }}">
        <div v-if="errors.has('fapiclave')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('fapiclave') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('hmac'), 'has-success': fields.hmac && fields.hmac.valid }">
    <label for="hmac" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.store.columns.hmac') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.hmac" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('hmac'), 'form-control-success': fields.hmac && fields.hmac.valid}" id="hmac" name="hmac" placeholder="{{ trans('admin.store.columns.hmac') }}">
        <div v-if="errors.has('hmac')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('hmac') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('host'), 'has-success': fields.host && fields.host.valid }">
    <label for="host" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.store.columns.host') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.host" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('host'), 'form-control-success': fields.host && fields.host.valid}" id="host" name="host" placeholder="{{ trans('admin.store.columns.host') }}">
        <div v-if="errors.has('host')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('host') }}</div>
    </div>
</div-->

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('state'), 'has-success': fields.state && fields.state.valid }">
    <label for="state" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.store.columns.state') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.state" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('state'), 'form-control-success': fields.state && fields.state.valid}" id="state" name="state" placeholder="{{ trans('admin.store.columns.state') }}">
        <div v-if="errors.has('state')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('state') }}</div>
    </div>
</div>


