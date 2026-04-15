// Check authentication
var authToken = localStorage.getItem('auth_token');
var user = JSON.parse(localStorage.getItem('user') || '{}');

if (!authToken || !user.id) {
    window.location.href = 'login.html';
}

// Check if user has coach role
if (user.role !== 'coach') {
    window.location.href = 'role-selection.html';
}

// Display user name
const userNameElement = document.getElementById('userName');
if (userNameElement) {
    userNameElement.textContent = user.name;
}

// Logout functionality
const logoutBtn = document.getElementById('logoutBtn');
if (logoutBtn) {
    logoutBtn.addEventListener('click', async function() {
        try {
            await fetch('/api/logout', {
                method: 'POST',
                headers: {
                    'Authorization': `Bearer ${authToken}`,
                    'Accept': 'application/json'
                }
            });
        } catch (error) {
            console.error('Logout error:', error);
        }

        // Clear local storage
        localStorage.removeItem('auth_token');
        localStorage.removeItem('user');

        // Redirect to login
        window.location.href = 'login.html';
    });
}
