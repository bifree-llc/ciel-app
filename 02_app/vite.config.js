import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
  plugins: [
    laravel({
      input: ['resources/css/app.css',
              'resources/scss/app.scss', // ←これを追加
              'resources/js/app.js'],
      refresh: true,
    }),
  ],
});
