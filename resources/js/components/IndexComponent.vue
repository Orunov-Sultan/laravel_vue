<template>
    <div>
        <table class="table">
            <thead class="table-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Age</th>
                <th scope="col">Job</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            <template  v-for="person in people">
                <tr :class="isEdit(person.id) ? 'd-none' : ''">
                    <th scope="row">{{ person.id }}</th>
                    <td>{{ person.name }}</td>
                    <td>{{ person.age }}</td>
                    <td>{{ person.job }}</td>
                    <td><a href="#" @click.prevent="checkPersonId(person.id, person.name, person.age, person.job)" class="btn btn-success">Edit</a></td>
                </tr>
                <tr :class="isEdit(person.id) ? '' : 'd-none'">
                    <th scope="row">{{ person.id }}</th>
                    <td><input v-model="name" type="text"></td>
                    <td><input v-model="age" type="number"></td>
                    <td><input v-model="job" type="text"></td>
                    <td><a href="#" @click.prevent="updatePerson(person.id)" class="btn btn-primary">Update</a></td>
                </tr>
            </template>
            </tbody>
        </table>
    </div>
</template>

<script>
export default {
    name: "IndexComponent",

    data() {
        return {
            people: null,
            personEditId: null,
            name: null,
            age: null,
            job: null
        }
    },

    mounted() {
        this.getPeople()
    },

    methods: {
        getPeople() {
            axios.get('/api/people')
            .then(response => {
                this.people = response.data
            })
        },

        checkPersonId(id, name, age, job){
            this.personEditId = id
            this.name = name
            this.age = age
            this.job = job
        },

        isEdit(id){
            return this.personEditId === id
        },

        updatePerson(id){
            this.personEditId = null

            axios.put(`/api/people/${id}`, {name: this.name, age: this.age, job: this.job})
            .then(res => {
                this.getPeople()
            })
        }
    }
}
</script>

<style scoped>

</style>
