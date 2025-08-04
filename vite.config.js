import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite'

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        tailwindcss(),
    ],
    // server: {
    //   host: '127.0.0.1', // 允許外部存取
    //   port: 4040,
    //   cors: {
    //     origin: 'https://bold-direct-primate.ngrok-free.app', // 允許 ngrok 的來源
    //   },
    // },
});
