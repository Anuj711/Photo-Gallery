function enlargeImage() {
    // Toggle the 'enlarged' class to change the size
    this.classList.toggle('enlarged');
}

let photos = document.getElementsByClassName("photo");
for (const element of photos){
    element.addEventListener('click', enlargeImage);
}
