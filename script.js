function showSection(sectionId) {
  // Hide all sections
  document.querySelectorAll('main > section').forEach(section => {
    section.style.display = 'none';
  });

  // Show the selected section
  document.getElementById(sectionId).style.display = 'block';
}

function toggleDarkMode() {
  document.body.classList.toggle('dark-mode');
}

// Initially show the 'About' section
document.addEventListener('DOMContentLoaded', function() {
  showSection('about');
});
