import path from 'path';
import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    resolve: {
        alias: {
            '@': path.resolve(__dirname, 'resources/js'),
        },
    },
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
        {
            name: 'blade',
            handleHotUpdate({ file, server }) {
                if (file.endsWith('.blade.php')) {
                    server.ws.send({
                        type: 'full-reload',
                        path: '*',
                    });
                }
            },
        }
    ],
    css: {
        preprocessorOptions: {
            scss: {
                additionalData: `
                    @import 'tailwindcss/base';
                    @import 'tailwindcss/components';
                    @import 'tailwindcss/utilities';
                `,
            },
        },
    },
});
