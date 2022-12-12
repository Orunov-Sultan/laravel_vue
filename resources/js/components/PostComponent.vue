<template>
    <div class="container">
        <div class="alert alert-info my-3">
            <CreateComponent></CreateComponent>
            <SinglePostComponent></SinglePostComponent>

<!--            <table class="table">-->
<!--                <thead class="table-dark">-->
<!--                <tr>-->
<!--                    <th scope="col">#</th>-->
<!--                    <th scope="col">Name</th>-->
<!--                    <th scope="col">Age</th>-->
<!--                    <th scope="col">Job</th>-->
<!--                </tr>-->
<!--                </thead>-->
<!--                <tbody>-->
<!--                <tr v-for="person in persons">-->
<!--                    <th scope="row">{{person.id}}</th>-->
<!--                    <td>{{person.name}}</td>-->
<!--                    <td>{{person.age}}</td>-->
<!--                    <td>{{person.job}}</td>-->
<!--                </tr>-->
<!--                </tbody>-->
<!--            </table>-->

        </div>
    </div>
</template>

<script>
import SinglePostComponent from "./SinglePostComponent";
import CreateComponent from "./CreateComponent";

export default {
    name: "PostComponent",

    data() {
        return {
            persons: null
        }
    },

    mounted() {

    },

    methods: {

    },

    computed: {

    },

    components: {
        SinglePostComponent,
        CreateComponent
    }
}
</script>

<style scoped>

</style>
