var canvasGame;
var canvasGameContext;
var speedX = 3;
var speedY = 2;
var ballX = 50;
var ballY = 50;
var playerPaddleY = 250;
var AIPaddleY = 250;
var playerScore = 0;
var AIScore = 0;

var gamePaused = false;

const WIN = 5;
const PADDLE_HEIGHT = 100;
const PADDLE_WIDTH = 10;

function handleMouseClick(evt) {
    if(gamePaused) {
        playerScore = 0;
        AIScore = 0;
        gamePaused = false;
    }
}

function moveGame() {
    if(gamePaused) {
        canvasGameContext.fillStyle = 'white';
        canvasGameContext.fillText("The game has ended, click to continue.", 300, 300);
        return;
    }
    ballX = ballX + speedX;
    ballY = ballY + speedY;
    if(ballX >= canvasGame.width-20) {
        if(ballY > AIPaddleY && ballY < AIPaddleY+PADDLE_HEIGHT) {
            speedX*=-1;
            var deltaY = ballY-(AIPaddleY+PADDLE_HEIGHT/2);
            speedY = deltaY * .08;
        }
        if(ballX >= canvasGame.width-5) {
            playerScore++;
            reset();
        }
    }
    if(ballY >= canvasGame.height-10 || ballY <= 0) {
        speedY*=-1;
    }
    if(ballX <= 20) {
        if(ballY > playerPaddleY && ballY < playerPaddleY+PADDLE_HEIGHT) {
            speedX*=-1;
            var deltaY = ballY-(playerPaddleY+PADDLE_HEIGHT/2);
            speedY = deltaY *.08;
        }
        if(ballX <= 5) {
            AIScore++;
            reset();
        }
    }
}

function calculateMousePositionOld(evt) {
    var rect = canvasGame.getBoundingClientRect();
    var root = document.documentElement;
    var mouseX = evt.clientX - rect.left - root.scrollLeft;
    var mouseY = evt.clientY - rect.top - root.scrollTop;
    return {
        x:mouseX,
        y:mouseY
    };
}

function calculateMousePosition(canvasGame, event) {
    var rect = canvasGame.getBoundingClientRect();
    var x = event.clientX - rect.left;
    var y = event.clientY - rect.top;
    return {
		x,y
	}
}

function reset() {
    if(playerScore >= WIN || AIScore >= WIN) {
        gamePaused = true;
    }
    speedX*=-1;
    //speedY*=-1;
    ballX = canvasGame.width/2;
    ballY = canvasGame.height/2;
}

function computerMovement() {
    if(AIPaddleY+(PADDLE_HEIGHT/2) < ballY-20) {
        AIPaddleY+=1.85;
    } else if(AIPaddleY+(PADDLE_HEIGHT/2) > ballY+20) {
        AIPaddleY-=1.85;
    }
}


/**
* Draws the game object
*/
function drawGame() {
    colorRect(0, 0, canvasGame.width, canvasGame.height, 'black');
    if(gamePaused) {
        return;
    }
    for(var i = 0; i < canvasGame.height; i+=40) {
        colorRect(canvasGame.width/2-1,i,2,20,'white');
    }
    colorRect(10, playerPaddleY, PADDLE_WIDTH, PADDLE_HEIGHT, 'white');
    colorRect(canvasGame.width-20, AIPaddleY, PADDLE_WIDTH, PADDLE_HEIGHT, 'white');
    colorCircle(ballX, ballY, 10, 'white');
    canvasGameContext.fillText(playerScore, 100, 100)
    canvasGameContext.fillText(AIScore, canvasGame.width-100, 100)

}
/**
* Draws a colored circle
*/
function colorCircle(x, y, radius, color) {
    canvasGameContext.fillStyle = color;
    canvasGameContext.beginPath();
    canvasGameContext.arc(x, y, radius, 0, Math.PI*2, true);
    canvasGameContext.fill();
}

/**
* Function to draw colored rectangles in the canvas
*/
function colorRect(x, y, width, height, color) {
    canvasGameContext.fillStyle = color;
    canvasGameContext.fillRect(x, y, width, height);
}