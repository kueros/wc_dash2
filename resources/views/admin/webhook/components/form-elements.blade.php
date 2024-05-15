<div class="form-group row align-items-center" :class="{'has-danger': errors.has('webhookId'), 'has-success': fields.webhookId && fields.webhookId.valid }">
    <label for="webhookId" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.webhook.columns.webhookId') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.webhookId" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('webhookId'), 'form-control-success': fields.webhookId && fields.webhookId.valid}" id="webhookId" name="webhookId" placeholder="{{ trans('admin.webhook.columns.webhookId') }}">
        <div v-if="errors.has('webhookId')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('webhookId') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('shopId'), 'has-success': fields.shopId && fields.shopId.valid }">
    <label for="shopId" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.webhook.columns.shopId') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.shopId" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('shopId'), 'form-control-success': fields.shopId && fields.shopId.valid}" id="shopId" name="shopId" placeholder="{{ trans('admin.webhook.columns.shopId') }}">
        <div v-if="errors.has('shopId')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('shopId') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('url'), 'has-success': fields.url && fields.url.valid }">
    <label for="url" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.webhook.columns.url') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.url" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('url'), 'form-control-success': fields.url && fields.url.valid}" id="url" name="url" placeholder="{{ trans('admin.webhook.columns.url') }}">
        <div v-if="errors.has('url')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('url') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('tipo'), 'has-success': fields.tipo && fields.tipo.valid }">
    <label for="tipo" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.webhook.columns.tipo') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.tipo" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('tipo'), 'form-control-success': fields.tipo && fields.tipo.valid}" id="tipo" name="tipo" placeholder="{{ trans('admin.webhook.columns.tipo') }}">
        <div v-if="errors.has('tipo')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('tipo') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('state'), 'has-success': fields.state && fields.state.valid }">
    <label for="state" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.webhook.columns.state') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.state" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('state'), 'form-control-success': fields.state && fields.state.valid}" id="state" name="state" placeholder="{{ trans('admin.webhook.columns.state') }}">
        <div v-if="errors.has('state')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('state') }}</div>
    </div>
</div>


<div class="form-group row align-items-center" :class="{'has-danger': errors.has('shop'), 'has-success': fields.shop && fields.shop.valid }">
    <label for="shop" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.store.columns.shop') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.shop" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('shop'), 'form-control-success': fields.shop && fields.shop.valid}" id="shop" name="shop" placeholder="{{ trans('admin.store.columns.shop') }}">
        <div v-if="errors.has('shop')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('shop') }}</div>
    </div>
</div>
