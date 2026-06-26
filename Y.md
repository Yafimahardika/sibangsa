Misalnya ada sintak:
`$table->decimal('jumlah', 15, 2);`
yang 15 adalah jumlah digit nomor yang bisa diinputkan
yang 2 adalah scale atau jumlah digit dibelakang koma, dalam kasus ini nol dibelakang koma

Misalnya ada sintak:
`Penarikan::truncate();`
Maksdunya penarikan (tidak pakai $) merujuk pada model,
Maksudnya truncate adalah memnghapus data lama agar tidak terjadi duplikasi

Jika ada: 
`$nasabahs`
ada ($) maka itu merujuk pada variabel

Jika ingin migrasi tabel dengan path spesifik maka:
`php artisan migrate --path=\database\migrations\YY_MM_DD_create_nama_migrate_table.php`

Jika ingin data dalam tabel migrasi direset/dihapus maka menggunakan:
`php artisan migrate:fresh`
hanya data dalam tabel yang dihapus, itupun bisa diisi lagi dengan seeder

Jika ingin memnbuat controller maka:
`php artisan make:controller NamaController`
Tambahkan `--response` maka akan mengenerate 7 method secara otomatis
1. Index, Maksudnya READ, untuk menampilkan semua data, contoh `Produk::all()` atau `paginate()`
2. Create
3. Store
4. Show
5. Edit
6. Update
7. Destroy

Jika ingin membuat **Route** untuk controller, maka:
`Route::get('/nama_link', [NamaController::class, 'method']);`
Misal controller untuk nasabah:
`Route::get('nasabah', [NasabahController::class, 'index']);`
Maksudnya method dibelakang itu manggil function yang di dibuat di controller, misal index, store
atau bahkan kustom, kayak tambah, dll.

Untuk route tipe `resource` itu udah mencakup semua function kaya: create, store, show, edit, dll
jadi kita ngga perlu buat route masing-masing untuk function spesifik

Konvensi resource route pada laravel
1. `nasabah.destroy` -> DELETE
2. `nasabah.update` -> PUT/PATCH
3. `nasabah.store` -> POST

**Mass Assigmnet**, sebuah filter yang bertujuan untuk membedakan kolom mana yang boleh di isi dan tidak.
Misal: `protected $table = 'nasabah'` dan `protected $fillable = ['nama', 'alamat']`.
Di laravel terbaru (8x), bisa tampa menyebut table dulu

Sebuah method dalam kontroler bisa diakses dengan path, misalnya `/nasabah/tambah`

CSRF = Cross Site Request Forgery
setiap form yang melakukan DELETE, PUT/PATCH, POST wajib menyertakan token @csrf
intinya: laravel buat token sesi, token disisipkan ke form, form dikirimkan-sesi diverifikasi, jika token tidak cocok
request ditolak.

Dua cara penulisan CSRF
1. Gaya lama: {{ csrf_field() }}, token
2. gaya baru: @csrf, directive

# Perhatikan penulisan route biasa dengan uri atau yang named route

Cara memanggil seed khusus
`php artisan db:seed --class=JenisSampahSeeder`
Kalau mau panggil semuanya, daftarkan dulu dbseednya di DatabaseSeeder.php > di $this(call['seed1', 'seed'])
lalu panggil dengan: php artisan db:seed
Kalau mau sekalian jalankan seed dan migrate
`php artisan migrate:fresh --seed`

Untuk membuat pagination `pada function index pada variabel contoh: $users = User::paginate(10)`
Jadi $var = model::paginate(10);

Memperhalus animasi saat bernavigasi antar modul, dengan x-open, dengan alpine.js, dengan x-clock, yang
setting display none di style global

menambahkan chevron pada parent sub link sidebar

pada `foreignId('')->constrainded('nama_tabel')->onDelete('cascade')` 
Perhatikan pada nama tabel dia plural atau tidak.

Cara mengecek jumlah baris pada suatu tabel
`php artisan tinker`
`App\Models\Setoran::count()`
`App\Models\Penarikan::count()`

Cara mengambil id nasabah secara acak, dengan menggunakan:
`inRandomOrder()` atau `pluck()`

Cara cek data dummy di controller:
`dd($setoranData, $penarikanData)`