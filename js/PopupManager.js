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

    this.monthGridDay = document.getElementsByClassName("fc-daygrid-day-frame");
    this.attachClickListeners();
  }

  attachClickListeners() {
    for (let i = 0; i < this.monthGridDay.length; i++) {
      const day = this.monthGridDay[i];
      day.addEventListener('click', () => {
        this.openPopup();
      });
    }
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
