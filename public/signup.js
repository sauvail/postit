document.getElementById('signupForm').addEventListener('submit', async function(e) {
    e.preventDefault();

    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;
    const password_confirmation = document.getElementById('password_confirmation').value;
    const errorMessage = document.getElementById('errorMessage');

    // Hide previous error messages
    errorMessage.style.display = 'none';

    // Validate passwords match
    if (password !== password_confirmation) {
        errorMessage.textContent = 'Passwords do not match.';
        errorMessage.style.display = 'block';
        return;
    }

    // Validate password length
    if (password.length < 8) {
        errorMessage.textContent = 'Password must be at least 8 characters long.';
        errorMessage.style.display = 'block';
        return;
    }

    // Disable submit button during request
    const submitButton = e.target.querySelector('button[type="submit"]');
    submitButton.disabled = true;
    submitButton.textContent = 'Signing up...';

    try {
        const response = await fetch('/api/register', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json'
            },
            body: JSON.stringify({
                name: name,
                email: email,
                password: password,
                password_confirmation: password_confirmation
            })
        });

        const data = await response.json();

        if (response.ok) {
            // Store the token
            localStorage.setItem('auth_token', data.access_token);
            localStorage.setItem('user', JSON.stringify(data.user));

            // Redirect to role selection
            window.location.href = 'role-selection.html';
        } else {
            // Handle validation errors
            if (data.errors) {
                const errorMessages = Object.values(data.errors).flat().join(' ');
                errorMessage.textContent = errorMessages;
            } else {
                errorMessage.textContent = data.message || 'An error occurred during signup.';
            }
            errorMessage.style.display = 'block';

            // Re-enable submit button
            submitButton.disabled = false;
            submitButton.textContent = 'Sign Up';
        }
    } catch (error) {
        console.error('Signup error:', error);
        errorMessage.textContent = 'Network error. Please try again.';
        errorMessage.style.display = 'block';

        // Re-enable submit button
        submitButton.disabled = false;
        submitButton.textContent = 'Sign Up';
    }
});
