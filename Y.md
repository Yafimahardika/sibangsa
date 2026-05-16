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
1. Index
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
