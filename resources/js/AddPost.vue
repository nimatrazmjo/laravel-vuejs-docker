<template>
    <div>
        <h3 class="text-center">Add Post</h3>
        <div class="row">
            <div class="col-md-6">
                <form @submit.prevent="addPost">
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" class="form-control" v-model="post.title">
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <input type="text" class="form-control" v-model="post.description">
                    </div>
                    <button type="submit" class="btn btn-primary">Add Post</button>
                </form>
            </div>
        </div>
    </div>
</template>
<script>
export default {
    data() {
        return {
            post:{}
        }
    },
    methods: {
        addPost() {
            this.axios.post(`http://localhost:8000/api/post/add`)
                .then(response => {
                    this.$router.push({name:'home'})
                }).catch(error => console.log(error))
                .finally(()=> this.loading = false);
        }
    }
}
</script>