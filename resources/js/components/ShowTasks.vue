<template>
   <div>
       <div class="Team-Activity" >
           <div  class="scroller" style="height: 100%; overflow: auto">
                   <div class="container " style="padding-top: 7rem">
                       <div class="row Chat-Box mb-2" v-for="(task,index) in tasks " :key="index">
                           <div class="card" style="width: 100%;">
                               <div class="card-body">
                                   <h5 class="card-title">Task <span v-if="task.status == 'New'" class="btn btn-sm btn-danger text-sm">New!</span></h5>
                                   <p class="card-text" v-text="task.task"></p>
                                   <a href="#" class="card-link" v-text="task.created_at"></a>
                               </div>
                           </div>
                       </div>
                   </div>
           </div>
       </div>
   </div>

</template>

<script>
export default {
name: "ShowTasks",
    props:['user_id'],
    data () {
    return {
        tasks: [],
    }
    },
    created() {
        window.Echo.private('SendTask.'+this.user_id).listen('SendTask', e => {

            let data = {
                "task" : e.task,
                "created_at" : e.date,
                'status'     :'New'
            }
            this.tasks.push(data);

            console.log(data);
            $(".scroller ").animate({ scrollTop:100000}, 100);
        });
    },
    mounted() {
        axios.get('/UserTasks/'+this.user_id).then(res => {
            this.tasks = res.data.tasks
            console.log(this.tasks)
        });
    }
}
</script>

<style scoped>

</style>
