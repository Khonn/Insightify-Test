document.addEventListener('DOMContentLoaded', () => {
    const dropdownButton = document.querySelector('.dropdown_button');
    const dropdownContent = document.querySelector('.dropdown_content');
    const arrow = dropdownButton.querySelector('i'); // Get the icon element directly
  
    dropdownButton.addEventListener('click', () => {
      dropdownContent.classList.toggle('show');
      arrow.style.transform = dropdownContent.classList.contains('show') ? 'rotate(180deg)' : 'rotate(0deg)';
    });
    
  
    // Close the dropdown if the user clicks outside of it
    window.addEventListener('click', (event) => {
      if (!dropdownButton.contains(event.target)) {
        dropdownContent.classList.remove('show');
        arrow.style.transform = 'rotate(0deg)';  // Reset arrow rotation
      }
    });
  });