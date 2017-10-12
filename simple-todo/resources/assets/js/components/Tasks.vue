<template>
    <div class="project">
        <h1>{{ msg }}</h1>
        <div v-for="task in tasks" :key="task.id">
            <h2>{{task.name}}</h2>
            <p>{{task.description}}</p>
        </div>
        <div>
            <h2>New Project</h2>
            <input type="text" name="name" v-model="newtask.name" placeholder="Name"/>
            <input type="text" name="description" v-model="newtask.description" placeholder="Description"/>
            <button @click="addTask">Add Task</button>
        </div>
        <div class="exc-message">
            <div v-for="error in localErrors" >
                {{error}}
            </div>
        </div>
    </div>
</template>

<script>

  let axios = window.axios;
  export default {
    name: 'task-list',
    data() {
      return {
        msg: 'Tasks',
        tasks: [],
        newtask:{
          name:'',
          description:''
        },
        localErrors:{},
      }
    },
    methods:{
      fetchTasks(){
        axios.get('/api/tasks')
          .then(this.updateTasks)
          .catch(this.oopsie);
      },
      updateTasks(result){
        let data = result.data;
        console.log(data);
        this.localErrors = [];
        this.tasks = data;
      },
      oopsie(error){
        console.dir(error);
        console.log(error.response);
        this.localErrors = error.response.data;
      },
      addTask(){
       axios.post('/api/tasks',this.newtask)
         .then(this.successTasks)
         .catch(this.oopsie);
      },
      successTasks(result){
        console.log(result);
        let data = result.data;
        this.tasks.push(data.task);
        this.newtask.name ='';
        this.newtask.slug = '';
      },
    },
    mounted(){
      this.fetchTasks();
    }
  }
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style>

</style>