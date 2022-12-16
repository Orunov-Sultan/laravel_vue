<template>
    <tr :class="this.$parent.isEdit(person.id) ? '' : 'd-none'">
        <th scope="row">{{ person.id }}</th>
        <td><input v-model="name" type="text"></td>
        <td><input v-model="age" type="number"></td>
        <td><input v-model="job" type="text"></td>
        <td><a href="#" @click.prevent="updatePerson(person.id)" class="btn btn-primary">Update</a></td>
    </tr>
</template>

<script>
export default {
    name: "EditComponent",
    props: [
        'person'
    ],

    data() {
        return {
            name: null,
            age: null,
            job: null
        }
    },

    methods: {

        updatePerson(id) {
            this.$parent.personEditId = null

            axios.put(`/api/people/${id}`, {name: this.name, age: this.age, job: this.job})
                .then(res => {
                    this.$parent.getPeople()
                })
        }
    }
}
</script>

<style scoped>

</style>
