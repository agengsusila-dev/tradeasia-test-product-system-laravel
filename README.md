# Tradeasia Test Product System (Laravel)

Repository ini merupakan bagian dari pengerjaan **Technical Test Web Developer Intern** dari Tradeasia. Project ini dibuat menggunakan **Laravel 10**, dan terdiri dari fitur:

- Admin Panel untuk manajemen data produk (CRUD)
- Public API yang aman dan terbatas (GET-only)
- Seeder untuk data dummy produk & admin
- Autentikasi admin menggunakan Laravel Breeze

## 🛠️ Tech Stack

- Laravel 10
- Laravel Breeze (authentication)
- MySQL (via DBngin)
- Storage: Local storage (`storage/app/public`)
- Middleware: CSRF, Auth, CORS, Rate Limiting

---

## 🔐 Admin Panel

Fitur:
- Autentikasi admin (login/logout)
- CRUD produk:
  - Nama multi-bahasa (`en`, `id`)
  - HS Code
  - CAS Number
  - Deskripsi, Aplikasi (multi-bahasa)
  - Meta Title, Keyword, Description (multi-bahasa)
  - Upload Gambar (opsional)
- Validasi input form melalui `FormRequest`
- Proteksi XSS & CSRF

### 🧪 Dummy Login
Seeder tersedia untuk akun admin.

| Email                  | Password   |
|------------------------|------------|
| `admin@tradeasia.test` | `admin123` |

Seeder akan otomatis dibuat dengan `php artisan db:seed`.

---
Jalankan perintah `npm run dev` agar Tailwind dijalankan di Vite.

---

## 📦 Seeder

```bash
php artisan migrate:fresh --seed
```

## 📸 Screenshot Program
<img width="1678" height="1050" alt="image" src="https://github.com/user-attachments/assets/2f8cceb3-148a-4298-8e4b-a82e1dba431f" />
<img width="1678" height="1050" alt="image" src="https://github.com/user-attachments/assets/51bc20ab-4f99-4f54-9f9d-3fc5015e14e2" />
<img width="1678" height="1050" alt="image" src="https://github.com/user-attachments/assets/07d4db12-4a3a-451d-bd0f-318ed12f5594" />
<img width="1678" height="1050" alt="image" src="https://github.com/user-attachments/assets/404dc2d2-b83f-4e17-a2c2-d3654d672555" />


Terima kasih,

Ageng Susila
