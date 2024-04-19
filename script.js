document.getElementById('billForm').addEventListener('submit', function(event) {
    event.preventDefault();
    let formData = new FormData(this);
    fetch('backend.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        console.log(data);
        // Handle response from backend
    })
    .catch(error => {
        console.error('Error:', error);
    });
});
