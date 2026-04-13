document.getElementById('loginForm').addEventListener('submit', async function(e) {
    e.preventDefault();

    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;

    // Disable submit button during request
    const submitButton = e.target.querySelector('button[type="submit"]');
    submitButton.disabled = true;
    submitButton.textContent = 'Logging in...';

    try {
        const response = await fetch('/api/login', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json'
            },
            body: JSON.stringify({
                email: email,
                password: password
            })
        });

        const data = await response.json();

        if (response.ok) {
            // Store the token
            localStorage.setItem('auth_token', data.access_token);
            localStorage.setItem('user', JSON.stringify(data.user));

            // Redirect to dashboard or home
            alert('Login successful! Welcome back.');
            window.location.href = 'index.html';
        } else {
            // Handle login errors
            const errorMessage = data.errors?.email?.[0] || data.message || 'Invalid credentials.';
            alert(errorMessage);

            // Re-enable submit button
            submitButton.disabled = false;
            submitButton.textContent = 'Login';
        }
    } catch (error) {
        console.error('Login error:', error);
        alert('Network error. Please try again.');

        // Re-enable submit button
        submitButton.disabled = false;
        submitButton.textContent = 'Login';
    }
});
