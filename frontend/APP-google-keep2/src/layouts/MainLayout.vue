<template>
  <q-layout view="hHh lpR fFf">
    <q-header elevated class="bg-dark text-white q-pa-xs">
      <q-toolbar>
        <q-btn flat @click="miniState = !miniState" round dense icon="menu" />
        <q-toolbar-title>Google Keep Clone</q-toolbar-title>
      </q-toolbar>
    </q-header>

    <q-drawer
      v-model="drawer"
      show-if-above
      :mini="miniState"
      @mouseenter="miniState = false"
      @mouseleave="miniState = true"
      :width="300"
      :breakpoint="300"
      bordered
    >
      <q-scroll-area class="fit">
        <q-list padding class="menu-list">
          <router-link to="" class="link">
            <q-item clickable v-ripple>
              <q-item-section avatar>
                <q-icon name="lightbulb_outline" />
              </q-item-section>

              <q-item-section> Notas </q-item-section>
            </q-item>
          </router-link>
          <router-link to="/archive" class="link">
            <q-item clickable v-ripple>
              <q-item-section avatar>
                <q-icon name="archive" color="white" />
              </q-item-section>

              <q-item-section> Notas Archivadas </q-item-section>
            </q-item>
          </router-link>
        </q-list>
      </q-scroll-area>
    </q-drawer>

    <q-page-container>
      <q-page padding>
        <router-view />
      </q-page>
    </q-page-container>
  </q-layout>
</template>

<script>
export default {
  data() {
    return {
      drawer: false,
      miniState: true,
    };
  },
};
</script>

<style scoped>
.menu-list .q-item {
  border-radius: 0 32px 32px 0;
}
.link {
  text-decoration: none;
}
</style>
