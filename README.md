# 🚀 Proyecto Final Laravel - Sistema de Autenticación y Gestión

Este repositorio contiene el código fuente del proyecto final desarrollado en Laravel. El sistema implementa un control de acceso robusto, combinando autenticación tradicional personalizada y autenticación social mediante OAuth, asegurando una experiencia de usuario moderna y segura.

## 📋 Características Principales

### 🔐 Autenticación (Auth)
- **Login Tradicional:** Implementado con **Laravel Breeze**.
- **Login Social (Google):** Integración completa con **Laravel Socialite** para permitir el inicio de sesión con un solo clic utilizando cuentas de Google.
- **Registro de Usuarios:** Formulario de registro con validaciones para campos únicos (email y username).
- **Gestión de Sesiones:** Protección contra ataques CSRF y manejo seguro de sesiones.

### ⚙️ Funcionalidades del Backend
- **Middleware:** Protección de rutas (`/dashboard`, `/profile`) accesibles solo para usuarios verificados y logueados.
- **Base de Datos:** Migraciones personalizadas para incluir campos necesarios como `username` y `google_id`.
- **Manejo de Errores:** Control de excepciones para estados inválidos en OAuth y redireccionamientos seguros.

### 🎨 Frontend
- **Diseño Responsive:** Interfaz construida con **Tailwind CSS**.
- **Dashboard:** Panel de administración con barra lateral y menú de navegación adaptativo.
- **Logout Seguro:** Implementación de cierre de sesión mediante peticiones POST para prevenir vulnerabilidades.

## 🛠️ Tecnologías Utilizadas

- **Framework:** Laravel 12
- **Lenguaje:** PHP 8.5.0
- **Base de Datos:** MySQL / MariaDB
- **Estilos:** Tailwind CSS / Vite
- **Paquetes Adicionales:**
  - `laravel/breeze`: Scaffolding de autenticación.
  - `laravel/socialite`: Integración con proveedores OAuth (Google).