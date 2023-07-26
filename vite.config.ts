import { defineConfig } from 'vite'

export default defineConfig({
	build: {
		outDir: 'www/assets/dist',
		assetsDir: '',
		manifest: true,
		rollupOptions: {
		  input: '/src/ts/main.ts',
		},
	  },
	css: {
		devSourcemap: true,
	}
});
