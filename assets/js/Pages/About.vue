<template>
  <div>
    <h2>{{ message }}</h2>  <!-- Nachricht wird angezeigt -->
    <inertia-link href="/">home</inertia-link>
  </div>
</template>

<script>
import { InertiaLink } from '@inertiajs/inertia-vue3';
export default {
  props: {
    message: String,
  },
  components: {
    InertiaLink,
  },
}
</script>