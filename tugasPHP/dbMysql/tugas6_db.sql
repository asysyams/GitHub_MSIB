TUGAS 8 MYSQL

Buatlah bisnis proses pembayaran dengan menggunakan trigers, dengan skenario sebagai berikut :

1. pelanggan memesan didalam table pesanan
2. dilanjutkan dengan proses pembayaran di table pembayaran

3. didalam table pembayaran tambahkan kolom status_pembayaran
mysql> ALTER TABLE pembayaran ADD COLUMN status_pembayaran VARCHAR(20);

4. jika pesanan sudah dibayar maka status pembayaran akan berubah menjadi lunas 
mysql> CREATE TRIGGER update_status_pembayaran AFTER INSERT ON pembayaran
    -> FOR EACH ROW
    -> BEGIN
    -> IF NEW.status_pembayaran = 'lunas' THEN
    -> UPDATE pesanan SET status_pembayaran = 'lunas' WHERE id_pesanan = NEW.pesanan_id;
    -> END IF;
    -> END $$
    