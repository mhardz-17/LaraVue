<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">More New Component</div>

                    <div class="card-body">
                        <h1 v-on:click="greet">{{ content }}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data: function(){
            return {
                content: 'Hello World'
            }
        },
        mounted() {
            console.log('Yummy mounted.')
        },
       methods: {
            greet: function (event) {
                // `this` inside methods points to the Vue instance
                alert('Hello Mardy!')
            }
        }
    }
</script>
