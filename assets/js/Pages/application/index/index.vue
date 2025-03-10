<template>
  <div>
    <h1>{{ message }}</h1>  <!-- Nachricht wird angezeigt -->
    <Link href="/about">About</Link>
  </div>
</template>

<script>
import { Link } from '@inertiajs/vue3';
export default {
  props: {
    message: String,
  },
  components: {
    Link,
  },
}
</script>
