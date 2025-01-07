// Mendapatkan elemen dari DOM
const stockForm = document.getElementById('stock-form');
const stockList = document.getElementById('stock-list');

// Array untuk menyimpan data stok
let stockItems = [];

// Fungsi untuk menambahkan item ke dalam stok
function addStockItem(event) {
    event.preventDefault(); // Mencegah form dari pengiriman default

    // Mendapatkan nilai dari input
    const itemName = document.getElementById('item-name').value;
    const itemQuantity = document.getElementById('item-quantity').value;
    const itemPrice = document.getElementById('item-price').value;

    // Membuat objek item
    const newItem = {
        name: itemName,
        quantity: parseInt(itemQuantity),
        price: parseFloat(itemPrice)
    };

    // Menambahkan item ke dalam array stok
    stockItems.push(newItem);

    // Menampilkan item di tabel
    displayStockItems();

    // Mengosongkan input
    stockForm.reset();
}

// Fungsi untuk menampilkan item di tabel
function displayStockItems() {
    // Menghapus isi tabel sebelumnya
    stockList.innerHTML = '';

    // Menambahkan setiap item ke dalam tabel
    stockItems.forEach((item, index) => {
        const row = document.createElement('tr');
        row.innerHTML = `
            <td>${item.name}</td>
            <td>${item.quantity}</td>
            <td>${item.price.toFixed(2)} IDR</td>
            <td><button onclick="removeStockItem(${index})">Hapus</button></td> <!-- Tombol hapus -->
        `;
        stockList.appendChild(row);
    });
}

// Fungsi untuk menghapus item dari stok
function removeStockItem(index) {
    // Menghapus item dari array stok
    stockItems.splice(index, 1);
    // Memperbarui tampilan tabel
    displayStockItems();
}

// Menambahkan event listener untuk form
stockForm.addEventListener('submit', addStockItem);