import { v4wp } from '@kucrut/vite-for-wp'
import vue from '@vitejs/plugin-vue'
import Unocss from 'unocss/vite'

// https://vitejs.dev/config/
export default {
  plugins: [
    v4wp({ input: 'app/src/main.js', outDir: 'app/dist' }),
    vue(),
    Unocss(),
  ],
}
