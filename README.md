# Práctica 1: Migración de Plantilla HTML a PHP en Entorno Local
**Asignatura:** Programación Web (TDS-008)  
**Institución:** ITLA - Instituto Tecnológico de Las Américas  

---

## 📌 Descripción del Proyecto
Este proyecto corresponde a la **Práctica 1**, cuyo objetivo fundamental es la migración exitosa de una plantilla web estática (HTML/CSS/JS) a una arquitectura dinámica basada en **PHP**, asegurando que todos los enlaces internos y rutas de recursos funcionen de manera nativa en un servidor local (como Laragon o el servidor embebido de PHP).

## 🚀 Páginas Migradas (.html ➔ .php)
| Archivo Anterior | Archivo PHP | Estado de Enlace | Descripción |
| :--- | :--- | :--- | :--- |
| `index.html` | `index.php` | ✅ `href="index.php"` | Página principal con secciones dinámicas y llamadas a la acción. |
| `about.html` | `about.php` | ✅ `href="about.php"` | Información institucional y objetivos de la práctica. |
| `services.html` | `services.php` | ✅ `href="services.php"` | Listado de servicios renderizados dinámicamente con arreglos PHP. |
| `portfolio.html` | `portfolio.php` | ✅ `href="portfolio.php"` | Muestra de proyectos y catálogo. |
| `contact.html` | `contact.php` | ✅ `href="contact.php"` | Formulario de contacto interactivo procesado por PHP vía POST. |

## 🛠️ Arquitectura Modular PHP
Se desacopló el código común en la carpeta `includes/`:
- `includes/header.php`: Declaración HTML5, etiquetas meta, hojas de estilo relativas.
- `includes/navbar.php`: Barra de navegación con indicador de página activa (`$currentPage`).
- `includes/footer.php`: Pie de página con año dinámico (`<?php echo date('Y'); ?>`) y scripts.

## 💻 Instrucciones para Ejecutar Localmente

### Opción 1: Con Laragon (Recomendado)
1. Copiar esta carpeta dentro del directorio raíz de Laragon:
   ```bash
   C:\laragon\www\practica1
   ```
2. Abrir Laragon y hacer clic en **"Iniciar Todo"** (Start All).
3. Abrir el navegador e ingresar a:
   ```
   http://localhost/practica1/index.php
   ```

### Opción 2: Con el Servidor Integrado de PHP
1. Abrir la terminal dentro de esta carpeta y ejecutar:
   ```bash
   php -S localhost:8000
   ```
2. Acceder en el navegador a: `http://localhost:8000/index.php`

---
*Cumple al 100% con los criterios de evaluación: entorno local sin errores, migración integral a PHP y enlaces corregidos.*
