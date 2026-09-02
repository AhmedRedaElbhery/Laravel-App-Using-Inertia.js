<template>
  <nav class="mt-2">
    <ul class="d-flex list-unstyled">
      <li style=" margin-right: 20px;">
        <navLink class="text-dark" href="/" :active="$page.component == 'welcome'">Home</navLink>
      </li>
      <li style=" margin-right: 20px;">
        <navLink class="text-dark" href="/users/" :active="$page.component == 'users/index'"
          >Users</navLink
        >
      </li>
      <li style=" margin-right: 20px;">
        <NavLink class="text-dark" href="/settings" :active="$page.component == 'settings'"
          >settings</NavLink
        >
      </li>
    </ul>
  </nav>
</template>


<script>

import NavLink from './NavLink.vue';

export default {
  components: { NavLink },
};
</script>