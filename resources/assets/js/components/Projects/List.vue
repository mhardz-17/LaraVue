<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Project List</div>

                    <div class="card-body">
                        <h1>{{ content }}</h1>
                        <hr>
                        <!--<project-card v-for="project in projects" v-bind:key="project.id" v-bind:project="project"></project-card>-->
                        <div class="card" style="width: 18rem;" v-for="project in projects" v-bind:key="project.id">
                            <img class="card-img-top" src="" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">{{ project.title }}</h5>
                                <p class="card-text">{{ project.description }}</p>
                                <a href="#" class="btn btn-primary">Edit</a>
                                <button class="btn btn-primary" @click="deleteProject(project)">Delete</button>
                            </div>
                        </div>
                        <br><br>
                        <button v-on:click="showPage()">Page {{ page }}</button>
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
                projects: [],
                page: 2
            }
        },
        components: {
        },
        mounted() {
            this.fetchProjects()
        },
        methods: {
            fetchProjects () {
                let self = this;
                let url = self.page ? '/projects/list?page=' + self.page : '/projects/list';
                this.$http({url: url, method: 'GET'}).then(function (response) {
                    self.projects = [];
                    _.forEach(response.data.projects, function (project) {
                        self.projects.push(project)
                    });

                    // var projects = JSON.parse(response.request.responseText);
                    // console.log(projects.projects);
                    // // self.$set('projects', projects.projects);
                    //
                    // self.projects = projects.projects;

                    // self.$set('projects', response.data.projects)
                },function (response) {
                    // Error
                    console.log(response.data)
                })
            },
            showPage() {

              this.fetchProjects();
                if(this.page == 2) {
                    this.page = 1;
                } else {
                    this.page = 2;
                }
            },
            deleteProject(project) {
                let self = this;
                let index = self.projects.indexOf(project)
                self.projects.splice(index, 1);
            }
        }
    }
</script>
