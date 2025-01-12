document.addEventListener('DOMContentLoaded', () => {
    const cards = Array.from(document.querySelectorAll('.card'));
    const stack = document.getElementById('cardStack');
    const endMessage = document.getElementById('endMessage');

    let cardIndex = 0;

    function addSwipeListeners(card) {
        const hammer = new Hammer(card);
        hammer.on('swipeleft', () => handleSwipe(card, 'left'));
        hammer.on('swiperight', () => handleSwipe(card, 'right'));
    }

    function handleSwipe(card, direction) {
        if (direction === 'left') {
            card.classList.add('swipe-left');
        } else if (direction === 'right') {
            card.classList.add('swipe-right');
        }
        setTimeout(() => {
            stack.removeChild(card);
            checkEndOfLine();
        }, 500);
    }

    function checkEndOfLine() {
        cardIndex++;
        if (cardIndex === cards.length) {
            endMessage.style.display = 'block';
        }
    }

    cards.forEach(card => {
        addSwipeListeners(card);

        const iconLeft = card.querySelector('.icon-left');
        const iconRight = card.querySelector('.icon-right');

        iconLeft.addEventListener('click', () => handleSwipe(card, 'left'));
        iconRight.addEventListener('click', () => handleSwipe(card, 'right'));
    });
});
