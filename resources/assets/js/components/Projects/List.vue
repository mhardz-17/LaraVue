<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Project List</div>

                    <div class="card-body">
                        <h1 v-on:click="greet">{{ content }}</h1>
                        <hr>
                        <project-card v-for="project in projects" v-bind:key="project.id" v-bind:project="project"></project-card>
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
                content: 'Hello World',
                projects: []
            }
        },
        components: {
        },
        mounted() {
            var self = this;
            this.$http.get('/projects/list').then(function (response) {
                // Success
                var projects = JSON.parse(response.request.responseText);
                console.log(projects.projects);
                // self.$set('projects', projects.projects);

                self.projects = projects.projects;
                // _.forEach(response.data.projects, function(project) {
                //
                // });

                // self.$set('projects', projects);
            },function (response) {
                // Error
                console.log(response.data)
            });
        },
        methods: {
            greet: function (event) {
                // `this` inside methods points to the Vue instance
                alert('Hello Mardy!')
            }
        }
    }
</script>
