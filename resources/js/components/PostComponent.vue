<template>
    <div class="container">
        <div class="alert alert-info my-3">
            <CreateComponent :obj="obj"></CreateComponent>
            <IndexComponent ref="index"></IndexComponent>
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
            obj: {
                color: 'Black',
                number: 30,
                isPublished: false
            }
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
