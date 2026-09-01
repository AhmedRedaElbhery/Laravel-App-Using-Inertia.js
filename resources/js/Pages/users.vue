<template>

<Head> <title>Users</title></Head>

  <Layout>
    <h4>Users</h4>

    <div style="margin-top: 800px">
      <p>The Current time is {{ time }}</p>

      <Link href="/users" preserve-scroll>refresh</Link>
    </div>

  </Layout>
</template>


<script>
import Layout from "../shared/layout.vue";

export default {
  components: { Layout },

  props: {
    time: String,
  },
};
</script>