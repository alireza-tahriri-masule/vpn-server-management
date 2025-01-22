# VPN Server Management

An admin panel built with Laravel, Tailwind CSS, AlpineJS, and Livewire to manage VPN servers 🌐. Easily control UUIDs, emails, and server settings 🔑. Perfect for managing and offering VPN services with a user-friendly interface 👨‍💻.

## Features

- **UUID Management**: Seamlessly generate, update, and assign UUIDs for VPN users.
- **Email Integration**: Manage user email information for better account organization.
- **Server Settings**: Configure VPN servers with an intuitive interface.
- **Real-time Updates**: Powered by Livewire for instant feedback and updates.

## Screenshots
<div style="display: flex; justify-content: space-around;">
    <img alt="Vpn-Server-Management Screenshot-01" src="https://github.com/user-attachments/assets/ac6d7c0a-6218-4020-99ec-2187aff80c37" width="45%" style="max-width: 45%; height: auto;" />
    <img alt="Vpn-Server-Management Screenshot-02" src="https://github.com/user-attachments/assets/86591bcb-6fb6-418d-b583-93a3d2304f2d" width="45%" style="max-width: 45%; height: auto;" />
</div>


## Technologies Used

- Laravel
- Tailwind CSS
- AlpineJS
- Livewire

## Getting Started

1. Clone the repository:
   ```bash
   git clone https://github.com/alireza-tahriri-masule/vpn-server-management.git
   ```

2. Navigate to the project directory:
   ```bash
   cd vpn-server-management
   ```

3. Install dependencies:
   ```bash
   composer install
   npm install
   ```

4. Configure the environment variables:
   ```bash
   cp .env.example .env
   ```
   Update the `.env` file with your database and server credentials.

5. Run database migrations:
   ```bash
   php artisan migrate
   ```

6. Start the development server:
   ```bash
   php artisan serve
   npm run tailwind
   ```

7. Access the application at:
   ```
   http://localhost:8000
   ```

## Contributing

Contributions are welcome! Please fork this repository and submit a pull request with your changes.
