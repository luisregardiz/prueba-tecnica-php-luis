# Prueba Técnica PHP - Clean Architecture

Este proyecto es una implementación de una API de usuarios siguiendo los principios de Clean Architecture y buenas prácticas de desarrollo.

## Estructura del Proyecto 

## Requisitos

- PHP 8.1 o superior
- Composer

## Instalación

1. Clonar el repositorio: 

2. Instalar dependencias:

## Tests

Para ejecutar los tests:

## Características

- ✅ Clean Architecture
- ✅ Domain-Driven Design
- ✅ SOLID Principles
- ✅ Unit Testing
- ✅ Integration Testing
- ✅ Repository Pattern
- ✅ Use Cases
- ✅ DTOs

## Estructura de Código

### Domain Layer
- `User`: Entidad principal que representa un usuario
- `UserId`: Value Object para el ID del usuario
- `UserRepositoryInterface`: Interfaz del repositorio

### Application Layer
- `CreateUserUseCase`: Caso de uso para crear usuarios
- `CreateUserRequest`: DTO para la creación de usuarios

### Infrastructure Layer
- `UserRepository`: Implementación del repositorio de usuarios

## Licencia

MIT