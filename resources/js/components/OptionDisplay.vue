<template>
    <div>
        <h1>Selected Option: {{ option }}</h1>
    </div>
</template>

<script>
export default {
    data() {
        return {
            option: ''
        }
    },
    mounted() {
        window.Echo.channel('options')
            .listen('OptionSelected', (e) => {
                this.option = e.option;
            });
    }
}
</script>
