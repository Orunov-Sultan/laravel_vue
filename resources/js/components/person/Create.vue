<template>
    <div class="w-25 mt-3">
        <div class="mb-3">
            <input type="text" v-model="name" class="form-control" placeholder="Name...">
        </div>
        <div class="mb-3">
            <input type="number" v-model="age" class="form-control" placeholder="Age...">
        </div>
        <div class="mb-3">
            <input type="text" v-model="job" class="form-control" placeholder="Job...">
        </div>
        <div>
            <input @click.prevent="store()" type="submit" class="btn btn-primary" value="Добавить">
        </div>
    </div>
</template>

<script>
import router from "../../router";

export default {
    name: "Create",

    data() {
        return {
            name: null,
            age: null,
            job: null
        }
    },

    methods: {
        store() {
            axios.post('/api/people', {name: this.name, age: this.age, job: this.job})
                .then(res => {
                    router.push({name: 'person.index'})
                })
        }
    }
}
</script>

<style scoped>

</style>
