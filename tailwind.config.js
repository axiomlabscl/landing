/**
 * CSS precompilado del landing rutag.cl (reemplaza cdn.tailwindcss.com).
 * Rebuild si agregas clases en ruta-g/index.html:
 *   npx -y tailwindcss@3.4.17 -c tailwind.config.js -i tailwind.input.css \
 *       -o ruta-g/assets/app.css --minify
 */
module.exports = { content: ['./ruta-g/index.html'], theme: { extend: {} }, plugins: [] };
