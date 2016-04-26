<template>

    <div class="uk-margin uk-flex uk-flex-space-between uk-flex-wrap" data-uk-margin>
        <div data-uk-margin>
            <h2 class="uk-margin-remove">{{ 'Theme' | trans }}</h2>
        </div>
        <div data-uk-margin>
            <button class="uk-button uk-button-primary" type="submit">{{ 'Save' | trans }}</button>
        </div>
    </div>

    <div class="uk-form uk-form-horizontal">

        <div class="uk-form-row">
            <span class="uk-form-label">{{ 'Style' | trans }}</span>
            <div class="uk-form-controls">
                <select id="form-styles" class="uk-form-width-large" v-model="node.theme.style">
                    <option value="">{{ 'Default' | trans }}</option>
                    <option value="classico">{{ 'Classico' | trans }}</option>
                    <option value="facile">{{ 'Facile' | trans }}</option>
                    <option value="oro">{{ 'Oro' | trans }}</option>
                    <option value="signor">{{ 'Signor' | trans }}</option>
                    <option value="signora">{{ 'Signora' | trans }}</option>
                </select>
            </div>
        </div>

        <div class="uk-form-row">
            <label class="uk-form-label">{{ 'Logo Off-canvas' | trans }}</label>
            <div class="uk-form-controls uk-form-width-large">
                <input-image :source.sync="config.logo_offcanvas"></input-image>
                <p class="uk-form-help-block">{{ 'Select an optional logo for the off-canvas menu.' | trans }}</p>
            </div>
        </div>

    </div>

</template>

<script>

    module.exports = {

        section: {
            label: 'Theme',
            icon: 'pk-icon-large-brush',
            priority: 15
        },

        data: function () {
            return _.extend({config: {}}, window.$theme);
        },

        events: {

            save: function() {

                this.$http.post('admin/system/settings/config', {name: this.name, config: this.config}).catch(function (res) {
                    this.$notify(res.data, 'danger');
                });

            }

        }

    };

    window.Site.components['site-theme'] = module.exports;

</script>
