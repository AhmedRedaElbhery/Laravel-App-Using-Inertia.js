<template>

<header style="background-color:#e2e1e1;" class="d-flex m-2 p-2 justify-content-between">
    <h2>My App</h2>
    <p>Welcome back {{ $page.props.auth.user.username }}</p>
    <Nav></Nav>
</header>

<div class="container">
    <slot></slot>
</div>

</template>


<script>

import Nav from './nav.vue';

export default {
components: {Nav},

};
</script>