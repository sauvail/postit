// Check if user is logged in
const authToken = localStorage.getItem('auth_token');
const user = JSON.parse(localStorage.getItem('user') || '{}');

if (!authToken || !user.id) {
    window.location.href = 'login.html';
}

const errorMessage = document.getElementById('errorMessage');

document.getElementById('athleteBtn').addEventListener('click', async function() {
    await selectRole('athlete');
});

document.getElementById('coachBtn').addEventListener('click', async function() {
    await selectRole('coach');
});

async function selectRole(role) {
    errorMessage.style.display = 'none';

    try {
        const response = await fetch('/api/user/role', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json',
                'Authorization': `Bearer ${authToken}`
            },
            body: JSON.stringify({ role: role })
        });

        const data = await response.json();

        if (response.ok) {
            // Update stored user data
            localStorage.setItem('user', JSON.stringify(data.user));

            // Redirect to appropriate dashboard
            if (role === 'coach') {
                window.location.href = 'coach-dashboard.html';
            } else {
                window.location.href = 'athlete-dashboard.html';
            }
        } else {
            errorMessage.textContent = data.message || 'Failed to set role. Please try again.';
            errorMessage.style.display = 'block';
        }
    } catch (error) {
        console.error('Role selection error:', error);
        errorMessage.textContent = 'Network error. Please try again.';
        errorMessage.style.display = 'block';
    }
}
