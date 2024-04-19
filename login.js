document.getElementById('loginForm').addEventListener('submit', function(event) {
    event.preventDefault();
    let formData = new FormData(this);
    fetch('login.php', {
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
