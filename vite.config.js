import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    plugins: [
        laravel({
            input: [

                // Arquivos da parte pública
                'resources/css/public/vertex-one.css',
                'resources/js/public/app.js',

                // Arquivos do painel administrativo
                'resources/css/admin/app.css',
                'resources/js/admin/app.js',
            ],
            refresh: true,
        }),
        vue(),
    ],
});
