      // JavaScript di sini
      const transactionForm = document.getElementById('transaction-form');
      const transactionList = document.getElementById('transaction-list');
      const totalAmountElement = document.getElementById('total-amount');
      const saveTransactionButton = document.getElementById('save-transaction');
      const clearTransactionsButton = document.getElementById('clear-transactions');

      let transactionItems = [];
      let totalAmount = 0;

      function addTransactionItem(event) {
          event.preventDefault();
          const itemName = document.getElementById('item-name').value;
          const itemQuantity = parseInt(document.getElementById('item-quantity').value);
          const itemPrice = parseFloat(document.getElementById('item-price').value);
          const itemTotal = itemQuantity * itemPrice;

          const newItem = {
              name: itemName,
              quantity: itemQuantity,
              price: itemPrice,
              total: itemTotal
          };

          transactionItems.push(newItem);
          totalAmount += itemTotal;
          displayTransactionItems();
          updateTotalAmount();
          transactionForm.reset();
      }

      function displayTransactionItems() {
          transactionList.innerHTML = '';
          transactionItems.forEach(item => {
              const row = document.createElement('tr');
              row.innerHTML = `
                  <td>${item.name}</td>
                  <td>${item.quantity}</td>
                  <td>${item.price.toFixed(2)}</td>
                  <td>${item.total.toFixed(2)}</td>
              `;
              transactionList.appendChild(row);
          });
      }

      function updateTotalAmount() {
          totalAmountElement.textContent = totalAmount.toFixed(2);
      }

      function saveTransaction() {
          // Logika untuk menyimpan transaksi
          alert('Transaksi disimpan!');
          transactionItems = [];
          totalAmount = 0;
          displayTransactionItems();
          updateTotalAmount();
      }

      function clearTransactions() {
          transactionItems = [];
          totalAmount = 0;
          displayTransactionItems();
          updateTotalAmount();
      }

      transactionForm.addEventListener('submit', addTransactionItem);
      saveTransactionButton.addEventListener('click', saveTransaction);
      clearTransactionsButton.addEventListener('click', clearTransactions);
