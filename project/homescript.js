

// In javascript.js
function displayItemsFromInventory(items) {
    const itemsList = document.getElementById('items-list');
    itemsList.innerHTML = '';

    // Replace this with your logic to filter and display items based on the timestamp
    const presentTime = new Date();
    const filteredItems = items.filter(item => isItemRecent(item.timestamp, presentTime));

    // Display the filtered items in the items-list
    filteredItems.forEach(item => {
        const itemElement = document.createElement('div');
        itemElement.textContent = `Item: ${item.name} | Quantity: ${item.quantity}`;
        itemsList.appendChild(itemElement);
    });
}

// Helper function to check if an item's timestamp is recent
function isItemRecent(itemTimestamp, presentTime) {
    // Implement your logic here, e.g., compare timestamps within a certain time range
    return (presentTime - itemTimestamp) <= RECENT_TIME_RANGE;
}

// Call this function with the array of items from the Inventory Management page
displayItemsFromInventory(itemsFromInventory);

function displayInventoryInDashboard() {
    const dashboardItems = document.getElementById('dashboard-items');
    dashboardItems.innerHTML = '';

    inventory.forEach(item => {
        const itemRow = document.createElement('tr');
        itemRow.innerHTML = `
            <td>${item.id}</td>
            <td>${item.name}</td>
            <td>${item.quantity}</td>
            <td>${item.price} THB</td>
            <td>${item.from}</td>
            <td>${item.date}</td>
            <td>${item.timestamp}</td>
            <td><button class="edit-btn" onclick="editItem(${item.id})">Edit</button></td>
            <td><button class="delete-btn" onclick="deleteItem(${item.id})">Delete</button></td>
        `;
        dashboardItems.appendChild(itemRow);
    });
}

