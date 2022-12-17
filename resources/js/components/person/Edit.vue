<template>
    <div>
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
                <input @click.prevent="update" type="submit" class="btn btn-primary" value="Обновить">
            </div>
        </div>
    </div>
</template>

<script>
import router from "../../router";
export default {
    name: "Edit",
    data() {
        return {
            name: null,
            age: null,
            job: null,
            id: this.$route.params.id
        }

    },

    mounted() {
        this.getPerson()
    },

    methods: {
        getPerson() {
            axios.get(`/api/people/${this.id}`)
                .then(res => {
                    this.name = res.data.name
                    this.age = res.data.age
                    this.job = res.data.job
                })
        },
        update() {
            axios.put(`/api/people/${this.id}`, {name: this.name, age: this.age, job: this.job})
                .then(res => {
                    router.push({name: 'person.show', params: {id: this.id}})
                })
        }
    }
}
</script>

<style scoped>

</style>
