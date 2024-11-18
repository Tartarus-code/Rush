function scrollToSection() { 
    document.getElementById('target-section').classList.remove("d-none");
    document.getElementById('target-footer').classList.remove("d-none");
    document.getElementById('target-section').scrollIntoView({ behavior: 'smooth' }); 
}
