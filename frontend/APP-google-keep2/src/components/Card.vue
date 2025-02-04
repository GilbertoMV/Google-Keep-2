<template>
  <q-card flat bordered square class="my-card">
    <q-card-section class="q-pb-xs"> {{ titulo }} </q-card-section>
    <q-card-section class="limited-text">
      {{ lorem }}
    </q-card-section>
  </q-card>
</template>
<script>
export default {
  name: "Card",
  data() {
    return {
      titulo: "Titulo",
      lorem:
        "a quiscing elit. Nulla mattis ac neque. Duis vulputate commodo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis ac neque. Duis vulputate commodo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis ac neque. Duis vulputate commodo.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis ac neque. Duis vulputate commodo.",
    };
  },
};
</script>

<style scoped>
.my-card {
  width: 100%;
  min-width: 250px;
  max-width: 250px;
  min-height: 250px;
  max-height: 375px;
  overflow: hidden;
}

.limited-text {
  display: -webkit-box;
  -webkit-line-clamp: 15; /* Número de líneas a mostrar */
  -webkit-box-orient: vertical;
  overflow: hidden;
  text-overflow: ellipsis;
}
</style>
