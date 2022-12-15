<template>
    <div class="d-flex justify-content-center">
        <div class="card w-50 m-5" >
            <div class="m-3 mb-0">
                <input v-model="name" type="text" class="form-control" placeholder="Name...">
            </div>
            <div class="m-3 mb-0">
                <input v-model="age" type="number" class="form-control" placeholder="Age...">
            </div>
            <div class="m-3 mb-0">
                <input v-model="job" type="text" class="form-control" placeholder="Job...">
            </div>
            <div class="m-3">
                <input @click.prevent="addPerson()" type="button" class="btn btn-primary" value="Добавить">
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "CreateComponent",

    data() {
        return {
            name: null,
            age: null,
            job: null
        }
    },

    methods: {
        addPerson(){
            axios.post('/api/people', {name: this.name, age: this.age, job: this.job})
            .then(res => {
                this.name = null
                this.age = null
                this.job = null
            })
        }
    }
}
</script>

<style scoped>

</style>
