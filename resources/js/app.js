import './bootstrap';
import Vue from 'vue';
import OptionSelector from './components/OptionSelector.vue';
import OptionDisplay from './components/OptionDisplay.vue';

const app = new Vue({
    el: '#app',
    components: {
        OptionSelector,
        OptionDisplay
    }
});