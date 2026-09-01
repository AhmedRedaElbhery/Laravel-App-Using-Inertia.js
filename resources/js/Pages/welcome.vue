<template>

<Head>
    <title>Home</title>
</Head>

    <!-- <Layout :username="username">
        <h4>Home</h4>
    </Layout> -->
    <h4>Home</h4>

</template>


<script>

import Layout from '../shared/layout.vue';
import { Head } from '@inertiajs/vue3';

export default{
    // components: {Layout},
    components: {Head},
    layout : Layout,
    props: {username: String}
}

</script>