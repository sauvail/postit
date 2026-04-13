document.getElementById('loginForm').addEventListener('submit', function(e) {
    e.preventDefault();

    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;

    // Basic validation
    if (email && password) {
        // Placeholder for actual login logic
        console.log('Login attempt:', { email, password });
        alert('Login functionality will be implemented in the next phase.');
    } else {
        alert('Please fill in all fields.');
    }
});
