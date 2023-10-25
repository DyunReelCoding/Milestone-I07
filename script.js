document.addEventListener('DOMContentLoaded', function() {
    const buyButtons = document.querySelectorAll('.game__buy-button');
    const modal = document.querySelector('.modal');
    const confirmButton = document.querySelector('.modal-confirm-button');
    const cancelButton = document.querySelector('.modal-cancel-button');
  
    buyButtons.forEach(function(button) {
      button.addEventListener('click', function() {
        modal.style.display = 'block';
      });
    });
  
    confirmButton.addEventListener('click', function() {
      modal.style.display = 'none';
      alert('Thank you for purchasing! Have fun playing!');
    });
  
    cancelButton.addEventListener('click', function() {
      modal.style.display = 'none';
    });
  });