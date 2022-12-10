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
                <tr v-for="person in getPersons">
                    <th scope="row">{{person.id}}</th>
                    <td>{{person.name}}</td>
                    <td>{{person.age}}</td>
                    <td>@{{person.job}}</td>
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
            persons: [
                {
                    id: 1,
                    name: 'Vasya',
                    age: 20,
                    job: 'Coach'
                },
                {
                    id: 2,
                    name: 'Anya',
                    age: 17,
                    job: 'Schoolgirl'
                },
                {
                    id: 3,
                    name: 'Petr',
                    age: 30,
                    job: 'Teacher'
                },
                {
                    id: 4,
                    name: 'Tanya',
                    age: 25,
                    job: 'Traveler'
                },
                {
                    id: 5,
                    name: 'Irina',
                    age: 27,
                    job: 'Designer'
                },
            ]
        }
    },

    methods: {

    },

    computed: {
        getPersons(){
            return this.persons.filter((person) => {
                return person.age > 20
            })
        }
    },

    components: {
        SinglePostComponent
    }
}
</script>

<style scoped>

</style>
