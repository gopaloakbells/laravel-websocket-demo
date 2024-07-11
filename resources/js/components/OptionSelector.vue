<template>
    <div>
        <select @change="selectOption" v-model="selectedOption">
            <option value="">Select an option</option>
            <option value="Option 1">Option 1</option>
            <option value="Option 2">Option 2</option>
            <option value="Option 3">Option 3</option>
        </select>
    </div>
</template>

<script>
export default {
    data() {
        return {
            selectedOption: ''
        }
    },
    methods: {
        selectOption() {
            axios.post('/select-option', { option: this.selectedOption });
        }
    }
}
</script>
