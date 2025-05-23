// @ts-check
import { defineConfig } from 'astro/config';
import node from "@astrojs/node";
import tailwind from "@astrojs/tailwind";
import auth from 'auth-astro';
import Google from "auth/core/providers/google";

// https://astro.build/config
export default defineConfig({
  integrations: [
    tailwind(),
    auth({
      providers: [
        Google({
            clientId: import.meta.env.GOOGLE_CLIENT_ID,
            clientSecret: import.meta.env.GOOGLE_CLIENT_SECRET,
        }),
    ],
    })
  ],
  
  adapter: node({ mode: "standalone" }),
  publicDir: 'public',
  srcDir: 'src',
  outDir: 'dist',
  build: {
    assets: '_assets'
  }
});