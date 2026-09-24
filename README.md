# 🍳 Cocinet — Gestor de Ventas y Reservas Online para Emprendedores Locales

![Laravel](https://img.shields.io/badge/Laravel-11.x%20%2F%2013.x-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-8.4-777BB4?style=for-the-badge&logo=php&logoColor=white)
![TailwindCSS](https://img.shields.io/badge/Tailwind_CSS-v4-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white)
![MercadoPago](https://img.shields.io/badge/Mercado_Pago-OAuth_%26_Checkout_Pro-009EE3?style=for-the-badge&logo=mercadopago&logoColor=white)
![Debian](https://img.shields.io/badge/Debian-VPS%20Deployment-A81D33?style=for-the-badge&logo=debian&logoColor=white)

**Cocinet** es una plataforma web integral diseñada para ayudar a pequeños y medianos emprendedores gastronómicos (pastelerías, panaderías artesanales, viandas y catering) a digitalizar su catálogo de productos, automatizar el cálculo de costos de producción mediante recetas y gestionar reservas y cobros online sin pagar comisiones por venta.

---

## 🚀 Características Principales

### 📦 Gestión Comercial y Costeo Automático
- **Constructor de Recetas:** Asocia materias primas a productos registrando la cantidad requerida. El sistema calcula automáticamente el **costo estimado de producción** por unidad.
- **Sugeridor de Precio:** Genera de forma automática la recomendación de precio de venta (Costo x 3) para garantizar márgenes de ganancia reales.
- **Catálogo Digital:** Publicación de productos organizados por categorías, con imágenes, toggles de estado (activo/inactivo) y soporte de *Soft Deletes* para no alterar el historial de pedidos.

### 🛒 Experiencia de Compra y Reservas
- **Mapa Interactivo de Comercios:** Mapeo de tiendas gastronómicas cercanas mediante **Leaflet JS** y geocodificación automática con **Nominatim OpenStreetMap**.
- **Carrito de Compras Flotante:** Widget de carrito en la esquina inferior derecha con cajón desplegable (*drawer*) que permite agregar ítems con notificación sin interrumpir la navegación.
- **Motor de Reservas por Franjas Horarias:** Sistema dinámico que permite al cliente agendar el día y la hora de retiro, bloqueando automáticamente los turnos ocupados según la disponibilidad semanal configurada por el vendedor.

### 💳 Cobros Electrónicos sin Comisiones (Mercado Pago)
- **Vinculación 1-Click (OAuth v2):** Los emprendedores pueden conectar su cuenta de Mercado Pago con un solo clic.
- **Checkout Pro Integrado:** Redirección automática al flujo oficial de pago de Mercado Pago.
- **Acreditación Automática mediante Webhooks:** Notificaciones en tiempo real que confirman y acreditan la reserva automáticamente en la plataforma.

### ☁️ Infraestructura y Almacenamiento Cloud
- **Cloudflare R2:** Almacenamiento de imágenes de productos, logos y banners en la nube.
- **Compatibilidad Multi-Base de Datos:** Configurado para **MySQL / MariaDB** en entornos de producción (VPS Debian) y **SQLite** para desarrollo y pruebas locales.

---

## 🛠️ Stack Tecnológico

| Capa | Tecnología |
| :--- | :--- |
| **Backend** | PHP 8.4+, Framework Laravel (11.x / 13.x) |
| **Frontend** | Tailwind CSS v4, JavaScript Vanilla, Vite |
| **Base de Datos** | MariaDB / MySQL (Producción en VPS Debian), SQLite (Local/Testing) |
| **Mapas & Geocoding** | Leaflet.js v1.9, Nominatim OpenStreetMap API |
| **Integración de Pagos** | Mercado Pago API v2 (OAuth 1-Click & Checkout Pro) |
| **Almacenamiento Cloud** | Cloudflare R2 (S3 Compatible API) |
| **Despliegue & DevOps** | VPS Debian + Nginx + Certbot |

---

## 👥 Equipo de Desarrollo (Grupo 1)

* **Universidad:** Universidad Tecnológica Nacional (UTN) - Facultad Regional Haedo
* **Carrera:** Tecnicatura Universitaria en Programación
* **Materia:** Gestión de Desarrollo de Software (Comisión M4 - 1er Cuatrimestre 2026)
* **Docente a Cargo:** Lic. L. Coronel

### Integrantes:
- 👨‍💻 **Ezequiel Pertini** (Legajo: 29637, DNI: 31.206.325) — *Perfil Comercial, Seguridad & Autenticación*
- 👨‍💻 **Santiago Bagnato** (Legajo: 30792, DNI: 46.696.181) — *Catálogo, Mercado Pago OAuth/Checkout, DevOps & Despliegue VPS Debian*
- 👨‍💻 **Facundo Velazquez** (Legajo: 28551, DNI: 45.990.801) — *Inventario de Ingredientes & Constructor de Recetas*
- 👨‍💻 **Gerald Roger Alphonso Wayne Joly** (Legajo: 25903, DNI: 96.140.215) — *Motor de Disponibilidad, Calendario & Reservas*
- 👩‍💻 **Eliana Belén Ponce** (Legajo: 28504, DNI: 44.254.457) — *Costos, Analítica Comercial & Diseño UI/UX Responsive*

---

## 📄 Licencia

Este proyecto fue desarrollado con fines educativos y de extensión universitaria para la **Universidad Tecnológica Nacional (UTN)** bajo la licencia [MIT](LICENSE).
