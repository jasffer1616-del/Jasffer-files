// -------------------- ELEMENTS --------------------
const payButton = document.getElementById('payButton');
const paymentButton = document.getElementById('paymentButton');
const gcashButton = document.getElementById('gcashButton');

const idpayButton = document.getElementById('idpayButton');
const idpaymentButton = document.getElementById('idpaymentButton');
const idgcashButton = document.getElementById('idgcashButton');

const payForm = document.getElementById('pay');
const paymentForm = document.getElementById('payment');
const gcashForm = document.getElementById('gcash');

const idpayForm = document.getElementById('idpay');
const idpaymentForm = document.getElementById('idpayment');
const idgcashForm = document.getElementById('idgcash');

// -------------------- HELPER FUNCTIONS --------------------
function hideAllForms() {
    payForm.style.display = "none";
    paymentForm.style.display = "none";
    gcashForm.style.display = "none";
    idpayForm.style.display = "none";
    idpaymentForm.style.display = "none";
    idgcashForm.style.display = "none";
}

function validateFields(fields) {
    for (const field of fields) {
        if (!field || field.trim() === "") {
            alert("Please fill in all required fields.");
            return false;
        }
    }
    return true;
}

// Unified submit function with callback
function submitOrder({ product, name, section, size, idnumber, reference, amount, onSuccess }) {
    // Validate required fields
    if (!validateFields([name, section, size, idnumber,  reference, amount ])) return;

    // Amount validation
    const requiredAmount = product === "T-SHIRT" ? 450 : 100;
    if (Math.abs(Number(amount) - requiredAmount) > 0.01) {
        alert(`Amount must be ${requiredAmount} pesos`);
        return;
    }

    // Send data to server
    fetch("order.php", {
        method: "POST",
        headers: { "Content-Type": "application/x-www-form-urlencoded" },
        body: `product=${product}&name=${encodeURIComponent(name)}&section=${encodeURIComponent(section)}&size=${encodeURIComponent(size)}&idnumber=${encodeURIComponent(idnumber)}&reference=${encodeURIComponent(reference)}&amount=${encodeURIComponent(amount)}`
    })
    .then(res => res.text())
    .then(data => {
        data = data.trim();
        if (data === "success") {
            alert("Order placed successfully!");
            if (onSuccess) onSuccess(); // Hide forms after success
            window.location.href = "orders.php";
        } else {
            alert("Order failed: " + data);
        }
    })
    .catch(err => {
        alert("Network error: " + err);
    });
}

// -------------------- T-SHIRT FLOW --------------------

// Step 0 → Step 1
payButton.addEventListener('click', () => {
    hideAllForms();
    payForm.style.display = "flex";
});

// Step 1 → Step 2
paymentButton.addEventListener('click', () => {
    const name = document.querySelector('#tsForm input[name="name"]').value;
    const section = document.querySelector('#tsForm input[name="section"]').value;
    const size = document.querySelector('#tsForm input[name="size"]').value;
    const idnumber = document.querySelector('#tsForm input[name="idnumber"]').value;

    if (!validateFields([name, section, size, idnumber])) return;

    hideAllForms();
    paymentForm.style.display = "flex";
});

// Step 2 → Submit
gcashButton.addEventListener('click', () => {
    const name = document.querySelector('#tsForm input[name="name"]').value;
    const section = document.querySelector('#tsForm input[name="section"]').value;
    const size = document.querySelector('#tsForm input[name="size"]').value;
    const idnumber = document.querySelector('#tsForm input[name="idnumber"]').value;
    const reference = document.querySelector('#tsPayForm input[name="reference"]').value;
    const amount = document.querySelector('#tsPayForm input[name="amount"]').value;

    submitOrder({
        product: "T-SHIRT",
        name, section, size, idnumber, reference, amount,
        onSuccess: hideAllForms
    });
});

// -------------------- LANYARD FLOW --------------------

// Step 0 → Step 1
idpayButton.addEventListener('click', () => {
    hideAllForms();
    idpayForm.style.display = "flex";
});

// Step 1 → Step 2
idpaymentButton.addEventListener('click', () => {
    const name = document.querySelector('#lyForm input[name="name"]').value;
    const section = document.querySelector('#lyForm input[name="section"]').value;
    const size = document.querySelector('#lyForm input[name="size"]').value;
    const idnumber = document.querySelector('#lyForm input[name="idnumber"]').value;


    if (!validateFields([name, section, size, idnumber])) return;

    hideAllForms();
    idpaymentForm.style.display = "flex";
});

// Step 2 → Submit
idgcashButton.addEventListener('click', () => {
    const name = document.querySelector('#lyForm input[name="name"]').value;
    const section = document.querySelector('#lyForm input[name="section"]').value;
    const size = document.querySelector('#lyForm input[name="size"]').value;
    const idnumber = document.querySelector('#lyForm input[name="idnumber"]').value;
    const reference = document.querySelector('#lyPayForm input[name="reference"]').value;
    const amount = document.querySelector('#lyPayForm input[name="amount"]').value;

    submitOrder({
        product: "LANYARD",
        name, section, size, idnumber, reference, amount,
        onSuccess: hideAllForms
    });
});

