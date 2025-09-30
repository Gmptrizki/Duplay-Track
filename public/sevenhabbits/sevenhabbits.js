document.addEventListener('DOMContentLoaded', function() {
    const progressFill = document.getElementById('progressFill');
    const progressPercent = document.getElementById('progressPercent');
    let completedCount = 0;
    const totalHabits = document.querySelectorAll('.kebiasaan-card').length;

    const habitCards = document.querySelectorAll('.kebiasaan-card');
    
    habitCards.forEach(card => {
        card.addEventListener('click', function() {
            this.classList.toggle('completed');
            completedCount = document.querySelectorAll('.kebiasaan-card.completed').length;
            updateProgress();
        });
    });

    function updateProgress() {
        const percent = Math.round((completedCount / totalHabits) * 100);
        progressFill.style.width = percent + '%';
        progressPercent.textContent = percent + '%';

        if (percent >= 70) {
            progressFill.style.background = "linear-gradient(90deg, #10b981, #34d399)";
        } else if (percent >= 30) {
            progressFill.style.background = "linear-gradient(90deg, #facc15, #fbbf24)";
        } else {
            progressFill.style.background = "linear-gradient(90deg, #ef4444, #f87171)";
        }
    }
});
