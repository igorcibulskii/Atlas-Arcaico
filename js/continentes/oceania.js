let currentSlide = 0; // Variável para rastrear o slide atual

// Função para mover o carrossel
function moveSlider(step) {
    const slider = document.querySelector('.slider');
    const totalSlides = document.querySelectorAll('.card').length;
    const sliderContainer = document.querySelector('.slider-container');
    const visibleSlides = Math.floor(sliderContainer.offsetWidth / document.querySelector('.card').offsetWidth); // Quantos slides são visíveis

    // Ajusta o índice para voltar ao último slide se estiver no primeiro e clicar para trás
    if (currentSlide === 0 && step === -1) {
        currentSlide = totalSlides - visibleSlides;
    } 
    // Ajusta o índice para ir ao primeiro slide ao avançar no último
    else if (currentSlide >= totalSlides - visibleSlides && step === 1) {
        currentSlide = 0;
    } 
    // Movimento normal
    else {
        currentSlide = (currentSlide + step + totalSlides) % totalSlides; // Calcular a posição do slide
    }

    updateSliderPosition();
}

// Função para buscar o slide pelo nome do animal
function searchSlide() {
    const searchInput = document.getElementById('searchInput').value.toLowerCase(); // Obtém o valor da pesquisa
    const slides = document.querySelectorAll('.card'); // Seleciona todos os slides
    const sliderContainer = document.querySelector('.slider-container'); // Contêiner visível do slider
    const visibleSlides = Math.floor(sliderContainer.offsetWidth / document.querySelector('.card').offsetWidth); // Quantos slides são visíveis

    let foundIndex = -1; // Inicializa o índice como -1 (não encontrado)

    // Se o campo de pesquisa estiver vazio, retorna ao primeiro slide
    if (searchInput.trim() === '') {
        currentSlide = 0;
        updateSliderPosition(); // Voltar ao início
        return;
    }

    // Loop para verificar se o nome do animal corresponde ao que foi digitado
    slides.forEach((slide, index) => {
        const title = slide.querySelector('h3').innerText.toLowerCase(); // Obtém o título e compara com a pesquisa
        if (title.includes(searchInput)) { // Se o título contém o valor da pesquisa
            foundIndex = index; // Salva o índice do slide correspondente
        }
    });

    // Se um slide foi encontrado
    if (foundIndex !== -1) {
        // Ajusta para centralizar corretamente com base no número de slides visíveis
        currentSlide = Math.min(foundIndex, slides.length - visibleSlides);
        updateSliderPosition(); // Mover o carrossel
    }
}

// Função para atualizar a posição do carrossel
function updateSliderPosition() {
    const slider = document.querySelector('.slider');
    slider.style.transition = "transform 0.5s ease-in-out"; // Transição suave
    slider.style.transform = `translateX(-${currentSlide * 25}%)`; // Mover o carrossel
}

// Evento de clique nos botões
document.querySelector('.prev').addEventListener('click', () => moveSlider(-1));
document.querySelector('.next').addEventListener('click', () => moveSlider(1));
document.getElementById('searchInput').addEventListener('input', searchSlide);
