# Changelog — Axiom Labs Landing

## [1.1.0] — 2026-06-09

### Visual & Branding
- Logo del tubo de ensayo integrado en navbar y footer (icono recortado con fondo transparente)
- Navbar: logo + "Axiom" blanco + "Labs" azul
- Paleta de color migrada de cyan (hsl 190) → azul profundo (hsl 217, 91%, 60%)
- Variables CSS actualizadas: `--accent-cyan`, `--accent-cyan-hover`, `--accent-cyan-glow`
- `.section-tag` hardcoded HSL actualizado de 190 → 217

### Contenido — Fundadores
- Card Rodrigo Graf: bio en primera persona, link a rodrigograf.cl, título "Co-founder | Software Engineer & Tech Lead", burbuja "💡 Data Expert"
- Card Mario Guzmán: bio en tercera persona ajustada a primera, título "Co-founder | Estadístico & Data Scientist", burbuja "📈 Growth Strategist"

### Secciones Nuevas
- **Sección Talleres** añadida antes de Contacto: beneficios de agenda digital, compatibilidad inteligente, 4 stat-cards, CTA "Conecta tu taller" que preselecciona el formulario

### Formulario
- Reemplazado Formspree por `submit.php` (PHP nativo + CSV local)
- `submit.php` escribe en `registros.csv` con campos: Fecha, Email, Tipo de consulta
- Manejo async con fetch, mensaje de éxito/error sin recargar la página
- Selector de tipo de consulta: Empresa / Lubricentro / Conductor

### Imágenes
- Mockup migrado de S3 (`difusion.s3.amazonaws.com`) → `assets/ruta_g_pwa_mockup.png`
- Logo migrado a `assets/axiomlabslogo.png`

### Estrategia WebApp
- Sección reescrita sin mencionar detalles internos de arquitectura
- 4 cards: Acceso Inmediato, Experiencia Nativa, Siempre Actualizado, Apps Nativas en Roadmap

### Simulador de Mantenciones
- Ampliado de 2 a 10 marcas: Toyota, Hyundai, Kia, Chevrolet, Nissan, Mazda, Ford, Mitsubishi, Suzuki, Peugeot
- Datos de OT detallados por marca y kilometraje

### Responsive
- Hero stats: `flex-wrap`, `justify-content: center` en mobile
- Botones hero: columna full-width en mobile (`max-width: 320px`)
- Breakpoint 480px: títulos y cards ajustados
- Grid features: `minmax(280px → 240px)`
- `.talleres-grid` colapsa a 1 columna en < 992px

### Infraestructura
- Remote corregido: `axiomlabscl/landing.git` (estaba apuntando a `ruta-g-backend`)
- `submit.php` agregado al repo
- Favicon actualizado al logo
