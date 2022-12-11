<template>
    <div class="container">
        <div class="alert alert-info my-3">
            <SinglePostComponent></SinglePostComponent>

            <table class="table">
                <thead class="table-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Age</th>
                    <th scope="col">Job</th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="person in persons">
                    <th scope="row">{{person.id}}</th>
                    <td>{{person.name}}</td>
                    <td>{{person.age}}</td>
                    <td>{{person.job}}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>

<script>
import SinglePostComponent from "./SinglePostComponent";

export default {
    name: "PostComponent",

    data() {
        return {
            persons: null
        }
    },

    mounted() {
        this.getPosts()
    },

    methods: {
        getPosts(){
            axios.get('/posts')
            .then(result => {
                this.persons = result.data
            })
        }
    },

    computed: {

    },

    components: {
        SinglePostComponent
    }
}
</script>

<style scoped>

</style>
