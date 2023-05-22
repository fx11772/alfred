class PopupManager {
  constructor() {
    this.addButton = document.getElementById("addEventButton");
    this.addButton.addEventListener('click', () => {
      this.openPopup();
    });

    this.popup = document.getElementById("popup");

    this.closeBtn = document.getElementById("closeBtn");
    this.closeBtn.addEventListener('click', () => {
      this.closePopup();
    });

    this.overlay = document.getElementById("calendar-overlay");
  }

  openPopup() {
    this.popup.classList.add('active');
    this.popup.style.display = 'block';
    this.overlay.classList.add('active');
  }

  closePopup() {
    this.popup.style.display = 'none';
    this.overlay.classList.remove('active');
  }
}

document.addEventListener('DOMContentLoaded', () => {
  const popupManager = new PopupManager();
});
