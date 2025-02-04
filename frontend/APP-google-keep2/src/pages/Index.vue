<template>
  <q-page padding>
    <new-note />
    <section class="q-ma-md row items-start q-gutter-md">
      <card />
      <card />
      <card />
      <card />
      <card />
      <card />
      <card />
      <card />
    </section>
  </q-page>
</template>
<script>
import NewNote from "src/components/NewNote.vue";
import Card from "src/components/Card.vue";
export default {
  components: { NewNote, Card },
  name: "PageIndex",
};
</script>
