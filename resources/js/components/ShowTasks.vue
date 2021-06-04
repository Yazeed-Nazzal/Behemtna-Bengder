<template>
   <div>
        <div class="container">
            <div class="row " style="margin-top: 100px" >
                <div class="col-3" v-for="(Task,index) in Tasks" :key="index">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">Task </h5>
                            <p class="card-text" v-text="Task"></p>
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
    data () {
    return {
        Tasks : {
            text : "New task"
        }
    }
    }
}
</script>

<style scoped>

</style>
