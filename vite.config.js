import { defineConfig } from "vite";
import liveReload from "vite-plugin-live-reload";

export default defineConfig({
  plugins: [liveReload(__dirname + "/**/*.php")],
  server: {
    cors: true,
    strictPort: true,
    port: 5173,
    hmr: {
      host: "localhost",
    },
  },
  build: {
    manifest: true,
    outDir: "dist",
    rollupOptions: { input: "src/main.js" },
  },
});
