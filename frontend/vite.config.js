// vite.config.js
import { resolve } from 'path'
import { defineConfig } from 'vite'
import { ViteImageOptimizer } from 'vite-plugin-image-optimizer';

export default defineConfig({
  plugins: [ViteImageOptimizer({})],
  build: {
    rollupOptions: {
      input: {
        main: resolve(__dirname, 'index.html'),
        about: resolve(__dirname, 'pages/about.html'),
        entrant: resolve(__dirname, 'pages/entrant.html'),
        graduates: resolve(__dirname, 'pages/graduates.html'),
        post: resolve(__dirname, 'pages/post.html'),
        posts: resolve(__dirname, 'pages/posts.html'),
        ['teacher-page']: resolve(__dirname, 'pages/teacher-page.html'),
        teachers: resolve(__dirname, 'pages/teachers.html'),
      },
    },
  },
})