// "https://nuxt.com/docs/api/configuration/nuxt-config"

export default defineNuxtConfig({
  devtools: { enabled: true },
  runtimeConfig: {
    public: {
      apiUrl: '/api',
    },
  },
  imports: {
    dirs: [
        // 'composables',
        'composables/models',
      ]
  }
});

