<template>
    <div class="d-flex justify-content-center">
        <table class="table w-50">
            <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Age</th>
                <th scope="col">Job</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            <template v-for="person in people">
                <tr>
                    <td>
                        <router-link :to="{name: 'person.show', params: {id: person.id}}">{{ person.name }}</router-link>
                    </td>
                    <td>{{ person.age }}</td>
                    <td>{{ person.job }}</td>
                    <td>
                        <router-link :to="{ name: 'person.edit', params: {id: person.id}}">Edit</router-link>
                        <a href="#" @click.prevent="deletePerson(person.id)" class="text-danger px-3">Delete</a>
                    </td>
                </tr>
            </template>
            </tbody>
        </table>
    </div>
</template>

<script>

export default {
    name: "Index",

    data() {
        return {
            people: null
        }
    },

    mounted() {
        this.getPeople()
    },

    methods: {
        getPeople() {
            axios.get('/api/people')
                .then(res => {
                    this.people = res.data
                })
        },
        deletePerson(id) {
            axios.delete(`/api/people/${id}`)
                .then(res => {
                    this.getPeople()
                })
        }
    }
}
</script>

<style scoped>

</style>
