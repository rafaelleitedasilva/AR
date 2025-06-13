import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
            'resources/css/app-dark.css',
            'resources/css/app.css',
            'resources/css/app-light.css',
            'resources/js/app.js',
            'resources/less/app.less',
            'resources/js/circles-master/circles.js',
        ],refresh: true
        })
    ],
    optimizeDeps: {
        include: ['resources/libs/**/*'],
    },
    resolve:{
        alias:{
            "@":"/resources/js",
        }
    },
    server: {
        https: false,
        host: true,
        strictPort: true,
        port: 3009,
        hmr: { host: 'localhost', protocol: 'ws'},
        watch: {
            usePolling: true,
        }
    }
});
