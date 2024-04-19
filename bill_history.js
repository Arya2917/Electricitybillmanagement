document.addEventListener('DOMContentLoaded', function() {
    // Fetch bill history for the logged-in user
    fetch('get_bill_history.php')
    .then(response => response.json())
    .then(data => {
        console.log(data);
        // Display bill history
    })
    .catch(error => {
        console.error('Error:', error);
    });
});
