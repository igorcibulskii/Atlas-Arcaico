document.addEventListener('DOMContentLoaded', () => {
    let selectedRating = 0; // armazena a avaliação selecionada

    const stars = document.querySelectorAll('.star-rating i'); // seleciona todas as estrelas
    const submitButton = document.getElementById('submitReview'); // botão de envio
    const loggedUserName = document.getElementById('loggedUserName').value; // nome do usuário logado

    // configura os eventos de interação com as estrelas
    stars.forEach(star => {
        // evento ao passar o mouse sobre uma estrela
        star.addEventListener('mouseover', () => {
            stars.forEach(s => s.classList.remove('selected')); // remove a seleção de todas as estrelas
            for (let i = 0; i < star.dataset.value; i++) {
                stars[i].classList.add('selected'); // adiciona seleção às estrelas anteriores
            }
        });

        // evento ao clicar em uma estrela
        star.addEventListener('click', () => {
            selectedRating = star.dataset.value; // define a avaliação selecionada
        });
    });

    // restaura a seleção de estrelas ao sair da área
    document.querySelector('.rating-comment-section').addEventListener('mouseleave', () => {
        if (selectedRating === 0) {
            stars.forEach(star => star.classList.remove('selected')); // remove seleção se nenhuma avaliação foi feita
        } else {
            stars.forEach(star => star.classList.remove('selected')); // remove seleção de todas as estrelas
            for (let i = 0; i < selectedRating; i++) {
                stars[i].classList.add('selected'); // mantém a avaliação selecionada
            }
        }
    });

    // função para carregar avaliações ao carregar a página
    function carregarAvaliacoes() {
        fetch('/AtlasArcaico/php/forum/listar_avaliacoes.php')
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    const commentsList = document.getElementById('commentsList');
                    commentsList.innerHTML = ''; // limpa a lista de comentários

                    data.avaliacoes.forEach(avaliacao => {
                        const commentItem = document.createElement('div');
                        commentItem.className = 'comment-item';

                        const starContainer = document.createElement('div');
                        starContainer.className = 'comment-stars';
                        for (let i = 0; i < avaliacao.avaliacao; i++) {
                            starContainer.innerHTML += '<i class="fas fa-star"></i>';
                        }

                        const userNameElement = document.createElement('strong');
                        userNameElement.textContent = avaliacao.nome;

                        const commentText = document.createElement('p');
                        commentText.textContent = avaliacao.comentario;

                        commentItem.appendChild(starContainer);
                        commentItem.appendChild(userNameElement);
                        commentItem.appendChild(commentText);

                        commentsList.appendChild(commentItem);
                    });
                } else {
                    console.error('Erro ao carregar avaliações:', data.message);
                }
            })
            .catch(error => console.error('Erro:', error));
    }

    // envia a avaliação ao clicar no botão de envio
    submitButton.addEventListener('click', () => {
        const comment = document.getElementById('comment').value.trim(); // comentário digitado pelo usuário

        // verifica se o usuário está logado
        if (loggedUserName === 'Visitante') {
            alert('Você precisa estar logado para enviar uma avaliação.');
            window.location.href = '/AtlasArcaico/php/autenticacao/usuario.php'; // redireciona para a página de login
            return;
        }

        // verifica se os campos estão preenchidos
        if (selectedRating > 0 && comment) {
            fetch('/AtlasArcaico/php/forum/enviar_avaliacao.php', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({ rating: selectedRating, comment: comment })
            })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        alert('Avaliação enviada com sucesso!');
                        carregarAvaliacoes(); // atualiza a lista de comentários após enviar
                        // limpa os campos após o envio
                        document.getElementById('comment').value = '';
                        selectedRating = 0;
                        stars.forEach(star => star.classList.remove('selected')); // reseta as estrelas selecionadas
                    } else {
                        // exibe a mensagem de erro retornada pelo servidor
                        alert(data.message);
                    }
                })
                .catch(error => console.error('Erro:', error));
        } else {
            alert('Por favor, selecione uma avaliação e insira um comentário.');
        }
    });

    carregarAvaliacoes(); // carrega as avaliações ao abrir a página
});
