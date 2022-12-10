<template>
    <div class="container">
        <div class="alert alert-info my-3">
            Mi first component!
            <SinglePostComponent></SinglePostComponent>
        </div>
    </div>
</template>

<script>
import SinglePostComponent from "./SinglePostComponent";

export default {
    name: "PostComponent",

    data() {
        return {
            name: 'Vasia',
            age: 25,
            skills: [
                'html',
                'css',
                'js',
                'php'
            ]
        }
    },

    components: {
        SinglePostComponent
    }
}
</script>

<style scoped>

</style>
