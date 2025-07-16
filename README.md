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
Jalankan perintah `npm run dev` agar tailwind di-reload oleh Vite.

---

## 📦 Seeder

```bash
php artisan migrate:fresh --seed
```

Terima kasih,

Ageng Susila
