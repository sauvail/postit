// Check authentication
const authToken = localStorage.getItem('auth_token');
const user = JSON.parse(localStorage.getItem('user') || '{}');

if (!authToken || !user.id) {
    window.location.href = 'login.html';
}

// Check if user has coach role
if (user.role !== 'coach') {
    window.location.href = 'role-selection.html';
}

// Display user name
document.getElementById('userName').textContent = user.name;

// Logout functionality
document.getElementById('logoutBtn').addEventListener('click', async function() {
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

// TODO: Load dashboard data
// This will be implemented when backend endpoints are ready
