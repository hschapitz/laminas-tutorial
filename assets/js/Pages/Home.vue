<template>
  <div>
    <h1>{{ message }}</h1>  <!-- Nachricht wird angezeigt -->
  </div>
</template>

<script>
export default {
  props: {
    message: String,
  },
}
</script>
