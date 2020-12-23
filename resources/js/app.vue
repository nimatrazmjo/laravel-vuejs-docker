<template>
    <div class="container">
        <div class="text-center" style="margin:20px 0">
            <span class="text-secondary">Laravel Vue CRUD example update</span>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="collapse navbar-collapse">
                <div class="navbar-nav">
                    <router-link to="/dashboard" class="nav-item nav-link"
                        >Dashboard</router-link
                    >
                </div>
            </div>
        </nav>
        <br />
        <router-view></router-view>
    </div>
</template>
<script>
export default {};
</script>
