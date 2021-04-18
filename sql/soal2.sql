SELECT id_pembeli, male, female, id_barang, SUM(qty) AS jumlah_product
FROM Pesanan
WHERE id_barang = "p"
GROUP BY id_pembeli, id_barang
ORDER BY SUM(qty) DESC;
