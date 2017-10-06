<template>
    <div class="project">
        <h1>{{ msg }}</h1>
        <div v-for="project in projects" :key="project.slug">
            <h2>{{project.name}}</h2>
        </div>
        <div>
            <h2>New Project</h2>
            <input type="text" name="name" v-model="newProject.name" placeholder="Name"/>
            <input type="text" name="slug" v-model="newProject.slug" placeholder="Slug"/>
            <button @click="addProject">Add Project</button>
        </div>
        <div class="exc-message">
            {{ localError }}
        </div>
    </div>
</template>

<script>

    let axios = window.axios;
  export default {
    name: 'project',
    data() {
      return {
        msg: 'Projects',
        projects: [],
        newProject:{
          name:'',
          slug:''
        },
        localError:'',
      }
    },
    methods:{
      fetchProjects(){
        axios.get('/api/projects')
          .then(this.updateProjects)
          .catch(this.oopsie);
      },
      updateProjects(result){
        let data = result.data;
        console.log(data);
        this.localError = '';
        this.projects = data;
      },
      oopsie(error){
        console.dir(error);
        console.log(error.response);
        this.localError = error.response.data;
      },
      addProject(){
       axios.post('/api/projects',this.newProject)
         .then(this.successProject)
         .catch(this.oopsie);
      },
      successProject(result){
        console.log(result);
        let data = result.data,
        newprojects = this.projects;
        newprojects.push(data);
        this.newProject.name ='';
        this.newProject.slug = '';
        this.projects.set(newprojects);
      },
    },
    mounted(){
      this.fetchProjects();
    }
  }
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style>

</style>