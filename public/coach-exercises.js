/* ------------------------------------------------------------------ *
 * coach-exercises.js – Exercise library management
 * ------------------------------------------------------------------ */

const API_BASE = '/api';

/* -------- State -------- */
let exercises = [];
let deleteTargetId = null;

/* -------- Body-parts tag input -------- */
let bodyPartsValue = [];

function renderBodyParts() {
    const wrapper = document.getElementById('bodyPartsWrapper');
    const input   = document.getElementById('bodyPartsInput');

    // Remove existing tags (keep the input)
    Array.from(wrapper.querySelectorAll('.tag-removable')).forEach(el => el.remove());

    bodyPartsValue.forEach((bp) => {
        const tag = document.createElement('span');
        tag.className = 'tag-removable';
        tag.innerHTML = `${escHtml(bp)}<button type="button" aria-label="Remove ${escHtml(bp)}">&times;</button>`;
        tag.querySelector('button').addEventListener('click', () => {
            bodyPartsValue = bodyPartsValue.filter(v => v !== bp);
            renderBodyParts();
        });
        wrapper.insertBefore(tag, input);
    });
}

document.getElementById('bodyPartsInput').addEventListener('keydown', function (e) {
    if (e.key === 'Enter' || e.key === ',') {
        e.preventDefault();
        const val = this.value.trim();
        if (val && !bodyPartsValue.includes(val)) {
            bodyPartsValue.push(val);
            renderBodyParts();
        }
        this.value = '';
    }
});

document.getElementById('bodyPartsWrapper').addEventListener('click', () => {
    document.getElementById('bodyPartsInput').focus();
});

/* -------- Variations -------- */
function addVariationRow(name = '', description = '') {
    const container = document.getElementById('variationsContainer');
    const idx = container.querySelectorAll('.variation-item').length;

    const item = document.createElement('div');
    item.className = 'variation-item';
    item.innerHTML = `
        <button type="button" class="remove-variation" aria-label="Remove variation">&times;</button>
        <div class="form-group">
            <label>Name *</label>
            <input type="text" class="var-name" placeholder="e.g. Banded, Tempo, Weighted…" value="${escHtml(name)}" required>
        </div>
        <div class="form-group" style="margin-bottom:0">
            <label>Description</label>
            <textarea class="var-desc" placeholder="Describe this variation…">${escHtml(description)}</textarea>
        </div>`;
    item.querySelector('.remove-variation').addEventListener('click', () => item.remove());
    container.appendChild(item);
}

document.getElementById('btnAddVariation').addEventListener('click', () => addVariationRow());

function collectVariations() {
    const items = document.querySelectorAll('#variationsContainer .variation-item');
    return Array.from(items).map(item => ({
        name: item.querySelector('.var-name').value.trim(),
        description: item.querySelector('.var-desc').value.trim(),
    })).filter(v => v.name !== '');
}

/* -------- API helpers -------- */
async function apiFetch(path, options = {}) {
    const res = await fetch(API_BASE + path, {
        ...options,
        headers: {
            'Content-Type': 'application/json',
            'Accept': 'application/json',
            'Authorization': `Bearer ${authToken}`,
            ...(options.headers || {}),
        },
    });
    if (!res.ok) {
        const err = await res.json().catch(() => ({}));
        throw err;
    }
    if (res.status === 204) return null;
    return res.json();
}

/* -------- Load & render list -------- */
async function loadExercises() {
    try {
        exercises = await apiFetch('/exercises');
        renderTable(exercises);
    } catch (e) {
        document.getElementById('exercisesBody').innerHTML =
            '<tr><td colspan="7" class="empty-state" style="color:#e74c3c">Failed to load exercises.</td></tr>';
    }
}

function renderTable(list) {
    const tbody = document.getElementById('exercisesBody');
    if (!list.length) {
        tbody.innerHTML = '<tr><td colspan="7" class="empty-state">No exercises yet. Click <strong>+ New Exercise</strong> to add one.</td></tr>';
        return;
    }
    tbody.innerHTML = list.map(ex => `
        <tr data-id="${ex.id}">
            <td><strong>${escHtml(ex.name)}</strong></td>
            <td>${escHtml(ex.equipment || '—')}</td>
            <td>${renderTags(ex.body_parts || [], '')}</td>
            <td>${ex.type ? `<span class="tag tag-type">${escHtml(ex.type)}</span>` : '—'}</td>
            <td>${renderTags(ex.variations ? ex.variations.map(v => v.name) : [], 'tag-variation')}</td>
            <td style="max-width:240px;white-space:pre-wrap;">${escHtml(ex.description || '')}</td>
            <td class="actions-cell">
                <button class="btn-sm btn-edit-ex"      data-action="edit"      data-id="${ex.id}">Edit</button>
                <button class="btn-sm btn-duplicate"    data-action="duplicate" data-id="${ex.id}">Duplicate</button>
                <button class="btn-sm btn-delete-ex"    data-action="delete"    data-id="${ex.id}">Delete</button>
            </td>
        </tr>`).join('');
}

function renderTags(items, extraClass) {
    if (!items || !items.length) return '—';
    return items.map(i => `<span class="tag ${escHtml(extraClass)}">${escHtml(i)}</span>`).join(' ');
}

/* -------- Search -------- */
document.getElementById('searchInput').addEventListener('input', function () {
    const q = this.value.toLowerCase();
    renderTable(exercises.filter(ex =>
        ex.name.toLowerCase().includes(q) ||
        (ex.equipment || '').toLowerCase().includes(q) ||
        (ex.type || '').toLowerCase().includes(q) ||
        (ex.body_parts || []).some(bp => bp.toLowerCase().includes(q)) ||
        (ex.variations || []).some(v => v.name.toLowerCase().includes(q))
    ));
});

/* -------- Row action delegation -------- */
document.getElementById('exercisesBody').addEventListener('click', function (e) {
    const btn = e.target.closest('[data-action]');
    if (!btn) return;
    const id = parseInt(btn.dataset.id, 10);
    const action = btn.dataset.action;
    if (action === 'edit')      openEditModal(id);
    if (action === 'duplicate') duplicateExercise(id);
    if (action === 'delete')    openDeleteModal(id);
});

/* -------- Create / Edit Modal -------- */
function openCreateModal() {
    document.getElementById('modalTitle').textContent = 'New Exercise';
    document.getElementById('exerciseId').value = '';
    document.getElementById('exerciseForm').reset();
    bodyPartsValue = [];
    renderBodyParts();
    document.getElementById('variationsContainer').innerHTML = '';
    document.getElementById('errName').textContent = '';
    document.getElementById('exerciseModal').classList.add('open');
    document.getElementById('fieldName').focus();
}

function openEditModal(id) {
    const ex = exercises.find(e => e.id === id);
    if (!ex) return;

    document.getElementById('modalTitle').textContent = 'Edit Exercise';
    document.getElementById('exerciseId').value = ex.id;
    document.getElementById('fieldName').value = ex.name;
    document.getElementById('fieldEquipment').value = ex.equipment || '';
    document.getElementById('fieldType').value = ex.type || '';
    document.getElementById('fieldDescription').value = ex.description || '';
    document.getElementById('errName').textContent = '';

    bodyPartsValue = Array.isArray(ex.body_parts) ? [...ex.body_parts] : [];
    renderBodyParts();

    const container = document.getElementById('variationsContainer');
    container.innerHTML = '';
    (ex.variations || []).forEach(v => addVariationRow(v.name, v.description));

    document.getElementById('exerciseModal').classList.add('open');
    document.getElementById('fieldName').focus();
}

function closeModal() {
    document.getElementById('exerciseModal').classList.remove('open');
}

document.getElementById('btnCreate').addEventListener('click', openCreateModal);
document.getElementById('modalClose').addEventListener('click', closeModal);
document.getElementById('btnModalCancel').addEventListener('click', closeModal);
document.getElementById('exerciseModal').addEventListener('click', function (e) {
    if (e.target === this) closeModal();
});

/* -------- Form submit -------- */
document.getElementById('exerciseForm').addEventListener('submit', async function (e) {
    e.preventDefault();
    document.getElementById('errName').textContent = '';

    const id = document.getElementById('exerciseId').value;
    const payload = {
        name: document.getElementById('fieldName').value.trim(),
        equipment: document.getElementById('fieldEquipment').value.trim() || null,
        body_parts: bodyPartsValue,
        type: document.getElementById('fieldType').value || null,
        description: document.getElementById('fieldDescription').value.trim() || null,
        variations: collectVariations(),
    };

    try {
        if (id) {
            await apiFetch(`/exercises/${id}`, { method: 'PUT', body: JSON.stringify(payload) });
        } else {
            await apiFetch('/exercises', { method: 'POST', body: JSON.stringify(payload) });
        }
        closeModal();
        await loadExercises();
    } catch (err) {
        if (err.errors && err.errors.name) {
            document.getElementById('errName').textContent = err.errors.name[0];
        } else {
            document.getElementById('errName').textContent = 'An error occurred. Please try again.';
        }
    }
});

/* -------- Duplicate -------- */
async function duplicateExercise(id) {
    try {
        await apiFetch(`/exercises/${id}/duplicate`, { method: 'POST' });
        await loadExercises();
    } catch (e) {
        alert('Failed to duplicate exercise.');
    }
}

/* -------- Delete Modal -------- */
function openDeleteModal(id) {
    const ex = exercises.find(e => e.id === id);
    if (!ex) return;
    deleteTargetId = id;
    document.getElementById('confirmName').textContent = ex.name;
    document.getElementById('confirmModal').classList.add('open');
}

function closeConfirmModal() {
    document.getElementById('confirmModal').classList.remove('open');
    deleteTargetId = null;
}

document.getElementById('confirmClose').addEventListener('click', closeConfirmModal);
document.getElementById('btnConfirmCancel').addEventListener('click', closeConfirmModal);
document.getElementById('confirmModal').addEventListener('click', function (e) {
    if (e.target === this) closeConfirmModal();
});
document.getElementById('btnConfirmDelete').addEventListener('click', async function () {
    if (!deleteTargetId) return;
    try {
        await apiFetch(`/exercises/${deleteTargetId}`, { method: 'DELETE' });
        closeConfirmModal();
        await loadExercises();
    } catch (e) {
        alert('Failed to delete exercise.');
    }
});

/* -------- Utility -------- */
function escHtml(str) {
    if (str == null) return '';
    return String(str)
        .replace(/&/g, '&amp;')
        .replace(/</g, '&lt;')
        .replace(/>/g, '&gt;')
        .replace(/"/g, '&quot;');
}

/* -------- Init -------- */
loadExercises();
