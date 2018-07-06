<template>
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">{{ project.title }}</h5>
            <p class="card-text">{{ project.description }}</p>
            <a href="#" class="btn btn-primary">Edit</a>
            <button class="btn btn-primary" @click="">Delete</button>
        </div>
    </div>
</template>

<script>
    export default {
        data: function(){
            return {
                content: 'Hello World',
                // project: {
                //
                // }
            }
        },
        props:['project'],
        mounted() {

        },
        methods: {
            greet: function (event) {
                // `this` inside methods points to the Vue instance
                alert('Hello Mardy!')
            }
        }
    }
</script>
