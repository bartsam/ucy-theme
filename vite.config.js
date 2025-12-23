import tailwindcss from '@tailwindcss/vite';
import { defineConfig } from 'vite';
import liveReload from 'vite-plugin-live-reload';

export default defineConfig({
  plugins: [tailwindcss(), liveReload(__dirname + '/**/*.php')],
  server: {
    cors: true,
    strictPort: true,
    port: 5173,
    hmr: {
      host: 'localhost',
    },
  },
  build: {
    manifest: true,
    outDir: 'dist',
    rollupOptions: { input: 'src/main.js' },
  },
});
