<template>
  <q-card class="q-pa-md">
    <q-input
      v-model="title"
      dense
      outlined
      placeholder="Título"
      @focus="showContent = true"
    />

    <q-input
      v-if="showContent"
      class="q-mt-md q-mb-md"
      v-model="content"
      autogrow
      placeholder="Añade una nota..."
      dense
      rows="1"
      outlined
    />

    <q-card-actions align="right" class="q-pa-xs">
      <q-btn dense flat label="Guardar" @click="saveNote" v-if="showContent" />
    </q-card-actions>
  </q-card>
</template>

<script>
export default {
  data() {
    return {
      title: "",
      content: "",
      showContent: false,
    };
  },
  methods: {
    saveNote() {
      if (this.title && this.content) {
        console.log("Nota guardada:", {
          title: this.title,
          content: this.content,
        });

        this.clearFields();
      }
    },
    clearFields() {
      this.title = "";
      this.content = "";
      this.showContent = false;
    },
  },
};
</script>

<style scoped>
.q-card {
  max-width: 500px;
  margin: 0 auto;
}
</style>
