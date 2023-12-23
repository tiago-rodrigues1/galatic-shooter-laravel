const facade = {
    props: {
        attempts: 0,
        misses: 0,
        hits: 0,
        positionInterval: null,
        timerInterval: null,
        matchSeconds: 10
    },

    randomNumber: function(max) {
        return Math.floor(Math.random() * max) + 1;
    },

    attemptsHandler: function() {
        this.props.attempts++;
        $('#tentativas').html('Tentativas: ' + this.props.attempts);
    },

    missTargetHandler: function() {
        this.props.misses++;
        $('#erros').html('Erros: ' + this.props.misses);
        $('#numErros').attr('value', this.props.misses);
    },

    hitTargetHandler: function() {
        this.props.hits++;

        $('#alvo').attr('src', 'assets/images/alvo-acertado.png');
        $('#acertos').html('Acertos: ' + this.props.hits);
        $('#numAcertos').attr('value', this.props.hits);

        setTimeout(function() {
            $('#alvo').attr('src', 'assets/images/alvo.png');
        }, 250);
    },

    targetHandler: function() {
        let { randomNumber } = this;
        $('#alvo').attr('src', 'assets/images/alvo.png');
    
        setInterval(function () {
            let x = $('.game-container').innerWidth();
            let y = $('.game-container').innerHeight();
        
            let styles = {
                top: randomNumber(y - 144) + 'px',
                left: randomNumber(x - 144) + 'px'
            };
    
            $('.target').css(styles);
        }, 1000);
    },

    timerHandler: function() {
        let secondsLeft = this.props.matchSeconds;
        let { matchSeconds } = this.props;
    
        if (this.props.timerInterval) {
            clearInterval(this.props.timerInterval);
        }

        this.props.timerInterval = setInterval(function() {
            $('#tempo_bar').width(`${(secondsLeft / matchSeconds) * 100}%`);
            if (secondsLeft < 0) {
                $('#game-data').submit();
            } else {
                secondsLeft -= 1;
            }
        }, 1000);
    }
};

$(document).ready(function() {
    $('#game-data').ready(function() {
        if ($('#game-data').attr('id')) {    
            $('.game-container').html('<img id="alvo" src="assets/images/alvo.png" draggable="false" class="target">');
    
            $('#explosao').hide();
    
            facade.targetHandler();
    
            facade.timerHandler();
    
            $('.game-container').on('click', function(event) {
                facade.attemptsHandler();
                
                if (event.target.id == 'alvo') {
                    facade.hitTargetHandler();
                } else if (event.target.id == 'game-container') {
                    facade.missTargetHandler();
                }
            });
        }

    });
});