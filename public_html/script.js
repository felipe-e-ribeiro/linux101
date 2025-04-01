// Progresso dinâmico
function updateProgress() {
    const checkboxes = document.querySelectorAll('input[type="checkbox"]');
    const checked = Array.from(checkboxes).filter(checkbox => checkbox.checked).length;
    const progress = (checked / checkboxes.length) * 100;
    document.querySelector('.progress').style.width = `${progress}%`;
}

// Navegação suave
document.querySelectorAll('.nav-item').forEach(item => {
    item.addEventListener('click', () => {
        const topicIndex = Array.from(item.parentElement.children).indexOf(item);
        const details = document.querySelectorAll('details');
        details.forEach(detail => detail.open = false);
        details[topicIndex].open = true;
    });
});

// Gerenciamento de checkboxes
document.querySelectorAll('input[type="checkbox"]').forEach(checkbox => {
    checkbox.addEventListener('change', () => {
        localStorage.setItem(checkbox.id, checkbox.checked);
        updateProgress();
    });
    
    // Carregar estado salvo
    const saved = localStorage.getItem(checkbox.id);
    if (saved) checkbox.checked = saved === 'true';
});

// Inicializar progresso
document.addEventListener('DOMContentLoaded', () => {
    updateProgress();
});
