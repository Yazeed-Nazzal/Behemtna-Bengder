<template>
   <div>
        <div style="height: 100%; overflow: hidden">
            <div class="container " style="padding-top: 7rem">
                <div class="row Chat-Box mb-2" v-for="(task,index) in tasks " :key="index">
                    <div class="card" style="width: 100%;">
                        <div class="card-body">
                            <h5 class="card-title">Task</h5>
                            <p class="card-text" v-text="task.task"></p>
                            <a href="#" class="card-link" v-text="task.created_at"></a>
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
        window.Echo.private('$').listen('SendTask', e => {


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
