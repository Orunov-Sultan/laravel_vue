<template>
    <div class="container">
        <div class="alert alert-info my-3">
            <CreateComponent></CreateComponent>
            <IndexComponent></IndexComponent>
        </div>
    </div>
</template>

<script>
import CreateComponent from "./CreateComponent";
import IndexComponent from "./IndexComponent";

export default {
    name: "PostComponent",

    data() {
        return {

        }
    },

    mounted() {

    },

    methods: {

    },

    computed: {

    },

    components: {
        CreateComponent,
        IndexComponent
    }
}
</script>

<style scoped>

</style>
