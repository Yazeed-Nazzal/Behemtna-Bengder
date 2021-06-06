<template>
    <div>
        <div class="Team-Activity" >
            <div style="height: 800px; overflow: auto">
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
            <div class="row Message-Box justify-content-center">
                <div class="col-7 p-0">
                    <div class="mx-auto content">
                        <form action="post" class="">
                            <div class="input-group">
                            <textarea v-model="task" placeholder="Send New Task" class="form-control" rows="3"
                                      aria-label="With textarea"></textarea>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-2 col-md-1  p-0">
                    <button class="btn Edit-Btn w-100 h-100" @click="SendTask">Send</button>
                </div>
            </div>

        </div>
    </div>
</template>

<script>
export default {
    name:'SendTask',
    data() {
        return {
            tasks: [],
            task: ''
        }
    },
    props: ['user_id'],
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
    ,
    methods: {

        SendTask() {
            if (this.task != '') {
                axios.post('/SendTask/'+this.user_id, {task: this.task}).then(res => {

                });
            }
            this.post = '';
        }
    }
}
</script>

<style scoped>

</style>
