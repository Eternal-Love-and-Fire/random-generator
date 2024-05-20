# Random Number Generator

This is a Laravel project that serves as a test application for generating random numbers. The project includes a model, controller, factory, and API routes.

## Features

- **Random Number Generator**: Generates random numbers within PHP's integer range.
- **API Endpoints**: Provides endpoints to list all generated numbers, show a specific number by ID, and create a new random number.

## Project Structure

- **Model**: `Random`
- **Controller**: `RandomController`
- **Factory**: `RandomFactory`
- **API Routes**: Located in `routes/api.php`

## API Endpoints

- **GET /api/random**: Retrieve all generated random numbers.
- **GET /api/random/{id}**: Retrieve a specific random number by its ID.
- **POST /api/random**: Generate and store a new random number.

## Database

This project uses SQLite for simplicity. You can configure the database in the `.env` file:

```env
DB_CONNECTION=sqlite
DB_DATABASE=/path/to/database.sqlite
