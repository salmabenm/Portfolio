// JavaScript to handle certification navigation
const certificationBoxes = document.querySelectorAll('.certification-box');
const prevButton = document.querySelector('.prev-button');
const nextButton = document.querySelector('.next-button');
let currentIndex = 0;

function showCertifications(startIndex) {
    for (let i = 0; i < certificationBoxes.length; i++) {
        certificationBoxes[i].style.display = 'none';
    }

    for (let i = startIndex; i < startIndex + 3 && i < certificationBoxes.length; i++) {
        certificationBoxes[i].style.display = 'block';
    }
}

function showPrevCertifications() {
    if (currentIndex > 0) {
        currentIndex -= 3;
        showCertifications(currentIndex);
    }
}

function showNextCertifications() {
    if (currentIndex + 3 < certificationBoxes.length) {
        currentIndex += 3;
        showCertifications(currentIndex);
    }
}

// Initially show the first 3 certifications
showCertifications(currentIndex);
