@extends('brackets/admin-ui::admin.layout.default')
@section('title', trans('admin.webhook.actions.edit', ['name' => $webhook->id]))
@section('body')
    <div class="container-xl">
        <div class="card">
            <webhook-form
                :action="'{{ $webhook->resource_url }}'"
                :data="{{ $webhook->toJson() }}"
                v-cloak
                inline-template>
            
                <form class="form-horizontal form-edit" method="post" @submit.prevent="onSubmit" :action="action" novalidate>
                    <div class="card-header">
                        <i class="fa fa-pencil"></i> {{ trans('admin.webhook.actions.edit', ['name' => $webhook->id]) }}
                    </div>
                    <div class="card-body">
                        @include('admin.webhook.components.form-elements')
                    </div>
                    
                    
                    <div class="card-footer">
                        <button type="submit" class="btn btn-warning" :disabled="submiting">
                            <i class="fa" :class="submiting ? 'fa-spinner' : 'fa-download'"></i>
                            {{ trans('brackets/admin-ui::admin.btn.save') }}
                        </button>
                    </div>
                    
                </form>
        </webhook-form>
        </div>
    
</div>
@endsection