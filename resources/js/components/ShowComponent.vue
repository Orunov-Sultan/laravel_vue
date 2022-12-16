<template>
    <tr :class="this.$parent.isEdit(person.id) ? 'd-none' : ''">
        <th scope="row">{{ person.id }}</th>
        <td>{{ person.name }}</td>
        <td>{{ person.age }}</td>
        <td>{{ person.job }}</td>
        <td class="d-flex justify-content-center">
            <a href="#" @click.prevent="checkPersonId(person.id, person.name, person.age, person.job)"
               class="btn btn-success mx-3">Edit</a>
            <a href="#" @click.prevent="deletePerson(person.id)" class="btn btn-danger">Delete</a>
        </td>
    </tr>
</template>

<script>

export default {
    name: "ShowComponent",

    props: [
        'person'
    ],

    methods: {
        checkPersonId(id, name, age, job) {
            this.$parent.personEditId = id
            let editName = `edit_${id}`;
            let fullEditName = this.$parent.$refs[editName][0]
            fullEditName.name = name
            fullEditName.age = age
            fullEditName.job = job
        },

        deletePerson(id) {
            axios.delete(`/api/people/${id}`)
                .then(res => {
                    this.$parent.getPeople()
                })
        }
    }
}
</script>

<style scoped>

</style>
