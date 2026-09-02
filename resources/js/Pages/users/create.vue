<template>
    <Head>
        <title>Create Users</title>
    </Head>

    <layout>
        <h1>Create New User</h1>

        <form @submit.prevent="submit" class="container d-flex justify-content-center py-5">
            <div style="width: 400px">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input
                        v-model="form.name"
                        type="text"
                        id="name"
                        name="name"
                        class="form-control"
                        placeholder="Enter your name"
                    />

                    <div v-if="$page.props.errors.name" v-text="$page.props.errors.name" class="text-danger"></div>
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input
                        v-model="form.email"
                        type="email"
                        id="email"
                        name="email"
                        class="form-control"
                        placeholder="Enter your email"
                    />
                    <div v-if="$page.props.errors.email" v-text="$page.props.errors.email" class="text-danger"></div>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input
                        v-model="form.password"
                        type="password"
                        id="password"
                        name="password"
                        class="form-control"
                        placeholder="Enter your password"
                    />
                    <div v-if="$page.props.errors.password" v-text="$page.props.errors.password" class="text-danger"></div>
                </div>

                <button type="submit" class="btn btn-primary w-100">
                    Submit
                </button>
            </div>
        </form>
    </layout>
</template>

<script setup>
import { reactive } from "vue";
import layout from "../../shared/layout.vue";
import { router  } from "@inertiajs/vue3";

let form = reactive({
    name: '',
    email: '',
    password: '',
});

let submit = () => {
    router.post('/users',form);
};

</script>
