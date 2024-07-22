// "https://nuxt.com/docs/api/configuration/nuxt-config"

export default defineNuxtConfig({
  devtools: { enabled: true },
  runtimeConfig: {
    public: {
      apiUrl: process.env.GVALUE_API_URL || process.env.NUXT_APP_API_URL || process.env.API_URL || 'http://localhost:3000',
    },
  },
});

