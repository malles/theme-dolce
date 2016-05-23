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
                <select id="form-styles" class="uk-form-width-large" v-model="config.style">
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

        <div class="uk-form-row">
            <label for="form-navbar-layout" class="uk-form-label">{{ 'Navbar' | trans }}</label>
            <div class="uk-form-controls">
                <select id="form-navbar-layout" class="uk-form-width-large" v-model="config.header_layout">
                    <option value="default">{{ 'Left' | trans }}</option>
                    <option value="centered">{{ 'Centered' | trans }}</option>
                    <option value="single">{{ 'Single' | trans }}</option>
                    <option value="overlay">{{ 'Overlay (always sticky)' | trans }}</option>
                </select>
                <p class="uk-form-controls-condensed">
                    <label><input type="checkbox" v-model="config.header_sticky"> {{ 'Sticky Navigation' | trans }}</label>
                </p>
            </div>
        </div>

        <div class="uk-form-row">
            <span class="uk-form-label">{{ 'Dropdown Overlay' | trans }}</span>
            <div class="uk-form-controls uk-form-controls-text">
                <label><input type="checkbox" v-model="config.dropdown_overlay"> {{ 'Extend the dropdown to full width.' | trans }}</label>
            </div>
        </div>

        <div class="uk-form-row">
            <span class="uk-form-label">{{ 'To-top Scroller' | trans }}</span>
            <div class="uk-form-controls uk-form-controls-text">
                <label><input type="checkbox" v-model="config.totop_scroller"> {{ 'Enable a to-top scroller.' | trans }}</label>
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
