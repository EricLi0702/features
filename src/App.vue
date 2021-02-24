<template>
  <v-app>
    <v-app-bar
      app
      color="#2fdbd9"
      dark
    >
      <div class="d-flex align-center">
        <v-img
          alt="Vuetify Logo"
          class="shrink mr-2"
          contain
          src="https://cdn.vuetifyjs.com/images/logos/vuetify-logo-dark.png"
          transition="scale-transition"
          width="40"
        />

        <h1>Feature</h1>
      </div>

      <v-spacer></v-spacer>

      <v-btn
        text
      >
        <span class="mr-2">Login</span>
        
      </v-btn>
    </v-app-bar>

    <v-main>
      <Feature />
    </v-main>
  </v-app>
</template>

<script>
import Feature from './components/featureComponent';

export default {
  name: 'App',

  components: {
    Feature,
  },

  data: () => ({
    //
  }),
};
</script>
