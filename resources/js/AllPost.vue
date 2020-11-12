<template>
  <div>
    <h3 class="text-center">All Posts</h3>
    <br />
    <table class="table table-bordered">
      <thead>
        <tr>
          <th>ID</th>
          <th>Title</th>
          <th>Description</th>
          <th>Created At</th>
          <th>Updated At</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="post in posts" :key="post.id">
          <td>{{ post.id }}</td>
          <td>{{ post.title }}</td>
          <td>{{ post.description }}</td>
          <td>{{ post.created_at }}</td>
          <td>{{ post.updated_at }}</td>
          <td>
            <div class="btn-group" role="group">
              <router-link
                :to="{ name: 'edit', params: { id: post.id } }"
                class="btn btn-primary"
                >Edit
              </router-link>
              <button class="btn btn-danger" @click="deletePost(post.id)">
                Delete
              </button>
            </div>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</template>
<script>
export default {
    data () {
        return {
            posts:[]
        }
    },
    created() {
        this.axios.get("http://localhost:8000/api/posts")
            .then(response =>{this.posts = response.data});
    },
    methpds:{
        deletePost(id) {
            this.axios.delete(`http://localhost:8000/api/post/delete/${id}`)
            .then(res =>{
                let i = this.posts.map(item =>item.id).indexOf(id);
                this.posts.splice(i, 1)
            })
        }
    }
}
</script>