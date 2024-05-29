document.getElementById("defaultOpen").click();

function openCity(evt, cityName) {
    // Declare all variables
    var i, tabcontent, tablinks;
  
    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
  
    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
  
    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
  }


  

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
