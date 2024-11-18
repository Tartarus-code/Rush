function scrollToSection() { 
    document.getElementById('target-section').classList.remove("d-none");
    document.getElementById('target-footer').classList.remove("d-none");
    document.getElementById('target-section').scrollIntoView({ behavior: 'smooth' }); 
}

document.addEventListener('DOMContentLoaded', () => {
    const text = document.getElementById('text');
    const string = text.innerText;
    text.innerHTML = '';
    
    // Split text into individual letters
    string.split('').forEach((char, index) => {
        const span = document.createElement('span');
        span.innerText = char;
        span.classList.add('letter');
        span.style.transitionDelay = `${index * 0.2}s`;
        text.appendChild(span);
    });

    // Apply color change one by one
    text.addEventListener('mouseover', () => {
        document.querySelectorAll('.letter').forEach(letter => {
            letter.style.color = getRandomColor();
        });
    });

    // Function to get a random color
    function getRandomColor() {
        const letters = '0123456789ABCDEF';
        let color = '#';
        for (let i = 0; i < 6; i++) {
            color += letters[Math.floor(Math.random() * 16)];
        }
        return color;
    }
});
