import { defineConfig } from 'vite'

export default defineConfig({
	build: {
		outDir: 'www/assets/dist',
		assetsDir: '',
		manifest: true,
		rollupOptions: {
			input: {
				ts: 'src/ts/main.ts',
				scss: 'src/scss/style.scss'
			}
		},
	  },
	css: {
		devSourcemap: true,
	}
});