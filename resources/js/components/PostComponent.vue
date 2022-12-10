<template>
    <div class="container">
        <div class="alert alert-info my-3">
            Mi first component!<br>
            {{jobs}}
            <div class="my-3">
                <button class="btn btn-danger" @click="sayHello">Hello</button>
                <button class="btn btn-warning" @click="">Hi</button>
            </div>
            <SinglePostComponent></SinglePostComponent>
        </div>
    </div>
</template>

<script>
import SinglePostComponent from "./SinglePostComponent";

export default {
    name: "PostComponent",

    data() {
        return {
            name: 'Vasia',
            age: 25,
            skills: [
                'html',
                'css',
                'js',
                'php'
            ]
        }
    },

    methods: {
        sayHello(){
            console.log('Hello');
        },
        sayHi(){
            console.log('Hi');
        }
    },

    computed: {
        jobs(){
            return this.name + " Программист!"
        }
    },

    components: {
        SinglePostComponent
    }
}
</script>

<style scoped>

</style>
