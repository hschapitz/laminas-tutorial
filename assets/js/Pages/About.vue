<template>
  <div>
    <h2>{{ message }}</h2>  <!-- Nachricht wird angezeigt -->
    <Link href="/">home</Link>
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