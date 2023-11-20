// vite.config.js
import { resolve } from "path";
import { defineConfig } from "vite";
import { ViteImageOptimizer } from "vite-plugin-image-optimizer";

export default defineConfig({
  plugins: [ViteImageOptimizer({})],
});
