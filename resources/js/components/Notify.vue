<template>
      <div>

      </div>
</template>

<script>
export default {
    props: ['user_id'],
name: "Notify",
    created() {
        window.Echo.private('SendTask.'+this.user_id).listen('SendTask', e => {
            this.$swal({
                icon: 'info',
                text: 'You have a new task from admin',
                footer: `<a href="/ShowTask">Check it out</a>`
            })
        });
    },
}
</script>

<style scoped>

</style>
