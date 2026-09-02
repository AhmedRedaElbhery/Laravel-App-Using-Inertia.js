<template>
    <Head>
        <title>Users</title>
    </Head>

    <Layout>
        <div class="d-flex justify-content-between m-3">
            <div class="d-flex">
                <h4>Users</h4>
                <Link href="/users/create" class="mx-3 my-1">New User </Link>
            </div>
            <input
                v-model="search"
                class="p-2"
                type="text"
                placeholder="Enter your name"
            />
        </div>

        <div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th width="150">Action</th>
                    </tr>
                </thead>

                <tbody>
                    <tr v-for="user in users.data" :key="user.id">
                        <td>{{ user.name }}</td>

                        <td>
                            <button class="btn btn-primary btn-sm">Edit</button>
                        </td>
                    </tr>
                </tbody>
            </table>

            <!-- Pagination -->
            <div class="mt-3">
                <a
                    v-for="link in users.links"
                    :key="link.label"
                    :href="link.url"
                    v-html="link.label"
                    class="btn btn-sm me-1"
                    :class="link.active ? 'btn-primary' : 'btn-outline-primary'"
                ></a>
            </div>
        </div>
    </Layout>
</template>

<script setup>
import Layout from "../../shared/layout.vue";
import { ref, watch } from "vue";
import { router } from "@inertiajs/vue3";
import { debounce } from "lodash";
import { throttle } from "lodash";

let props = defineProps({
    users: Object,
    filter: Object,
});

let search = ref(props.filter);

watch(search, throttle ((value) => {
    router.get(
        "/users",
        { search: value },
        {
            preserveState: true,
            replace: true,
        }
    );
},500));
</script>
